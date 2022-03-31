<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fabthemes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<div class="date-field"> <?php the_time('j, F Y р.'); ?> </div>

		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) : ?>

		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <div class="row">
            <?php if (get_post_thumbnail_id()) { ?>
            <div class="columns medium-4">
                <?php
                $thumb = get_post_thumbnail_id();
                $img_url = wp_get_attachment_url($thumb, 'full'); //get full URL to image (use "large" or "medium" if the images too big)
                $image = aq_resize($img_url, 300, 200, false, true, true); //resize & crop the image
                ?>
                <?php if ($image) : ?>
                    <img class="post-thumb" src="<?php echo $image ?>"/>
                <?php endif; ?>
            </div>
            <div class="columns medium-8">

                <div class="entry-meta">
                    <!--			<span> <i class="fa fa-user"></i> --><?php //the_author(); ?><!-- </span>-->
                    <span> <i class="fa fa-tag"></i> <?php the_category(', ') ?> </span>
                    <span> <i class="fa fa-comment"></i> <?php comments_number( 'немає відгуків', 'один відгук', '% відгуків' ); ?>.</span>
                </div><!-- .entry-meta -->

                <?php the_excerpt(); ?>
                <a class="button cbutton" href="<?php echo get_permalink($post->ID); ?>"> Детальніше </a>
            </div>
            <?php } else { ?>
                <div class="columns medium-12">

                    <div class="entry-meta">
                        <!--			<span> <i class="fa fa-user"></i> --><?php //the_author(); ?><!-- </span>-->
                        <span> <i class="fa fa-tag"></i> <?php the_category(', ') ?> </span>
                        <span> <i class="fa fa-comment"></i> <?php comments_number( 'немає відгуків', 'один відгук', '% відгуків' ); ?>.</span>
                    </div><!-- .entry-meta -->

		            <?php the_excerpt(); ?>
                    <a class="button cbutton" href="<?php echo get_permalink($post->ID); ?>"> Детальніше </a>
                </div>
            <?php } ?>
        </div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
