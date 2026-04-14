  <?php include('./includes/header.php'); ?>

  <div class="page-banner-wrap text-center bg-cover" style="background-image: url('/assets/img/about/contact.png')">
      <div class="container">
          <div class="page-heading text-white">
              <h1>contact us</h1>
          </div>
      </div>
  </div>

  <section class="contact-page-wrap section-padding">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-6 col-12 d-flex" itemscope itemtype="https://schema.org/ContactPoint">
                  <div class="single-contact-card card1 h-100 w-100">
                      <div class="top-part">
                          <div class="icon">
                              <i class="fal fa-envelope"></i>
                          </div>
                          <div class="title">
                              <h4>Email Address</h4>
                              <span>Sent mail asap anytime</span>
                          </div>
                      </div>
                      <div class="bottom-part">
                          <div class="info">
                              <p itemprop="email">info@turantgo.com</p>
                              <p itemprop="email">Deepak@turantgo.com</p>
                              <p itemprop="email">Praveen@turantgo.com</p>
                              <p itemprop="email">Kuldeep@turantgo.com</p>
                          </div>
                          <!-- <div class="icon">
                              <i class="fal fa-arrow-right"></i>
                          </div> -->
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12 d-flex" itemscope itemtype="https://schema.org/ContactPoint">
                  <div class="single-contact-card card2 h-100 w-100">
                      <div class="top-part">
                          <div class="icon">
                              <i class="fal fa-phone fa-flip-horizontal"></i>
                          </div>
                          <div class="title">
                              <h4>Phone Number</h4>
                              <span>call us asap anytime</span>
                          </div>
                      </div>
                      <div class="bottom-part">
                          <div class="info">
                              <p>Office: <span itemprop="telephone">+91 7082799059</span></p>
                              <p>Kuldeep: <span itemprop="telephone">+91 8586014767</span></p>
                              <p>Praveen: <span itemprop="telephone">+91 7419114966</span></p>
                              <p>Deepak: <span itemprop="telephone">+91 8866021336</span></p>
                          </div>
                          <!-- <div class="icon">
                              <i class="fal fa-arrow-right"></i>
                          </div> -->
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12 d-flex" itemscope itemtype="https://schema.org/LocalBusiness">
                  <meta itemprop="name" content="TurantGo Multimodal Solutions Pvt Ltd">
                  <div class="single-contact-card card3 h-100 w-100">
                      <div class="top-part">
                          <div class="icon">
                              <i class="fal fa-map-marker-alt"></i>
                          </div>
                          <div class="title">
                              <h4>Office Address</h4>
                              <span>Visit our headquarters</span>
                          </div>
                      </div>
                      <div class="bottom-part">
                          <div class="info" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                              <p itemprop="streetAddress">House No. 1642, Ward No. 21, Sheetal Nagar, Bagh Wali Gali, Jhajjar Road,</p>
                              <p><span itemprop="addressLocality">Rohtak</span>, <span itemprop="addressRegion">Haryana</span>, <span itemprop="postalCode">124001</span></p>
                              <meta itemprop="addressCountry" content="IN">
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row pt-5">
              <div class="block-contents mb-30 pt-60">
                  <div class="section-title text-center">
                      <h5 class="text-center">contact</h5>
                      <span>fil the form</span>
                      <h2>get <span>in touch</span></h2>
                  </div>
              </div>

              <div class="col-12 col-lg-12">
                  <div class="request-quote-form-wrapper mt-5 mt-xl-0 ms-xl-3">
                      <h4>Send Us a Message</h4>

                      <div class="request-quote-form">
                          <form action="/contact_handler.php" method="POST" id="contact-form">

                              <!-- Honeypot fields -->
                              <input type="text" name="website" style="display:none;">
                              <input type="text" name="email_confirm" style="display:none;">
                              <input type="hidden" name="form_time" value="<?php echo time(); ?>">

                              <!-- reCAPTCHA v3 Token -->
                              <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                              <div class="row">

                                  <div class="col-sm-6 col-12">
                                      <input type="text" name="name" placeholder="Full Name" required>
                                  </div>

                                  <div class="col-sm-6 col-12">
                                      <input type="email" name="email" placeholder="Email" required>
                                  </div>

                                  <div class="col-sm-6 col-12">
                                      <input type="tel" name="phone" placeholder="Phone Number" pattern="^[\+]?[0-9\s\-\(\)]{10,}$" title="Please enter at least 10 digits" required>
                                  </div>

                                  <div class="col-sm-6 col-12">
                                      <select name="service" class="wide" required>
                                          <option value="">Select Service</option>
                                          <option>Multimodal Logistics</option>
                                          <option>Warehousing</option>
                                          <option>3PL & 4PL Management</option>
                                          <option>First Mile Delivery</option>
                                          <option>Last Mile Delivery</option>
                                      </select>
                                  </div>

                                  <div class="col-sm-12 col-12">
                                      <textarea name="message" placeholder="Your Message..." rows="5"
                                          style="border:1px solid #666666;width:100%;padding:15px;" required></textarea>
                                  </div>

                                  <div class="col-sm-12">
                                      <input type="submit" id="submit-btn" class="theme-btn" value="Send Message">
                                  </div>

                                  <div class="text-center mt-2">
                                      <small style="font-size:11px;">
                                          This site is protected by reCAPTCHA and the Google
                                          <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a>
                                          &
                                          <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
                                      </small>
                                  </div>
                              </div>
                          </form>


                      </div>

                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="our-branch-wrapper section-padding pt-7">
      <div class="container pb-5">

          <div class="row">
              <div class="col-lg-4 col-md-6 col-12 offset-lg-2">
                  <div class="office-google-map-wrapper wow fadeInUp" style="height: 300px;">

                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3493.713895335!2d76.57710408650561!3d28.87712680985667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d844dc1c999af%3A0xbd7662129ed1bba1!2s1642%2C%20ward%2C%205056%2F21%2C%20Sheetal%20Nagar%2C%20Hari%20Singh%20Colony%2C%20Rohtak%2C%20Haryana%20124001!5e0!3m2!1sen!2sin!4v1770289825447!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
              </div>


          </div>
      </div>

  </section>

  <?php include('./includes/footer.php'); ?>
