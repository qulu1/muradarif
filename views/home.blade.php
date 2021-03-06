<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Murad Arif Admin Page</title>

    <!-- Bootstrap Core CSS -->
    <link href= {{ url("css/bootstrap.min.css") }}  rel="stylesheet">

    <!-- Custom CSS -->
    <link href= {{ url("css/sb-admin.css") }}  rel="stylesheet">

    <!-- Custom Fonts -->
    <link href= {{ url("font-awesome/css/font-awesome.min.css") }}  rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="singer">Murad Arif Homepage</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{{Auth::user()->name}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="/admin/singer"><i class="fa fa-fw fa-dashboard"></i> Singer</a>
                    </li>
                    <li>
                        <a href="/admin/showman"><i class="fa fa-fw fa-bar-chart-o"></i> Showman</a>
                    </li>
                    <li>
                        <a href="/admin/gallery"><i class="fa fa-fw fa-edit"></i> Gallery</a>
                    </li>
                    <li>
                        <a href="/admin/interview"><i class="fa fa-fw fa-desktop"></i> Interview</a>
                    </li>
                    <li class="active">
                        <a href="/admin/text"><i class="fa fa-fw fa-file"></i> Text</a>
                    </li>
                    <li>
                        <a href="/admin/singer"><i class="fa fa-fw fa-desktop"></i> Blank Page</a>
                    </li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-hover">
                                @yield('content')            
                            </table>                
                        </div>
                        
                        <div class="col-md-5 ">         
                            @yield('form')
                        </div>  
                    </div>          
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src={{ url("js/jquery.js") }}  ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src={{ url("js/bootstrap.min.js") }}></script>

</body>

</html>

