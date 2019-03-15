<?php include ('header.php')?>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url('images/about.jpg')">
    	<div class="auto-container">
        	<h1>Contact</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<!--Sec Title-->
        	<div class="sec-title">
            	<h2>Drop us messge for any query</h2>
            </div>
        	<div class="row clearfix">
            	
                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	
                        <!--Contact Form-->
                        <div class="default-form contact-form">
                            <form method="post" action="error-page-message=Failed.html" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="firstname" value="" placeholder="Your name" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="email" value="" placeholder="Your email address" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Phone number" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="subject" value="" placeholder="Subject" required>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Type your massage here..."></textarea>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one">Submit now</button>
                                    </div>                                        
                                </div>
                            </form>
                        </div>
                        <!--End Contact Form-->
                        
                    </div>
                </div>
                
                <!--Map Column-->
                <div class="map-column col-md-4 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<!--Map Canvas-->
                        <div class="map-canvas"
                            data-zoom="12"
                            data-lat="6.461984"
                            data-lng="3.316441"
                            data-type="roadmap"
                            data-hue="#ffc400"
                            data-title="Asahi Brands"
                            data-icon-path="images/icons/map-marker.png"
                            data-content="AFPRINT COMPOUND 122/132 APAPA OSHODI EXPRESSWAY<br><a href='mailto:info@asahibrands.com'>info@asahibrands.com</a>">
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!--End Contact Section-->
    
    <!--Main Footer-->
    <?php include ('footer-2.php')?>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>
</html>