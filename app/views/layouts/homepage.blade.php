
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <title></title>


<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/main.css">
 </head>
 <body class="homepage">


    @include('layouts.partials.nav')

    <div class="container">

    @include('flash::message')

    @yield('content')

    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        $('#flash-overlay-modal').modal();
    </script>
 </body>
 </html>

