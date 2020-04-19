<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Product;
class productController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth',['except'=>['add']]);
    }
    public function create($id)
    {
        $category=Category::find($id);
        return view('product_pages.prodCreate')->with('category',$category);
    }
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required',
                                  'image'=>'image|nullable|max:1999',
                                  'quantity'=>'required',
                                  'price'=>'required',
                                  'sale'=>'required',
                                  'category_id'=>'required']);

        if($request->hasFile('image')){
            $fileNameToStore = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore); // Upload Image
        } else {
            $fileNameToStore = 'storage/images/noimage.jpg';
        }

        $product=new Product;
        $product->name=$request->input('name');
        $product->quantity=$request->input('quantity');
        $product->price=$request->input('price');
        $product->offer=$request->input('sale');
        $product->category_id=$request->input('category_id');
        $product->image = $fileNameToStore;
        $product->save();
        return redirect('/category/'.$product->category_id)->with('success','product added Succesfully'); 
    }

    public function edit($id)
    {
        $product=Product::find($id);
        return view('product_pages.prodEdit')->with('product',$product);
    }

    public function update(Request $request)
    {
        $this->validate($request,['name'=>'required',
        'image'=>'image|nullable|max:1999',
        'quantity'=>'required',
        'price'=>'required',
        'sale'=>'required']);
           
        if($request->hasFile('image')){
            $fileNameToStore = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore); // Upload Image
        }

        $id=$request->input('id');
        $product=Product::find($id);
        $product->name=$request->input('name');
        $product->quantity=$request->input('quantity');
        $product->price=$request->input('price');
        $product->offer=$request->input('sale');
        $product->category_id=$request->input('category_id');
        if($request->hasFile('image')){
            $product->image = $fileNameToStore;
        }
        $product->save();

        return redirect('/category/'.$product->category_id)->with('success','Product Edited Succesfully.');
    }

    public function delete($id)
    {
        $product=Product::find($id);
        if($product->image!='noimage.jpg')
        {
            Storage::delete('public/images/'.$product->image);  
        }
        $x=$product->category_id;
        $product->delete();
        return redirect('/category/'.$x)->with('success','product Deleted Succesfully.');
    }

}
