@extends('layouts.app')

@section('main')

<div class="upper-main">
   <div class="text-uppercase dc_max_width m-auto position-relative h-100">
      <div class="badge-jumbotron">Current series</div>
   </div>

</div>
<div class="lower-main">
   <div class="dc_max_width m-auto py-5">

      <div class="row">
         @foreach ($data['comics'] as $comic)
         <div class="col-2 mb-3 p-2">
            <a href="#" class="comic-thumb mb-2">
               <img src="{{$comic['thumb']}}" class="w-100">
            </a>
            <a href="#" class="text-white text-uppercase comic-series">{{$comic['title']}}</a>
         </div>
         @endforeach
      </div>


      <div class="d-flex justify-content-center">
         <a href="#" class="text-white px-5 py-2 load-more-btn text-uppercase">Load more</a>
      </div>

   </div>


</div>

@endsection