<!doctype html>
<html lang="en" data-bs-theme="auto">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>A.A</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
<body>

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </symbol>
</svg>

<header class="navbar sticky-top flex-md-nowrap p-1 nav-bg">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
        <span class="slate">##</span>
    </a>
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
        <span class="slate">#</span>
        <span class="badge p-1 pe-2 text-light-emphasis bg-warning-subtle rounded-pill">
            <svg xmlns="http://www.w3.org/2000/svg" class="rounded-circle me-1" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg><span class="">{{auth()->user()->username}}</span>
        </span>

    </a>
    <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="bi"><use xlink:href="#list"/></svg>
        </button>
        </li>
    </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <div class="sidebar col-md-3 col-lg-2 p-0">
      <div class="offcanvas-md offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
                <span class="slate">##</span>
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column mb-3">
            <li class="nav-item">
              <a class="nav-link slate" aria-current="page" href="{{route('dashboard')}}">
                Dashboard
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link slate" href="">
                  Company
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link slate" href="">
                  Branch
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link slate" href="{{route('two-factor')}}">
                  Enable 2F-Auth
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link slate" href="{{route('profile')}}">
                Profile
              </a>
            </li>
            <li class="nav-item">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="nav-link slate">Sign out</button>
                </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        {{$slot}}
    </main>
  </div>
</div>
</body>
</html>
