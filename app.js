
//google.maps.event.addDomListener(window, 'load', initMap);

var houses = [
    {
        price: "200, 000", type: "Appartment", room: "3", bed: 3, bath: "1.5", images: ["img 1", " img2", "img 3"],
        sqt: '34567', address: " 400 S Main st, Manheim PA,17545"
    },

    {
        price: "450, 030", type: "House", room: "4", bed: "2", bath: "2", images: ["img 1", " img2", "img 3"]
        , sqt: '34267', address: " 401 S Main st, Litits PA,17601"
    },

]


var gMap = (function () {

    var ul = [
        { lat: -40.070195, lng: -76.295671 },
        { lat: -13.070195, lng: -50.295671 },
        { lat: -30.070195, lng: -76.295671 }
    ]

    var map, geo;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 2
        });


        ul.forEach(function (val) {


            var marker = new google.maps.Marker({
                position: { lat: val.lat, lng: val.lng },
                map: map,

                title: "content"
            })

        })



    }

    geo = new google.maps.Geocoder();
    //  geocodeAddress(geo, map);

    function geocodeAddress(geocoder, resultsMap) {
        // var address = document.getElementById('address').value;
        geocoder.geocode({ 'address': "lancaster,PA" }, function (results, status) {
            if (status === 'OK') {
                resultsMap.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }




    google.maps.event.addDomListener(window, 'load', initMap);




})();




