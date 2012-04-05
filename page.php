<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();

the_post();?>

<div class="article">
	<header>
		<h1><?php the_title()?></h1>
		<?php // p class="description"><?php echo get_post_meta($post->ID, 'title-eng', true)?></p ?>
		<hr />
	</header>
	<section>
		<div class="content no-side">
			<div class="main"><?php the_content()?></div>
			
		</div>
	</section>
</div>

<?php get_footer(); ?>
