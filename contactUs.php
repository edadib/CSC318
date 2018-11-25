<?php 

include('header.php');
include("connection.php");



?>

  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Contact Us</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html,body
{
	background-color: #C0C0C0;
	background-image: url("images/");
	background-repeat: no-repeat;
	background-size: 100% 100%;
	
}


        
      }
    </style>
  </head>
  
<center><b><h1>Locate Us Here !</h1></b></center>
	<center>
        <div class="wrapper">
            <div id="map" style="width:1000px;height:600px;background:white"></div>
            <script>
            function myMap() {
            var mapOptions = {
                center: new google.maps.LatLng(6.4297, 100.2698),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
    
        </div>
	</center>    

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="form_container">
                    <h2>Got any question ?</h2> 
                    
                    <p> Please send your message below. We will get back to you at the earliest! </p>
                    <form role="form" method="post" action='submitEmail.php' action='POST' id="reused_form">
                        
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="message"> Message:</label>
                                <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                              
                             <div class="col">
                                
                                
                                <button type="submit" name="Send" class="btn btn-lg btn-default pull-right" >Send &rarr;</button>
                            </div>
                            </div>
                        </div>
                        
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your message successfully! Thank You!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
        
        
       

<?php
include('footer.php');
?>