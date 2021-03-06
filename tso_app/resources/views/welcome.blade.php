<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content=" {{ csrf_token() }} ">
      <title>@yield('title','TSO App')</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
      <!-- Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
      <style>
         .move-left {
         width: 5%;
         box-shadow: none;
         }
      </style>
   </head>
   <body>
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-light">
         <div class="container">
            <a class="navbar-brand text-uppercase" href="{{ url('/')}}">
            <strong>TSO</strong> Application
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="navbar-toggler">
               <ul class="navbar-nav">
                  <li class="nav-item"><a href="{{ route('tso.index')}} " class="nav-link">TSO List</a>
                  </li>
                  <li class="nav-item active"><a href="{{ route('thana.index') }} " class="nav-link">Thana List</a>
                  </li>
                  <li class="nav-item active"><a href="{{ route('map.index') }}" class="nav-link">TSO Mapping List</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      {{-- content --}}
       @yield('content')
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/app.js') }}"></script>
   </body>
</html>