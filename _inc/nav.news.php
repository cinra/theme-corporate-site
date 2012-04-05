<?php

$cat_news = get_categories(array('slug' => 'news'));

$cat = get_categories(array('child_of' => $cat_news[0]->term_id));
#$cat[] = $cat_news[0];

#print_r($cat);

foreach ($cat as $c) {
	$cat_id[] = $c->term_id;
}
$cat_str = implode(',', $cat_id);
?>

<nav class="news clearfix">
	<div class="cat clearfix">
		<h2>カテゴリ</h2>
		<ul>
			<?php foreach($cat as $c):if ($c->slug != 'news'):?>
			<li><a href="<?php bloginfo('url')?>/news/<?php echo $c->slug?>/"><?php echo $c->name?></a></li>
			<?php endif;endforeach;?>
		</ul>
	</div>
	<?php /* div class="archive">
		<h2>アーカイブ</h2>
		<ul><?php wp_get_archives(array(
			'type'		=> 'monthly',
			'format'	=> 'html',
			'cat'		=> $cat_str
		));?></ul>
	</div */ ?>
</nav>