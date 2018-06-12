<?php

// 主题默认设置
if ( ! function_exists( 'chinawok_setup' ) ) :
function chinawok_setup(){

  /* 自动添加标题 */
  add_theme_support( 'title-tag' );

  /* 添加文章缩略图 */
  add_theme_support( 'post-thumbnails' );
  /* 设置缩略图尺寸 */
  // set_post_thumbnail_size( 1200, 9999 );

  /* 添加导航菜单 */
  register_nav_menus( array(
    'primary' => '主菜单',
  ) );

  /* 添加自定义logo */
  // add_theme_support( 'custom-logo', array(
  // 	'height'      => 240,
  // 	'width'       => 240,
  // 	'flex-height' => true,
  // ) );

  /* 支持HTML5. */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  /* 添加文章形式 */
  add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'status',
    'audio',
    'chat',
  ) );

  /* 部件选择性刷新 */
  add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'chinawok_setup' );
endif;
// 主题默认设置

// 注册小工具区域
if ( ! function_exists( 'ccain_widgets_init' ) ) :
function ccain_widgets_init(){
  register_sidebar( array(
    'name'          => '侧边栏',
    'id'            => 'sidebar',
    'description'   => '将小工具添加到侧边栏',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'ccain_widgets_init' );
endif;
// 注册小工具区域

// function my_ap_tinymce_editor_settings( $setting = array() ){
// 	$setting['teeny'] = true;
// 	return $setting;
// }
// add_filter( 'ap_tinymce_editor_settings', 'my_ap_tinymce_editor_settings' );

function XXX_get_post_images($post_content){
  preg_match_all('|<img.*?src=[\'"](.*?)[\'"].*?>|i', do_shortcode($post_content), $matches);
  if($matches){
    return $matches;//自行var_dump($matches)就可以看到效果了。
  }
  else{
    return false;
  }
}

//显示页面查询次数、加载时间和内存占用 From wpdaxue.com
function performance( $visible = false ) {
	$stat = sprintf(  '%d queries in %.3f seconds, using %.2fMB memory',
		get_num_queries(),
		timer_stop( 0, 3 ),
		memory_get_peak_usage() / 1024 / 1024
	);
	echo $visible ? $stat : "<!-- {$stat} -->" ;
}
