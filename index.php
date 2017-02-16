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

		<link rel="stylesheet" href="view/style.css">

	</head>

	<body>

		<div ng-view id="container">

		</div>

	</body>
</html>
