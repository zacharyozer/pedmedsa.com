// JavaScript Document

function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
		map.addControl(new GLargeMapControl())
		var address = "7922 EWING HALSELL DR, SAN ANTONIO, TX, 78229-3726 ";
	  geocoder = new GClientGeocoder();
	  if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              alert(address + " not found");
            } else {
              map.setCenter(point, 15);
              var marker = new GMarker(point);
              map.addOverlay(marker);
              marker.openInfoWindowHtml("<strong>Pediatric Medicine, PA</strong><br/>7922 Ewing Halsell Dr<br />Ste 440<br />San Antonio  TX 78229-3726");
            }
          }
        );
      }
      }
    }