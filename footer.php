    <!-- WhatsApp Icon -->
    <a href="https://wa.me/13322333957" class="whatsapp-icon" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
    
<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
     <div class="row pt-5">
          <div class="col-lg-7 col-md-6">
               <div class="row">
                    <div class="col-md-6 mb-5">
                         <h3 class="text-primary mb-4">Get In Touch</h3>
                         <p>
                              <i class="fa fa-map-marker-alt mr-2"></i>1234 Elm Street
                              Suite 567
                              Cityville, CA 12345
                              United States
                         </p>
                         <p>
                              <i class="fa fa-phone-alt mr-2"></i> +13322333957
                         </p>
                         <p>
                              <i class="fa fa-envelope mr-2"></i>contact@livonxpresslogistices.com
                         </p>
                         <div class="d-flex justify-content-start mt-4">
                              <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                              <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-instagram"></i></a>
                              <a class="btn btn-outline-light btn-social" href="https://wa.me/13322333957"><i class="fab fa-whatsapp"></i></a>
                         </div>
                    </div>
                    <div class="col-md-6 mb-5">
                         <h3 class="text-primary mb-4">Quick Links</h3>
                         <div class="d-flex flex-column justify-content-start">
                              <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                              <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About
                                   Us</a>
                              <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our
                                   Services</a>
                              <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                              <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-lg-5 col-md-6 mb-5">
               <h3 class="text-primary mb-4">Newsletter</h3>
               <p>
                    We hope this newsletter finds you well. As your trusted partner in logistics, we're excited to keep you updated on the latest developments, insights, and solutions that can elevate your shipping and transportation experience.
                    Read on to discover what's new at Fast Express Logistics:
               </p>
               <div class="w-100">
                    <div class="input-group">
                         <input type="text" class="form-control border-light" style="padding: 30px" placeholder="Your Email Address" />
                         <div class="input-group-append">
                              <button class="btn btn-primary px-4">
                                   Sign Up
                              </button>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3e3e4e !important">
     <div class="row">
          <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
               <p class="m-0 text-white">
                    &copy; <a href="#">Fast Express Delivery</a>. All Rights
                    Reserved.
               </p>
          </div>
          <div class="col-lg-6 text-center text-md-right">
               <ul class="nav d-inline-flex">
                    <li class="nav-item">
                         <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
               </ul>
          </div>
     </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<script>
     <?php
     if (isset($success) && isset($msg)) {
          if ($success && !empty($msg)) {
     ?>
               swal({
                    title: "Oops!",
                    text: "<?php echo $msg; ?>",
                    type: "error",
                    confirmButtonText: "Cool"
               });
          <?php
          } elseif (!$success && !empty($msg)) { ?>
               swal({
                    title: "Oops!",
                    text: "<?php echo $msg; ?>",
                    type: "error",
                    confirmButtonText: "Cool"
               });
     <?php
          }
     }
     ?>
</script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<script type="text/javascript">
     function googleTranslateElementInit() {
          new google.translate.TranslateElement({
               pageLanguage: 'en'
          }, 'google_translate_element');
     }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>

</html>
