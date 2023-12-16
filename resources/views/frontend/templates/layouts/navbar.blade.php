{{-- Nav bar Menu  2 --}}
<nav class="navbar sticky-top navbar-expand-lg shadow" style="background-color: #ffffff; border-bottom: 5px solid rgb(0, 89, 255);">
    <div class="container-lg">
      <a class="navbar-brand text-primary" href="#">
        <img src="/img/logo_nusajelajah.png" alt="" width="150" height="75" class="d-inline-block">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('all-tour') ? 'active' : '' }}" href="/all-tour">Cari Tour Wisata!</a>
          </li>
        </ul>
  
        <ul class="navbar-nav">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Halo, {{ auth()->user()->name }} 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-menu-button-wide-fill"></i> Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else 
          <li class="nav-item">
            <a href="/login" class="nav-link btn btn-primary"><i class="bi bi-person-fill"></i> Login</a>
          </li>
        </ul>
        @endauth
    </div>
  </nav>