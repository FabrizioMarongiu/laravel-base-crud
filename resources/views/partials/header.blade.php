

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #0d6efd">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @if (Route::currentRouteName() == 'home') active @endif" 
            aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if (Route::currentRouteName() == 'comics.index') active @endif" 
            href="{{ route('comics.index') }}">Comics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if (Route::currentRouteName() == 'comics.create') active @endif" 
            href="{{ route('comics.create') }}">New comix</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

