<?php
/**
 * The main template file.
 *
 * @package WordPress
 */

 get_header(); 
 $sidebar = 0;
 $custom_home_layout = 0;
 $enable_home_page = valo_options_array('enable_home_page');
  if($enable_home_page == 1 &&  is_front_page()){
    $custom_home_layout = 1;
    valo_get_slider();
  }

 
?>
<hr>
<div style="width: 800px; margin: auto;">
<h3> this is the title</h3>
<p>Duis aute irure dolor sed do eiusmod tempor <br>
incididunt in reprehenderit in voluptate. Cupidatat<br>
 non proident, ut labore et dolore magna aliqua. Sunt <br>
 in culpa quis nostrud exercitation excepteur sint occaecat.<br>
 Duis aute irure dolor sed do eiusmod tempor <br>
incididunt in reprehenderit in voluptate. Cupidatat<br>
 non proident, ut labore et dolore magna aliqua. Sunt <br>
 in culpa quis nostrud exercitation excepteur sint occaecat.<br>
  Mollit anim id est laborum.
</p> 
<img id="img1" src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg" />
<img id="img2" src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg"/>
<img id="img3" src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg"/>
<img id="img4" src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg"/> 

</div>
<br>
<br>
<br>
<div style="width:600px; height:50px; margin: auto;">
<a id="a1" href="google.com"><img  src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg" width="120px" height="120px" /><p style="font-size: 12px; font-weight:bold;">短期で留学したい</p></a>
<a id="a2" href="google.com"><img src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg" width="120px" height="120px" /><p style="font-size: 12px; font-weight:bold;">中長期で留学したい</p></a>
<a id="a3" href="google.com"><img src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg" width="120px" height="120px" /><p style="font-size: 12px; font-weight:bold;">セレブ気分で<br>留学したい</p></a>
<a id="a4" href="google.com"><img src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg" width="120px" height="120px" /><p style="font-size: 12px; font-weight:bold;">親子で留学がしたい</p></a>
<a id="a5" href="google.com"><img src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg" width="120px" height="120px" /><p style="font-size: 12px; font-weight:bold;">アットホームな環境で<br>留学したい</p></a>
<a id="a6" href="google.com"><img src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg" width="120px" height="120px" /><p style="font-size: 12px; font-weight:bold;">アットホームな環境で<br>勉強がしたい</p></a>
<a id="a7" href="google.com"><img src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg" width="120px" height="120px" /><p style="font-size: 12px; font-weight:bold;">美容を学びたい</p></a>
<a id="a8" href="google.com"><img src="http://localhost/wataru/wordpress/wp-content/themes/valo/images/image1.jpg" width="120px" height="120px" /><p style="font-size: 12px; font-weight:bold;">ITを学びたい</p></a>
</div>
<div class="center">
  <div class="Showroom_Theme">
    <?php if (have_posts()) :
	 if($custom_home_layout == 1){
     get_template_part("content","home");
   }else{
    $sidebar = 1;
	while ( have_posts() ) : the_post();
	
	
	?>
    <div id="post-<?php the_ID(); ?>" <?php post_class("blog_list"); ?>>
   <?php get_template_part("content",get_post_format());?>
    </div>
    <?php  endwhile;?>
    <div class="clear"></div>
	
    <div class="pagination">
     <?php valo_native_pagenavi("echo",$wp_query);?>
    </div>
	
	 <?php } else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
	 
	<?php endif; ?>
  </div>
  
  <?php  if($sidebar == 1){ ?>
  <div class="Showroom_right">
    <?php  
   if(is_active_sidebar(4)){
   dynamic_sidebar(4);
}
else{
dynamic_sidebar(1) ;

}
 ?>
  </div>
  <?php }?>
</div>
<?php get_footer(); ?>