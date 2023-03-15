<footer>
    <div class="top p-0">
      <div class="container d-flex justify-content-between position-relative">
            <div class="cols row">
                <div class="col">
                    <h3>DC Comics</h3>
                    <ul>
                        <li><a class="{{Route::currentRouteName()=='characters' ? 'active' :''}} }}" href="{{route('characters')}}">Characters</a></li>
                        {{-- <li><a class="{{Route::currentRouteName()=='comics' || Route::currentRouteName()=='comic-details' ? 'active' :''}}" href="{{route('comics')}}">Comics</a></li> --}}
                        <li><a class="{{Route::currentRouteName()=='movies' ? 'active' :''}} }}" href="{{route('movies')}}">Movies</a></li>
                        <li><a class="{{Route::currentRouteName()=='tv' ? 'active' :''}} }}" href="{{route('tv')}}">TV</a></li>
                        <li><a class="{{Route::currentRouteName()=='games' ? 'active' :''}} }}" href="{{route('games')}}">Games</a></li>
                        <li><a class="{{Route::currentRouteName()=='collectibles' ? 'active' :''}} }}" href="{{route('collectibles')}}">Collectibles</a></li>
                        <li><a class="{{Route::currentRouteName()=='videos' ? 'active' :''}} }}" href="{{route('videos')}}">Videos</a></li>
                        <li><a class="{{Route::currentRouteName()=='fans' ? 'active' :''}} }}" href="{{route('fans')}}">Fans</a></li>
                        <li><a class="{{Route::currentRouteName()=='news' ? 'active' :''}} }}" href="{{route('news')}}">News</a></li>
                    </ul>
                    <h3>Shop</h3>
                    <ul>
                    <li><a href="#">Shop DC</a></li>
                    <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>DC</h3>
                    <ul>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy Policy (New)</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Subscriptions</a></li>
                    <li><a href="#">Talent Workshops</a></li>
                    <li><a href="#">CPSC Certificates</a></li>
                    <li><a href="#">Ratings</a></li>
                    <li><a href="#">Shop help</a></li>
                    <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Sites</h3>
                    <ul>
                    <li><a href="#">DC</a></li>
                    <li><a href="#">MAD Magazine</a></li>
                    <li><a href="#">DC Kids</a></li>
                    <li><a href="#">DC Universe</a></li>
                    <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
                <div class="col-12">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, <span>illo deleniti.</span> Sint accusamus, aliquid aut excepturi provident vel et <span>possimus.<span></p>
                </div>

            </div>

        <div class="big-logo">
            <img src="{{asset('img/dc-logo-bg.png')}}" alt="">
        </div>
    </div>
    </div>


    <div class="bottom">
      <div class="container d-flex">
        <div class="button"><a href="#">SIGN UP NOW!</a></div>
        <div class="socials">
          <span>Follow US</span>
          <ul>
            <li><a href="#"><img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt=""></a></li>
            <li><a href="#"><img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt=""></a></li>
            <li><a href="#"><img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt=""></a></li>
            <li><a href="#"><img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt=""></a></li>
            <li><a href="#"><img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt=""></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
