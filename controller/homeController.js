mipmedia.controller('homeController',
	function($scope,$location)
	{

		$scope.prebaci = function()
		{
			console.log("dasdasd");
			 $location.path('/about');
		}


	}
	)