<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else : ?>
		<h2><?php _e( '404', 'unitrack' ); ?></h2>
		<p><?php esc_html_e( 'Sorry! No content found. as post type', 'unitrack' ); ?></p>
		<?php endif; ?>
	</main>
</div>
<?php get_footer(); ?>