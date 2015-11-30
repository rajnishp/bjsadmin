<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
  <title></title>

  <link href="lib/ionic/css/ionic.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

    <!-- IF using Sass (run gulp sass first), then uncomment below and remove the CSS includes above
    <link href="css/ionic.app.css" rel="stylesheet">
  -->

  <!-- ionic/angularjs js -->
  <script src="lib/ionic/js/ionic.bundle.js"></script>

  <!-- cordova script (this will be a 404 during development) -->
  <script src="cordova.js"></script>
  <script src="lib/ngCordova/dist/ng-cordova.js"></script>

  <!-- your app's js -->
  <script src="js/app.js"></script>
  <script src="js/controllers.js"></script>
  <script src="js/services.js"></script>
</head>
<body ng-app="starter">
    <!--
      The nav bar that will be updated as we navigate between views.
    -->
    <ion-nav-bar class="bar-positive">
    <ion-nav-back-button nav-direction="back">
  </ion-nav-back-button>
</ion-nav-bar>
    <!--
      The views will be rendered in the <ion-nav-view> directive below
      Templates are in the /templates folder (but you could also
      have templates inline in this html file if you'd like).
    -->
    
    

<script type="text/ng-template" id="finish.html">
<ion-view view-title="Request Sent">
 <ion-content>
 <div class="card">
  <center>
    <b>Thank You</b><br/> 
    <p>
    Your request has been submitted.<br/>
    BlueTeam will respond to you within 30 minutes.
    </p>




  </center>   
</div>

<div class="card">
  <center>
  <i> In case of any problem. Please contact us at<br/>
    <a href="tel:+91 9599075355"><span class="ion-android-call large"></span><b> +91 9599075355 </b> </a> <br />
    <a href="#" onclick="window.open('mailto:blueteam@collap.com','_system')" >info@blueteam.in</a><br />
    <a href="#" onclick="window.open('http://www.BlueTeam.in','_system')"> www.BlueTeam.in </a>
    </i>
  </center>   
</div>

</ion-content>
</ion-view>
</script>

<ion-nav-view></ion-nav-view>

</body>
</html>
