<?php get_header(); ?>

	<!--START WORK -->
	<section class="section text-center py-5" id="work">
		<div class="container">

			<div class="row">
				<ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu" id="menu-filter">
					<li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
					<li class="list-inline-item"><a class="" data-filter=".web">Web</a></li>
					<li class="list-inline-item"><a class="" data-filter=".wordpress">WordPress</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="row mt-4 work-filter js-animate" data-animate="zoomIn" data-delay="0s"">

				<div class="col-md-6 col-lg-4 work_item web">
					<Z>
						<div class="work_box">
							<div class="work_img">
								<img src="<?=get_template_directory_uri();?>/img/works/lp_6.png" class="img-fluid mx-auto d-block rounded" alt="作品イメージ">
							</div>
							<div class="work_detail">
								<h4 class="mb-0">タイトル</h4>
							</div>
						</div>
					</Z>
				</div>

				<div class="col-md-6 col-lg-4 work_item web">
					<Z>
						<div class="work_box">
							<div class="work_img">
								<img src="<?=get_template_directory_uri();?>/img/works/lp_5.png" class="img-fluid mx-auto d-block rounded" alt="作品イメージ">
							</div>
							<div class="work_detail">
								<h4 class="mb-0">タイトル</h4>
							</div>
						</div>
					</Z>
				</div>

				<div class="col-md-6 col-lg-4 work_item wordpress">
					<Z>
						<div class="work_box">
							<div class="work_img">
								<img src="<?=get_template_directory_uri();?>/img/works/wp_1.png" class="img-fluid mx-auto d-block rounded" alt="作品イメージ">
							</div>
							<div class="work_detail">
								<h4 class="mb-0">タイトル</h4>
							</div>
						</div>
					</Z>
				</div>

				<div class="col-md-6 col-lg-4 work_item wordpress">
					<Z>
						<div class="work_box">
							<div class="work_img">
								<img src="<?=get_template_directory_uri();?>/img/works/lp_4.png" class="img-fluid mx-auto d-block rounded" alt="作品イメージ">
							</div>
							<div class="work_detail">
								<h4 class="mb-0">タイトル</h4>
							</div>
						</div>
					</Z>
				</div>

				<div class="col-md-6 col-lg-4 work_item wordpress">
					<Z>
						<div class="work_box">
							<div class="work_img">
								<img src="<?=get_template_directory_uri();?>/img/works/lp_3.png" class="img-fluid mx-auto d-block rounded" alt="作品イメージ">
							</div>
							<div class="work_detail">
								<h4 class="mb-0">タイトル</h4>
							</div>
						</div>
					</Z>
				</div>

				<div class="col-md-6 col-lg-4 work_item web">
					<Z>
						<div class="work_box">
							<div class="work_img">
								<img src="<?=get_template_directory_uri();?>/img/works/lp_2.png" class="img-fluid mx-auto d-block rounded" alt="作品イメージ">
							</div>
							<div class="work_detail">
								<h4 class="mb-0">タイトル</h4>
							</div>
						</div>
					</Z>
				</div>

			</div>
		</div>
	</section>
	<!--END WORK -->

	<?php get_footer(  ); ?>
