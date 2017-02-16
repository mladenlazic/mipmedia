<!doctype html>
<!--pravimo prvi korak u angularu definisemo controler i vidimo kako se koristi-->
<html ng-app="mipmedia">

<head>
    <meta charset="utf-8">

    <title>mip media</title>
    <!--ukljucujemo angularjs biblioteku-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular-route.js"></script>

    <script type="text/javascript" src="mipmedia.js"></script>
    <script type="text/javascript" src="controller/offersController.js"></script>
    <script type="text/javascript" src="controller/homeController.js"></script>
    <script type="text/javascript" src="controller/aboutController.js"></script>
    <script type="text/javascript" src="controller/contactController.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="view/style.css">

</head>

<body>

    <div class="header-distributed">
        <nav class="navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">MIPMEDIA</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-3">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#/">Home</a></li>
                        <li><a href="#/offers">Offers</a></li>
                        <li><a href="#/about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                </div>
            </div>
        </nav>
    </div>

    <div ng-view id="container">

    </div>

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Company<span>logo</span></h3>

            <p class="footer-links">
                <a href="#">Home</a> ·
                <a href="#">Blog</a> ·
                <a href="#">Pricing</a> ·
                <a href="#">About</a> ·
                <a href="#">Faq</a> ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Company Name &copy; 2015</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>21 Revolution Street</span> Paris, France</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+1 555 123456</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer>

</body>

</html>