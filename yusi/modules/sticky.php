<?php if (!Yusi_is_mobile() ): ?>
<div id="wowslider-container1">
	<div class="ws_images"><ul>
<?php $sticky = get_option('sticky_posts'); rsort( $sticky );
		query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1, 'showposts' => dopt('d_sticky_count')?dopt('d_sticky_count'):4 ) );
		while (have_posts()) : the_post(); 
echo '<li><a target="_blank" href="'.get_permalink().'" title="'.get_the_title().'">';
		echo '<img src="'.get_bloginfo("template_url").'/timthumb.php?src=';echo post_thumbnail_src();echo '&h=297&w=716&q=90&zc=1&ct=1" title="'.get_the_title().'" alt="'.get_the_title().'" /></a></li>';
		endwhile; 
		wp_reset_query(); 
	?>
	</ul>
</div>

<div class="ws_thumbs">
<div>
<?php $sticky = get_option('sticky_posts'); rsort( $sticky );
		query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1, 'showposts' => dopt('d_sticky_count')?dopt('d_sticky_count'):4 ) );
		while (have_posts()) : the_post(); 
echo '<a target="_blank" href="#" title="'.get_the_title().'">';
		echo '<img src="'.get_bloginfo("template_url").'/timthumb.php?src=';echo post_thumbnail_src();echo '&h=62&w=120&q=90&zc=1&ct=1" /></a>';
		endwhile; 
		wp_reset_query(); 
	?>
</div></div><div class="ws_shadow"></div>
	</div><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slider.js"></script><?php endif ;?>
