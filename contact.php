

  <!--==========================
    Header
  ============================-->
  <?php
    $title = "Contact Us || My Develop Center";
  	include('header.php');
  ?>
  

  <!--==========================
    Intro Section
  ============================-->
  <section id="featured-services" style="height: 300px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap">
              <h1 class="text-white text-center">Contact Us</h1>  
            </div>
            
          </div>
        </div>        
      </div>
    </section><!-- #featured-services --><!-- #intro -->

  <main id="main">

    

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row mt-30">
            <div class="col-md-6">
                  <div class="form" style="margin-top: 26px;">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="mailsend.php" method="post" role="form" class="contactForm">
                      
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validation"></div>
                        </div>

                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" name="mob" id="mob" placeholder="Phone" data-rule-minlength="10" data-msg="Please enter a valid number" />
                          <div class="validation"></div>
                        </div>

                        <div class="form-group col-md-12">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                          <div class="validation"></div>
                        </div>

                        <div class="form-group col-md-12">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                          <div class="validation"></div>
                        </div>
                        
                        <div class="form-group col-md-12">
                          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                          <div class="validation"></div>
                        </div>
                        
                        <div class="text-center col-md-12" style="margin-top: 24px;"><button type="submit" name="submit">Send Message</button></div>
                      </div>

                    </form>
                  </div>
            </div>

            <div class="col-md-6">
                <div class="row contact-info">
                   <div class="col-md-12">
                    <div class="contact-address">
                      <i class="ion-ios-location-outline"></i>
                      <h3>Address</h3>
                      <address style="color: #24282e;">103,Azad Road,<br>Opp Mathrubhumi,<br> Kaloor, Kochi, Kerala 682017</address>
                    </div>
                  </div>

                  <!-- <div class="col-md-12">
                    <div class="contact-phone">
                      <i class="ion-ios-telephone-outline"></i>
                      <h3>Phone Number</h3>
                      <p><a href="tel:+x-xxxx-xxxxx">+x xxxx xxxx xx</a></p>
                    </div>
                  </div> -->

                  <div class="col-md-12">
                    <div class="contact-email">
                      <i class="ion-ios-email-outline"></i>
                      <h3>Email</h3>
                      <p><a href="#">info@mydevelopcenter.com</a></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
        <!--==========================
            Contact Section ends
        ============================-->
      </div>
    </section>

  </main>

  <!--==========================
    Footer
  ============================-->

  <?php
    include("footer.php");
  ?>
  
