<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

    <style>
      #map {
  
        height: 500px;
      }
	  body{
	  background-color: black;
	  }
	  
	.navMenu {
		margin: 0em auto;
    height: 36px;
    line-height: 36px;
    width: 700px;
    /* CSS 3 */
    background-image: linear-gradient(bottom, rgb(170,170,170) 11%, rgb(238,238,238) 77%);
    background-image: -o-linear-gradient(bottom, rgb(170,170,170) 11%, rgb(238,238,238) 77%);
    background-image: -moz-linear-gradient(bottom, rgb(170,170,170) 11%, rgb(238,238,238) 77%);
    background-image: -webkit-linear-gradient(bottom, rgb(170,170,170) 11%, rgb(238,238,238) 77%);
    background-image: -ms-linear-gradient(bottom, rgb(170,170,170) 11%, rgb(238,238,238) 77%);
    background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0.11, rgb(170,170,170)), color-stop(0.77, rgb(238,238,238)) );
    border-radius: 5px;
	margin-bottom: 20px;
}

.navMenu a {
    color: #333;
 
    display: inline-block;
    float: left;
    font-size: 12px;
    padding: 0 15px;
    text-align: center;
    text-shadow: 0 1px 1px #FFF;
    text-transform: uppercase;
    text-decoration: none;
    width: 200px;
 
}

.navMenu a:hover { background-color: rgba(0, 0, 0,.05) }
 .navMenu a.current {
  background-color: rgba(0, 255, 0,.35) 
} 

		.btn {
		  background: #3498db;
		  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
		  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
		  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
		  background-image: -o-linear-gradient(top, #3498db, #2980b9);
		  background-image: linear-gradient(to bottom, #3498db, #2980b9);
		  -webkit-border-radius: 10;
		  -moz-border-radius: 10;
		  border-radius: 10px;
		  font-family: Arial;
		  color: #ffffff;
		  font-size: 20px;
		  background: #eb9e1a;
		  padding: 10px 15px 10px 15px;
		  text-decoration: none;
		}

		.btn:hover {
		  background: #f0c04f;
		  text-decoration: none;
		}	
				.center {
		  text-align:center;
			margin-top: 20px;
		}
    </style>
  </head>
  <body>
  

	
	<div class="navMenu expander">
		<form action="search.php" method="get">

			<a href="" class="current">Home</a>
			<a href="">Patient</a>
			<a href="">Messages</a>
		</form>
	</div>
	

 
  
    <div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 44.540, lng: -78.546},
          zoom: 8
        });
      }
	 
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
		<div class="center">
			<button class="btn">
	Find Medical Personnel
	</button>
	</div>
</body>
		</html>
