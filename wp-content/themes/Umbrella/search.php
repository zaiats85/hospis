<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Fabthemes
 */

get_header(); ?>

<div class="page-header">
	<div class="row">
		<div class="columns small-12">
				<h1 class="page-title"> <span>  <?php printf( esc_html__( 'Результати пошуку за запитом: %s', 'fabthemes' ), ''. get_search_query() .'' ); ?> </span></h1>
		</div>
	</div>
</div>


<div class="row"> <div class="columns medium-8">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
</div>
<div class="columns medium-4">
	<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer();
