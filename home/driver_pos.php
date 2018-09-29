 <!doctype html>
 <html lang="en">
 <head>
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
 </head>

 <body>

  <div class="wrapper">
    <div class="sidebar" data-color="purple " data-image="assets/img/sidebar-5.jpg">
     <div class="sidebar-wrapper">
      <div class="logo">
        <a href="" class="simple-text">
          Information
        </a>
      </div>

      <ul class="nav">
        <li>
          <a href="#">
            <i class="pe-7s-graph"></i>
            <p>Dashboard</p>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">User</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
             <a href="../car owner/profile.php">
               <p>Account</p>
             </a>
           </li>
          <li>
          <li class="separator hidden-lg hidden-md"></li>
        </ul>
      </div>
    </div>
  </nav>
  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: new google.maps.LatLng(23.777176, 90.399452),
          mapTypeId: 'roadmap'
        });

        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
          parking: {
            icon: iconBase + 'parking_lot_maps.png'
          },
        };

        var features = [
         {
            position: new google.maps.LatLng(23.796655637855636, 90.41090927051948),
            type: 'parking'

          }, {
            position: new google.maps.LatLng(23.78336130389689, 90.3388662627716),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(23.803493159561917, 90.41273317264961),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(23.762251516027444, 90.36005571398925),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(23.771834802472963, 90.40606096301269),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(23.754935311975, 90.376463028113),
            type: 'parking'
          },
          {
            position: new google.maps.LatLng(23.80544927244932, 90.38177087817382),
            type: 'parking'
          }
        ];

        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWqGtmStUNWI0yHvFSj7SDXVwBH5prfbs&callback=initMap">
    </script>
 

</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>

