<footer>

   <!-- Blue Banner -->
   <div class="banner">

      <div class="container py-5 d-flex justify-content-around dc_max_width">

         @foreach ($data['bannerItems'] as $item)
         <div class="d-flex align-items-center">
            <img src="{{Vite::asset('resources/img/$item[img]')}}" class="me-3">
            <span class="text-white text-uppercase">{{$item['name']}}</span>
         </div>
         @endforeach
      </div>

   </div>

   <div class="site-map">
      <div class="pt-5 d-flex justify-content-between overflow-hidden dc_max_width m-auto">


         <div class="footer-menu d-flex flex-column flex-wrap">

            @foreach ($data['footerVoices'] as $item)
            <div class="me-5 mb-3">
               <a href="#" class="site-map-page">{{ $item['name'] }}</a>
               <div class="d-flex flex-column align-items-start mt-2">
                  @foreach ($item['voices'] as $voice)
                  <a href="#" class="site-map-sub">{{ $voice }}</a>
                  @endforeach
               </div>
            </div>
            @endforeach

         </div>



         <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}">
      </div>

   </div>

   <div class="lower-footer">

      <div class="py-4 d-flex justify-content-between dc_max_width m-auto">

         <button>Sign-up now!</button>

         <div class="d-flex align-items-center">
            <a href="#" class="me-3">Follow Us</a>

            @foreach ($data['socialIcons'] as $icon)
            <a href="#" class="me-3">
               <img src="{{Vite::asset('resources/img/$icon[img]')}}">
            </a>
            @endforeach

         </div>

      </div>

   </div>

</footer>