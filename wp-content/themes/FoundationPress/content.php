<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php foundationpress_entry_meta(); ?>

	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
		 <a href="<?php the_permalink(); ?>">Lire la suite</a>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article>