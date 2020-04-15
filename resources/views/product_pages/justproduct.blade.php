@extends('layouts.common')

@section('content')
   <h1>This is product page</h1>
   <div class="pro-card00" style="margin-top:100px">
    <div class="product-img00">
      <img src="/storage/img/product-thumb-2.jpg" height="420" width="327">
    </div>
    <div class="product-info00">
      <div class="product-text00">
        <h1>product name</h1>
        <h2>product category</h2>
        <p>information about product .information about product.information about product.information about product  </p>
      </div>
      <div class="product-price-btn00">
        <p><span class="product-price-num00">78</span>$</p>
        <button type="button">Add To Cart</button>
      </div>
    </div>
</div>
@endsection
