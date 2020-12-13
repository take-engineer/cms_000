<?php get_header(); ?>

	<!-- START ABOUT -->
	<section class="section">
			<div class="container home-section-container">
					<div class="row">
							<div class="col-lg-6 home-img-box js-animate" data-animate="fadeInLeft" data-delay="0.3s">
									<div class="m-auto">
											<img src="<?= get_field('about')['top_about_img']; ?>" alt="写真" class="img-fluid mx-auto d-block img-thumbnail about-img">
									</div>
							</div>
							<div class="col-lg-6 home-text-box js-animate" data-animate="fadeInRight" data-delay="0.3s">
									<div class="m-auto">
											<h2 class="font-weight-bold text-custom"><?= get_field('about')['top_about_ttl']; ?></h2>
											<p class="text-muted mt-4"><?= get_field('about')['top_about_txt']; ?></p>
											<a class="btn btn-custom btn-outline-custom btn-more" href="<?= get_field('about')['top_about_btn_link']; ?>"><?= get_field('about')['top_about_btn_label']; ?></a>

									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- END ABOUT -->

	<!-- START SERVICES -->
	<section class="section bg-light">
			<div class="container home-section-container">
					<div class="row justify-content-center">
							<div class="col-lg-6 home-text-box js-animate" data-animate="fadeInRight" data-delay="0.3s">
									<div class="m-auto">
											<h2 class="font-weight-bold text-custom"><?= get_field('service')['top_service_ttl']; ?></h2>
											<p class="text-muted mt-4"><?= get_field('service')['top_service_txt']; ?></p>
											<a class="btn btn-custom btn-outline-custom btn-more" href="<?= get_field('service')['top_service_btn_link']; ?>"><?= get_field('service')['top_service_btn_label']; ?></a>
									</div>
							</div>
							<div class="col-lg-6 home-img-box js-animate" data-animate="fadeInLeft" data-delay="0.3s">
									<div class="">
											<img src="<?= get_field('service')['top_service_img']; ?>" alt="サービス" class="img-fluid mx-auto d-block">
									</div>
							</div>
					</div>

			</div>
	</section>
	<!-- END SERVICES -->

	<!-- START FLOW & MERIT -->
	<section class="section">
			<div class="container home-section-container">
					<div class="row justify-content-center">
							<div class="col-lg-6 home-img-box js-animate" data-animate="fadeInLeft" data-delay="0.3s">
									<div class="">
											<img src="<?= get_field('flow')['top_flow_img']; ?>" alt="制作の流れ" class="img-fluid mx-auto d-block">
									</div>
							</div>
							<div class="col-lg-6 home-text-box js-animate" data-animate="fadeInRight" data-delay="0.3s">
									<div class="m-auto">
											<h2 class="font-weight-bold text-custom"><?= get_field('flow')['top_flow_ttl']; ?></h2>
											<p class="text-muted mt-4"><?= get_field('flow')['top_flow_txt']; ?></p>
											<a class="btn btn-custom btn-outline-custom btn-more" href="<?= get_field('flow')['top_flow_btn_link']; ?>"><?= get_field('flow')['top_flow_btn_label']; ?></a>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- END FLOW & MERIT -->

	<!--START WORK -->
	<section class="section bg-light">
		<div class="container home-section-container">
			<div class="row justify-content-center">
				<div class="col-lg-6 home-text-box js-animate" data-animate="fadeInRight" data-delay="0.3s">
					<div class="m-auto">
							<h2 class="font-weight-bold text-custom"><?= get_field('work')['top_work_ttl']; ?></h2>
							<p class="text-muted mt-4"><?= get_field('work')['top_work_txt']; ?></p>
							<a class="btn btn-custom btn-outline-custom btn-more" href="<?= get_field('work')['top_work_btn_link']; ?>"><?= get_field('work')['top_work_btn_label']; ?></a>
					</div>
			</div>
			<div class="col-lg-6 home-img-box js-animate" data-animate="fadeInLeft" data-delay="0.3s">
					<div class="">
							<img src="<?= get_field('work')['top_work_img']; ?>" alt="制作実績" class="img-fluid mx-auto d-block">
					</div>
			</div>
		</div>
	</section>
	<!--END WORK -->

	<?php get_footer(  ); ?>
