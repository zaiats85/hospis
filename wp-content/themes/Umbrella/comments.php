<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fabthemes
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'Один коментар до &ldquo;%2$s&rdquo;', '%1$ коментарів до &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'fabthemes' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'fabthemes' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'fabthemes' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'fabthemes' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 60,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'fabthemes' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'fabthemes' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'fabthemes' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().




		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'fabthemes' ); ?></p>
		<?php
		endif;

	?>

		<?php

	$args = array(
	        'fields' => apply_filters(
	                'comment_form_default_fields', array(
	                        'author' =>'<div class="row"><div class="columns small-12"><p class="comment-form-author">' . '<input id="author" placeholder="Ваше ім\'я" name="author" type="text" value="' .
	                        esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
	                        '</p></div>'
	                        ,
	                        'email'  => '<div class="columns small-12"><p class="comment-form-email">' . '<input id="email" placeholder="Електронна адреса" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	                        '" size="30"' . $aria_req . ' />'  .

	                        '</p></div></div>'
	                )
	        ),
	        'comment_field' => '<p class="comment-form-comment">' .
	        '<textarea id="comment" name="comment" placeholder="Напишіть свій відгук або коментар тут" cols="45" rows="8" aria-required="true"></textarea>' .
	        '</p>',
	        'comment_notes_after' => '',
	        'title_reply' => '<div class="crunchify-text">Будь ласка, залиште свій коментар</div>'
	);
	?>

	<?php comment_form($args, $post->ID);

		?>

</div><!-- #comments -->
