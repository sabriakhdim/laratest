<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/transparent.png') }}">
        <script src="https://kit.fontawesome.com/de86425a47.js" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/> -->
        <!-- IMPORTANT : DEBUT -->
        <link rel="stylesheet" href="{{URL::asset('css/template.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

        <!-- IMPORTANT : FIN -->

        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title')</title>

        @yield('head')

    </head>
    <div id="loading">
    </div>

    <body onload="closeLoading()">

        <header id="header">
            <nav class="navbar navbar-expand-md navbar-custom fixed-top navbar-light ">

                <a class="navbar-brand d-md-none logo" href="{{action('MyController@index')}}">
                    <img src="{{ asset('images/lemonde.png') }}" height="50.6px" width="155.6px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"
                    aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarToggle">

                    <ul class="navbar-nav">

                    <li class="nav-item">
                            <a class="nav-link" href="{{action('MyController@index')}}">Accueil</a>
                        </li>
                    
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Galerie
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item"
                                    href="{{action('DropboxController@getFromDropbox','Maternity')}}">Grossesse</a>
                                <a class="dropdown-item"
                                    href="{{action('DropboxController@getFromDropbox','Newborn')}}">Nouveau né</a>
                                <a class="dropdown-item"
                                    href="{{action('DropboxController@getFromDropbox','Sitters')}}">Bébé & Enfant</a>
                                <a class="dropdown-item"
                                    href="{{action('DropboxController@getFromDropbox','Family')}}">Famille</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{action('MyController@tarif')}}">Tarif</a>
                        </li>
                       
                    </ul>

                    <a class="navbar-brand d-none d-md-block " href="{{action('MyController@index')}}">
                        <img src="{{ asset('images/lemonde.png') }}" height="50.6px" width="155.6px">
                    </a>
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                à propos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="nav-link" href="{{action('MyController@infoSceance')}}">infos scéances </a>
                                <a class="dropdown-item" href="/albums/Newborn">Qui suis-je?</a>
                            </div>
                        </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{action('MyController@tarif')}}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{action('MyController@contact')}}">CONTACT</a>
                        </li>
                    </ul>
                    </ul>
                </div>
            </nav>
            <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand d-lg-none" href="#">Navbar</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
    
    
    <a class="navbar-brand d-none d-lg-block" href="#">Navbar</a>
    
    
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div>
</nav> -->

<!-- <nav id="topNav" class="navbar fixed-top navbar-expand-lg navbar-light justify-content-center"> 
    <a class="navbar-brand mx-auto" href="/">
<img class="" src="{{ asset('images/lemonde.png') }}"  height="50.6px" width="155.6px"  alt="logo/brand">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"> 
<span class="navbar-toggler-icon"></span></button>
<div class="navbar-collapse collapse">
<ul class="navbar-nav" style="">
<li class="nav-item"> <a class="nav-link" href="#">Acceuil</a> </li>
<li class="nav-item"> <a class="nav-link" href="#">Galerie</a> </li>
<li class="nav-item"> <a class="nav-link" href="#">Tarif</a> </li>
<li class="nav-item"> <a class="nav-link" href="#">Infos Séances</a> </li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
<li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
<li class="nav-item"> <a class="nav-link" href="#">Services</a> </li>
</ul>
</div>
</nav> -->
<!-- 
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

  <a class="navbar-brand d-lg-none logo" href="#"><img src="{{ asset('images/lemonde.png') }}" height="50.6px" width="155.6px"></a>
  <a class="navbar-brand d-md-none logo" href="{{action('MyController@index')}}">
                    <img src="{{ asset('images/lemonde.png') }}" height="50.6px" width="155.6px">
                </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

    <ul class="navbar-nav "style="margin-left:17%;">
      <li class="nav-item">
        <a class="nav-link active" href="#">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galerie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tarif</a>
      </li>
    </ul>
    
    
    <a class="navbar-brand d-none d-lg-block" href="#"><img class="" src="{{ asset('images/lemonde.png') }}"  height="50.6px" width="155.6px"  alt="logo/brand">
</a>
    
    
    
    <ul class="navbar-nav "style="margin-right:17%;">
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Infos Scéances</a>
      </li>
    </ul>
  </div>
</nav> -->
        </header>

        <div class="contenu">
            @yield('contenu')
        </div>
        <footer>
    

<div class="social2"></div>
<div class="social circle">
 <ul> 
  <li><a href="https://www.facebook.com/lemondedoumi/" target="_blank"><i class="fa fa-facebook"></i></a></li>
  <li><a href="{{action('MyController@index')}}"><i class="fa"><img src="{{ asset('images/transparent2.png') }}"></i></a></li>
  <li><a href="https://www.instagram.com/lemondedoumi/" target="_blank"><i class="fa fa-instagram"></i></a></li>
 </ul>
</div>
<div class="copyright">
    <p>© 2020 Le Monde D'Oumi photography</p>
</div>
        </footer>

        <script>
            function closeLoading() {
                document.getElementById('loading').style.display = 'none';
            }

            function openLoading() {
                document.getElementById('loading').style.display = 'block';
            }

            document.addEventListener('contextmenu', event => event.preventDefault());

            document.getElementById('logo3').style.display = 'none';

        </script>
    </body>
    @yield('script')

</html>
