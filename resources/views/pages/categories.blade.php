@extends('layouts.app')

@section('content')
 <div class="homebody">
   @if(count($categories)>0)
         @foreach($categories as $cat) 
            <div class="responsive">
                  <div class="gallery">
                     <img  src="/storage/cover_images/{{$cat->image}}" >
                     <div class="desc">
                           <h2 style="margin:0px"><a class="myfont" href="/category/{{$cat->id}}">{{$cat->name}}</a></h2>
                           @if(Auth::id()==1)
                              <a href="/category/{{$cat->id}}/edit" class="btn btn-secondary">Edit</a>
                              <small style="margin: 0px 5%">last update {{$cat->updated_at}}</small> 
                              <a href="/category/{{$cat->id}}/delete" class="btn btn-danger">Delete</a>
                           @else
                               <small style="margin: 0px 5%">we have 10 products for you</small> 
                           @endif
                     </div>
                  </div>
            </div>
         @endforeach
         <div class="clearfix"></div>
   @else 
         <p>No Categories yet</p> 
   @endif
   <br>
            @if(Auth::id()==1)
               <a href="/category/create" class="btn addCatBtn" >Create category</a>
            @endif
         <footer class="blog-footer mfooter">
            <p style="padding-top:10px"> @ Copy rights for Wezo.com  2019 </p>
            <p style="margin:0px"><a href="#">Back to top</a></p>
         </footer>
 </div>
@endsection
