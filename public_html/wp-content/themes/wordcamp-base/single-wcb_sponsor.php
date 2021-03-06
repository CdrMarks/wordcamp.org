<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) {
	while ( have_posts() ) :
		the_post(); ?>

				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'wordcamporg' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'wordcamporg' ) . '</span>' ); ?></div>
				</div><!-- #nav-above -->

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title sponsor-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wordcamporg' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} else {
						the_title();
					}
					?></a></h1>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array(
						'before' => '<div class="page-link">' . __( 'Pages:', 'wordcamporg' ),
						'after' => '</div>',
) ); ?>
					</div><!-- .entry-content -->

					<div class="entry-utility">
						<?php edit_post_link( __( 'Edit', 'wordcamporg' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->

	<?php endwhile;
}; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
