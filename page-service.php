<?php get_header(); ?>

	<!-- START SERVICES -->
	<section class="section" id="services">
			<div class="container">

					<div class="row py-lg-5 justify-content-center">
							<div class="col-lg-6 order-lg-1 d-flex align-items-center js-animate" data-animate="fadeIn" data-delay="0.3s">
									<div class="text-center rounded pb-5 p-lg-5">
											<img src="<?=get_field('service_img')?>" alt="LP完成イメージ" class="img-fluid mx-auto d-block">
									</div>
							</div>
							<div class="col-lg-6 js-animate" data-animate="fadeIn" data-delay="0.3s">
									<div class="col-lg-12">
											<div class="text-center services-boxes rounded p-4 mb-4">
													<div class="services-boxes-icon">
															<i class="mbri-browse text-custom display-4"></i>
													</div>
													<div class="mt-4">
															<h5 class="mb-0"><?= get_field('service_item')['service_item_ttl']; ?></h5>
															<div class="services-title-border"></div>
															<p class="text-muted mt-3 text-left"><?= get_field('service_item')['service_item_txt']; ?></p>
													</div>
											</div>
									</div>

									<?php /* <div class="col-lg-12">
											<div class="text-center services-boxes rounded p-4">
													<div class="services-boxes-icon">
															<i class="mbri-responsive text-custom display-4"></i>
													</div>
													<div class="mt-4">
															<h5 class="mb-0">WordPress</h5>
															<div class="services-title-border"></div>
															<p class="text-muted mt-3">更新が必要なサイトには、WordPressをご提案してます。個人ブログにも対応可能です。</p>
													</div>
											</div>
									</div> */ ?>

									<div class="col-lg-12">
											<div class="text-center services-boxes rounded p-4">
													<div class="services-boxes-icon">
															<i class="mbri-responsive text-custom display-4"></i>
													</div>
													<div class="mt-4">
															<h5 class="mb-0"><?= get_field('service_item_2')['service_item_ttl_2']; ?></h5>
															<div class="services-title-border"></div>
															<p class="text-muted mt-3 text-left"><?= get_field('service_item_2')['service_item_txt_2']; ?></p>
													</div>
											</div>
									</div>
							</div>

					</div>

			</div>
	</section>
	<!-- END SERVICES -->

	<?php get_footer(  ); ?>
