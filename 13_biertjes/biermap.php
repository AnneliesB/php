<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OpenBeerDB</title>
    <style>
      html, body {margin: 0; padding: 0; }
      #map{ width: 100vw; height: 100vh; }
    </style>
</head>
<body>
    <div id="map"></div>

    <script>
      function initMap() {
        var locations = [
            // alle locaties gaan toevoegen
                {
                    name: "Het Anker", 
                    id: "284",
                    lat: 51.0325, 
                    lng: 4.473
                } 
        ]

        // create a new google map and center on a default location in Belgium
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: { lat: 51.0259, lng: 4.4775 }
        });
        
        // loop over all markers in the array
        for( var i=0; i<locations.length; i++ ){            
            var infoWindow = new google.maps.InfoWindow;
            var marker = new google.maps.Marker({
                position: locations[i],
                map: map
            });

            // add an infowindow to the currect marker so that we can click on it for details
            attachInfowindow(marker, locations[i].name, locations[i].id);
        }
      }

      function attachInfowindow( marker, name, id ){
        // this function adds an infowindow to the current marker in the loop
        var link = document.createElement('a');
        link.setAttribute("href", "beerdetails.php?id="+id);
        link.innerText = name;
        var infowindow = new google.maps.InfoWindow({
          content: link
        });

        marker.addListener('click', function() {
          infowindow.open(marker.get('map'), marker);
        });
      }


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=INSERT_YOUR_API_KEY_HERE&callback=initMap">
    </script>

</body>
</html>