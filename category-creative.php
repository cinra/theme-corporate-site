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
		<p class="description">「伝えたいこと」は、<br />
		本当に伝わっていますか？</p>
		<div class="lead div_creative"><p>クリエイティブ・ディビジョンでは、<br />
		WEBサイトやパンフレットをはじめ、<br />
		様々なコミュニケーションツールの企画制作を行なっています。<br /><br />
		「自分たちのことは、どう伝えたらよいかわからない」<br />
		それは、どんな企業でも個人でも、同じだと思います。<br /><br />
		わたしたちは、<br />
		コミュニケーションのプロフェッショナルとして、<br />
		マーケット戦略、情報設計、システム構築、デザイン、言葉など、<br />
		あらゆる側面から「伝えたい人に伝わる」ための<br />
		モノづくりを追求・提供しています。</p></div>
		<p class="label">サービス -</p>
	</header>
	
	<section>
		<h1 class="label cinra">CINRA</h1>
		<div class="photo with_label">
			<div class="frame"><img src="<?php bloginfo('template_url')?>/img/photo.creative.cinra.jpg" alt="CINRA" width="890" height="300" /></div>
		</div>
		<div class="content clearfix">
			<div class="main">
				<p>たとえ「好きなデザイン」であっても、伝えたいことが伝わらなければ、それは「いいデザイン」とは呼べません。CINRAは、Webサイト、パンフレット、名刺、ロゴなどのデザイン制作だけでなく、プロモーション活動の戦略設計やコンテンツの企画・取材・編集、動画の撮影、時には楽曲の制作やコーディネートまで、トータルにプロモーション活動をお手伝いし、「届けたい人に伝わるツール」をご提供しています。</p>
			</div>
			<div class="side">
				<h3><span>事業概要</span></h3>
				<ul>
					<li><span>広告全般</span>の戦略設計・マーケティング調査</li>
					<li><span>WEBサイト</span>の企画・構築・運用</li>
					<li>パンフレットなどの<span>DTPデザイン</span></li>
					<li><span>ロゴなどのCI・VI</span>の策定・提案</li>
					<li>コンテンツの企画・取材・編集</li>
					<li><span>映像や楽曲</span>の制作・コーディネーション</li>
				</ul>
			</div>
		</div>
		<hr />
		<ul class="grid clearfix">
			<li class="web"><a href="<?php bloginfo('url')?>/project/creative/web-and-interactive/"></a>
				<p class="img"></p>
				<h2>Web・インタラクティブ</h2>
				<p class="description">Flashサイトからシステム構築まで。最近ではソーシャルメディアを活用したご依頼も。</p>
			</li>
			<li class="print"><a href="<?php bloginfo('url')?>/project/creative/print-dtp/"></a>
				<p class="img"></p>
				<h2>パンフレット・印刷物DTP</h2>
				<p class="description">パンフレット、駅広告、新聞広告、名刺などのDTPデザインから印刷まで承っています。</p>
			</li>
			<li class="logo"><a href="<?php bloginfo('url')?>/project/creative/ci-cv/"></a>
				<p class="img"></p>
				<h2>ロゴ、CI/CV</h2>
				<p class="description">ロゴタイプのデザインや、カラーや書体など、ブランドガイドラインの策定業務など。</p>
			</li>
			<li class="contents"><a href="<?php bloginfo('url')?>/project/creative/editorial/"></a>
				<p class="img"></p>
				<h2>コンテンツの企画・編集</h2>
				<p class="description">Webマガジンや会報誌などの企画・取材・編集・撮影を行なっています。</p>
			</li>
			<li class="music"><a href="<?php bloginfo('url')?>/project/creative/movie-and-music/"></a>
				<p class="img"></p>
				<h2>映像・音楽コンテンツ</h2>
				<p class="description">動画の企画・撮影・編集。オリジナル楽曲の制作・コーディネーションなど。</p>
			</li>
		</ul>
		<p class="btn view-project"><a href="<?php bloginfo('url')?>/project/?cat=creative">これまでの制作実績を見る</a></p>
		<p class="btn contact-us alt"><a href="<?php bloginfo('url')?>/contact/">ウェブサイトやパンフレットなどのご相談、お待ちしています。</a></p>
	</section>
</div>

<?php get_footer(); ?>