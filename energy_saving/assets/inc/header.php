<!-- header -->
<header class="ly-header">
	<div class="ly-header-inner">
		<div class="el-logo">
			<a href="http://www.kamakura-ss.co.jp/" target="_blank" rel="noopener">
				<img src="/energy_saving/assets/images/logo.png" alt="鎌倉製作所">
			</a>
		</div>
		<nav class="bl-gnav-wrapper">
			<ul class="bl-gnav">
				<?php if($gnav=="es-home"): ?>
					<li><a class="bl-gnav-list is-current" href="/energy_saving/">ホーム</a></li>
				<?php else: ?>
					<li><a class="bl-gnav-list" href="/energy_saving/">ホーム</a></li>
				<?php endif; ?>
				<?php if($gnav=="es-sim"): ?>
					<li><a class="bl-gnav-list is-current" href="/energy_saving/simulation/">省エネ効果シミュレーション</a></li>
				<?php else: ?>
					<li><a class="bl-gnav-list" href="/energy_saving/simulation/">省エネ効果シミュレーション</a></li>
				<?php endif; ?>
				<?php if($gnav=="es-home"): ?>
					<li><a class="bl-gnav-list" href="/energy_saving#anc-useful">お役立ち情報</a></li>
				<?php else: ?>
					<li><a class="bl-gnav-list" href="/energy_saving#anc-useful">お役立ち情報</a></li>
				<?php endif; ?>
				<li><a class="item-external" href="/contact/" target="_blank" rel="noopener">お問い合わせ</a></li>
			</ul>
		</nav>
		<!-- ハンバーガーメニュー -->
		<div class="bl-hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
		<!-- ハンバーガーメニュー -->
	</div>
	<!-- SP用メニュー -->
	<div class="bl-gnav-sp">
		<ul class="">
			<?php if($gnav=="es-home"): ?>
				<li><a class="bl-gnav-list is-current" href="/energy_saving/">ホーム</a></li>
			<?php else: ?>
				<li><a class="bl-gnav-list" href="/energy_saving/">ホーム</a></li>
			<?php endif; ?>
			<?php if($gnav=="es-sim"): ?>
				<li><a class="bl-gnav-list" href="/energy_saving/simulation/">省エネ効果シミュレーション</a></li>
			<?php else: ?>
				<li><a class="bl-gnav-list" href="/energy_saving/simulation/">省エネ効果シミュレーション</a></li>
			<?php endif; ?>
			<?php if($gnav=="es-home"): ?>
				<li><a class="bl-gnav-list el-anc" href="/energy_saving#anc-useful">お役立ち情報</a></li>
			<?php else: ?>
				<li><a class="bl-gnav-list el-anc" href="/energy_saving#anc-useful">お役立ち情報</a></li>
			<?php endif; ?>
			<li><a class="item-external" href="/contact/" target="_blank" rel="noopener">お問い合わせ</a></li>
		</ul>
	</div>
	<!-- SP用メニュー -->
</header>