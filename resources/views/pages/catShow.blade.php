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
                @if($product->quantity>0)
                    <div class="col-md-4 product-grid">
                        <div class="image">
                                <img style="width:20\80px;height:200px;" src="/storage/images/{{$product->image}}" >
                        </div>
                        <h5 class="text-center">{{$product->name}}</h5>
                        <h5 class="text-center">{{$product->price}}$</h5>
                        @if(Auth::check())
                        
                        <form type="hidden" action="/product/{{$product->id}}/addToCard" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn but">Add to product</button>
                        </form>
                        @else
                        <a href="/home" class="btn but">LogIn To Buy</a>
                        @endif
                        @if(Auth::id()==1)
                        <a href="/product/{{$product->id}}/edit" class="btn but">Edit </a>
                        <a href="/product/{{$product->id}}/delete" class="btn but">delete </a>
                        @endif
                    </div>
                @endif
            @endforeach
            
            {{---for admin--}}
            @if(Auth::id()==1)
                @foreach($products as $product)
                    @if($product->quantity==0)
                        <div style="background-color:#e3342f" class="col-md-4 product-grid">
                            <p style="font-size:15px; font-weight: bold;">Need to refilled</p>
                            <div class="image">
                                    <img style="width:20\80px;height:200px;" src="/storage/images/{{$product->image}}" >
                            </div>
                            <h5 class="text-center">{{$product->name}}</h5>
                            <h5 class="text-center">{{$product->price}}$</h5>
                            @if(Auth::check())
                            <form type="hidden" action="/product/{{$product->id}}/addToCard" method="POST" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="btn but">Add to product</button>
                            </form>
                            @else
                            <a href="/home" class="btn but">LogIn To Buy</a>
                            @endif
                            @if(Auth::id()==1)
                            <a href="/product/{{$product->id}}/edit" class="btn but">Edit </a>
                            <a href="/product/{{$product->id}}/delete" class="btn but">delete </a>
                            @endif
                        </div>
                    @endif
                @endforeach
            @endif

    @else 
        <p>No Products for this Category .</p>
    @endif
</div>

@if(Auth::id()==1) <a href="/category/{{$category->id}}/createproduct" class="btn addCatBtn">create product</a> @endif

@endsection