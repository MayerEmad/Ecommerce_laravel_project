<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class productController extends Controller
{
    public function index()
    {
        return view('product_pages.justproduct');
    }

    
}
