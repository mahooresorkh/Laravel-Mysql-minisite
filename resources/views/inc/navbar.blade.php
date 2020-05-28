<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href={{ url('/') }}>{{ config('app.name', 'Laravel') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href={{ url('/') }}>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ url('/about') }}>About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ url('/posts') }}>Posts</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        @if(Auth::guest())
          <li class="nav-item">
            <a class="nav-link" href={{ url('/login') }}>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ url('/register') }}>Register</a>
          </li>
        @else
          <li class="nav-item dropdown show">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">{{ Auth::user()->name }}</a>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
              <a class="dropdown-item" href={{url('/posts/create')}}>Create Post</a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="logout" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ url('/dashboard') }}>Dashboard</a>
          </li>
        @endif
      </ul>
    </div>
  </div>  
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
</form>






