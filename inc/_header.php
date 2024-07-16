<div class="header">
	<div class="header__inner">
		<div class="Hleft">
			<h1>工場換気扇・屋上換気扇・ルーフファン｜株式会社 鎌倉製作所</h1>
			<a href="/"><img class="logo" src="/assets/images/img_header_logo.png" alt="鎌倉製作所" /></a>
		</div>
		<div class="Hright">
			<ul>
				<?php if($gnav=="products"): ?>
					<li><a href="/products/index.html" class="txtL active">製品情報</a></li>
				<?php else: ?>
					<li><a href="/products/index.html" class="txtL">製品情報</a></li>
				<?php endif; ?>

				<?php if($gnav=="case"): ?>
					<li><a href="/show_case/index.html" class="txtL active">導入事例</a></li>
				<?php else: ?>
					<li><a href="/show_case/index.html" class="txtL">導入事例</a></li>
				<?php endif; ?>

				<?php if($gnav=="tech"): ?>
					<li><a href="/tech/total/index.html" class="txtL active">技術情報</a></li>
				<?php else: ?>
					<li><a href="/tech/total/index.html" class="txtL">技術情報</a></li>
				<?php endif; ?>

				<?php if($gnav=="company"): ?>
					<li><a href="/corp/index.html" class="txtL active">企業情報</a></li>
				<?php else: ?>
					<li><a href="/corp/index.html" class="txtL">企業情報</a></li>
				<?php endif; ?>

				<?php if($gnav=="cad"): ?>
					<li><a href="/download/index.html" class="txtL active">CAD・カタログ</a></li>
				<?php else: ?>
					<li><a href="/download/index.html" class="txtL">CAD・カタログ</a></li>
				<?php endif; ?>

				<?php if($gnav=="contact"): ?>
					<li class="lst"><a href="/contact/" class="hcont active">お問い合わせ</a></li>
				<?php else: ?>
					<li class="lst"><a href="/contact/" class="hcont">お問い合わせ</a></li>
				<?php endif; ?>
				<li class="lst searchBox"><a href="##" class="search"><img src="/assets/images/search.png" alt="検索アイコン" /></a>
					<ul class="search__form search">
						<li class="menu--search">
							<form name="search" id="search" action="//www.google.co.jp/search" method="get">
								<input name="as_q" type="search" id="srch" maxlength="255" value="" />
								<input name="btnG" type="submit" id="search_btn" value="検索"/>
								<input type="hidden" value="ja" name="hl" />
								<input type="hidden" value="UTF-8" name="ie" />
								<input type="hidden" value="https://www.kamakura-ss.co.jp/" name="domains" />
								<input type="hidden" value="https://www.kamakura-ss.co.jp/" name="sitesearch" />
							</form>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<a id="header"></a>
