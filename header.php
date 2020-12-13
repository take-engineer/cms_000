<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Takehiro Kawahara</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link rel="shortcut icon" href="<?=get_template_directory_uri();?>/img/favicon.ico">

	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>

	<!-- Loader -->
	<div id="preloader">
			<div id="status">
					<div class="spinner">Loading...</div>
			</div>
	</div>

	<!-- Start Navbar -->
	<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
			<div class="container-fluid">

				<?php if(is_home() || is_front_page()): ?>
					<h1 class="header-logo">
						<a class="navbar-brand pt-0 logo" href="<?= esc_url(get_home_url()); ?>">
								<img src="<?=get_template_directory_uri();?>/img/logo.png" alt="ロゴ" class="img-fluid logo-light">
								<img src="<?=get_template_directory_uri();?>/img/logo-dark.png" alt="ロゴ" class="img-fluid logo-dark">
						</a>
					</h1>
				<?php else : ?>
					<div class="header-logo">
						<a class="navbar-brand pt-0 logo" href="<?= esc_url(get_home_url()); ?>">
								<img src="<?=get_template_directory_uri();?>/img/logo.png" alt="ロゴ" class="img-fluid logo-light">
								<img src="<?=get_template_directory_uri();?>/img/logo-dark.png" alt="ロゴ" class="img-fluid logo-dark">
						</a>
					</div>
				<?php endif; ?>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="mdi mdi-menu"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarCollapse">
						<?php
							wp_nav_menu(
								//.header-listを置き換えて、PC用メニューを動的に表示する
								array(
									'depth' => 1,
									'theme_location' => 'global', //グローバルメニューをここに表示すると指定
									'container' => 'false',	//ulを囲んでるやつ。HTMLに記載の場合は、false
									'menu_class' => 'navbar-nav',
								)
							);
						?>
					</div>
			</div>
	</nav>
	<!-- End Navbar -->

		<!-- START HOME -->
	<section class="section header-bg-img <?php if(is_front_page() || is_home()){ echo 'h-100vh';} else { echo 'clippath_none mt55sp';} ?>" id="home">
			<div class="bg-overlay"></div>
			<div class="header-table">
					<div class="header-table-center">
							<div class="container position-relative z-index">
									<div class="row justify-content-center">
											<div class="col-lg-12">
													<div class="text-center header-content mx-auto">
															<h4 class="text-white first-title mb-4"><?=get_field('kv_text_1');?></h4>
															<?php if(is_front_page() || is_home()):?>
																<h1 class="header-name text-white text-capitalize mb-0"><span class="element font-weight-bold"><?=get_field('kv_text_2');?></span></h1>
															<?php else: ?>
																<h2 class="header-name text-white text-capitalize mb-0"><?=get_field('kv_text_2');?></h2>
															<?php endif; ?>
															<p class="text-white mx-auto header-desc mt-4"><?=get_field('kv_text_3');?></p>
															<?php if(is_front_page() || is_home()):?>
																<div class="mt-4 pt-2">
																		<a href="<?=get_field('kv_btn_link');?>" class="btn btn-outline-custom btn-round btn-hero"><?=get_field('kv_btn_label');?></a>
																</div>
															<?php endif; ?>
													</div>
											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- END HOME -->
