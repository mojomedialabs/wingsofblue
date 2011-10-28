<?php
/**
 * Template Name: Validate User
 * Description: A Page template that requires a user to be logged in and validated before being able to see the page
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
if ( ! is_user_logged_in() ) {
  auth_redirect();
}

get_header(); ?>

		<div id="primary" >
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php //comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
