@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div style="margin:60px 0 10px 0" class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div style="margin:60px 0 10px 0" class="alert alert-danger">
        {{session('error')}}
    </div>
@endif