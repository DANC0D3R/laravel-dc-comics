<header>
    <div class="container d-flex h-100 p-0">
      <div class="logo p-0">
        <a href="{{ route('home') }}"><img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo" class="d-flex align-items-center"></a>
      </div>
      <nav>
        <ul class="d-flex align-items-center">
          <li class="{{ Route::currentRouteName()=='characters' ? 'active' :'' }}" ><a href="{{ route('characters') }}">Characters</a></li>
          {{-- <li class="{{Route::currentRouteName()=='comics' || Route::currentRouteName()=='comic-details' ? 'active' :''}}">
            <a href="{{route('comics')}}">Comics</a></li> --}}
          <li class="{{ Route::currentRouteName()=='movies' ? 'active' :'' }}">
            <a href="{{ route('movies')}}">Movies</a></li>
          <li class="{{ Route::currentRouteName()=='tv' ? 'active' :'' }}">
            <a href="{{ route('tv')}}">TV</a></li>
          <li class="{{ Route::currentRouteName()=='games' ? 'active' :'' }}">
            <a href="{{ route('games')}}">Games</a></li>
          <li class="{{ Route::currentRouteName()=='collectibles' ? 'active' :'' }}">
            <a href="{{ route('collectibles')}}">Collectibles</a></li>
          <li class="{{ Route::currentRouteName()=='videos' ? 'active' :'' }}">
            <a href="{{ route('videos')}}">Videos</a></li>
          <li class="{{ Route::currentRouteName()=='fans' ? 'active' :'' }}">
            <a href="{{ route('fans')}}">Fans</a></li>
          <li class="{{ Route::currentRouteName()=='news' ? 'active' :'' }}">
            <a href="{{ route('news')}}">News</a></li>
          <li class="{{ Route::currentRouteName()=='shop' ? 'active' :'' }}">
            <a href="{{ route('shop')}}">Shop</a></li>
          <li class="mag-link-head d-flex">
            <span><i class="bi bi-search"></i>
            </span>
            <input type="search" name="search-within-site" id="search-within-site" class="mag-hidden" placeholder="Search..."></li>
        </ul>
      </nav>
    </div>

  </header>
