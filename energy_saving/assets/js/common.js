$(function() {
	var $win = $(window),
	$header = $('header'),
		animationClass = 'is-animation';
		$win.on('load scroll', function() {
		var value = $(this).scrollTop();
		if ( value > 100 ) {
			$header.addClass('is-animation');
		} else {
			$header.removeClass('is-animation');
		}
	});
});

$(document).ready(function(){
	const headerHight = $("header").height();
	// var headerHight = 90;
	//URLのハッシュ値を取得
	var urlHash = location.hash;
	//ハッシュ値があればページ内スクロール
	if(urlHash) {
		//スクロールを0に戻す
		$('body,html').stop().scrollTop(0);
		setTimeout(function () {
		//ロード時の処理を待ち、時間差でスクロール実行
		scrollToAnker(urlHash) ;
		}, 100);
	}

	//通常のクリック時
	$('a[href^="#"]').click(function() {
		//ページ内リンク先を取得
		var href= $(this).attr("href");
		//リンク先が#か空だったらhtmlに
		var hash = href == "#" || href == "" ? 'html' : href;
		//スクロール実行
		scrollToAnker(hash);
		//リンク無効化
		return false;
	});

	// 関数：スムーススクロール
	// 指定したアンカー(#ID)へアニメーションでスクロール
	function scrollToAnker(hash) {
		var target = $(hash);
		var position = target.offset().top - headerHight;
		$('body,html').stop().animate({scrollTop:position}, 500);
	}
})

// SP用メニュー
$(function () {
	$(".bl-hamburger").click(function () {
		$(this).toggleClass('active');
		$(".bl-gnav-sp").slideToggle();
	});
	$(".el-anc").click(function () {
		$(".bl-hamburger").removeClass("active");
	});
});

// SP用メニューを展開した状態で画面幅が960pxを超えた場合
$(window).on('resize', function () {
    if (window.matchMedia('(min-width:960px)').matches) {
		// メニューを戻す
		$(".bl-hamburger").removeClass("active");
		$(".bl-gnav-sp").slideUp();
    }
});

// パララックス
var rellax = new Rellax('.el-parallax', {
	// speed: 0.8,
	// speed: 1.8,
	speed: 3.6,
	center: false,
	vertical: true,
  	horizontal: false,
});


// class ParallaxEffectBackground {
// constructor() {
//     this.devided = 5;
//     this.target = '.container';
//     this.setBackgroundPosition();
// }
// getScrollTop() {
//     return Math.max(
//     window.pageYOffset,
//     document.documentElement.scrollTop,
//     document.body.scrollTop,
//     window.scrollY
//     );
// }
// setBackgroundPosition() {
//     document.addEventListener('scroll', e => {
//     const scrollTop = this.getScrollTop();
//     const position = scrollTop / this.devided;
//     if (position) {
//         document.querySelectorAll(this.target).forEach(element => {
//         element.style.backgroundPosition = 'center top -' + position + 'px';
//         });
//     }
//     });
// }
// }
// document.addEventListener('DOMContentLoaded', event => {
// new ParallaxEffectBackground();
// });