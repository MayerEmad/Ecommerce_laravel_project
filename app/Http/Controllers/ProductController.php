<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Product;
use App\Card;
use App\History;
use Illuminate\Support\Facades\DB;
use Auth;
class productController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addToCard(Request $request, $id)
    {
        $product=Product::find($id);  
        $prodQuantity=$product->quantity;
        if ($prodQuantity>0) 
        {
            $prodQuantity--;
            $product->quantity=$prodQuantity;
            $product->save();

           $cardItem=Card::where('product_id',$id)->first();
           if($cardItem==null)
            {
                $newCardItem=new Card;
                $newCardItem->product_id=$id;
                $newCardItem->product_quantity=1;
                $newCardItem->save();
            }
            else
            {
                $cardItemQuantity=$cardItem->product_quantity;
                $cardItemQuantity++;
                $cardItem->product_id=$id;
                $cardItem->product_quantity=$cardItemQuantity;
                $cardItem->save();
            }
            return redirect('/category/'.$product->category_id)-> with('success','product added Succesfully to your Card'); 
        } else 
        {
            return redirect('/category/'.$product->category_id)->with('error','there is no more from this product'); 
        }
       
    }
    public function finishCard()
    {
        $cardItems = Card::all();
       if($cardItems!=null)
       {
            foreach($cardItems as $item)
            {
                $product=Product::find($item->product_id);
                $id=Auth::id();
                $name=$product->name;
                $price=$product->price;
                $quantity=$item->product_quantity;
                $total=$price*$quantity;
                $image=$product->image;
                //Delete
             $item->delete();
                // Add
                $history_item=new History;
                $history_item->user_id=$id;
                $history_item->product_name=$name;
                $history_item->product_quantity=$quantity;
                $history_item->product_price=$price;
                $history_item->product_total_cost=$total;
                $history_item->image=$image;
             $history_item->save();
            }
       }
       return redirect('/card')->with('success','thanks your card saved to your history'); 
    }
    public static function deleteCard()
    {
        $cardItems = Card::all();
       if($cardItems!=null)
       {
            foreach($cardItems as $item)
            {
                $product=Product::find($item->product_id);
                $id=Auth::id();
                $name=$product->name;
                $price=$product->price;
                $quantity=$item->product_quantity;
                $total=$price*$quantity;
                $image=$product->image;
                //return
                $a=$product->quantity;   
                $product->quantity=$a+$quantity;
                $product->save();
                //Delete
                $item->delete();
            
            }
       }
       return redirect('/card'); 
    }
    public function create($id)
    {
        if(Auth::id()!=1)return redirect('/category'); 
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
        if(Auth::id()!=1)return redirect('/category'); 
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
        if(Auth::id()!=1)return redirect('/category'); 
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
