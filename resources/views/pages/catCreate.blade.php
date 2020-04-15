@extends('layouts.app')

@section('content')
<h1>Create category</h1>  

   <div class="container" style="margin-top:55px">
        <form action="/category/store" method="POST" enctype="multipart/form-data">
             @csrf
            <div class="form-group">
              <label >Category Name</label>
              <input type="text" name="name" placeholder="enter the category name" class="form-control">
            </div>
            <div class="form-group">
                <label >Image path</label> <br>
                <input type="file"name="image" >
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
  </div> 
@endsection