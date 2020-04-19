@extends('layouts.app')

@section('content')
<h1>Edit category</h1>  

   <div class="container">
        <form action="/product/update" method="POST" enctype="multipart/form-data">
             @csrf
            <div class="form-group">
              <label >Product Name</label>
              <input type="text" name="name" value="{{$product->name}}" placeholder="enter the product name" class="form-control">
            </div>
            <div class="form-group">
                <label >Product Price</label>
                <input type="text" name="price" value="{{$product->price}}" placeholder="enter the product price" class="form-control">
            </div>
            <div class="form-group">
               <label >Product Sale rito</label>
               <input type="text" name="sale" value="{{$product->offer}}" placeholder="enter the product sale rito" class="form-control">
            </div>
            <div class="form-group">
                <label >Product Quantity</label>
                <input type="text" name="quantity" value="{{$product->quantity}}" placeholder="enter the product quantity" class="form-control">
            </div>
              
            <div class="form-group">
                <label >Image path</label> <br>
                <input type="file"name="image"> <br>
                <img style="width:20%" src="/storage/images/{{$product->image}}">  <!--path images-->
            </div>
            <input type="hidden" name="id" value="{{$product->id}}"/>
            <input type="hidden" name="category_id" value="{{$product->category_id}}"/>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          
  </div> 
@endsection