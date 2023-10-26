<header>

   <div class="upper-header py-1">
      <div class="dc_max_width m-auto d-flex justify-content-end">
         <a href="#" class="text-white">DC POWER VISA</a>
         <a href="#" class="text-white ms-3">ADDITIONAL DC SITES &#9660;</a>
      </div>
   </div>

   <nav class="m-auto dc_max_width d-flex justify-content-between align-items-center">
      <a href="#">
         <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC" width="70">
      </a>

      <div class="h-100 d-flex">
         @foreach ($data['navVoices'] as $voice)
         <div class="h-100 d-flex align-items-center ms-3 position-relative">
            <a href="#" class="text-uppercase">
               {{ $voice }}
            </a>
         </div>
         @endforeach
      </div>
      <div>
         <input type="search" name="search" id="search" placeholder="Search">
      </div>
   </nav>




</header>