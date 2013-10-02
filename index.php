<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />

    <title>Bootstrap 101 Template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link href="assets/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="assets/css/style.css" rel="stylesheet" media="screen" />
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top custom-navbar" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand custom-navbar-brand" href="#">eser.ozvataf.com</a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                
                <div class="col-sm-3 col-md-3 navbar-right">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" />
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default custom-input-search-button"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="page">

        <header id="splash">
            <div class="container">

                <!-- Main component for a primary marketing message or call to action -->
                <div class="jumbotron custom-jumbotron">
                    <h1>Navbar example</h1>
                    <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
                    <p>To see the difference between static and fixed top navbars, just scroll.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="../../components/#navbar">View navbar docs &raquo;</a>
                    </p>
                </div>

            </div>
        </header>

        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Hello World</h1>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script type="text/javascript" src="assets/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>