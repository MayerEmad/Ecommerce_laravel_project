@extends('layouts.app')

@section('content')
<h1>Edit category</h1>  

   <div class="container"style="margin-top:55px">
        <form action="/category/update" method="POST" enctype="multipart/form-data">
             @csrf
            <div class="form-group">
              <label >Category Name</label>
              <input type="text" name="name" value="{{$category->name}}" placeholder="enter the category name" class="form-control">
            </div>
            <div class="form-group">
                <label >Image path</label> <br>
                <input type="file"name="image"> <br>
                <img style="width:20%" src="/storage/cover_images/{{$category->image}}">
            </div>
            <input type="hidden" name="id" value="{{$category->id}}"/>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          
  </div> 
@endsection