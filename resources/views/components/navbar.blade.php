
<nav class="navbar navbar-expand-lg  fixed-top  fw-bold">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('homepage') }}"><img class="img-fluid" src="{{ URL::asset('img/logo.jpg') }}" width="40" height="80" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('chi-siamo') }}">Chi siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('i-nostri-lavori') }}">I nostri lavori</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
