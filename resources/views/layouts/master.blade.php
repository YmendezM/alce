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
        <link rel="stylesheet" href="{{ asset('assets/js/gritter/css/jquery.gritter.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/lineicons/style.css') }}">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/js/jquery-ui/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/js/jquery-ui/jquery-ui.structure.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/js/jquery-ui/jquery-ui.theme.css') }}">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section id="container" >
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="{{route('/')}}" class="logo"><b>{{ trans('nav.welcome') }}</b></a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">

                        <!-- inbox dropdown start-->
                        <li id="header_inbox_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-theme">5</span>
                            </a>
                        </li>
                        <!-- inbox dropdown end -->
                    </ul>
                    <!--  notification end -->
                </div>
                <div class="top-menu">
                    <form  action="#" method="get" class="navbar-form navbar-right"> 
                        <div class="dropdown">
                            <button class="btn btn-theme dropdown-toggle" type="button" data-toggle="dropdown">
                                {{ Auth::user()->name }}<span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('auth/logout')}}">{{ trans('nav.logout') }}</a></li>                                               
                            </ul>
                        </div>
                    </form>
                </div>
            </header>
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><a href="profile.php"><img src="{{ asset('assets/img/ui-sam.jpg') }}" class="img-circle" width="60"></a></p>
                        <h5 class="centered">{{ trans('nav.alce') }}</h5>

                        <li class="mt">
                            <a class="active" href="{{route('/')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>{{ trans('nav.home') }}</span>
                            </a>
                        </li>
                        <!--<li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-cogs"></i>
                                <span>{{ trans('nav.mensageria') }}</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="#">{{ trans('nav.messages') }}</a></li>
                            </ul>
                        </li>-->
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-book"></i>
                                <span>{{ trans('nav.administration') }}</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="{{route('message-type/index')}}">{{ trans('nav.message-type') }}</a></li>
                                <li><a  href="{{route('rol/create')}}">{{ trans('nav.rol') }}</a></li>
                                <li><a  href="{{route('users-rol/create')}}">{{ trans('nav.users-rol') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">

                    <div class="row">
                        <div class="col-lg-9 main-chart">
                            <div class="row mtbox">
                                @yield('content')   
                            </div>
                        </div> <!-- /col-lg-9 END SECTION MIDDLE -->

                        <div class="col-lg-3 ds">
                            <!--COMPLETED ACTIONS DONUTS CHART-->
                            <h3>{{ trans('nav.messengerservice') }}</h3>
                            <div class="desc">
                                <div class="thumb">
                                    <img class="img-circle" src="{{ asset('assets/img/ui-sam.jpg')}}" width="35px" height="35px" align="">
                                </div>
                                <div class="details">
                                    <p><a href="#">{{ Auth::user()->name }}</a><br/>
                                    <muted>{{ trans('nav.available') }}</muted>
                                    </p>
                                </div>
                            </div>
                            <!-- CALENDAR-->
                            <div id="calendar" class="mb">
                                <div class="panel green-panel no-margin">
                                    <div class="panel-body">
                                        <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                            <div class="arrow"></div>
                                            <h3 class="popover-title" style="disadding: none;"></h3>
                                            <div id="date-popover-content" class="popover-content"></div>
                                        </div>
                                        <div id="my-calendar"></div>
                                    </div>
                                </div>
                            </div><!-- / calendar -->
                        </div>

                    </div><!-- /col-lg-3 -->
                    </div><! --/row -->
                </section>
            </section>
            <!--main content end-->
            <!--footer start-->

            <footer class="site-footer">
                <div class="text-center">
                    2016 - Keiwer Villabona
                </div>
            </footer>
            <!--footer end-->
        </section>


        <!-- js placed at the end of the document so the pages load faster -->


        {!! Html::script('assets/js/jquery.js') !!}
        {!! Html::script('assets/js/jquery-ui/jquery-ui.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/jquery.dcjqaccordion.2.7.js') !!}
        {!! Html::script('assets/js/jquery.scrollTo.min.js') !!}
        {!! Html::script('assets/js/jquery.nicescroll.js') !!}
        {!! Html::script('assets/js/jquery.sparkline.js') !!}

        {!! Html::script('assets/js/select_visibility.js') !!}
        {!! Html::script('assets/js/text_message.js') !!}
        {!! Html::script('assets/js/enable_text.js') !!}

        <!--common script for all pages-->
        {!! Html::script('assets/js/common-scripts.js') !!}  

        <!--script for this page-->
        {!! Html::script('assets/js/sparkline-chart.js') !!}
        {!! Html::script('assets/js/zabuto_calendar.js') !!}

        <!-- scrpipt --->
        {!! Html::script('assets/js/chart-master/Chart.js') !!}  

        <script type="application/javascript">
            $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
            $(this).hide();
            });
            });

            function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
            }
        </script>
        <script type="text/javascript">
            var x;
            x = $(document);
            x.ready(ventana);
            function ventana() {
                var x = $("#dialogo");
                x.dialog();
            }

        </script> 


        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>


    </body>
</html>
