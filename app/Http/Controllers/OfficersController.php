<?php

namespace App\Http\Controllers;

use App\Models\Officer;

use App\Models\Hospital;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class OfficersController extends Controller
{
    public function index(){
        return view('register.officer');
    }//
    public function store(Request $request){

        
       $grouped_hospitals  = $this->best_hospital();
       //create an array
       $new =  array_map(function($values){
           return array("hospital_id"=>$values->hospital_id,'category'=>$values->hospital_category,
           'total'=>$values->total);
       },
       $grouped_hospitals->toArray());

       usort($new, function($first,$second){
            return $first['total'] <=> $second['total'];
       });
       //dd($new);
       if(isset($new[0])){
           if($new[0]['total']==15){
            return back()->withStatus(__('Registration failed, Please first
            register a hospital of category General'));
           }
           else{
                $hospital_id = $new[0]['hospital_id'];
           }
       }
       else{
        return back()->withStatus(__('Registration failed, Please first
        register a hospital of category General'));
       }
        //print_r($new);



        DB::table('officers')->insert([
         'officer_name'=>$request->officer_name,
         'username' => $request->username,
             'hospital_id' => $hospital_id
         ]);

        return back()->withStatus(__('Health officer successfully registered.'));
    }

    public function show(){
         $officers = Officer::all();
        return view('tables.officers', compact('officers',$this->replace_hospital_id_with_name($officers)));

    }

    public function replace_hospital_id_with_name($my_array){
            $final = array();

          $hospitals = Hospital::all();
            foreach($my_array as $arr){
                $hospital_ID = $arr['hospital_id'];
                foreach($hospitals as $hospital){
                    if($hospital['hospital_id']==$hospital_ID){
                        $arr['hospital_name'] = $hospital['hospital_name'];
                        array_push($final,$arr);
                    }
                }
            }
            return $final;

    }

    public function best_hospital(){
        return DB::table('hospitals')->leftJoin('officers',
        'hospitals.hospital_id', '=', 'officers.hospital_id')
            ->select('hospitals.hospital_id','hospitals.hospital_category',
            DB::raw('count(officers.hospital_id) as total'))
            ->where('hospitals.hospital_category','=', 'General')
            ->groupBy('hospitals.hospital_id','hospitals.hospital_category')->get();


    }


}
