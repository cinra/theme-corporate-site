<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();

$parent_cat = get_categories(array('slug' => 'service', 'hide_empty' => false));
$parent_catID = $parent_cat[0]->term_id;
$chekid = $cat->category_nicename;
the_post();

$cat = array();
$raw_cat = get_the_category();

foreach ($raw_cat as $raw) {
	if ($raw->category_parent == $parent_catID) $cat[] = $raw;
}

#print_r($cat);

if (empty($cat[0]->category_nicename)) $cat[0]->category_nicename = "service";

$dat = get_post_custom();

$img = get_the_post_image(get_the_ID());//ギャラリーの画像を取得
?>

<div class="article">
	<header>
		<h1>プロジェクト</h1>
		<p class="description"><?php the_title()?></p>
		<div class="infohead">
			<p class="category"><span>category</span> <a href="<?php bloginfo('url')?>/project/<?php echo $cat[0]->category_nicename?>/"><?php echo $cat[0]->category_nicename?></a></p>
			<?php if(!empty($dat['date_value'])):?><p class="year"><span>date</span> <?php echo $dat['date_value'][0]?></p><?php endif;?>
		</div>
	</header>
	
	<hr />
	
	<?php if(!empty($img)) :?>
		<div class="slide">
			<div class="mask">
				<ul class="clearfix">
					<?php foreach($img as $v):
						$i = wp_get_attachment_image_src($v->ID, 'large');
						$li = wp_get_attachment_image_src($v->ID, 'full');
						echo '<li><img src="'.$i[0].'" width="'.$i[1].'" height="'.$i[2].'" /></li>';
						endforeach;?>
				</ul>
			</div>
			<div class="nav clearfix">
				<a class="prev">prev</a>
				<a class="next">next</a>
			</div>
		</div>
	<?php endif;?>
	
	<section class="projectsingl project-single" id="autopage">
		<div class="content clearfix">
			<div class="main">
				<h2><span><?php echo $dat['copy'][0]?></span></h2>
				<div class="content">
					<div class="col"><?php echo apply_filters('the_content', separate_content($post->post_content));?></div>
					<div class="col last"><?php echo apply_filters('the_content', separate_content($post->post_content, 1));?></div>
				</div>
			</div>
			<div class="side">
				<?php if(!empty($dat['exlink'])):?><p class="btn launch-external-link"><a href="<?php echo $dat['exlink'][0]?>" class="small" target="_blank"></a></p><?php endif; ?>
				<div class="social">
					<!-- twitter -->
					<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="none">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					<!-- google+ -->
					<g:plusone size="medium" annotation="none"></g:plusone>
					<script type="text/javascript">
					  (function() {
					    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					    po.src = 'https://apis.google.com/js/plusone.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					  })();
					</script>
					<!-- facebook -->
					<iframe src="//www.facebook.com/plugins/like.php?href&amp;send=false&amp;layout=button_count&amp;width=70&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:21px;" allowTransparency="true"></iframe>
				</div>				
				<div class="data">
					<?php if(!empty($dat['staff'][0])):?><h3><span>Credit</span></h3>
					<p><?php echo nl2br($dat['staff'][0])?></p><?php endif;?>
					<?php if(!empty($dat['date_label']) && !empty($dat['date_value'])):?><h3><span><?php echo $dat['date_label'][0]?></span></h3>
					<p><?php echo $dat['date_value'][0]?></p><?php endif;?>
					<?php if(!empty($dat['list_label']) && !empty($dat['list_value'])):?><h3><span><?php echo $dat['list_label'][0]?></span></h3>
					<p><?php echo nl2br($dat['list_value'][0])?></p><?php endif;?>
				</div>	
			</div>			
		</div>
		<?php if(!empty($dat['exlink'])):?><p class="btn launch-external-link"><a href="<?php echo $dat['exlink'][0]?>" target="_blank"></a></p><?php endif; ?>
		
		<hr />
		
		<?php 
		$arg = array(
			'category_name'		=> $cat[0]->category_nicename,
			'posts_per_page'	=> 4,
			'exclude'			=> $post->ID
		);
		
		//if ($_GET['cat']) $arg['category_name'] = $_GET['cat'];
		
		query_posts($arg);
		?>
		
		<section class="project related-project panel clearfix">
			<p class="label-new">最新の関連項目</li>
		<?php
			
			/*$post = get_posts(array(
				'showposts'		=> 2
			));*/
			
			while(have_posts()):the_post();
			
			$cat = array();
			$raw_cat = get_the_category();
			
			foreach ($raw_cat as $raw) {
				if ($raw->category_parent == $parent_catID) $cat[] = $raw;
			}
			
			$dat = get_post_custom();
			
			$data = array();
			foreach ($dat as $k => $d) {
				$key = array('date_label','date_value', 'copy');
				if (in_array($k, $key)) $data[$k] = $d;
			}
			
			?><div class="content clearfix trigger_link">
				<div class="main">
					<h3><?php the_title()?></h3>
					<?php if(!empty($cat)):?><?php foreach($cat as $c):?><a href="<?php bloginfo('url')?>/news/<?php echo $c->category_nicename?>/"><li class="<?php echo $c->category_nicename?>"> <?php endforeach;?></li></a><?php endif;?>
					<?php if(!empty($data)):?><p class="data">
						<?php if(!empty($data['date_label']) && !empty($data['date_value'][0])):?><?php echo $data['date_value'][0]?><?php endif;?>
					<?php endif;?>
				</div>
				<div class="side">
					<?php if(has_post_thumbnail()):?><p class="img-panel"><?php the_post_thumbnail(array(200, 9999), array('title' => get_the_title(), 'position_fix' => array(190,160)))?><?php else:?><img src="<?php bloginfo('template_url')?>/img/fig.nopic.project.panel.gif" alt="No Pic" width="200" height="160" /></p><?php endif;?>
					<div class="cap">
						<h2><?php echo $data['copy'][0]?></h2>
					</div>
				</div>
				<a href="<?php the_permalink()?>" class="permalink"></a>
			</div><?php endwhile;?>
			
			<script type="text/javascript">
				$(function() {
					$('nav.project .archive').hover(function() {
						$(this).find('ul').slideDown('fast');
					}, function() {
						$(this).find('ul').slideUp('fast');
					});
				});
			</script>
		</section>
		<hr />
		<?php include('_inc/nav.project.php')?>
	</section>	
</div>

<?php get_footer(); ?>