
<?php

function my_setup(){
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
    'html5',
    array( //HTML5でマークアップ
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        )
    );
}

/**
* メニューの登録
*
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
*/
function my_menu_init(){
	register_nav_menus(
		array(
			'global' => 'ヘッダーメニュー',
		// 'drawer' => 'ドロワーメニュー',
		)
	);
}
add_action('init', 'my_menu_init');


function load_js() {
	//管理画面を除外
	if ( !is_admin() ){
		//事前に読み込まれるjQueryを解除
		wp_deregister_script( 'jquery' );

		//Google CDNのjQueryを出力
		wp_enqueue_script( 'jquery',  get_template_directory_uri() . '/js/jquery.min.js', array(), NULL, true );
	}
}
add_action( 'init', 'load_js' );

//CSS,JS有効化
function my_scripts() {
	wp_enqueue_style( 'bs4-style', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/css/animate.min.css');
  wp_enqueue_style( 'materialdesignicons-style', get_template_directory_uri() . '/css/materialdesignicons.min.css');
  wp_enqueue_style( 'mobiriseicons-style', get_template_directory_uri() . '/css/mobiriseicons.css');
  wp_enqueue_style( 'jquery-ui-icon-font-style', get_template_directory_uri() . '/css/theme/jquery-ui.icon-font.min.css');
  wp_enqueue_style( 'jquery-ui.min-style', get_template_directory_uri() . '/css/theme/jquery-ui.min.css');
  wp_enqueue_style( 'font-M+PLUS-style', 'https://fonts.googleapis.com/css?family=M+PLUS+1p');
  wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css?ver'.time(), array(), '1.0.0', 'all' );

  wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array( 'jquery' ),false, true );
  wp_enqueue_script( 'bs4', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ),false, true );
  wp_enqueue_script( 'scrolla', get_template_directory_uri() . '/js/scrolla.jquery.min.js', array( 'jquery' ),false, true );
  wp_enqueue_script( 'scrollspy', get_template_directory_uri() . '/js/scrollspy.min.js', array( 'jquery' ),false, false );
  wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.js', array( 'jquery' ),false, true );
  // wp_enqueue_script( 'typed', get_template_directory_uri() . '/js/typed.js', array( 'jquery' ),false, true );
  wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/custom.js?ver'.time(), array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


?>
