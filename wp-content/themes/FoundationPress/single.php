<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>

<div class="row">
	<div class="small-12 large-8 columns" role="main">
	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article>
				<h2><?php the_category(); ?></h2>
				<?php the_post_thumbnail('détail-article'); ?>
				<h1><?php the_title(); ?></h1>
				<?php foundationpress_entry_meta(); ?>

		

			<?php if ( has_post_thumbnail() ) : ?>
			<?php endif; ?>
			<?php the_content(); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
