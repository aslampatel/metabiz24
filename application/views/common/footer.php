<?php 
 $settings = $this->Generalmodel->show_data_id('settings','','','get',''); 
//  print_r($settings); exit;
?>
<style>
    .footer .footer-brand img {
        height: 95px;
    }
</style>

 <!--footer section start-->
 <footer class="footer-wrap">
 	<div class="footer footer-top section section-md bg-primary text-white"> 
 		<div class="container">
 			<div class="row">
 				<div class="col-md-4 mb-4">
 					<a class="footer-brand mr-lg-5 d-flex" href="<?= base_url(); ?>">
 						 <img src="<?=base_url();?>uploads/<?=$settings[0]->logo; ?>" class="mr-3" alt="Footer logo"> 
 					</a>
 					<p class="my-4">The platform is designed to support global expansion.</p>
 					<div class="btn-wrapper mt-4">
						<a href="<?= $settings[0]->twitter_link; ?>"
						class="btn btn-icon-only btn-pill btn-twitter mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip"
						data-placement="top" title="">
						<span aria-hidden="true" class="fab fa-twitter"></span>
						</a>
						<a href="<?= $settings[0]->facebook_link; ?>"
						class="btn btn-icon-only btn-pill btn-facebook mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip"
						data-placement="top" title="">
						<span aria-hidden="true" class="fab fa-facebook-f"></span>
						</a>
						<a href="<?= $settings[0]->instagram_link; ?>"
						class="btn btn-icon-only btn-pill btn-instagram mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip"
						data-placement="top" title="">
						<span aria-hidden="true" class="fab fa-instagram"></span>
						</a>
						<a href="<?=$settings[0]->linkedin_link; ?>" class="btn btn-icon-only btn-pill btn-linkedin icon icon-xs icon-shape btn-twitter" type="button" data-toggle="tooltip"
						data-placement="top" title="" data-original-title="2k Project">
						<span aria-hidden="true" class="fab fa-linkedin"></span>
						</a>
						<a href="https://wa.me/<?= $settings[0]->whatsapp_number; ?>" target="_blank"
						class="btn btn-icon-only btn-pill btn-linkedin icon icon-xs icon-shape bg-success text-light">
						<i style="color: #fff;" class="fab fa-whatsapp"></i>
						</a>
					</div>
 				</div>
 				<div class="col-md-3">
 					<u><h5 class="mb-4">Quick Links</h5></u>
 					<ul class="links-vertical">
 						<li><a target="_blank" href="">Home</a></li>
 						<li><a target="_blank" href="#">About Us</a></li>
 						<li><a target="_blank" href="#">Contact Us</a></li>
 						
 					</ul>
 				</div>
 				<!-- <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
 					<h5 class="mb-4">Resources</h5>
 					<ul class="links-vertical">
 						<li><a target="_blank" href="#">Help</a></li>
 						<li><a target="_blank" href="#">Events</a></li>
 						<li><a target="_blank" href="#">Live sessions</a></li>
 						<li><a target="_blank" href="#">Open sources</a></li>
 					</ul>
 				</div> -->
 				<div class="col-md-5">
 					<u><h5 class="mb-4">Address</h5></u>
 					<ul class="links-vertical">
 						<li><a target="_blank" href="#"><?=$settings[0]->address; ?></a></li>
 						<li><a target="_blank" href="#"><?=$settings[0]->mobile; ?> || <?=$settings[0]->phone; ?></a></li>
 						<li><a target="_blank" href="mailto:<?=$settings[0]->email; ?>"><?=$settings[0]->email; ?></a></li>
 						<!-- <li><a target="_blank" href="#">Contact Support</a></li> -->
 					</ul>
 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="footer py-3 bg-primary text-white border-top border-variant-default">
 		<div class="container">
 			<div class="row">
 				<div class="col p-3">
 					<div class="d-flex text-center justify-content-center align-items-center">
 						<p class="copyright pb-0 mb-0">Copyrights © 2023. All
 							rights reserved.Designed by
 							<a href="https://www.codegalaxy.co.in/" target="_blank">Code Galaxy ITES</a>
 						</p>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </footer>
 <!--footer section end-->
 <!--scroll bottom to top button start-->
 <button class="scroll-top scroll-to-target" data-target="html">
 	<span class="fas fa-hand-point-up"></span>
 </button>
 <!--scroll bottom to top button end-->
 <!--build:js-->
 <script src="<?= base_url(); ?>assets/js/vendors/jquery-3.5.1.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/vendors/popper.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/vendors/bootstrap.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/vendors/jquery.magnific-popup.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/vendors/jquery.easing.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/vendors/mixitup.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/vendors/headroom.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/vendors/smooth-scroll.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/vendors/wow.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/vendors/owl.carousel.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/vendors/jquery.waypoints.min.js"></script>
 <!--<script src="<?= base_url(); ?>assets/js/vendors/countUp.min.js"></script>-->
 <script src="<?= base_url(); ?>assets/js/vendors/jquery.countdown.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/vendors/validator.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/app.js"></script>
 <!--endbuild-->
 </body>


 <!-- Mirrored from corporx.themetags.com/<?= base_url(); ?> by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Dec 2023 04:37:06 GMT -->

 </html>