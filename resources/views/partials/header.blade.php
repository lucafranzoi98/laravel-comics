<header>

   <div class="upper-header py-1">
      <div class="container d-flex justify-content-end">
         <a href="#" class="text-white">DC POWER VISA</a>
         <a href="#" class="text-white ms-3">ADDITIONAL DC SITES &#9660;</a>
      </div>
   </div>

   <div class="container py-3">
      <nav class="d-flex align-items-center justify-content-between">
         <a href="/"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo" width="64px"></a>
         <div>
            @foreach ($data['navVoices'] as $navVoice)
            <a href="#" class="text-uppercase text-dark fw-semibold ms-3">{{$navVoice}}</a>
            @endforeach
         </div>
         <div>
            <input type="search" name="search" id="search" placeholder="Search">
         </div>
      </nav>
   </div>


</header>