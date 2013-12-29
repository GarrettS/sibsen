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

	<div id="main">
	<?php include "/home/songthai/public_html/inc/heading.php"; ?>
			
    <div id="nav">
        <a href="/massage">Massage</a> 
        | <a href="/about">About</a> | <a href="/contact">Contact</a> 
        | <a href="/gallery/">Gallery</a>
    </div>

			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
