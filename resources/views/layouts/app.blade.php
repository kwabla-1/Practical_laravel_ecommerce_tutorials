<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
     <link rel="stylesheet" href="{{asset('/css/app.css')}}" rel="stylesheet">
     <title>@yield('title', 'Onlne Store')</title>
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
          <div class="container">
               <a href="{{route('home.index')}}" class="navbar-brand">Online store</a>

               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" 
                         aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                         <a class="nav-link active" href="{{route('home.index')}}">Home</a>
                         <a class="nav-link active" href="{{route('products.index')}}">Products</a>
                         <a class="nav-link active" href="{{route('home.about')}}">About</a>
                    </div>
               </div>
          </div>
     </nav>

     <header class="masthead bg-primary text-white text-center py-4">
          <div class="container d-flex align-items-center flex-column">
               <h3>@yield('subtitle', 'A laravel online Store')</h3>
          </div>
     </header>

     <div class="">
          @yield('content')
     </div>

     <div class="">
          <div class="container">
               <small>Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://twitter.com/danielgarax"> 
                    Daniel Correa</a> - <b>Paola Vallejo</b>
               </small>
          </div>
     </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>