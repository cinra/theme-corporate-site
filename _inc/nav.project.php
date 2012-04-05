<?php

$cat_project = get_categories(array('slug' => 'service', 'hide_empty' => false));
$cat = get_categories(array('parent' => $cat_project[0]->term_id, 'hide_empty' => false, 'orderby' => 'id'));
foreach ($cat as $c) $cat_id[] = $c->term_id;
$cat_str = implode(',', $cat_id);

?>

<nav class="project clearfix">
	<div class="ctrl clearfix">
		<div class="cat">
			<ul class="parent clearfix"><?php foreach($cat as $s):?>
				<li class="cat-<?php echo $s->slug?>"><a href="<?php bloginfo('url')?>/project/<?php echo $s->slug?>"><?php echo $s->name?></a></li>
			<?php endforeach;?></ul>
		</div>
		<?php /* div class="archive">
			<h2>アーカイブ</h2>
			<ul><?php wp_get_archives(array(
				'type'		=> 'monthly',
				'format'	=> 'html',
				'cat'		=> $cat_str
			));?></ul>
		</div */ ?>
		<div class="cat-child">
			<ul class="clearfix">
				<?php foreach($cat as $s):?><li>
				<?php $child = get_categories(array('parent' => $s->term_id, 'hide_empty' => false, 'orderby' => 'id'));?>
				<?php if(!empty($child)):foreach ($child as $c):?>
					<a href="<?php bloginfo('url')?>/project/<?php echo $s->slug?>/<?php echo $c->slug?>/"><?php echo $c->name?></a>
				<?php endforeach;endif;?>
				</li><?php endforeach;?>
			</ul>
		</div>
		<div class="sub-slide" id="trigger-cat"></div>
	</div>
	<div class="switch">
		<a class="styleswitch switch2panel" rel="panel">パネル</a>
		<a class="styleswitch switch2list" rel="list">リスト</a>
	</div>
</nav>