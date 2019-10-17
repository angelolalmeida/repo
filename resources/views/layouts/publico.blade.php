<!--Layout da página publica-->

<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Manvell Manutenções e Montagens Industriais</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
    <link type="text/css" rel="stylesheet" href="{{asset('css/publico.css')}}"  media="screen,projection"/>

    <script src="https://kit.fontawesome.com/58bd7ff2a8.js" crossorigin="anonymous"></script>



    
    @yield('styles')
</head>

<body>

    @include('layouts.nav_publico')    

    @yield('conteudo')

    @include('layouts.banner')

    @include('layouts.rodape')


    <div class="fixed-action-btn">
    <a class="btn-floating btn-large green" href="https://api.whatsapp.com/send?phone=5514997463647&text=Vi seu site e gostaria de mais informações" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    
    </div>
          
    <script>
     
    $(document).ready(function(){
        $('.fixed-action-btn').floatingActionButton();
    });
    </script>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('materialize/js/materialize.min.js') }}"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148895112-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-148895112-1');
    </script>    

    @yield('scripts')
</body>
</html>

