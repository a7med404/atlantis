<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="layout/images/visa.png" type="image/ico" />
    <title>Atlantis!| </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="modules/site/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="modules/site/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="modules/site/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="modules/site/img/apple-touch-icon-114x114.png">

    @include('site.partials.styles')

  </head>
</head>
<body class="hold-transition skin-blue sidebar-mini">  
    @include('site.partials.navigation')
    @yield('content')
    @include('site.partials.footer')
    @include('site.partials.scripts')
  </body>
</html>
