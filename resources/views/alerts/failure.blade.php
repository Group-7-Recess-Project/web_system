@if (session($key ?? 'status'))
    <div style="background-color: rgb(143, 16, 16)" class="alert" role="alert">
        {{ session($key ?? 'status') }}
    </div>
@endif
