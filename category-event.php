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
		<p class="description">「目の前にいる人に伝える」<br />
		なんだかんだ、それが一番。</p>
		<div class="lead"><p>インターネット、モバイル、テレビ、新聞など、<br />
		多くのメディアがそれぞれの強みをもって、共存しています。<br />
		それでも、もっとも早く、深く、親密に伝えられるのは、<br />
		リアルな場所でのコミュニケーションです。<br /><br />
		イベント・ディビジョンでは、毎月、<br />
		入場無料の音楽イベント『exPoP!!!!!』の企画・運営・実施を行い、<br />
		まだ見ぬ音楽の価値をダイレクトに伝えています。<br /><br />
		また、そうしたノウハウから、企業・製品のプロモーションのための<br />
		音楽・展示・トークイベントなども開催しています。</p></div>
		<hr />
		<ul class="nav clearfix">
			<li class="btn-event-music"><a href="#ancMusic">音楽イベント</a></li>
			<?php /* li class="btn-event-exhibision"><a href="#ancExhibision">展示会</a></li */ ?>
			<li class="btn-event-other"><a href="#ancOther">その他のイベント</a></li>
		</ul>
		<p class="label">サービス -</p>
	</header>
	<section id="ancMusic">
		<h1 class="label music">音楽イベント</h1>
		<div class="photo with_label">
			<div class="frame"><img src="<?php bloginfo('template_url')?>/img/photo.event.expop.jpg" alt="photo.event.expop" width="890" height="299" /></div>
			<div class="nav expop"><a href="http://expop.jp" target="_blank">exPoP!!!!!オフィシャルサイトへ</a></div>
		</div>
		<div class="content clearfix">
			<div class="main">
				<h2>毎月開催！<br />
				入場無料の音楽イベント、『exPoP!!!!!』</h2>
				<p>毎月、ライブハウス「渋谷O-nest」で開催している入場無料音楽イベント『exPoP!!!!!』を開催しています。2007年から通算50回以上続くマンスリーイベントです。<br /><br />
				過去に出演したアーティストの中には、その後メジャーデビューを果たし、オリコンチャートに入り、武道館でのライブなどを行なうアーティストもおり、音楽好きだけでなく、CINRAがセレクトする若手アーティストを発掘する場として音楽業界からも注目をいただいています。</p>
			</div>
			<div class="side">
				<h3><span>これまでの主な出演アーティスト</span></h3>
				<p>相対性理論 / 神聖かまってちゃん / 世界の終わり / ねごと / avengers in sci-fi / DE DE MOUSE / のあのわ / □□□（クチロロ） / ふくろうず / MASS OF THE FERMENTING DREGS / suzumoku / トルネード竜巻 / 前野健太 / nhhmbase / Qomolangma Tomato ほか多数</p>
			</div>
		</div>
		<div class="btn2top"><a href="#anc_top">PAGE TOP</a></div>
	</section>
	<?php /* section id="ancExhibision">
		<h1 class="label exhibision">展示会</h1>
		<div class="photo with_label">
			<div class="frame"><img src="<?php bloginfo('template_url')?>/img/spacer.gif" alt="photo.event.other" width="890" height="300" /></div>
		</div>
		<div class="content clearfix">
			<div class="main">
				<p>トークイベントや展覧会など、企業さまのプロモーションイベントを企画・運営・実施をしています。<br /><br />
				WEB上でイベントの告知を行ない、イベントを実施し、その模様をまたWEB上に掲載し、来場者とも継続的にコミュニケーションを行なう施策を展開するなど、メディアを横断したプロモーションプランをご提供しています。</p>
			</div>
			<div class="side">
				<h3><span>これまでの主なイベント開催実績</span></h3>
				<ul>
					<li><span>アドビシステムズ様・博報堂</span>様<br />
					アドビCS5発売記念トークイベントの企画・出演</li>
					<li><span>マグレックス</span>様<br />
					アップルストア銀座にて製品紹介イベント開催（CSS Niteとのタイアップ企画）</li>
					<li><span>バンタンデザイン研究所</span>様<br />
					学生のTシャツ作品展示イベント</li>
				</ul>
			</div>
		</div>
		<div class="btn2top"><a href="#anc_top">PAGE TOP</a></div>
	</section */ ?>
	<section id="ancOther">
		<h1 class="label event">その他のイベント</h1>
		<div class="photo with_label">
			<div class="frame"><img src="<?php bloginfo('template_url')?>/img/photo.event.other.jpg" alt="photo.event.other" width="890" height="300" /></div>
		</div>
		<div class="content clearfix">
			<div class="main">
				<h2>企業やサービス、製品の魅力をダイレクトに伝える場をプロデュース。</h2>
				<p>トークイベントや展覧会など、企業さまのプロモーションイベントを企画・運営・実施をしています。<br /><br />
				WEB上でイベントの告知を行ない、イベントを実施し、その模様をまたWEB上に掲載し、来場者とも継続的にコミュニケーションを行なう施策を展開するなど、メディアを横断したプロモーションプランをご提供しています。</p>
			</div>
			<div class="side">
				<h3><span>これまでの主なイベント開催実績</span></h3>
				<ul>
					<li><span>アドビシステムズ様・博報堂様</span><br />
					アドビCS5発売記念トークイベントの企画・出演</li>
					<li><span>マグレックス様</span><br />
					アップルストア銀座にて製品紹介イベント開催（CSS Niteとのタイアップ企画）</li>
					<li><span>バンタンデザイン研究所様</span><br />
					学生のTシャツ作品展示イベント</li>
				</ul>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>