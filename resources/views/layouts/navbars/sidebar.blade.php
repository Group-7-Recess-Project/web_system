
 <style>
    .sidebar-wrapper{
        background-color:  #525f7f !important;
        left:0;
    }
</style>

<div class="sidebar ">
    <div class="sidebar-wrapper">
        <div class="logo">
            <h3>
            <a href="#" class="simple-text logo-normal">{{ __(Auth::user()->name) }}</a>
        </h3>

        </div>

        <ul class="nav">

             <li>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            @if(Auth::user()->job_role=='admin')
            <li>
                <a data-toggle="collapse" href="#register" aria-expanded="false">
                    <i class="tim-icons icon-pencil" ></i>
                    <span class="nav-link-text" >{{ __('Register') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse" id="register">
                    <ul class="nav pl-4">

                        <li>
                            <a href="{{ route('registerDonation')  }}">
                                <i class="tim-icons icon-coins"></i>
                                <p>{{ __('Donnation') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('registerOfficer')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Health Officer') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('registerHospital')  }}">
                                <i class="tim-icons icon-bank"></i>
                                <p>{{ __('Hospital') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            @endif
{{--  --}}
<li>
    <a data-toggle="collapse" href="#graphs" aria-expanded="false">
        <i class="tim-icons icon-chart-bar-32" ></i>
        <span class="nav-link-text" >{{ __('Graphs') }}</span>
        <b class="caret mt-1"></b>
    </a>

    <div class="collapse" id="graphs">
        <ul class="nav pl-4">
            <li>
                <a href="{{ route('charts')  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('Donations Graphs') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('hierarchy')  }}">
                    <i class="tim-icons icon-coins"></i>
                    <p>{{ __('Hierarchy') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('enrollment')  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('Enrollment Change') }}</p>
                </a>
            </li>

            {{-- <li @if ($pageSlug ?? '' == 'users') class="active " @endif>
                <a href="{{ route('user.index')  }}">
                    <i class="tim-icons icon-coins"></i>
                    <p>{{ __('Hospital') }}</p>
                </a>
            </li> --}}

        </ul>
    </div>
</li>
{{--  --}}

            <li>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
             {{-- <li>
                <a href="{{ route('charts') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Charts') }}</p>
                </a>
            </li> --}}
            {{-- <li>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li> --}}
            <li>
                <a href="{{ route('tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Tables') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('payments') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Money Distrution') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
