<style>
        .banner-form {
            display: none;
            /* Add your form styles here */
        }
    </style>


<footer class="main-footer">

<section class="contact-form-section" id="contacttt">
			<div class="auto-container">

				<div class="row clearfix">

					<!-- Title Column -->
					<div class="title-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="title text-white">Contact Now</div>
								<h6 class="text-white">Ask Us <br> Anything</h4>
							</div>
							<ul class="add-link">
								<li class="pp-1">1201 Shepherd Dr, Houston, TX 77007</li>
								<li class="pp-2"><a href="mailto:bnichols@bonicholslaw.com" class="text-white">
										bnichols@bonicholslaw.com</a></li>
								<li class="pp-3"><a href="tel:(713) 351-0681" class="text-white"> (713)
										351-0681</a></li>
							</ul>
						</div>
					</div>
					<!-- Form Column -->
					<div class="form-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">

							<!-- Default Form -->
							<div class="default-form style-two">

								<!-- Default Form -->
								<form method="post" action="#">
									<div class="row clearfix">

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="username" placeholder="Name" required>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="email" placeholder="Phone" required>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<input type="email" name="subject" placeholder="E-mail" required>
										</div>

										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<textarea name="message" placeholder="Your Message"></textarea>
										</div>

										<div class="form-group clearfix col-lg-12 col-md-12 col-sm-12">
											<div class="btn-three-outer"><button
													class="theme-btn btn-style-three" type="submit"
													name="submit-form"><span class="txt text-white">SEND
														MESSAGE</span></button></div>
										</div>

									</div>
								</form>

								<!--End Default Form -->
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-10 col-md-10 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/images/logo-light.png" alt="" /></a>
                                </div>
                                <div class="text">Navigate through your legal matters with an expert family 
                                attorney by your side in Houston, Texas.</div>
                                <div class="social-links">
                                    <span>Follow Us </span>
                                    <a href="https://www.facebook.com/bonicholslaw/" target="_blank" class="fa fa-facebook"></a>
                                    <a href="https://www.instagram.com/bonichols60/" class="fa fa-instagram" target="_blank"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h3>CLIENTS</h3>
                                <ul class="list-link">
                                  
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="blog">Blogs</a></li>
                                    <li><a href="testimonials">Testimonials</a></li>
                                    <li><a href="contact">Contact Us</a></li>
                                    <li><a href="javascript:;">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                         <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h3>OUR SERVICES</h3>
                                <ul class="list-link">
                                    <li><a href="child-support">Child Support</a></li>
                                    <li><a href="child-custody">Child Custody</a></li>
                                    <li><a href="divorce">Divorce</a></li>
                                    <li><a href="enforcement">Enforcement</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="copyright">Copyright Bo Nichols Law. All rights reserved. | Made With Love By <a href="https://hoisolutions.com" target="_blank" class="copy-link">HOI Solutions</a></div>
        </div>

    </div>
</footer>

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<script>
        document.addEventListener("DOMContentLoaded", function() {
            var clickButton = document.querySelector('.clickbutton');
            var formContainer = document.querySelector('.banner-form');
            var isOpen = false; // Track if the form is open or closed

            // Initially hide the form
            formContainer.style.display = 'none';

            // Add click event listener to the button
            clickButton.addEventListener('click', function() {
                if (!isOpen) {
                    // Show form and move button to the right of form
                    formContainer.style.display = 'block';
                    clickButton.style.right = '400px'; // Adjust based on form width
                    isOpen = true;
                } else {
                    // Hide form and move button back
                    formContainer.style.display = 'none';
                    clickButton.style.right = '0'; // Reset button position
                    isOpen = false;
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
    var clickButton = document.querySelector('.clickbutton');
    var formContainer = document.querySelector('.banner-form');
    var isOpen = false; // Variable to track if the form is open or closed

    // Initially hide the form
    formContainer.style.display = 'none';

    // Add a click event listener to the button
    clickButton.addEventListener('click', function() {
        if (!isOpen) {
            // Show the form and move the button to the right of the form
            formContainer.style.display = 'block';
            clickButton.style.right = '370px'; // Adjust this based on form width
            isOpen = true;
        } else {
            // Hide the form and move the button back to its original position
            formContainer.style.display = 'none';
            clickButton.style.right = '0'; // Reset the button position
            isOpen = false;
        }
    });
});
    </script>

<script>
    $(".clickbutton").click(function () {
        $(".floatbutton").toggleClass("active");
    }),
        $("#vbtn").on("click", function () {
            "View Less" != $(this).html()
                ? $(this).html("View Less")
                : $(this).html("View More..");
        });
</script>


<div class="floatbutton hidden-mob">
    <div class="btns_wrap">
        <a href="mailto:bnichols@bonicholslaw.com" class="chat_wrap">
            <span class="icoo"><i class="fa fa-envelope"></i></span>
            <span>bnichols@bonicholslaw.com</span>
         
        </a>
        <a href="tel:(713) 351-0681" class="call_wrap">
            <span class="icoo"><i class="fa fa-phone"></i></span>
            <span>(713) 351-0681</span>
           
        </a>
        <!-- <a href="https://twitter.com" class="twitter_wrap">
            <span>Abcd</span>
            <span class="icoo"><i class="fa fa-twitter"></i></span>
        </a> -->
    </div>
    <div class="clickbutton">
        <div class="crossplus">GET A QUOTE</div>
    </div>
    <div class="banner-form">
        <h3>Chat With Us to <br>Avail 30% Discount</h3>
        <div class="banform">
            <div class="container">
                <div class="row">
                    <div class="ban-form">
                        <!--<form class="form-get-quote" id="ordernow-form" action="https://agilewebstudios.com/shopify/javascript;" method="post">-->
                        <form method="POST" action="backend/action/action">
                            <input type="hidden" name="type" value="sideForm">
                            <!-- <input type="hidden" name="cta" class="cta" value="">
                            <div class="alert alert-danger error" style="display: none;"></div> -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input id="username" name="name" minlength="2" type="text"
                                            placeholder="Enter your name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input id="cemail" type="email" name="email" placeholder="Enter email here"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input type="text" name="phone" id="phone-coun"
                                            class="phone-country masking contact phoneNum" placeholder="Phone*"
                                            required="">
                                        <span class="bg-danger col-lg-offset-3 contact_error "
                                            style="display: none;">Contact No Incorrect</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <textarea name="message" id="" rows="7"
                                            placeholder="Talk About Your Project"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <div class="g-recaptcha" data-callback="recaptchaCallback"
                                            data-sitekey="6Lc-OcQoAAAAAPmuTRhRpZDYbrS--2dfbmjFbRRV"></div>
                                    </div>
                                </div>

                                <input name="page_link" type="hidden" value="#0">

                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input name="submit" id="submit-btn-modal2" type="submit" >
                                         <!-- <button name="submit" class="btn btn-primary" id="submit-btn-modal2" type="submit">submit</button> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="../js/bootstrap.min.jsc;.AD>"></script> -->



 <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <img src="assets/images/Bestlawyer.jpg" alt="">
        </div>
        
        <!-- Modal footer -->
      
        
      </div>
    </div>
  </div>
  
</div>



