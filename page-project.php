<?php
/**
 * 
 * Template Name: Project
 *
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();

global $paged;

/* echo $paged; */

$arg = array(
	'category_name'		=> 'service',
	'posts_per_page'	=> 12,
	'paged'				=> $paged
);

if ($_GET['cat']) $arg['category_name'] = $_GET['cat'];
if (get_uri_segment(2) && !is_numeric(get_uri_segment(2)) && get_uri_segment(2)!='page') {
	$arg['category_name'] = get_uri_segment(2);
} elseif (get_uri_segment(1) && !is_numeric(get_uri_segment(1)) && get_uri_segment(1)!='page') {
	$arg['category_name'] = get_uri_segment(1);
}
#print_r($arg);
query_posts($arg);

$parent_cat = get_categories(array('slug' => 'service', 'hide_empty' => 0));
$parent_catID = $parent_cat[0]->term_id;
?>

<div class="article">
	<header>
		<h1>プロジェクト</h1>
	</header>
	<hr />
	<?php include('_inc/nav.project.php')?>
	<section class="project panel"><div id="autopage" class="clearfix">
		<?php while(have_posts()):
		the_post();
		
		$cat = array();
		$raw_cat = get_the_category();
		
		foreach ($raw_cat as $raw) {
			if ($raw->category_parent == $parent_catID) $cat[] = $raw;
		}
		
		$dat = get_post_custom();
		
		$data = array();
		foreach ($dat as $k => $d) {
			$key = array('date_label','date_value', 'copy', 'panel_image', 'list_image');
			if (in_array($k, $key)) $data[$k] = $d;
		}
		
		?><div class="content clearfix trigger_link">
			<div class="main">
				<h3><?php the_title()?></h3>
				<?php if(!empty($cat)):?><ul><?php foreach($cat as $c):?><a href="<?php bloginfo('url')?>/news/<?php echo $c->category_nicename?>/"><li class="<?php echo $c->category_nicename?>"></li></a><?php endforeach;?></ul><?php endif;?>
				<?php if(!empty($data)):?><p class="data">
					<?php if(!empty($data['date_label']) && !empty($data['date_value'][0])):?><?php echo $data['date_value'][0]?> <?php endif;?>
				<?php endif;?>
			</div>
			<div class="side"><p class="img-panel"><?php if (isset($data['panel_image'][0])) : echo wp_get_attachment_image($dat['panel_image'][0], 'full', false, array('title' => get_the_title()));?><?php elseif(has_post_thumbnail()):?><?php the_post_thumbnail(array(190, 9999), array('title' => get_the_title(), 'position_fix' => array(190,160)))?><?php else:?><img src="<?php bloginfo('template_url')?>/img/fig.nopic.project.panel.gif" alt="No Pic" width="200" height="170" /><?php endif;?></p>
				<p class="img-list"><?php if (isset($data['list_image'][0])) : echo wp_get_attachment_image($dat['list_image'][0], 'full', false, array('title' => get_the_title()));?><?php elseif(has_post_thumbnail()):?><?php the_post_thumbnail(array(380, 9999))?><?php else:?><img src="<?php bloginfo('template_url')?>/img/fig.nopic.project.list.gif" alt="No Pic" width="380" height="70" /><?php endif;?></p>
			<div class="cap">
				<h2><?php echo $data['copy'][0]?></h2></div>
			</div>
			<a href="<?php the_permalink()?>" class="permalink"></a>
		</div><?php endwhile;?>
	</div>
		
	</section>
	<?php if($wp_query->max_num_pages > 1):?><p class="btn read-more pager" id="pager"><?php next_posts_link('次のページへ');?></p><?php endif;?>
</div>

<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.autopager.js"></script>
<script type="text/javascript">
$(function() {
	var maxpage = <?php echo $wp_query->max_num_pages?>;
	
	$('a.styleswitch').click(function() {
		var el = $('.article .project');
		var cl = new Array('list', 'panel');
		
		for (i=0; i<cl.length; i++) {
			el.removeClass(cl[i]);
		}
		el.addClass($(this).attr('rel'));
	});
	
	$('#trigger-cat').click(function() {
		$(this).toggleClass('on');
		$('.cat-child').slideToggle(200);
	});
	
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
	    	init();
	    }
	});
	
	$('#pager').click(function() {
		$.autopager('load');
		return false;
	});
	
	$('nav.project .archive').hover(function() {
		$(this).find('ul').slideDown('fast');
	}, function() {
		$(this).find('ul').slideUp('fast');
	});
});

</script>

<?php get_footer(); ?>