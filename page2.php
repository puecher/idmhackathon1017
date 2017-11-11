<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <script src="https://use.fontawesome.com/0ca171ef87.js"></script>
    <style>
      body, input, button {
        font-family: Roboto, Arial, sans-serif;
        font-size: 15px;
      }
      .wrapper {
        height: 100%;
        overflow: hidden;
      }
      #a {
        width: 25%;
        float: left;
        overflow-y: auto;
        height: 100%;
      }
      .ab {
        background: #4285F4;
        color: #fff;
        padding: 15px;
      }
      .aa {
        padding: 15px;
      }
      .aaa {
        margin-bottom: 15px;
        position: relative;
      }
      .aaa span {
        font-weight: bold;
      }
      input, button {
        width: 100%;
        border: 0;
        line-height: 24px;
        background: #fff;
        padding: 10px 0 8px;
        border-radius: 30px;
        text-align: center;
      }
      #map {
        height: 100%;
        width: 75%;
        float: left;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #content img.abc {
        width: 400px !important;
      }
      .a {
        font-size: 19px !important;
        line-height: 22px !important;
      }
      .b {
        font-size: 15px !important;
        line-height: 18px !important;
      }
      .clearfix {
        clear: both;
      }
      .aaa .asdf i {
        display: block;
        margin: 7px 0;
      }
      .aaa .asdf {
        position: absolute;
        top: 18px;
        left: 0px;
        color: #fff;
        font-size: 150%;
        display: block;
        background: #4285F4;
        width: 40px;
        height: 40px;
        text-align: center;
        vertical-align: middle;
      }
      .aaa .asdf.asdfasdf {
        background: gray;
      }
      .aaa2 .asdf {
        top: 0;
      }
      .la {
        font-size: 140%;
        font-weight: bold;
        margin-bottom: 15px;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
    <div id="a">
      <div class="ab">
        <div style="margin-bottom: 10px;">Welcome back, John!</div>
        <div style="margin-bottom: 2px;"><input type="text" name="" value="Firenze" /></div>
        <div style="margin-bottom: 2px;"><input type="text" name="" value="Bolzano" /></div>
        <div style="margin-bottom: 2px;"><input type="text" name="" value="20.04.2018" /></div>
        <div style="margin-bottom: 2px;"><input type="text" name="" value="21 days" /></div>
        <button style="cursor: pointer;">Let's go!</button>
      </div>
      <div class="aa">
        <div class="aaa" style="font-size: 120%; background: #eee; margin: -15px -15px 15px; padding: 15px; text-align: center; line-height: 30px;">
          <span style="font-size: 140%;"><i class="fa fa-money" aria-hidden="true"></i> Your trip earnings</span><br />
          300 € +
          160 € +
          192 € +
          288 € +
          1920 € =<br />
          <span style="_font-size: 150%">2860 € - 10% commission = 2574 €</span><br />
          <button style="width: 170px; font-size: 100%; margin-top: 15px; cursor: pointer;">Plan your trip!</button>
        </div>
        <div class="clearfix"></div>
        <div class="aaa">
          <span style="font-size: 160%; _text-align: center; display: block;">Suggestions</span>
        </div>
        <div class="la">Firenze</div>
        <div class="aaa">
          <span>1. Prato</span><br />
          <span class="asdf"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
          <img width="100%" src="shoes.jpg" alt="" /><br />
          Handmade shoes for men and women<br />
          10€ / h<br />
          6 days * 5 hours = 300€
        </div>
        <div class="aaa">
          <span>2. Borgo San Lorenzo</span><br />
          <span class="asdf asdfasdf"><i class="fa fa-circle" aria-hidden="true"></i></span>
          <img width="100%" src="coder.jpg" alt=""><br />
          Software Developer<br />
          28€ / h
        </div>
        <div class="la">Bologna</div>
        <div class="aaa">
          <span>3. Bologna</span><br />
          <span class="asdf"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
          <img width="100%" src="schnitzl.jpg" alt="" /><br />
          Kitchen-Assitant in Bologna<br />
          10€ / h<br />
          4 days * 4 hours = 160€
        </div>
        <div class="la">Modena</div>
        <div class="aaa">
          <span>4. Modena</span><br />
          <span class="asdf"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
          <img width="100%" src="bike.jpg" alt="" /><br />
          Bike Tune & Repair Shop<br />
          12€ / h<br />
          4 days * 4 hours = 192€
        </div>
        <div class="la">Verona</div>
        <div class="aaa">
          <span>5. Verona</span><br />
          <span class="asdf"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
          <img width="100%" src="waiter.jpg" alt=""><br />
          Waiter<br />
          12€ / h<br />
          3 days * 8 hours = 288€
        </div>
        <div class="la">Bolzano</div>
        <div class="aaa">
          <span>6. Bolzano</span><br />
          <span class="asdf"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
          <img width="100%" src="coder.jpg" alt=""><br />
          Gipsyway: Software Developer<br />
          30€ / h<br />
          8 days * 8 hours = 1920€
        </div>
      </div>
    </div>
    <div id="map"></div>
    </div>
    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 46.796574, lng: 11.938042}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        onChangeHandler();

        var myLatLng1 = {lat: 43.877705, lng: 11.102228};
        var marker1 = new google.maps.Marker({
          position: myLatLng1,
          label: '1',
          map: map,
          title: 'Hello World!'
        });

        var myLatLng1 = {lat: 43.954379, lng: 11.384748};
        var marker1 = new google.maps.Marker({
          position: myLatLng1,
          label: '2',
          map: map,
          title: 'Hello World!'
        });

        var myLatLng2 = {lat: 44.494887, lng: 11.342616};
        var marker2 = new google.maps.Marker({
          position: myLatLng2,
          label: '3',
          map: map,
          title: 'Hello World!'
        });

        var myLatLng3 = {lat: 44.647128, lng: 10.925227};
        var marker3 = new google.maps.Marker({
          position: myLatLng3,
          label: '4',
          map: map,
          title: 'Hello World!'
        });

        var myLatLng4 = {lat: 45.438384, lng: 10.991622};
        var marker4 = new google.maps.Marker({
          position: myLatLng4,
          label: '5',
          map: map,
          title: 'Hello World!'
        });

        var myLatLng5 = {lat: 46.074779, lng: 11.121749};
        var marker5 = new google.maps.Marker({
          position: myLatLng5,
          label: '6',
          map: map,
          title: 'Hello World!'
        });

        var contentString6 = '<div id="content" align="center"><img width="600" src="coder.jpg" alt="" style="margin-bottom: 15px;"><img width="200" src="gipsy.png" alt="" style="margin-bottom: 5px;"><div class="a" style="font-weight: bold;">Gipsyway: Software Developer</div><div class="b">30€ / h</div><div style="margin-top: 15px; font-size: 120%;">Partners with Web Interface Designer to develop web applications or change existing applications. Partners with Web Administrators to test and move developed or changed applications into production.<br /><br />Essential Functions:<br />Develops logic, codes, tests, and debugs web pages. Performs software coding, testing, debugging, documentation and installation tasks for on-line processes.</div><br /></div>';
        var infowindow6 = new google.maps.InfoWindow({
          content: contentString6
        });
        var myLatLng6 = {lat: 46.498295, lng: 11.354758};
        var marker6 = new google.maps.Marker({
          position: myLatLng6,
          label: '7',
          map: map,
          title: 'Hello World!'
        });
        marker6.addListener('click', function() {
          infowindow6.open(map, marker6);
        });
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: 'florenz, it',
          destination: 'bozen, it',
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcH44yVPfsmUpYR4sKbajq5SDySOUyx2Y&callback=initMap">
    </script>
  </body>
</html>
