<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">
      <a class="navbar-brand  " href="{{ url('/') }}">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto " >
          <a class="nav-link " aria-current="page" href="{{ url('/') }}">Home</a>
          <a class="nav-link" href="{{ url('about') }}">About</a>
          <a class="nav-link" href="{{ url('services') }}">services</a>
          <a class="nav-link " href="{{ url('posts') }}">Blog</a>
        </div>
      </div>
    </div>
  </nav>
