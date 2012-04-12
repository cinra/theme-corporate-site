<?php
/**
 * Template Name: Profile
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();
the_post();?>

<div class="article no-padding">
	<header>
		<h1>プロフィール</h1>
		<hr />
		<ul class="nav clearfix">
			<li class="btn-message"><a href="#ancMessage">メッセージ</a></li>
			<li class="btn-company"><a href="#ancCompany">会社概要</a></li>
			<li class="btn-access"><a href="#ancAccess">アクセス</a></li>
			<li class="btn-recruit"><a href="#ancRecruit">採用情報</a></li>
		</ul>
	</header>
</div>

<div class="article sky not-head" id="ancMessage">
	<div class="bg"></div>
	<section class="message clearfix">
		<h1 class="label message">CINRA</h1>
		<div class="frame"></div>
		<div class="catch with_label">ごめんなさい、わたしたちは、幸せをつくることはできません。</div>
		<div class="text">あなたは何が好きですか？
		
		人、食べもの、音楽、スポーツ、映画……。
		好きなものは、人それぞれ。
		
		そういえば、どうしてそれを好きになったんでしたっけ？
		
		もしかすると、強い思い入れよりももっとかんたんで、ふとしたきっかけがあったのではないでしょうか？
		
		そんな偶然ともいえる出会いのおかげで、何かを好きになって、幸せや豊かさを感じる。
		なんだか不思議です。
		
		きっかけはふとしたことでも、誰もがそれぞれの幸せを持っているということは、
		この世界には、誰にも知り尽くすことのできないほど、たくさんの幸せのタネがあるのだと思います。
		
		もしも、「この幸せだけでいい」と思ってしまったらそれはとてももったいないことですし、
		時にはほかの何かを信じている人を傷つけてしまうかもしれません。
		
		幸せを知っていればいるほど、人の幸せも自分の豊かさになる。
		その連鎖が、社会をもっと楽しくしていくのだろうと思います。
		
		期待を裏切るようでしたら、ごめんなさい。
		わたしたちは、幸せをつくることはできません。
		だって、そのタネはもう数えきれないほどあるのですから。
		
		CINRAは、この世界の幸せのタネを、たくさんの人に届ける、伝える、郵便屋さんです。</div>
		<div class="clear"></div>
		
	</section>
</div>

<div class="article">
	<section id="ancCompany">
		<h1 class="label company">会社概要</h1>
		<div class="company-logo with_label">CINRA</div>
		<div class="content clearfix">
			<table class="company">
				<tr>
					<th><span>社名</span></th>
					<td>株式会社 CINRA（英文表記：CINRA,Inc）</td>
				</tr>
				<tr>
					<th><span>設立</span></th>
					<td>2006年5月（活動開始：2003年2月）</td>
				</tr>
				<tr>
					<th><span>所在地</span></th>
					<td>150-0011 東京都渋谷区東3-15-7 ヒューリック恵比寿ビル4F</td>
				</tr>
				<tr>
					<th><span>URL</span></th>
					<td><a href="http://www.cinra.co.jp/">http://www.cinra.co.jp/</a></td>
				</tr>
				<tr>
					<th><span>E-mail</span></th>
					<td><a href="mailto:info@cinra.net">info@cinra.net</a></td>
				</tr>
				<tr>
					<th><span>電話番号</span></th>
					<td>03-6427-4780</td>
				</tr>
				<tr>
					<th><span>FAX番号</span></th>
					<td>03-6427-4781</td>
				</tr>
				<tr>
					<th><span>代表取締役</span></th>
					<td>杉浦太一</td>
				</tr>
				<tr>
					<th><span>資本金</span></th>
					<td>10,000,000円</td>
				</tr>
				<tr>
					<th><span>取引銀行</span></th>
					<td>三菱東京UFJ銀行新宿中央支店<br />
					八千代銀行幡ヶ谷支店</td>
				</tr>
				<tr>
					<th><span>事業内容</span></th>
					<td>1. webサイトの企画・開発・運営<br />
					2. webサイト・DTP・映像・音源などの企画・デザイン・制作業務<br />
					3. 書籍・フリーペーパーの制作・出版・販売<br />
					4. 音楽CDの制作・販売<br />
					5. イベントの企画・運営<br />
					6. アーティスト・クリエイターのプロデュース・マネージメント業務<br />
					7. アーティスト・クリエイターの制作物の販売に関する支援業務<br />
					8. アーティスト・クリエイターの制作物の著作権管理業務<br />
					9. 前各号に附帯する一切の業務</td>
				</tr>
			</table>
			<div class="side company-photo"><img src="<?php bloginfo('template_url')?>/img/photo.company.jpg" /></div>
		</div>
		<div class="btn2top"><a href="#anc_top">PAGE TOP</a></div>
	</section>
	<section id="ancAccess">
		<h1 class="label access">アクセス</h1>
		<div class="map with_label">
			<p class="map"><img src="<?php bloginfo('template_url')?>/img/map.png" /></p>
			<p class="btn google-maps"><a href="http://g.co/maps/6n4nb" target="_blank">Google Mapsで地図を確認する</a></p>
			<?php /* p class="btn print-map alt"><a href="<?php bloginfo('url')?>/map/" target="_blank">地図を印刷する</a></p */ ?>
		</div>
		<hr />
		<div class="content address clearfix">
			<p class="companyname">株式会社 CINRA</p>
			<p>東京都渋谷区東3-15-7 ヒューリック恵比寿ビル4F<br />
			TEL：03-6427-4780<br />
			FAX：03-6427-4781</p>
			<p>JR恵比寿駅北口より徒歩5分<br />
			日比谷線恵比寿駅1・2出口より徒歩5分<br />
			明治通りを渋谷方面に少し歩いたところです</p>
		</div>
		<div class="btn2top"><a href="#anc_top">PAGE TOP</a></div>
	</section>
	<section id="ancRecruit">
		<h1 class="label recruit">採用情報</h1>
		<p class="no-entry">現在は募集を行なっておりません</p>
	</section>
</div>

<?php get_footer(); ?>
