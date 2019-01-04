<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php /*
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
*/	?>

    <?php include_once "sidebar.php"?>

	<div class="entry-content <?=is_page_template( 'full-width.php' ) ? ' full-width' : ''?> ">
            <?php if ( has_post_thumbnail() ) { ?>
                <img class="featured-image" src="<?=wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0]?>"/>
            <?php } ?>
            <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->
            <?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
