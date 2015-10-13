<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Dynamic Search</title>
  </head>
  <body>
    <input id="pickuplocality" class="controls" type="text" placeholder="Pickup Locality">
    <input id="droplocality" class="controls" type="text" placeholder="Drop Locality">
    <div id="map"></div>
    <script>
function initAutocomplete() {
 
var pickuplocality = document.getElementById('pickuplocality');
var droplocality = document.getElementById('droplocality');
var options = {
  //types: ['(cities)'],
componentRestrictions: {country: 'in'}
};
autocomplete = new google.maps.places.Autocomplete(pickuplocality, options);
autocomplete = new google.maps.places.Autocomplete(droplocality, options); 
 /*   
  var inputpickup = document.getElementById('pickuplocality');
  var inputdropup = document.getElementById('droplocality');
  var pickuplocality = new google.maps.places.SearchBox(inputpickup);
  //var pickuplocality = new google.maps.places.SearchBox(inputdropup);
  
   var pickuplocality = new google.maps.places.SearchBox(inputpickup);
  
  
   pickuplocality.addListener('places_changed', function() {
    var places = pickuplocality.getPlaces();
    if (places.length == 0) {
      return;
    }
  });*/
}


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqElaltr7X0_Or1vYTbqBnmawNWASnWGU&libraries=places&callback=initAutocomplete" async defer></script>
  </body>
</html>