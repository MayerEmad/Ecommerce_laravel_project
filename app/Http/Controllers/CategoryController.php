<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class categoryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    public function index()
    {
       // $categories= Category::orderby('created_at','desc')->paginate(4);
        $categories= Category::all();
        return view('pages.categories')->with('categories',$categories);
    }

    public function create()
    {
        return view('pages.catCreate');
    }

    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required','image'=>'image|nullable|max:1999']);

        if($request->hasFile('image')){
            $fileNameToStore = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/cover_images', $fileNameToStore); // Upload Image
        } else {
            $fileNameToStore = 'storage/cover_images/noimage.jpg';
        }

        $category=new Category;
        $category->name=$request->input('name');
        $category->image = $fileNameToStore;
        $category->save();

        return redirect('/category')->with('success','Category Created Succesfully');
    }

    public function show($id)
    {
        $category=Category::find($id);
        return view('pages.catShow')->with('category',$category);
    }

    public function edit($id)
    {
        $category=Category::find($id);
        return view('pages.catEdit')->with('category',$category);
    }

    public function update(Request $request)
    {
        $this->validate($request,['name'=>'required','image'=>'image|nullable|max:1999']);
        if($request->hasFile('image')){
            $fileNameToStore = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/cover_images', $fileNameToStore); // Upload Image
        }
        $id=$request->input('id');
        $category=Category::find($id);
        $category->name=$request->input('name');
        if($request->hasFile('image')){
            $category->image = $fileNameToStore;
        }
        $category->save();

        return redirect('/category')->with('success','Category Edited Succesfully.');
    }

    public function delete($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect('/category')->with('success','Category Deleted Succesfully.');
    }
}
