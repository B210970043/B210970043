@if(session()->has('error'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('error')}}
    </div>
@endif