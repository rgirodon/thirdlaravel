<!doctype html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="css/app.css"></link>
        <script type="text/javascript" src="js/app.js"></script>
    </head>
    <body>
    	<header>
        	@yield('header')
        </header>

        <div>
            @yield('content')
        </div>
    </body>
</html>