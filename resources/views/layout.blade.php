<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Learning Laravel Website </title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Learning Laravel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/project1/public/">Home</a></li>
                    <li><a href="/project1/public/about">About</a></li>
                    <li><a href="/project1/public/contact">Contact</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </nav>
    </header>

    @yield('content')

    </div>
    <div class="bottom-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2 navbar-brand">
                    <a href="/">Learning Laravel</a>
                </div>
                <div class="col-md-10">
                    <ul class="bottom-links">
                        <li><a href="project1/public/">Home</a></li>
                        <li><a href="project1/public/about">About</a></li>
                        <li><a href="project1/public/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>

</html>