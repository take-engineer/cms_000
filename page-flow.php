<?php get_header(); ?>

	<!-- START FLOW & MERIT -->
	<section class="section bg-light" id="flow-merit">
			<div class="container">

					<div class="row">
							<div class="col-md-6 col-lg-4 js-animate" data-animate="fadeInUp" data-delay="0s">
									<div class="text-center services-boxes rounded p-4 mt-4">
											<div class="services-boxes-icon">
													<i class="mbri-contact-form text-custom display-4"></i>
											</div>
											<div class="mt-4">
													<h5 class="mb-0"><?= get_field('flow_item')['flow_item_ttl']; ?></h5>
													<div class="services-title-border"></div>
													<p class="text-muted mt-3 text-align-justify"><?= get_field('flow_item')['flow_item_txt']; ?></p>
											</div>
									</div>
							</div>
							<div class="col-md-6 col-lg-4 js-animate" data-animate="fadeInUp" data-delay="0s">
									<div class="text-center services-boxes rounded p-4 mt-4">
											<div class="services-boxes-icon">
													<i class="mbri-website-theme text-custom display-4"></i>
											</div>
											<div class="mt-4">
													<h5 class="mb-0"><?= get_field('flow_item_2')['flow_item_ttl']; ?></h5>
													<div class="services-title-border"></div>
													<p class="text-muted mt-3 text-align-justify"><?= get_field('flow_item_2')['flow_item_txt']; ?></p>
											</div>
									</div>
							</div>
							<div class="col-md-6 col-lg-4 js-animate" data-animate="fadeInUp" data-delay="0s">
									<div class="text-center services-boxes rounded p-4 mt-4">
											<div class="services-boxes-icon">
													<i class="mbri-code text-custom display-4"></i>
											</div>
											<div class="mt-4">
													<h5 class="mb-0"><?= get_field('flow_item_3')['flow_item_ttl']; ?></h5>
													<div class="services-title-border"></div>
													<p class="text-muted mt-3 text-align-justify"><?= get_field('flow_item_3')['flow_item_txt']; ?></p>
											</div>
									</div>
							</div>
					<!-- </div> -->
					<!-- <div class="row"> -->
							<div class="col-md-6 col-lg-4 js-animate" data-animate="fadeInUp" data-delay="0s">
									<div class="text-center services-boxes rounded p-4 mt-4">
											<div class="services-boxes-icon">
													<i class="mbri-upload text-custom display-4"></i>
											</div>
											<div class="mt-4">
													<h5 class="mb-0"><?= get_field('flow_item_4')['flow_item_ttl']; ?></h5>
													<div class="services-title-border"></div>
													<p class="text-muted mt-3 text-align-justify"><?= get_field('flow_item_4')['flow_item_txt']; ?></p>
											</div>
									</div>
							</div>
							<div class="col-md-6 col-lg-4 js-animate" data-animate="fadeInUp" data-delay="0s">
									<div class="text-center services-boxes rounded p-4 mt-4">
											<div class="services-boxes-icon">
													<i class="mbri-update text-custom display-4"></i>
											</div>
											<div class="mt-4">
													<h5 class="mb-0"><?= get_field('flow_item_5')['flow_item_ttl']; ?></h5>
													<div class="services-title-border"></div>
													<p class="text-muted mt-3 text-align-justify"><?= get_field('flow_item_5')['flow_item_txt']; ?></p>
											</div>
									</div>
							</div>
							<div class="col-md-6 col-lg-4 js-animate" data-animate="fadeInUp" data-delay="0s">
									<div class="text-center services-boxes rounded p-4 mt-4">
											<div class="services-boxes-icon">
													<i class="mbri-edit text-custom display-4"></i>
											</div>
											<div class="mt-4">
													<h5 class="mb-0"><?= get_field('flow_item_6')['flow_item_ttl']; ?></h5>
													<div class="services-title-border"></div>
													<p class="text-muted mt-3 text-align-justify"><?= get_field('flow_item_6')['flow_item_txt']; ?></p>
											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- END FLOW & MERIT -->

	<?php get_footer(  ); ?>
