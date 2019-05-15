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
    @include('partials.styles')

  </head>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" id="app">
        @include('partials.header')
        @include('partials.sidebar-menu')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    @include('partials.scripts')
    @include('partials.footer')
  </body>
</html>
