<?php
include('header.php');
?>
		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/contact-us/contact-banner.jpg" alt="contact-us-main">
                </div>
                <div class="breadcrumbs-text white-color padding">
                    <h1 class="page-title">Contact Us</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.php">Home</a>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Contact Section Start -->
    		<div class="contact-page-section orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
            		<div class="row align-items-center pb-50">
                        <div class="col-lg-4 md-mb-50">
                            <div class="contact-address-section style2">                            
            					<div class="contact-info mb-15 md-mb-30">
            						<div class="icon-part">
            							<i class="fa fa-home"></i>
            						</div>
            						<div class="content-part">
    	        						<h5 class="info-subtitle">Address</h5>
    	        						<h4 class="info-title">Thakur Complex, Near Center Store, Joginder Nagar,<br>Mandi, HP </h4>
    	        					</div>
            					</div>
            					<div class="contact-info mb-15 md-mb-30">
            						<div class="icon-part">
            							<i class="fa fa-envelope-open-o"></i>
            						</div>
            						<div class="content-part">
    	        						<h5 class="info-subtitle">Email Address</h5>
    	        						<h4 class="info-title"><a href="mailto:info@rstheme.com">support@<br/>inimistacademy.com</a></h4>
    	        					</div>
            					</div>
            					<div class="contact-info">
            						<div class="icon-part">
            							<i class="fa fa-headphones"></i>
            						</div>
            						<div class="content-part">
    	        						<h5 class="info-subtitle">Phone Number</h5>
    	        						<h4 class="info-title"><a href="#">01908-292151</a></h4>
    	        					</div>
            					</div>
                			</div>
                        </div>
                        <div class="col-lg-8">
                            <!-- Map Section Start --> 
                            <div class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d211.49953419530326!2d76.7898258!3d31.9882175!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3904c05040eada2b%3A0x74829e73c8970f6a!2sRitesh%20Bhardwaj%20Shopping%20Complex%20And%20Shops!5e0!3m2!1sen!2sin!4v1616392471763!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <!-- Map Section End -->
                        </div>
            		</div>

            		<div class="row align-items-end contact-bg1">
            			<div class="col-lg-4 md-pt-50 lg-pr-0">
            				<div class="contact-image">
            					<img src="assets/images/contact-us/contact-2.png" alt="Contact Images">
            				</div>
            			</div>
            			<div class="col-lg-8 lg-pl-0">
			        		<div class="rs-quick-contact new-style">
                                <div class="inner-part mb-35">
                                    <h2 class="title mb-15">Get In Touch</h2>
                                    <p>Have any query? Feel free to contact us </p>
                                </div>
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="thankyou.php">
                                    <div class="row">
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="" value="">
                                        </div> 
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="" value="">
                                        </div>   
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="" value="">
                                        </div>   
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="" value="">
                                        </div>
                                     
                                        <div class="col-lg-12 mb-40">
                                            <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input class="btn-send" type="submit" value="Submit Now">
                                    </div>       
                                </form>
                            </div> 
            			</div>
            		</div>
            	</div>
            </div>
            <!-- Contact Section End -->
<?php
include('footer.php');
?>