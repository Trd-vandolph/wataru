<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('|', true, 'right'); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wapper">
  <div class="heard">
    <div class="top">
	<div class="logo">
	  <a href="<?php echo esc_url(home_url('/')); ?>"><?php if ( valo_options_array('logo') ) { ?>
            <img src="<?php echo valo_options_array('logo'); ?>" alt="<?php bloginfo('name'); ?>" />
            <?php }else{ ?><span class="site-name"><?php bloginfo('name'); ?></span><?php }?></a>
	  </div>
       <span class="tagline"><?php echo  get_bloginfo( 'description' );?></span>
       <a class="a" href="google.com">これは、サンプルのリンクです</a>
            <a class="a1" href="google.com">これは、サンプルリンク1である</a>
            <a class="a2" href="google.com">これは、サンプルのリンク2である</a>
      <span class="right_ico">
	  </span></div>
    <div class="nav">
      <div id="menu">
<?php

wp_nav_menu(array('theme_location'=>'primary','depth'=>0,'container'=>'','fallback_cb' =>false,'container_class'=>'main-menu','menu_id'=>'menu-main','menu_class'=>'main-nav','link_before' => '<span>', 'link_after' => '</span>'));

?>     </div>
    </div>
  </div>