<?php include 'header.php'; ?>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/main-slider/page-title-11.jpg);">
        <div class="auto-container">
            <div class="text-center">
                <h1>Contact Us</h1>
            </div>
        </div>
    </section> 
   
    <!-- Contact Form section -->
    <section class="contact-form-section light-bg mx-60 border-shape-top border-shape-bottom">
        <div class="auto-container">        
            <div class="sec-title">
                <div class="sub-title">get in touch</div>
                <h2>Drop a message for any querry</h2>
                <div class="text">Our objective at Bluebell is to bring together our visitor's societies and spirits with our own, <br> communicating enthusiasm and liberality in the food we share. </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <!--Contact Form-->
                    <div class="contact-form style-two">
                        <form method="post" action="https://html.tonatheme.com/2023/bluebell/inc/sendemail.php" id="contact-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="form_name" value="" placeholder="Your Name" required>
                                </div>                      
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" value="" placeholder="Your Email" required>
                                </div>                        
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="form_phone" value="" placeholder="Phone Number" required>
                                </div>                        
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="form_subject" value="" placeholder="Subject" required>
                                </div>                        
                                <div class="form-group col-md-12">
                                    <textarea name="form_message" class="form-control" placeholder="Write a massage"></textarea>
                                </div>                        
                                <div class="form-group col-md-12">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Send a Message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 icon_box">
                    <div class="inner-box">
                        <h4>Riverside</h4>
                        <div class="border-shap"></div>
                        <div class="text-two">Riverside Resort<br>POC: Mr. Alok Kumar Maharana</div>
                        <div class="text-three"><a href="mailto:bhitarkanika@sandpebblestours.com">bhitarkanika@sandpebblestours.com</a></div>
                    </div>
                    <div class="icon-box">
                        <h4>Reception Phone No.</h4>
                        <div class="icon"><h5><i class="fas fa-phone"></i><a href="tel:+919937027475">+91 99370 27475</a><br><a href="tel:18003095050">1800 309 5050</a></h5></div>
                        <div class="text-four">Check in: 01.00 PM <br>Check out: 10.00 PM</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Map Section -->
    <section class="map-section-two mx-60">
        <div class="auto-container">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd" width="600" height="500" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>


    <?php include 'footer.php'; ?>