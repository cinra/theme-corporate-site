<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();

$parent_cat = get_categories(array('slug' => 'news'));
$parent_catID = $parent_cat[0]->term_id;
?>

<div class="article">
	<header>
		<h1><?php single_cat_title()?></h1>
	</header>
	<hr />
	<?php include('_inc/nav.news.php')?>
	<section class="news" id="autopage">
		<?php while(have_posts()):
		the_post();
		
		$cat = array();
		$raw_cat = get_the_category();
		
		foreach ($raw_cat as $raw) {
			if ($raw->category_parent == $parent_catID) $cat[] = $raw;
		}?><div class="content clearfix">
			<div class="main">
				<h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
				<p class="data"><?php echo get_the_date()?><?php if(!empty($cat)):?> | <?php foreach($cat as $c):?><a href="<?php bloginfo('url')?>/news/<?php echo $c->category_nicename?>/"><?php echo $c->name?></a> <?php endforeach;endif;?></p>
				<?php the_content()?>
			</div>
			<div class="side"><?php if(has_post_thumbnail()):?><?php the_post_thumbnail('medium')?><?php else:?><img src="<?php bloginfo('template_url')?>/img/fig.nopic.gif" alt="No Pic" width="250" height="187" /><?php endif;?></div>
		</div><?php endwhile;?>
	</section>
	<?php if($wp_query->max_num_pages > 1):?><p class="btn read-more pager" id="pager"><?php next_posts_link('次のページへ');?></p><?php endif;?>
	<?php include('_inc/nav.news.php')?>
</div>

<?php if($wp_query->max_num_pages > 1):?><script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.autopager.js"></script>
<script type="text/javascript">
$(function() {
	var maxpage = <?php echo $wp_query->max_num_pages?>;
	
	$.autopager({
	    content		: '#autopage',
	    link		: '#pager a',
	    autoLoad	: false,
	    start		: function() {
	    	$('#pager').addClass('loading');
	    },
	    load		: function(current) {
	    	$('#pager').removeClass('loading');
	    	if (current.page == maxpage) $('#pager').fadeOut();
	    }
	});
	
	$('#pager').click(function() {
		$.autopager('load');
		return false;
	});
	
	$('nav.news .archive').hover(function() {
		$(this).find('ul').slideDown('fast');
	}, function() {
		$(this).find('ul').slideUp('fast');
	});
});

</script><?php endif;?>

<?php get_footer(); ?>