<?php
/**
 * Theme:  	 Amaranthine
 * Created:  October 2011.
 * Author:   Sami Ch.
 * URL: 	 http://gazpo.com
 * 
 **/
 ?>
 
<?php get_header(); ?>

	<div id="content">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
			
				<h2><?php the_title(); ?></h2>
				
				<div class="post-meta">
					<?php the_time( get_option( 'date_format' ) ) ?> |
					<?php the_category(', ' ); ?>
					<?php the_tags( __( ' | Tags: ', 'gazpo' ), ', ', '' ); ?>	|
					<?php comments_popup_link( __('Leave comment', 'gazpo'), __( '1 comment', 'gazpo'), __('% comments', 'gazpo')); ?>
					<?php edit_post_link(__('| Edit this post','gazpo')); ?>
				</div>
				
				<div class="entry">
					<?php the_content(); ?>
				</div>
								
				<?php wp_link_pages( __('before=<div class="post-page-links">Pages:&after=</div>', 'gazpo') ) ; ?>
							
		</div><!-- /post-->

		<?php endwhile; ?>
	<?php endif; ?>

	
	</div>	<!-- /content -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
