<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage cinra
 * @since cinra 0.1
 */

if (is_page()) {
	$parent = get_post(get_parent($post->ID));
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>" />
<meta name="description" content="株式会社CINRA（シンラ）のコーポレートウェブサイト" />
<meta name="keywords" content="株式会社,CINRA,magazine,エクスポップ,expop,expop!!!!!,cinra,シンラ,しんら,salon,アーティスト,アート,芸術,映画,シネマ,コラム,詩,写真,音楽,バンド,ミュージシャン,動画,ムービー,ライブ,イベント,フェスティバル,デザイン,演劇,ステージ,ニュース,文化,カルチャー,配信,発信,カレンダー,情報,インディーズ,アマチュア,mp3" />
<title><?php
	global $page, $paged;

	wp_title('|', true, 'right');
	bloginfo('name');

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ($site_description && (is_home() || is_front_page())) echo " | $site_description";

	// Add a page number if necessary:
	if ($paged >= 2||$page >= 2) echo ' | '.sprintf(__('Page %s', 'twentyten'), max($paged, $page));?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url')?>/favicon.ico" type="image/x-png" />
<?php wp_head();?>

<!--[if lt IE 9]>
<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url')?>/css/ie.css" />
<![endif]-->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-414449-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>

<body <?php body_class()?>>

<a name="anc_top" id="anc_top"></a>
<header class="global clearfix">
	<h1><a href="<?php bloginfo('url')?>">CINRA Inc. Corporate Website</a></h1>
	<nav class="clearfix">
		<ul class="main">
			<li class="news">
				<h2><a href="<?php bloginfo('url')?>/news/">news</a></h2>
			</li>
			<li class="profile trigger">
				<h2><a href="<?php bloginfo('url')?>/profile/">profile</a></h2>
				<ul class="sub">
					<li class="message"><a href="<?php bloginfo('url')?>/profile/#ancMessage">メッセージ</a></li>
					<li class="about"><a href="<?php bloginfo('url')?>/profile/#ancCompany">会社概要</a></li>
					<li class="access"><a href="<?php bloginfo('url')?>/profile/#ancAccess">アクセス</a></li>
					<li class="recruit"><a href="<?php bloginfo('url')?>/profile/#ancRecruit">採用情報</a></li>
				</ul>
			</li>
			<li class="service trigger">
				<h2><a href="<?php bloginfo('url')?>/service/">service</a></h2>
				<ul class="sub">
					<li class="creative"><a href="<?php bloginfo('url')?>/service/creative/">クリエイティブDiv</a></li>
					<li class="media"><a href="<?php bloginfo('url')?>/service/media/">メディアDiv</a></li>
					<li class="event"><a href="<?php bloginfo('url')?>/service/event/">イベントDiv</a></li>
					<li class="artist"><a href="<?php bloginfo('url')?>/service/artist/">アーティストDiv</a></li>
				</ul>
			</li>
			<li class="project">
				<h2><a href="<?php bloginfo('url')?>/project/">project</a></h2>
			</li>
			<li class="contact">
				<h2><a href="<?php bloginfo('url')?>/contact/">contact</a></h2>
			</li>
			<?php /* li class="mailmag">
				<h2><a href="">mailmag</a></h2>
			</li */ ?>
		</ul>
	</nav>
</header>

<div id="quicklink">
	<ul>
		<li class="cinranet"><a href="http://www.cinra.net/" target="_blank">CINRA.NET</a></li>
		<li class="cinrajob"><a href="http://www.cinra.net/job/" target="_blank">CINRA.JOB</a></li>
		<?php /* <li class="cinrastore"><a href="http://www.cinra.net/" target="_blank">CINRA.STORE</a></li> */ ?>
		<li class="expop"><a href="http://expop.jp/" target="_blank">expop!!!!!</a></li>
		<li class="cinrarec"><a href="http://www.cinra.net/records/" target="_blank">CINRA RECORDS</a></li>
		<li class="cinramag"><a href="http://cinra-magazine.net/" target="_blank">CINRA MAGAZINE</a></li>
	</ul>
</div>
