<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>{{ trans('form.title.title') }}</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <!--external css-->
        <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.css') }}">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style-responsive.css') }}">


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="login-page">
            @yield('content')  
        </div>
        <!-- js placed at the end of the document so the pages load faster -->
        {!! Html::script('assets/js/jquery.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
         {!! Html::script('assets/js/jquery.backstretch.min.js') !!}
        
        <script>
            $.backstretch("{{ asset('assets/img/login-bg.jpg') }}", {speed: 500});
        </script>


    </body>
</html>
