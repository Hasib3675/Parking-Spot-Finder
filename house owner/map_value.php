<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>

<p>Click the button to get your coordinates.</p>

<button>Send Location</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

$(document).ready(function(){


    $("button").click(function(){
    	var lat,lng;
    	if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
        function showPosition(position) {
        	lat = position.coords.latitude;
            lng = position.coords.longitude;
            
            // if does not need ot show then clear bellow line
            x.innerHTML = "Latitude: " + position.coords.latitude + 
            "<br>Longitude: " + position.coords.longitude;
        }
        $.post("savelocation.php",
        {
        	
          lat: lat, // from php get value by $lat = $_POST['lat']
          lng: lng// from php get value by $lng = $_POST['long']
        },
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });
    
});
</script>

</body>
</html>