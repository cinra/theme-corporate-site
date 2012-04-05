<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage cinra
 * @since cinra 0.1
 */

if (is_category()) {
	$present_cat = get_category($cat);
	$parent_cat = get_category(get_parent_category($cat));
}

?>

<?php if(!is_home()){?>
<footer id="foot" class="clearfix<?php if (isset($parent_cat)) echo ' '.$parent_cat->slug;?>">
	<ul class="nav clearfix">
		<li class="div_home"><a href="<?php bloginfo('url')?>/">ホーム</a></li>
		<?php if (isset($parent_cat) && $parent_cat->slug === 'service') :?>
		<li class="div_parent<?php if($present_cat->slug === "service"){?> current<?php }?>"><a href="<?php bloginfo('url')?>/service/">サービス</a></li>
		<li class="div_creative cat<?php if($present_cat->slug === "creative"){?> current<?php }?>"><a href="<?php bloginfo('url')?>/service/creative/">クリエイティブ</a></li>
		<li class="div_media cat<?php if($present_cat->slug === "media"){?> current<?php }?>"><a href="<?php bloginfo('url')?>/service/media/">メディア</a></li>
		<li class="div_event cat<?php if($present_cat->slug === "event"){?> current<?php }?>"><a href="<?php bloginfo('url')?>/service/event/">イベント</a></li>
		<li class="div_artist cat<?php if($present_cat->slug === "artist"){?> current<?php }?>"><a href="<?php bloginfo('url')?>/service/artist/">アーティスト</a></li><?php endif;?>
		<li class="btn2top"><a href="#anc_top">PAGE TOP</a></li>
	</ul>
	
	<div class="clear">
		<p class="social facebook"><a href="http://www.facebook.com/cinranet" target="_blank">facebook</a></p>
		<p class="social twitter"><a href="https://twitter.com/#!/cinranet" target="_blank" class="extLink">twitter</a></p>
		<div class="info">
			<p class="address">CINRA.inc : Sando Harajuku Bldg. 5F, Jimgumae Shibuya, TOKYO, 150-0001 / TEL 03-6427-4780 / FAX 03-6427-4781</p>
			<p class="map"><a href="<?php bloginfo('url')?>/profile#ancAccess">MAP</a></p>
		</div>
	</div>
	
	<p class="credit"><a href="<?php bloginfo('url')?>/term/">利用規約</a> | <a href="<?php bloginfo('url')?>/privacy/">プライバシーポリシー</a> | Photograph by Kato Arata &copy; CINRA inc, all rights reserved.</p>
</footer>
<?php }?>

<div id="bg"><img src="<?php bloginfo('template_url')?>/img/bg.jpg" width="1400" height="900" /></div>


</body>
<?php wp_footer();?>

<script type="text/javascript">
	var tpl_url = "<?php bloginfo('template_url')?>";
</script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.easing.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.fitimg.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.slider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/script.js"></script>

</html>