
<html lang="en">
<head>
    <title>ABM Rent-a-Car</title>
    <link rel="shortcut icon" href="slike/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="{{asset('css/wickedpicker.css')}}" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" />
	<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/style_contact.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/rc.css')}}">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<script type="text/javascript" src="js/wickedpicker.js"></script>
    <script src="js/jquery-ui.js"></script>
    
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-boja navbar-dark fixed-top" >
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        
        <a class="navbar-brand " href="{{url('/')}}"><img src={{ URL::to('/') }}/slike/logo2_3.png    class="d-inline-block align-top" alt=""></a>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> 

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-info" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{url('/kontakt')}}">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{url('/vehicles')}}">Vehicles</a>
            </li>
        </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                           <li class="nav-item">
                 <!--Login in-->
            <a class="nav-link text-info" ng-click="toggleModal()"href="{{ route('login') }}">Login</a>

             </li>
            <li class="nav-item">
                <a class="nav-link text-info"href="{{ route('register') }}">Sign up</a>
            </li>
                        @else
                            <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img class="user-favicon" src="images/user-favicon.png" alt="">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        
        </nav>

        <main class="py-4">
            <div id="sadrzaj">@yield('content')</div>
           
        </main>
</body>
</html>
