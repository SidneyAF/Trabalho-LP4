    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPzEc7s12Tt9AjbWO-AEMm7UdB5mwJzvs&callback=initMap">
    </script>

		<?php include'footer.php';?>

	
		<script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
		<script src="assets/js/scripts.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
		<script>
        const h1 = document.querySelectorAll('h1');
 
        TweenMax.from(h1, 1, {
            scale: 0,
            ease: Bounce.easeOut
        });
    </script>