	<!--START FOOTER-->

	<?php
		$page_id = get_page_by_path('option');	//該当ページのスラッグ取得
		$page_id = $page_id->ID;	//スラッグからページIDを取得
	?>

<?php if(!is_page('contact')): ?>
	<section class="section cta bg-cta">
		<div class="bg-overlay"></div>
		<div class="container js-animate" data-animate="fadeIn" data-delay="0.3s">
			<div class="row justify-content-center text-center cta-box">
					<div class="col-md-10">
							<h2 class="text-center text-white">
								<?= get_field('footer',$page_id)['footer_ttl']; ?>
							</h2>
							<div class="mt-4 text-white">
								<?php if( get_field('footer',$page_id)['footer_btn_link_other']): ?>
									<a href="<?= get_field('footer',$page_id)['footer_btn_link_other']; ?>" class="btn btn-custom btn-cta">
										<?=get_field('footer',$page_id)['footer_btn_label'];?>
									</a>
								<?php else: ?>
									<a href="<?= get_field('footer',$page_id)['footer_btn_link']; ?>" class="btn btn-custom btn-cta">
										<?=get_field('footer',$page_id)['footer_btn_label'];?>
									</a>
								<?php endif; ?>
							</div>
					</div>
			</div>
		</div>
	</section>
<?php endif; ?>

	<footer class="footer bg-light">
			<div class="container">
					<div class="row justify-content-center text-center">
							<div class="col-md-12">
									<div class="text-center text-white footer-alt">
											<ul class="snsList list-unstyled list-inline mb-3">
													<li class="list-inline-item"><a href="https://twitter.com/takehiro_web" target="_blank" rel="nofollow noopener"><i class="mdi mdi-twitter text-muted"></i></a></li>
											</ul>
											<p class="text-muted mb-0">&copy; Copyright | Takehiro 2020 All Right Reserved</p>
									</div>
							</div>
					</div>
			</div>
	</footer>
	<!--END FOOTER-->

	<?php wp_footer(); ?>
</body>
</html>
