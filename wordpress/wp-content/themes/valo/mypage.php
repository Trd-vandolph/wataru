<?php
/*
	Template Name: MyPage
*/
?>

<?php
function MyPage_css(){
?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mypage.css" type="text/css">
<?php
}
add_filter('wp_head','mypage.css');
?>
<?php get_header(); ?>
<p> heh </p>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>