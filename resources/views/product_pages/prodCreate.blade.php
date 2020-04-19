@extends('layouts.app')

@section('content')
<h1 >This is the product adding page for {{$category->name}} category</h1>
   <div class="container">
   <form action="/category/{{$category->id}}/storeproduct" method="POST" enctype="multipart/form-data">
           @csrf
          <div class="form-group">
            <label >Product Name</label>
            <input type="text" name="name" placeholder="enter the product name" class="form-control">
          </div>

          <div class="form-group">
            <label >Product quantity</label>
            <input type="text" name="quantity" placeholder="enter the product quantity" class="form-control">
          </div>

          <div class="form-group">
            <label >Product price</label>
            <input type="text" name="price" placeholder="enter the product price" class="form-control">
          </div>

          <div class="form-group">
            <label >Product sale rito</label>
            <input type="text" name="sale" placeholder="enter the product sale rito" class="form-control">
          </div>

          <div class="form-group">
              <label >Image path</label> <br>
              <input type="file"name="image" >
          </div>
          
          <input type="hidden" name="category_id" value="{{$category->id}}"/>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div> 
@endsection
