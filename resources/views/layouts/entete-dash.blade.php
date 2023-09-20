<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RECHERCHER ELECTEUR</title>

    <link href="{{asset('assets/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap-5.2.3-dist//css//bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap-5.2.3-dist//css//bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fontawesome-free-6.2.1-web/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap-5.2.3-dist/css/sidebars.css')}}" rel="stylesheet">
    <link href="{{asset('assets/cdnjs/toastr.min.css')}}">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

</head>
<body>
    <nav id="barmenu" class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('page-accueil') }}" routerLinkActive="router-link-active" >RECHERCHE ELECTEUR</a>
          <ul class="nav nav-underline">
            <li class="nav-item">
              <a class="nav-link active navbar-brand" aria-current="page" href=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link navbar-brand" href=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link navbar-brand" href=""></a>
            </li>

          </ul>

          <li class="nav-item dropdown">

            <ul class="dropdown-menu">
                <li><a class="btn btn-primary w-100" href="#">Se déconnecter</a></li>
            </ul>
          </li>

        </div>
      </nav>


    <div class="container-fluid mt-5">
      @yield('content')
    </div>
    <script src="{{asset('assets/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-5.2.3-dist/js/sidebars.js')}}"></script>
    <script src="{{asset('assets/cdnjs/toastr.min.js')}}"></script>
    <script src="{{asset('assets/jquery.min.js')}}"></script>
</body>
</html>

