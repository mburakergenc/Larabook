
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <title></title>

<!-- CSS Elementlerini cekiyoruz -->
<!-- relation = type-->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/main.css">
 </head>
 <body>

    <!-- Navigasyonu her sayfaya ekle -->
    @include('layouts.partials.nav')
<!-- icerik -->
    <div class="container">

    @include('flash::message')
<!-- diger sayfalarda kullanmak icin content adi ver -->
    @yield('content')

    </div>
<!-- bootstrapi kullanmak icin javascript elementlerini cek -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        $('#flash-overlay-modal').modal();
    </script>
 </body>
 </html>

