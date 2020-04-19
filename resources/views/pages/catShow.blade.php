<?php
use Illuminate\Http\Request;
use App\Category;
use App\Product;
?>

@extends('layouts.app')

@section('content')

 @php
    $category=$data['category']; 
    $products=$data['products'];
@endphp
<div class="row">
    @if(count($products) > 0)
            @foreach($products as $product)
                <div class="col-md-4 product-grid">
                    <div class="image">
                            <img  src="/storage/images/{{$product->image}}" >
                    </div>
                    <h5 class="text-center">{{$product->name}}</h5>
                    <h5 class="text-center">{{$product->price}}</h5>
                    <a href="#" class="btn but">Add </a>
                    <a href="/product/{{$product->id}}/edit" class="btn but">Edit </a>
                    <a href="/product/{{$product->id}}/delete" class="btn but">delete </a>
                </div>
            @endforeach
    @else 
    <p>No Products for this Category .</p>
    @endif
</div>

<a href="/category/{{$category->id}}/createproduct" class="btn addCatBtn">create product</a>

@endsection