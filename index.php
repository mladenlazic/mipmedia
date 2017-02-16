<!DOCTYPE html>
<!--pravimo prvi korak u angularu definisemo controler i vidimo kako se koristi-->
<html ng-app="mipmedia">
	<head>
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

		<link rel="stylesheet" href="view/style.css">

	</head>

	<body>

<div class="container-fluid">

    
    
    <!-- Second navbar for search -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MIPMEDIA</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Works</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
   
</div><!-- /.container-fluid -->

		<div ng-view id="container">

		</div>

	</body>
</html>
