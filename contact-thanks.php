<?php
/**
 * Template Name: Contact > Thanks 
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();

the_post();?>

<div class="article">
	<header>
		<h1>コンタクト</h1>
		<p class="description">お問い合わせありがとうございます。</p>
		<hr />
	</header>
	<section>
		<?php the_content()?>
	</section>
</div>

<?php get_footer(); ?>
