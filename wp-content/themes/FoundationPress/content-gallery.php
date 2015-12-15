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

<article>
			<h1>GALLERY</h1>
			<?php
			echo "<pre>";
			var_dump(get_post_meta( 'image', $post->ID ));
			echo "</pre>"; ?>
			<h2><?php the_category(); ?></h2>
			<?php the_post_thumbnail('accueil') ?>
			<h1><?php the_title(); ?></h1>
			<p><?php the_excerpt(); ?></p>
		  <a href="<?php the_permalink(); ?>">Lire la suite...</a>
		  <ul class="social_media">
	 			<li><img src="http://placehold.it/18x18"></li>
	 			<li><img src="http://placehold.it/18x18"></li>
	 			<li><img src="http://placehold.it/18x18"></li>
	    </ul>
	<hr />
</article>
