

<!-- contact map with click box
      	<div class="middlecontent-p0">
		<div class="container bg-white text-center ">
			<div class="col-xs-12 col-sm-12 ">
            <div class="row padbig">
                <div id="map" class="map ">
                </div>
            </div>
			</div>
		</div>
		</div>
<!-- map end--> 



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
				<div class="row footersec wow fadeInDown">
					<div class="col-lg-4 col-sm-4 footer-sec">
						<h5>Get In Touch</h5>
						<div class="form-footer">
							<div class="alert alert-success" id="ContactSuccessMessage" style="display:none"></div>
							<div class="alert alert-danger" id="ContactErrorMessage" style="display:none"></div>
							<div id="formerrr" style="display:none"></div>
							<form id="getintouch" name="getintouch" method="post" action="#">
							
							<?php echo "<p class='text-danger'>$result</p>";?>
								<div class="form-group fform">
									<input name="gtname" type="text" id="gtname" placeholder="Name" class="form-control name" required/>
								</div>
								<div class="form-group fform">
									<input name="gtemail" type="email" id="gtemail" placeholder="Email Address" class="form-control" required/>
								</div>
								<div class="form-group fform">
									<input name="gtmobile" type="text" id="gtmobile" placeholder="Contact Number" class="form-control" required/>
								</div>
								<div class="form-group fform">
									<input name="gtcompany" type="text" id="gtcompany" placeholder="Company Name" class="form-control" required/>
								</div>
								<div class="form-group fform-textarea">
									<textarea name="gtdesc" id="gtdesc" placeholder="Description"></textarea>
								</div>
								<!-- Captcha code html -->
								<div class="form-group">
									<div class="g-recaptcha" data-sitekey="" id="RecaptchaField2"></div>
									<span id="recaptchaasd" class="help-block" style="display: none;">Please check that you are not a robot.</span> </div>
									<!-- Captcha code html -->
									<div class="fform">
										<button class="btn btn-success" name="getintouch" type="submit">Submit <i class="fa fa-angle-right fa-1x"></i></button>
										<?php echo "<p class='text-danger'>$err</p>";?>
									</div>
									<div class="clr"></div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4 footer-sec">
							<h5>Why Choose Us</h5>
							<ul class="bullet-gray">
							
							<!-- 	 <li ><a href="miscellaneous-pages?page_alias=<?php echo 'Corporate-writing'?>"><?php echo stripslashes($rs["page_title"]); ?>Corporate-writing</a></li> -->
                              
								
								 <li ><a href="miscellaneous-pages?page_alias=<?php echo 'Corporate-writing'?>">Corporate-writing</a></li>
								  <li ><a href="miscellaneous-pages?page_alias=<?php echo 'sectors' ?>">sectors</a></li>
								   <li ><a href="miscellaneous-pages?page_alias=<?php echo 'Countries'?>">Countries</a></li>
								    <li ><a href="miscellaneous-pages?page_alias=<?php echo 'Content-Management-Packages'?>">Content-Management-Packages</a></li>
									 <li ><a href="miscellaneous-pages?page_alias=<?php echo 'Career'?>">Career</a></li>
									  <li ><a href="miscellaneous-pages?page_alias=<?php echo 'Team'?>">Team</a></li>
									   <li ><a href="miscellaneous-pages?page_alias=<?php echo 'services'?>">services</a></li>
									    <li ><a href="miscellaneous-pages?page_alias=<?php echo 'Portfolio'?>">Portfolio</a></li>
										 <li ><a href="miscellaneous-pages?page_alias=<?php echo 'Testimonials'?>">Testimonials</a></li>
										  <li ><a href="miscellaneous-pages?page_alias=<?php echo 'Content-Marketing-Toolkit'?>">Content-Marketing-Toolkit</a></li>
								
							</ul>
							
							
						</div>
						<div class="col-lg-4 col-sm-4 footer-sec">
							<h5>Newsletter Subscribe</h5>
							<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
							<div class="form-footer-newsletter">
								<div class="alert alert-success" id="SubscribeSuccessMessage" style="display:none"></div>
								<div class="alert alert-danger" id="SubscribeErrorMessage" style="display:none"></div>
								<form   name="formsubscribe" method="post" action="#">
									<?php echo "<p class='text-danger'>$resultes</p>";?>
									<div class="form-group">
										<input name="esemail" id="esemail"  type="email" placeholder="Email Address" class="form-control" required>
										<button name="emailss" type="submit" value="submit"><i class="fa fa-envelope fa-1x"></i></button>
										
										
									</div>
									
								</form>
								
																	
							
							</div>
							
							
							<div class="row ">
									 <div class="col-lg-12 col-sm-12  ft-40 ft-gray a-gray"> 
										<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook-official "></a>
										<a href="https://twitter.com/" target="_blank" class="fa fa-twitter-square"></a>
										<a href="https://plus.google.com/" target="_blank" class="fa fa-google-plus-square"></a>
										<a href="#" target="_blank" class="fa fa-tumblr-square"></a>
										<a href="#" target="_blank" class="youtube"></a>
									</div>
									
									<div class="clr"></div>


								</div>
								
							
								<div class="">
											<div class="col-lg-12 col-sm-12 footer-sec">&copy; 2016 Writopedia. All Rights Reserved. </div>
											<div class="clr"></div>
										</div>
										
						</div>
						
						
						<div class="clr"></div>
					</div>
				</div>
			</div>
			
			<!--
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">&copy; 2016 Writopedia. All Rights Reserved. </div>
						<div class="clr"></div>
					</div>
				</div>
			</div>
			-->
			
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
<script type="text/javascript" src="js/function.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/modernizr.js"></script> 
<script type="text/javascript" src="js/slick.js"></script> 
<script type="text/javascript" src="js/stickyheader.js"></script> 
<script type="text/javascript" src="js/mega-dropdown.js"></script> 
<script type="text/javascript" src="js/backtotop.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/animation.js"></script> 
<script type="text/javascript" src="js/counter.js"></script> 
<script type="text/javascript" src="js/number-counter.js"></script> 
<script type="text/javascript" src="js/bootstrapValidator.js"></script> 
<script type="text/javascript" src="js/formValidation.js"></script> 


<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="js/revoluation/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/revoluation/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) -->	

<script type="text/javascript" src="js/revoluation/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revoluation/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revoluation/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revoluation/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revoluation/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revoluation/revoluationfunction.js"></script>
  

</body>
</html>


