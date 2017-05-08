<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HandiHelp</title>

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- w3 css -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
         <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- notre css -->
        <link rel="stylesheet" href="css/accueil.css">

       
    </head>
    <body>
        <!-- header -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        HandiHelp
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    @if (Route::has('login'))
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::check())
                                <li class="active"><a href="{{ url('/home') }}">Accueil</a></li>
                            @else
                                <li><a href="{{ url('/login') }}">Connexion</a></li>
                                <li><a href="{{ url('/register') }}">Inscription</a></li>
                            @endif
                        </ul>
                     @endif
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif-->

        
        <!-- contenu -->
        <div id="hero" class="w3-display-container">


            <!-- carousel -->
            <div id="myCarousel" class="carousel slide w3-display-middle" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active" style="background-image:url('image/woman-helping-blind.jpg')">
                    </div>

                    <div class="item" style="background-image:url('image/woman-helping-disable.jpg')">
                    </div>

                    <div class="item" style="background-image:url('image/young-helping-old.jpg')"">
                    </div>
                </div>
            </div>

            <div id="filtre-noir"></div>

            <!-- texte & boutons -->
            <div id="contenu" class="w3-display-middle">

                <h1 id="titre">HandiHelp, la plateforme d'aide à la personne</h1>
                <h2 id="sous-titre">Avec HandiHelp, trouvez le prochain bénévole prêt à vous aider pour vos tâches au quotidien</h2>


                <a href="" id="annonces" class="boutons">Annonces</a>
                <a href="" id="poster-une-annonce" class="boutons">Poster une annonce</a>
            </div>
        </div>



        <div id="le-concept">
            <div id="le-concept-contenu" class="row">
                <div class="col-md-4 carte-container">
                    <div class="w3-card-2 carte">
                        <i class="fa fa-users" aria-hidden="true" style="font-size:45px"></i>
                        <h5>Notre Mission</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>

                <div class="col-md-4 carte-container">
                    <div class="w3-card-2 carte">
                        <i class="fa fa-question" aria-hidden="true"></i>
                        <h5>Qui sommes-nous</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>

                <div class="col-md-4 carte-container">
                    <div class="w3-card-2 carte">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <h5>App android</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>



            </div><!-- #le-concept-contenu -->
        </div><!-- #le-concept -->

        <footer class="footer w3-card-2">
            Copyright 2017 Andev
        </footer>

        <!-- javascript -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>

           <!--<div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>-->
    </body>
</html>
