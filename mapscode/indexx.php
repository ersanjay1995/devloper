   <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
		
		<title> - sanjay makwana-</title>
        <link rel="icon" href="sanjay-fevicon.ico" type="image/x-icon" />
        
		
        <meta name="description" content="sanjay  " />
        <meta name="keywords" content="sanjay -Creative Educational  Personal Writing -Business Writing " />
		<meta name="author" content="">
		<link href='https://fonts.googleapis.com/css?family=Arimo:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
        <script src="js/jquery.min.js"></script>
		
		




		<link href="css/master.css" type="text/css" rel="stylesheet">
			<link href="css/theme.css" type="text/css" rel="stylesheet">
		<link href="css/bootstrap.css.css" type="text/css" rel="stylesheet">
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    </head>
	
	
<div class="middlecontent" >
  <div class="container bg-white">
    <div class="row">
      <div class="col-md-10 ">
        <div class="textcontent wow fadeInDown">

			<div class="8u">
				<section class="left-content">
					
				</section>
			
			</div>
		</div>
	  </div>
	
	
	




   
		
<?php
//include("services-box.php");
include("map.php");

?>


<!--  address-->

  <div class="container">
    <div class="row">

	</div>
	 <div class="clearfix"></div>
	</div>
	
	
<!--  address -->

	
<!--footer-->
<div class="footer">
	<div class="">
		<div class="container footer-black-bgww">
				
			</div>
			
			
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">&copy; 2016 . All Rights Reserved. </div>
						<div class="clr"></div>
					</div>
				</div>
			</div>
			
			
		</div>
	<div class="backtotop"><a href="#0" class="cd-top">Top</a></div>
	</div>
</div>



<script src="http://maps.google.com/maps/api/js?key=AIzaSyAlvgQhiekpGHJIkzA_XQ0mz4d5ibkaGlQ&sensor=false"></script>

<script type="text/javascript">
    var latitudes = [23.00005, 13.0114979, 28.6445105, 38.84753];
    var longitudes = [72.4994694, 77.5543937, 77.1907606, -77.06577290000001];
	

    function init_map(index) {
        var myLocation = new google.maps.LatLng(latitudes[index], longitudes[index]);
        var mapOptions = {
            center: myLocation,
            zoom: 20
        };
        var marker = new google.maps.Marker({
            position: myLocation,
            title: "Property Location"
        });
        var map = new google.maps.Map(document.getElementById("map"),
            mapOptions);
        marker.setMap(map);
    }

    init_map(0);
</script>
 
<script type="text/javascript" src="js/jquery-1.11.2.js"></script> 






  

</body>
</html>


