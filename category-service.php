<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();
?>

<div class="article">
	<header>
		<h1><?php single_cat_title()?></h1>
		<p class="description">CINRAは、この世界のどこかにある幸せのタネを、<br />
		たくさんの人に届ける・伝える、郵便屋さんです。</p>
		<div class="text clearfix">
			<p class="first-column">WEBサイトやパンフレットのデザイン、取材や編集、イベントの開催やCDの販売……。一見すると「色々やってそう」。でも、実は一本の柱があります。それは「コミュニケーション」、つまりは「誰かに何かを伝える」という柱です。</p>
			<p class="second-column">企業や製品、作品やサービスが持っている価値を、まだそれを知らない人たちに伝えたい。CINRAは、マーケティング、テクノロジー、デザイン、言葉、音楽、映像など、無数の手段を自在に駆使して、「伝えたいことを伝えたい人に届ける」郵便屋さんです。</p>
		</div>
	</header>
	<hr />
	<section id="lead" class="clearfix">
		<div id="fig-service">
			<a href="<?php bloginfo('url')?>/service/creative/" class="creative">広告全般の戦略設計・マーケティング調査 / WEBサイトの企画・構築・運用 / パンフレットなどのDTPデザイン・ロゴなどのCI・VIの策定・提案 / コンテンツの企画・取材・編集 / 映像や楽曲の制作・コーディネーション</a>
			<a href="<?php bloginfo('url')?>/service/media/" class="media">・カルチャーポータルサイト『CINRA.NET』の運営・『CINRA.NET』を活用したプロモーションの企画・実施・クリエイティブ業界に特化した求人情報サイト『CINRA.JOB』の運営</a>
			<a href="<?php bloginfo('url')?>/service/event/" class="event">毎月開催の入場無料音楽イベント『exPoP!!!!!』の企画・運営・実施 / 企業・製品のプロモーションイベント企画・運営・実施</a>
			<a href="<?php bloginfo('url')?>/service/artist/" class="artist">音楽レーベル「CINRA RECORDS」の運営・CDリリース / アーティストのマネージメント プロモーション代行</a>
		</div>
		<div id="bubble">
			<img src="<?php bloginfo('template_url')?>/img/bubble.service.creative.png" alt="bubble.service.creative" width="398" height="173" id="bubble_creative" />
			<img src="<?php bloginfo('template_url')?>/img/bubble.service.media.png" alt="bubble.service.creative" width="398" height="173" id="bubble_media" />
			<img src="<?php bloginfo('template_url')?>/img/bubble.service.event.png" alt="bubble.service.creative" width="398" height="173" id="bubble_event" />
			<img src="<?php bloginfo('template_url')?>/img/bubble.service.artist.png" alt="bubble.service.creative" width="398" height="173" id="bubble_artist" />
		</div>
		<p class="btn view-project"><a href="<?php bloginfo('url')?>/project/">これまでの制作実績を見る</a></p>
	</section>
</div>

<?php get_footer(); ?>