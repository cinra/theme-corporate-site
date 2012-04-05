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
		<p class="description">日本のクリエイティブシーンに<br />
		特化したWEBメディア。</p>
		<div class="lead div_creative"><p>メディア・ディビジョンは、自社で運営するWEBメディアの企画・運営を行なっています。<br /><br />
		8年以上の運用を経て、現在日本のカルチャー情報を扱うサイトとしては日本最大規模となる『CINRA.NET（シンラドットネット）』と、クリエイティブ業界に特化した求人サイト『CINRA.JOB（シンラドットジョブ）』を展開しています。<br /><br />
		音楽やアート、映画に触れた時の感動や喜びを<br />
		より多くの人たちと共有して、毎日をもっと面白くしたい！<br />
		そんな想いで日々情報を発信しています。</p></div>
		<hr />
		<ul class="nav clearfix">
			<li class="btn-media-net"><a href="#ancNet">CINRA.NET</a></li>
			<li class="btn-media-job"><a href="#ancJob">CINRA.JOB</a></li>
			<?php // li class="btn-media-mag"><a href="#ancMag">CINRA MAGAZINE</a></li ?>
		</ul>
		<p class="label">サービス -</p>
	</header>
	<section id="ancNet">
		<h1 class="label net">CINRA.NET</h1>
		<div class="photo with_label">
			<div class="frame"><img src="<?php bloginfo('template_url')?>/img/photo.media.net.jpg" alt="photo.media.net" width="890" height="299" /></div>
			<div class="nav cinranet"><a href="http://www.cinra.net/" target="_blank">CINRA.NETを見る</a></div>
		</div>
		<div class="content clearfix">
			<div class="main">
				<h2>音楽、アート、デザイン、映画、演劇…<br />
				カルチャーニュースサイト「CINRA.NET」</h2>
				<p>2003年にサイト開設をしたWebメディア『CINRA.NET』。<br />
				10代後半から30代前半までの音楽、アート、映画好きの若者が毎月50万人訪れています（2011年6月時点）。<br /><br />
				今、日本のクリエイティブシーンで何が起きていて、何が「面白い」のかを、毎日発信する、情報ポータルサイトです。作品やサービスのプロモーションの場としても幅広くご活用いただいています。</p>
				<div class="data">
					<h3>データ</h3>
					<dl>
						<dt>開設日</dt>
						<dd>2007年10月</dd>
						<dt>月間ページビュー<dt>
						<dd>1,500,000ページビュー</dd>
						<dt>月間ユーザー数<dt>
						<dd>500,000人</dd>
					</dl>
				</div>
			</div>
			<div class="side">
				<h3><span>掲載実績</span></h3>
				<table>
					<tr>
						<th><span>音楽</span></th>
						<td>細野晴臣、YUKI、くるり、コーネリアス、砂原良徳、土屋アンナ、スチャダラパー</td>
					</tr>
					<tr>
						<th><span>映画</span></th>
						<td>北野武、蒼井優、松田翔太、岩井俊二、細田守、是枝裕和</td>
					</tr>
					<tr>
						<th><span>アート・デザイン</span></th>
						<td>草間彌生、篠山紀信、佐藤可士和、箭内道彦、中村勇吾</td>
					</tr>
					<tr>
						<th><span>演劇</span></th>
						<td>松尾スズキ、飴屋法水、康本雅子</td>
					</tr>
					<tr>
						<th><span>その他</span></th>
						<td>谷川俊太郎、藤原ヒロシ、東浩紀、片桐仁（ラーメンズ）、森達也 ほか多数</td>
					</tr>
				</table>
			</div>
		</div>
		<p class="btn view-promotion-project"><a href="<?php bloginfo('url')?>/project/?cat=media">過去のプロモーション実績を見る</a></p>
		<p class="btn promote-us alt"><a href="<?php bloginfo('url')?>/contact/">媒体資料やプロモーションのご相談はこちらから</a></p>
		<div class="btn2top"><a href="#anc_top">PAGE TOP</a></div>
	</section>
	<section id="ancJob">
		<h1 class="label job">CINRA.JOB</h1>
		<div class="photo with_label">
			<div class="frame"><img src="<?php bloginfo('template_url')?>/img/photo.media.job.jpg" alt="photo.media.job" width="890" height="298" /></div>
			<div class="nav cinrajob"><a href="http://www.cinra.net/job/" target="_blank">CINRA.JOBを見る</a></div>
		</div>
		<div class="content clearfix">
			<div class="main">
				<h2>仕事との出会いをもっと幅広く、深く。<br />
				クリエイティブ業界の求人情報サイト「CINRA.JOB」</h2>
				<p>2011年6月にスタートしたクリエイティブ業界の求人情報サイト「CINRA.JOB」。<br />
				『CINRA.JOB』は、WEB、デザイン、音楽、出版、編集、映画、テレビ、CM、アートなど、クリエイティブ業界に特化した求人サービスです。</p>
				<p>今クリエイティブ業界で必要とされている人材情報、今ここにしかない出会いを、さまざまなかたちで発信・支援しています。</p>
				<div class="data">
					<h3>データ</h3>
					<dl>
						<dt>開設日</dt>
						<dd>2011年6月</dd>
						<dt>月間ページビュー</dt>
						<dd>180,000ページビュー</dd>
						<dt>月間ユーザー数</dt>
						<dd>50,000人</dd>
					</dl>
				</div>
			</div>
			<div class="side">
				<h3><span>掲載実績</span></h3>
				<table>
					<tr>
						<th><span>音楽</span></th>
						<td>タワーレコード株式会社 / エイベックス・グループ・ホールディングス株式会社 / MTV Networks Japan株式会社 / 有限会社烏龍舎</td>
					</tr>
					<tr>
						<th><span>出版・編集</span></th>
						<td>株式会社幻冬舎メディアコンサルティング / 株式会社キネマ旬報社 / 株式会社東京ピストル</td>
					</tr>
					<tr>
						<th><span>WEB・デザイン</span></th>
						<td>株式会社バスキュール / 株式会社イメージソース / 株式会社エイド・ディーシーシー / 株式会社ワン・トゥー・テン・デザイン</td>
					</tr>
					<tr>
						<th><span>TV・CM</span></th>
						<td>株式会社ADKアーツ / テレコムスタッフ株式会社 / 株式会社いまじん</td>
					</tr>
					<tr>
						<th><span>アート</span></th>
						<td>有限会社カイカイキキ / 独立行政法人 国立新美術館</td>
					</tr>
				</table>
				<p class="caption">他多数</p>
			</div>
		</div>
		<?php // p class="btn view-recruit"><a href="">これまでの掲載企業様一覧を見る</a></p ?>
		<p class="btn to-recruit alt"><a href="https://www.cinra.co.jp/contact/">求人掲載の資料請求・ご相談はこちらから</a></p>
		<div class="btn2top"><a href="#anc_top">PAGE TOP</a></div>
	</section>
	<section id="ancMag">
		<h1 class="label mag">CINRA MAGAZINE</h1>
		<div class="photo with_label">
			<div class="frame"><img src="<?php bloginfo('template_url')?>/img/photo.media.mag.jpg" alt="photo.media.mag" width="890" height="298" /></div>
			<div class="nav cinramag"><a href="http://cinra-magazine.net/" target="_blank">CINRA MAGAZINEを見る</a></div>
		</div>
		<div class="content clearfix">
			<div class="main">
				<p>法人化前の2004年から2008年まで季刊で発行し、都内を中心に全国で無料配布されていたフリーCDマガジン『CINRA MAGAZINE』。<br /><br />
				「新たなカルチャーシーンをつくる」をコンセプトに毎号アート、音楽、映画、演劇、書籍などジャンルごとの情報を発信し続け、2008年に『CINRA.NET』と統合されることを機に休刊。<br /><br />
				CDをパソコンに入れて読む新感覚のデジタルマガジンで、さまざまな楽曲や映画作品も収録されており、CDからもWebサイトからも楽しめるハイブリッドメディアとして支持をいただいていました。</p>
				<p class="remark"><span>※CINRA MAGAZINEは、2008年発行の第19号をもちまして休刊しています<br />
				バックナンバーは公式サイトよりご覧頂けます。</span></p>
				<div class="data">
					<h3>データ</h3>
					<dl>
						<dt>発行周期</dt>
						<dd>季刊（1,4,7,10月の20日）</dd>
						<dt>発行部数</dt>
						<dd>10,000部</dd>
						<dt>配布場所</dt>
						<dd>全国のカフェ、ライブハウス、ギャラリー、CDショップなど</dd>
					</dl>
				</div>
			</div>
			<div class="side">
				<h3><span>掲載実績（抜粋・順不同）</span></h3>
				<p>井筒和幸（映画監督） / ILL-BOSSTINO（THA BLUE HARB） / 土屋敏男（プロデューサー） / 上川あや（世田谷区議会議員） / 鈴木謙介（批評家） / 鹿野淳（編集者） / 佐藤直樹（デザイナー） / 祖父江慎（デザイナー） / 小谷元彦（アーティスト） / 星野智幸（小説家） / 田名網敬一（アーティスト） / 椹木野衣（美術批評家） / 藤原新也（写真家） / 佐々木敦（批評家） / 森達也（映画監督） / 相対性理論 / 54-71 / DE DE MOUSE / まつきあゆむ / トクマルシューゴ / 大谷能生 / 森村泰昌 / 伊藤ガビン ほか多数</p>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>