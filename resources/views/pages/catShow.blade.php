<?php
use Illuminate\Http\Request;
use App\Category;
use App\Product;
?>

@extends('layouts.app')

@section('content')
<div style="height:70px"></div>
<a href="/category" class="btn btn-info">Back</a> 
<a href="/category/{{$category->id}}/addproduct" class="btn btn-success">Addproduct</a>
<a href="/justproduct" class="btn btn-info">justproductpage</a> 
   <br>
  <div class="container">
		<h1 class="text-center">Devices Products</h1>
		<hr>

		<div class="row" style="color: gray">
			<!-- Product  -->
			<div class="col-md-4 product-grid">
				<div class="image">
					<a href="#">
						<img src="/storage/images/d1.png" class="w-100">
					</a>
				</div>
				<h5 class="text-center">ASUS GAMING MONITOR VG248QE 24 FHD</h5>
				<h5 class="text-center">Price: $500.00</h5>
                <a href="#" class="btn but">Add </a>
				<a href="#" class="btn but">Edit </a>
				<a href="#" class="btn but">remove </a>
			</div>
			<!-- ./Product -->

			<!-- Product  -->
			<div class="col-md-4 product-grid">
				<div class="image">
					<a href="#">
						<img src="/storage/images/d2.png" class="w-100">
					</a>
				</div>
				<h5 class="text-center">AOC C24G1 GAMING MONITOR 24</h5>
				<h5 class="text-center">Price: $759.00</h5>
				<a href="#" class="btn but">Add </a>
				<a href="#" class="btn but">Edit </a>
				<a href="#" class="btn but">remove </a>
			</div>
			<!-- ./Product -->

			<!-- Product  -->
			<div class="col-md-4 product-grid">
				<div class="image">
					<a href="#">
						<img src="/storage/images/d3.png" class="w-100">
					</a>
				</div>
				<h5 class="text-center">DELL XPS 13 7390 NOTEBOOK LAPTOP CORE I7 10 GENERATION 16 GB DDR3 1 TB PCLE INTEL UHD GRAPHICS WIN 10 PRO</h5>
				<h5 class="text-center">Price: $5445.00</h5>
				<a href="#" class="btn but">Add </a>
				<a href="#" class="btn but">Edit </a>
				<a href="#" class="btn but">remove </a>
			</div>
			<!-- ./Product -->

			<!-- Product  -->
			<div class="col-md-4 product-grid">
				<div class="image">
					<a href="#">
						<img src="/storage/images/d7.jpg" class="w-100">
					</a>
				</div>
				<h5 class="text-center">Native Instruments Traktor Kontrol S3</h5>
				<h5 class="text-center">Price: $95.99</h5>
				<a href="#" class="btn but">Add </a>
				<a href="#" class="btn but">Edit </a>
				<a href="#" class="btn but">remove </a>
			</div>
			<!-- ./Product -->

			<!-- Product  -->
			<div class="col-md-4 product-grid">
				<div class="image">
					<a href="#">
						<img src="/storage/images/d8.webp" class="w-100">
					</a>
				</div>
				<h5 class="text-center">Samsung S9 S9 Plus Note 8 Note 9 </h5>
				<h5 class="text-center">Price: $1418.00</h5>
                <a href="#" class="btn but">Add </a>
				<a href="#" class="btn but">Edit </a>
				<a href="#" class="btn but">remove </a>
			</div>
			<!-- ./Product -->

			<!-- Product  -->
			<div class="col-md-4 product-grid">
				<div class="image">
					<a href="#">
						<img src="/storage/images/d9.webp" class="w-100">
					</a>
				</div>
				
				<h5 class="text-center">LCD for I Phone 11</h5>
				<h5 class="text-center">Price: $299.00</h5>
				<a href="#" class="btn but">Add </a>
				<a href="#" class="btn but">Edit </a>
				<a href="#" class="btn but">remove </a>
			</div>
			<!-- ./Product -->

		</div>

	</div>

@endsection