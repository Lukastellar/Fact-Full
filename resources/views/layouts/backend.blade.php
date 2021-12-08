<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title> FactFull </title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="OneUI">
        <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/splide.min.css')}}">
        <script src="{{asset('js/splide.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <style>
        *{
            outline: none;
            box-sizing: border-box;
        }
        #navbar{
            left: -16rem; /* -16 */
            transition: left 500ms;
            z-index: 998;
        }
        #navbar:hover{
            left: 0;
        }
        #nav{
            background: #2c343f;
            border-radius: 0 70px 0 0;
        }
        #overlay{
            position: absolute;
            visibility: hidden;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(129, 129, 129, 0.5);
            transition: opacity 1s, visibility 1s;
            opacity: 0;
            z-index: -3;
        }
        #overlay.show{
            opacity: 1;
            visibility: visible;
        }
        #opener {
            position: relative;
            background: #2c343f;
            color: rgba(255, 255, 255, 0.6);
            top: 50%;
            right: -100%;
            padding: 10px 13px 10px 10px;
            transform: translateY(-50%);
            border-radius: 0 50% 50% 0;
            transition: color 300ms;
        }
        #login-register > button {
            background: transparent;
            border-width: 2px;
            border-style: solid;
            color: #555;
            font-weight: 500;
            padding: 4px 10px;
            transition: all 500ms;
        }
        #login-register > button:first-child{
            border-color: #00b200;
            color: #008a00;
        }
        #login-register > button:last-child{
            border-color: #0011c7;
            color: #000b8a;
        }
        #login-register > button:hover {
            border-color: #383838;
            background-color: #383838;
            color: white;
        }
        #nav:hover #opener{
              color: white;
          }
        .nav-menu{
            color: rgba(255, 255, 255, 0.6);
        }
        #profile-name{
            color: white;
            letter-spacing: 1px;
        }
        #profile-name:first-letter {
            font-size: 20px;
            font-weight: bolder;
            text-decoration-line: underline;
            text-decoration-thickness: 3px;
        }
        .nav-menu > .nav-menu-header {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 13px;
            letter-spacing: 1px;
            padding: 5px 20px;
        }
        .nav-menu > .nav-menu-item.active > a {
            background: rgba(0, 0, 0, 0.2);
        }
        .nav-menu > .nav-menu-item > a > i:last-child {
            transition: transform 200ms;
        }
        .nav-menu > .nav-menu-item.active > a > i:last-child {
            transform: rotateZ(-90deg);
        }
        .nav-menu > .nav-menu-item > ul {
            display: none;
        }
        .nav-menu > .nav-menu-item.active > ul {
            display: block;
        }
        .nav-menu-item > a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 25px 8px 25px;
            transition: background 300ms, color 200ms;
        }
        .nav-menu-item > a:hover{
            color: white;
            background: rgba(0, 0, 0, 0.3);
        }
        .nav-menu-item > a > span {
            flex: 1;
            padding-left: 15px;
        }
        .nav-menu-item > ul.nav-menu-submenu{
            padding-left: 0;
        }
        .nav-menu-submenu > li > a {
            background: rgba(0, 0, 0, 0.2);
        }
        .nav-menu-item.active > .nav-menu-submenu > li > a > span.nav-menu-link-name{
            font-size: 14px;
            margin-left: -13px;
            opacity: 0;
        }
        .nav-menu-item.active > ul > li > a > span.nav-menu-link-name.active{
            margin-left: 0;
            opacity: 1;
            transition: margin-left 300ms, opacity 400ms;
        }
        .fact-item {
            max-height: 10rem;
            width: 300px;
        }
        .fact-item > h1 {
            color: #343434;
        }
        .fact-item > h2 {
            color: rgba(52, 52, 52, 0.85);
        }
        .fact-item > .fact-text-wrapper {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        #daily-fact{
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 30px;
            color: #dddddd;
        }
        #daily-fact > h1 {
            color: #49a2ff;
        }
        #daily-fact > p {
            color: #2a2a2a;
        }
        #daily-fact > p:first-letter{
            font-size: 23px;
        }
        #monthly-facts > h1{
            color: #444444;
        }
        .slider:hover{ cursor: grab }
        .slider:active{ cursor: grabbing }
        .fact-item:hover{ cursor: pointer }

        #contact-wrapper {
            width: 45%;
        }
        #contact-wrapper h1{
            color: #444444;
        }
        #contact-wrapper h1 > span{
            color: hsl(266deg 91% 71%);
        }
        #contact-wrapper input,
        #contact-wrapper textarea {
            background: rgba(227, 227, 227, 0.78);
            color: #494949;
            padding: 5px 15px;
            font-weight: 500;
            font-size: 15px;
            border-radius: 10px;
            max-height: 230px;
        }
        .contact-btn{
            display: block;
            background-color: #3434ff;
            color: white;
            font-weight: 600;
            padding: 6px 18px;
            border-radius: 5px;
            opacity: 0.8;
            transition: opacity 400ms;
        }
        .contact-btn:hover{
            opacity: 1;
        }
    </style>
    <body>
    <nav id="navbar" class="fixed h-screen left-0 top-0">
        <div id="nav" class="w-64 h-screen">
            <div class="absolute flex flex-col w-full pb-5" style="height: 100%;">
                <div class="px-5 py-10 flex items-center">
                    <span class="bg-red-200 w-20 h-20"></span>
                    <span id="profile-name" class="flex-1 text-center font-semibold"> Luka Stajić </span>
                </div>
                <div>
                    <ul class="nav-menu">
                        <li class="nav-menu-header">Naslov</li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="#">
                                <i class="fas fa-heart"></i>
                                <span class="nav-menu-link-name">Jedan</span>
                                <i class="fas fa-angle-left"></i>
                            </a>
                            <ul class="nav-menu-submenu">
                                <li class="nav-menu-item">
                                    <a href="">
                                        <span class="nav-menu-link-name"> Submenu 1 </span>
                                    </a>
                                </li>
                                <li class="nav-menu-item">
                                    <a href="">
                                        <span class="nav-menu-link-name"> Submenu 2 </span>
                                    </a>
                                </li>
                                <li class="nav-menu-item">
                                    <a href="">
                                        <span class="nav-menu-link-name"> Submenu 3 </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="#">
                                <i class="fas fa-kiss"></i>
                                <span class="nav-menu-link-name">Dva</span>
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="#">
                                <i class="fas fa-car"></i>
                                <span class="nav-menu-link-name">Tri</span>
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="#">
                                <i class="fas fa-cat"></i>
                                <span class="nav-menu-link-name">Četiri</span>
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="#">
                                <i class="fas fa-dog"></i>
                                <span class="nav-menu-link-name">Pet</span>
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="h-full flex justify-center items-end">
                    <i class="fas fa-lg fa-cog text-gray-400 hover:text-gray-50 transition-colors duration-200"></i>
                </div>
            </div>
            <i id="opener" class="fas fa-2x fa-caret-right"></i>
        </div>
    </nav>
    <div id="login-register" class="absolute top-0 right-0 p-4">
    @if(Auth::check())
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
            <button class="rounded" type="submit"><a href="{{route('logout')}}" onclick="
            event.preventDefault();
            document.getElementById('logout-form').submit();">Izloguj se</a></button>
        @else
            <button class="rounded" type="button"><a href="{{route('login')}}">Uloguj se</a></button>
            <button class="rounded" type="button"><a href="{{route('register')}}">Registruj se</a></button>
    @endif
    </div>

    <div id="overlay"></div>

    @yield('content')

    </body>

    <script>
        let overlay = $('#overlay');
        let navbar = $('#navbar');
        let navItems = $('.nav-menu > li');

        // Open navbar on hover
        navbar.on('mouseenter', () => overlay.addClass('show'))
        navbar.on('mouseleave', () => overlay.removeClass('show'))
        // Items animation
        navItems.on('click', function(){
            navItems.not(this).removeClass('active').find('ul > li > a > .nav-menu-link-name').removeClass('active');
            $(this).toggleClass('active');
            $(this).find('ul > li > a > .nav-menu-link-name').delay(10).queue(function(){
                $(this).toggleClass('active').dequeue();
            });
        });
    </script>

</html>

