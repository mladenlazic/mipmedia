var mapApp = mipmedia.controller('contactController', function($scope) {

    angular.element(document).ready(function() {
        getLocationMIPMEDIA();
    })

    var getLocationMIPMEDIA = function() {
        var myLatLng = {
            lat: 44.759349,
            lng: 19.207554
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'MIPMEDIA'
        });
    }

})