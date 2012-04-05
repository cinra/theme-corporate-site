<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<article>
	<header>
		<h1><?php single_cat_title()?></h1>
	</header>
	<section id="lead" class="clearfix">
		<div class="text">
			<h1>クライアントと消費者の想像を<br />
			120%越えるクリエイティブを。</h1>
			<p>クリエイティブ・ディビジョンでは、各種コミュニケーションツールの制作を行なっています。綿密なヒアリングとマーケットリサーチを踏まえ、「なぜその製品・企業・作品が素晴らしいのか」を伝えたいターゲットに訴求できる形で「ものづくり」を行なっています。</p>
			<p>マーケティングに裏打ちされたデザイン制作・システム構築は、「どこにでもある」ではない、「ここにしかない」クリエイティブとなり、消費者の生活を一層豊かになることを目指しています。</p>
		</div>
		<div class="img"><img src="<?php bloginfo('template_url')?>/img/dummy.lead.jpg" alt="dummy.lead" width="350" height="395" /></div>
	</section>
	<section><img src="<?php bloginfo('template_url')?>/img/creative.fig1.gif" alt="creative.fig1" width="792" height="117" /></section>
	
	<?php //get_template_part( 'loop', 'category' );?>
	
	<section id="list">
		<ul>
			<li class="clearfix">
				<div class="img"><img src="<?php bloginfo('template_url')?>/img/dummy.lec.jpg" alt="dummy.lec" width="140" height="80" /></div>
				<div class="title">
					<h1>LEC 東京リーガルマインド様 総合トップ</h1>
					<p class="description">見出しはいりますから見出しはいりますから見出しはいりますから</p>
				</div>
				<div class="data clearfix">
					<p class="exturl"><a href="">go to URL</a></p>
					<p class="date">08.2010</p>
					<p class="btn4open"><a href="#detail-1"></a></p>
				</div>
				<div class="detail clear" id="detail-1">
					<div class="img"><img src="<?php bloginfo('template_url')?>/img/dummy.lec.jpg" alt="dummy.lec" width="798" height="527" /></div>
					<div class="info">
						<h2>Credit</h2>
						<dl>
							<dt>Producer, Director</dt>
							<dd>Taichi SUGIURA</dd>
							<dt>Art Director, Designer, Flasher</dt>
							<dd>Sota IDE</dd>
							<dt>Developer</dt>
							<dd>PIXEL FACTORY INC,</dd>
						</dl>
					</div>
					<div class="background">
						<h2>Background</h2>
						<h3>潜在ユーザーにいかにアプローチするか</h3>
						<p>資格の総合スクール、LEC東京リーガルマインドの各試験課のWEBサイト。既存のサイトからのリニューアルで、膨大なページ数があるサイトをいかに見せていくかが課題となりました。<br />
						とくに今回は、すでに知識豊富な中上級者向けではなく、その資格に興味を持ち始めた潜在的な顧客向けのサイト構築のために、どのようなビジュアル表現と情報設計をしていくかがプロジェクトのカギとなりました。</p>
						<h3>潜在ユーザーにいかにアプローチするか</h3>
						<p>資格の総合スクール、LEC東京リーガルマインドの各試験課のWEBサイト。</p>
						<p>既存のサイトからのリニューアルで、膨大なページ数があるサイトをいかに見せていくかが課題となりました。とくに今回は、すでに知識豊富な中上級者向けではなく、その資格に興味を持ち始めた潜在的な顧客向けのサイト構築のために、どのようなビジュアル表現と情報設計をしていくかがプロジェクトのカギとなりました。</p>
						<h3>潜在ユーザーにいかにアプローチするか</h3>
						<p>資格の総合スクール、LEC東京リーガルマインドの各試験課のWEBサイト。既存のサイトからのリニューアルで、膨大なページ数があるサイトをいかに見せていくかが課題となりました。とくに今回は、すでに知識豊富な中上級者向けではなく、その資格に興味を持ち始めた潜在的な顧客向けのサイト構築のために、どのようなビジュアル表現と情報設計をしていくかがプロジェクトのカギとなりました。</p>
					</div>
				</div>
			</li>
		</ul>
	</section>
	
	<footer class="clearfix">
		<p class="btn2top"><a href="#anc_top">PAGE TOP</a></p>
	</footer>
</article>

<?php get_footer(); ?>