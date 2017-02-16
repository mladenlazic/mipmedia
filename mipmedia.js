var mipmedia = angular.module('mipmedia', ['ngRoute']).config(

    function($routeProvider) {
        $routeProvider
            .when('/', {
                controller: 'homeController',
                templateUrl: 'view/home.html'
            })
            .when('/offers', {
                controller: 'offersController',
                templateUrl: 'view/offers.html'
            })
            .when('/about', {
                controller: 'aboutController',
                templateUrl: 'view/about.html'
            })
            .when('/contact', {
                controller: 'contactController',
                templateUrl: 'view/contact.html'
            })

    }
);