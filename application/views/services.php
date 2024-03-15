
		<div class="pagetop">
			<div class="container">
				<h1>Services</h1>
				<ul>
					<li><a title="" href="<?=base_url();?>">Home</a></li>
					<!--<li><a title="" href="#">Packages</a></li>-->
					<li>Services</li>
				</ul>		
			</div>
		</div><!-- Page Top -->



		<section>
			<div class="block gray">
				<div class="container">
					<div class="row">
						<div class="col-md-12 column">
							<div class="rooms-list-view">
							    <?php foreach($service as $s){?>
								<div class="special-deal">
									<div class="row">
									    
										<div class="col-md-6 column">
											<div class="deal-details">
												
												<h4><a title="" href="<?= base_url(); ?>service-detail"><?=$s->service_title;?></a></h4>
												<div class="features-price">
													<div class="row">
														<div class="col-md-8 column">
															<ul>
																<li><?= strip_tags($s->details); ?></li>
																<!--<li>Full Breakfast daily in Star</li>-->
																<!--<li>Return transfers troughout</li>-->
															</ul>
														</div>
														<div class="col-md-4 column">
															<div class="start-from">
																<span>Start Form</span>
																<strong><?=$s->price;?></strong>
																<!--<i>Per Person</i>-->
																<a class="book-now" href="<?= base_url(); ?>service-detail/<?=$s->service_slug; ?>" title="">Book Now</a>
															</div>
														</div>
													</div>
												</div><!-- Features & Price -->
											</div><!-- Deal Details -->
										</div>
										
										<div class="col-md-6 column">
											<div class="deal-gallery">
												<ul class="nav nav-tabs flex-lg-column">
													<li class="active">
														<a title="" href="#deal1" data-toggle="tab">
															<img src="<?= base_url(); ?>uploads/services/<?=$s->image;?>" alt="" />
														</a>
													</li>
													<!--<li>-->
													<!--	<a title="" href="#deal2" data-toggle="tab">-->
													<!--		<img src="<?= base_url(); ?>assets/images/2-hotel-thumb.jpg" alt="" />-->
													<!--	</a>-->
													<!--</li>-->
													<!--<li>-->
													<!--	<a title="" href="#deal3" data-toggle="tab">-->
													<!--		<img src="<?= base_url(); ?>assets/images/3-hotel-thumb.jpg" alt="" />-->
													<!--	</a>-->
													<!--</li>-->
												</ul>
												<div class="tab-content">
													<div class="tab-pane fade in active show" id="deal1">
														<img src="<?= base_url(); ?>uploads/services/<?=$s->image;?>" alt="" />
													</div>
													<div class="tab-pane fade" id="deal2">
														<img src="<?= base_url(); ?>assets/images/2-hotel.jpg" alt="" />
													</div>
													<div class="tab-pane fade" id="deal3">
														<img src="<?= base_url(); ?>assets/images/3-hotel.jpg" alt="" />
													</div>
												</div>
											</div><!-- rooms-tabs -->
										</div>
									</div>
								</div><!-- Special Deals -->
								<?php } ?>

								<!--<div class="special-deal">-->
								<!--	<div class="row">-->
								<!--		<div class="col-md-6 column">-->
								<!--			<div class="deal-details">-->
								<!--				<span>Complimentry Services & Amenities</span>-->
								<!--				<h4><a title="" href="<?= base_url(); ?>service-detail">Super Star Luxury Hotle</a></h4>-->
								<!--				<div class="features-price">-->
								<!--					<div class="row">-->
								<!--						<div class="col-md-8 column">-->
								<!--							<ul>-->
								<!--								<li>Accommodation in an Overwater Villa in Star</li>-->
								<!--								<li>Full Breakfast daily in Star</li>-->
								<!--								<li>Return transfers troughout</li>-->
								<!--							</ul>-->
								<!--						</div>-->
								<!--						<div class="col-md-4 column">-->
								<!--							<div class="start-from">-->
								<!--								<span>Start Form</span>-->
								<!--								<strong>$559</strong>-->
								<!--								<i>Per Person</i>-->
								<!--								<a class="book-now" href="<?= base_url(); ?>service-detail" title="">Book Now</a>-->
								<!--							</div>-->
								<!--						</div>-->
								<!--					</div>-->
								<!--				</div><!-- Features & Price -->
								<!--			</div><!-- Deal Details -->
								<!--		</div>-->
								<!--		<div class="col-md-6 column">-->
								<!--			<div class="deal-gallery">-->
								<!--				<ul class="nav nav-tabs flex-lg-column">-->
								<!--					<li class="active">-->
								<!--						<a title="" href="#deal4" data-toggle="tab">-->
								<!--							<img src="<?= base_url(); ?>assets/images/tour2-thumb-1.jpg" alt="" />-->
								<!--						</a>-->
								<!--					</li>-->
								<!--					<li>-->
								<!--						<a title="" href="#deal5" data-toggle="tab">-->
								<!--							<img src="<?= base_url(); ?>assets/images/tour2-thumb-2.jpg" alt="" />-->
								<!--						</a>-->
								<!--					</li>-->
								<!--					<li>-->
								<!--						<a title="" href="#deal6" data-toggle="tab">-->
								<!--							<img src="<?= base_url(); ?>assets/images/tour2-thumb-3.jpg" alt="" />-->
								<!--						</a>-->
								<!--					</li>-->
								<!--				</ul>-->
								<!--				<div class="tab-content">-->
								<!--					<div class="tab-pane fade in active show" id="deal4">-->
								<!--						<img src="<?= base_url(); ?>assets/images/tour2-big-1.jpg" alt="" />-->
								<!--					</div>-->
								<!--					<div class="tab-pane fade" id="deal5">-->
								<!--						<img src="<?= base_url(); ?>assets/images/tour2-big-2.jpg" alt="" />-->
								<!--					</div>-->
								<!--					<div class="tab-pane fade" id="deal6">-->
								<!--						<img src="<?= base_url(); ?>assets/images/tour2-big-3.jpg" alt="" />-->
								<!--					</div>-->
								<!--				</div>-->
								<!--			</div><!-- rooms-tabs -->
								<!--		</div>-->
								<!--	</div>-->
								<!--</div><!-- Special Deals -->

								<!--<div class="special-deal">-->
								<!--	<div class="row">-->
								<!--		<div class="col-md-6 column">-->
								<!--			<div class="deal-details">-->
								<!--				<span>Complimentry Services & Amenities</span>-->
								<!--				<h4><a title="" href="<?= base_url(); ?>service-detail">Super Star Luxury Hotle</a></h4>-->
								<!--				<div class="features-price">-->
								<!--					<div class="row">-->
								<!--						<div class="col-md-8 column">-->
								<!--							<ul>-->
								<!--								<li>Accommodation in an Overwater Villa in Star</li>-->
								<!--								<li>Full Breakfast daily in Star</li>-->
								<!--								<li>Return transfers troughout</li>-->
								<!--							</ul>-->
								<!--						</div>-->
								<!--						<div class="col-md-4 column">
								<!--							<div class="start-from">-->
								<!--								<span>Start Form</span>-->
								<!--								<strong>$559</strong>-->
								<!--								<i>Per Person</i>-->
								<!--								<a class="book-now" href="<?= base_url(); ?>service-detail" title="">Book Now</a>-->
								<!--							</div>-->
								<!--						</div>-->
								<!--					</div>-->
								<!--				</div><!-- Features & Price -->
								<!--			</div><!-- Deal Details -->
								<!--		</div>-->
								<!--		<div class="col-md-6 column">-->
								<!--			<div class="deal-gallery">-->
								<!--				<ul class="nav nav-tabs flex-lg-column">-->
								<!--					<li class="active">-->
								<!--						<a title="" href="#deal7" data-toggle="tab">-->
								<!--							<img src="<?= base_url(); ?>assets/images/tour3-thumb-1.jpg" alt="" />-->
								<!--						</a>-->
								<!--					</li>-->
								<!--					<li>-->
								<!--						<a title="" href="#deal8" data-toggle="tab">-->
								<!--							<img src="<?= base_url(); ?>assets/images/tour3-thumb-2.jpg" alt="" />-->
								<!--						</a>-->
								<!--					</li>-->
								<!--					<li>-->
								<!--						<a title="" href="#deal9" data-toggle="tab">-->
								<!--							<img src="<?= base_url(); ?>assets/images/tour3-thumb-3.jpg" alt="" />-->
								<!--						</a>-->
								<!--					</li>-->
								<!--				</ul>-->
								<!--				<div class="tab-content">-->
								<!--					<div class="tab-pane fade in active show" id="deal7">-->
								<!--						<img src="<?= base_url(); ?>assets/images/tour3-big-1.jpg" alt="" />-->
								<!--					</div>-->
								<!--					<div class="tab-pane fade" id="deal8">-->
								<!--						<img src="<?= base_url(); ?>assets/images/tour3-big-2.jpg" alt="" />-->
								<!--					</div>-->
								<!--					<div class="tab-pane fade" id="deal9">-->
								<!--						<img src="<?= base_url(); ?>assets/images/tour3-big-3.jpg" alt="" />-->
								<!--					</div>-->
								<!--				</div>-->
								<!--			</div><!-- rooms-tabs -->
								<!--		</div>-->
								<!--	</div>-->
								<!--</div><!-- Special Deals -->
							</div><!-- Rooms Packages -->
						</div>
					</div>
				</div>
			</div>
		</section>
