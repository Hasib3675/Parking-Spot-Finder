<html >
<head>
    <title>Parking spot finder</title>
</head>
<meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Parkin spot finder</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<body>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAWqGtmStUNWI0yHvFSj7SDXVwBH5prfbs&sensor=false"></script>


<!--End current location map -->

<!-- Add location map start-->
<h4 style="margin-left:500px;">Add your location in this map</h4>
<h6 style="margin-left:500px;" class="hidden" id="loading">Setting Location please wait</h6>
<h6 style="margin-left:500px;" class="hidden" id="success">Please press submit location</h6>


<div id="map" class="pull-right" style=" height:500px;"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter=new google.maps.LatLng( 23.777176, 90.399452);
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(map, event.latLng);
  });
}

function placeMarker(map, location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  var infowindow = new google.maps.InfoWindow({
    content: "Thanks for add your location"
  });

  infowindow.open(map,marker);


  var lat = location.lat();
  
  var lng = location.lng();

 var arr=[];
 arr.push(lat,lng);
 $("#loading").removeClass("hidden");
 setTimeout(function(){
    $("#loading").addClass("hidden");
    $("input[name='lat']").val(lat);
    $("input[name='lng']").val(lng);
    
    $("#success").removeClass("hidden");
 }, 500); 
  
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWqGtmStUNWI0yHvFSj7SDXVwBH5prfbs&callback=myMap"></script>
</div>

<form method="POST" action="savelocation.php">
  <div class="row col-md-12">
    <input type="hidden" name="lat">
    <input type="hidden" name="lng">
    <button type="submit" name="bttn" class="btn btn-info btn-fill btn-lg" style="margin-left:600px; margin-top:10px;">Submit</button>
  </div>
</form>

</body>
</html>
