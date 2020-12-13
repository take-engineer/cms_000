
//PRELOADER
$('#status').delay(3000).fadeOut();
$('#preloader').delay(3000).fadeOut('slow');
$('body').delay(3000).css({
	overflow: 'visible',
});

//スクロールイベント系
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	var navbar_height = $('nav.navbar').height() + 15;
	var kv_bottom_pos = $('#home + .section').offset().top - navbar_height;

	if (scroll >= kv_bottom_pos) {
		$('.sticky').addClass('stickyadd');
	} else {
		$('.sticky').removeClass('stickyadd');
	}

	//Scrollspy
	$('#navbarCollapse').scrollspy({
		offset: 20,
	});
});

$('.navbar-nav a').on('click', function (event) {
	var $anchor = $(this);
	$('html, body')
		.stop()
		.animate(
			{
				scrollTop: $($anchor.attr('href')).offset().top - 0,
			},
			1500,
		);
	event.preventDefault();
});

//Typed
// $('.element').each(function () {
// 	var $this = $(this);
// 	$this.typed({
// 		strings: $this.attr('data-elements').split(','),
// 		typeSpeed: 100,
// 		backDelay: 3000,
// 	});
// });

//Work
$(window).on('load', function () {
	var $container = $('.work-filter');
	var $filter = $('#menu-filter');
	$container.isotope({
		filter: '*',
		layoutMode: 'masonry',
		animationOptions: {
			duration: 750,
			easing: 'linear',
		},
	});

	$filter.find('a').on('click', function () {
		var selector = $(this).attr('data-filter');
		$filter.find('a').removeClass('active');
		$(this).addClass('active');
		$container.isotope({
			filter: selector,
			animationOptions: {
				animationDuration: 750,
				easing: 'linear',
				queue: false,
			},
		});
		return false;
	});
});

//SP時　グロナビクリックでメニュー閉じる
jQuery('.navbar-nav>li>a , .dropdown-menu>a').on('click', function () {
	if (this.id != 'navbarDropdown') {
		$('.navbar-collapse').collapse('hide');
	}
});

//Call scrolla
jQuery(window).on('load', function () {
	jQuery('.js-animate').scrolla({
		mobile: true,	//sp時も適用
		once: true,	//発火は1度のみ
	});
});

//グロナビ現在地表示
$('.current_page_item').addClass('active');
