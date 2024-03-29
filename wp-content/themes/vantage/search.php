<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */

get_header(); ?>

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 id="page-title"><?php printf( __( 'Resultados de búsqueda para: %s', 'vantage' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header><!-- .page-header -->

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content' ); ?>

		<?php endwhile; ?>

		<?php vantage_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'search' ); ?>

	<?php endif; ?>

	</div><!-- #content .site-content -->
</section><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>