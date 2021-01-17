<nav class="navbar fixed navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="../img/sobat-co.png" height="35" width="35"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link fw-600" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            {{-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li> --}}
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-600" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Status
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('provinsi') }}">Provinsi Indonesia</a>
                <a class="dropdown-item" href="{{ route('global') }}">Global</a>
            </div>
            </li>
        </ul>
        </div>
    </div>
  </nav>