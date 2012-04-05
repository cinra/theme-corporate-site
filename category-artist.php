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
		<p class="description">「本当に聴きたい音楽」を<br />
		根絶やしにしない。</p>
		<div class="lead"><p>音楽を聴いて感動して涙したこと、なぐさめられたこと、<br />
		活力が湧いたこと、きっと誰にでもあるはずです。<br /><br />
		CDが売れないと言われて久しい昨今。<br />
		それでも、イヤフォンをつけている若者の数は変わっていない。<br />
		音楽の価値そのものは、いつの時代も変わらずに、生き続けています。<br /><br />
		アーティスト・ディビジョンでは、これまでのメディア活動を通じてつながった膨大なアーティストとのネットワークから、<br />
		「本当にリスナーが聴きたい音楽」を見つけ、それを製品にし、みなさんの元に届けています。</p></div>
		<hr />
		<?php /* ul class="nav clearfix">
			<li class="btn-artist-release"><a href="#ancRelease">リリース</a></li>
			<li class="btn-artist-pr"><a href="#ancPR">プロモーション</a></li>
		</ul */ ?>
		<p class="label">サービス -</p>
	</header>
	<section id="ancRelease">
		<h1 class="label release">リリース</h1>
		<div class="photo with_label">
			<div class="frame"><img src="<?php bloginfo('template_url')?>/img/photo.artist.records.jpg" alt="photo.artist.records" width="890" height="299" /></div>
			<?php // div class="nav records"><a>リリースタイトルを詳しく見る</a></div ?>
		</div>
		<div class="content clearfix">
			<div class="main">
				<h2>これはみんなに聴いてもらいたい！<br />
				自社音楽レーベル『CINRA RECORDS』</h2>
				<p>『CINRA RECORDS』では、日々たくさんの音楽と出会うなかで「これはみんなに聴いてもらいたい！」と唸ったものをCDリリースしています。中でも2009年1月にデビューした『ウミネコサウンズ』は、アルバムのリード曲『夕焼け』がiTunes Storeの『今週のシングル』に選出されたほか、同年の『FUJI ROCK FESTIVAL '09』にも出演。2010年のミニアルバム『宇宙旅行』のリリース時も東京FMなどのラジオ局にてパワープレイされるなど、大きな反響を呼んでいます。</p>
			</div>
			<div class="side">
				<h3><span>リリースアーカイブ</span></h3>
				<ul>
					<li>ウミネコサウンズ『夕焼け』2009.5.13発売</li>
					<li>ウミネコサウンズ『宇宙旅行』2010.1.20発売</li>
					<li>henrytennis『Eight Rare Cases』2006.5.3発売</li>
					<li>henrytennis『R.U.R』2009.11.11発売</li>
					<li>bahAMaba『( )』2006.11.22発売</li>
				</ul>
			</div>
		</div>
		<p class="btn view-releases"><a href="<?php bloginfo('url')?>/project/?cat=release">これまでのリリース作品の詳細を見る</a></p>
		<?php // div class="btn2top"><a href="#anc_top">PAGE TOP</a></div ?>
	</section>
	<?php /* section id="ancPR">
		<h1 class="label promotion">プロモーション</h1>
		<div class="photo with_label">
			<div class="frame"><img src="<?php bloginfo('template_url')?>/img/spacer.gif" alt="photo.artist.records" width="890" height="299" /></div>
		</div>
		<div class="content clearfix">
			<div class="main">
				<h2>トークイベントや展覧会など、企業さまのプロモーションイベントを</h2>
				<p>トークイベントや展覧会など、企業さまのプロモーションイベントを企画・運営・実施をしています。<br />
				WEB上でイベントの告知を行ない、イベントを実施し、その模様をまたWEB上に掲載し、来場者とも継続的にコミュニケーションを行なう施策を展開するなど、メディアを横断したプロモーションプランをご提供しています。</p>
			</div>
			<div class="side">
				<h3><span>実績</span></h3>
				<ul>
					<li>ペパボなどなど</li>
				</ul>
			</div>
		</div>
		<?php // p class="btn view-history"><a href="">これまでの実績を見る</a></p ?>
		<p class="btn contact-to-promotion alt"><a href="<?php bloginfo('url')?>/contact/">プロモーション代行などのお問い合わせ・ご相談はこちらから</a></p>
	</section */?>
</div>

<?php get_footer(); ?>