<div id="map"></div>
<script>
  function initMap() {
      // The location of EOMSINC
      var eomsinclat = {lat: 14.580295, lng: 120.981125};
      // The map, centered at EOMSINC
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 20, center: eomsinclat});
      // The marker, positioned at EOMSINC
      var marker = new google.maps.Marker({position: eomsinclat, map: map});
  }
</script>