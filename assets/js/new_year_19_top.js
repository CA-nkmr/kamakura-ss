$(function() {
	// $("#nav,#filter").click(function(){
	// 	$(".nav,.Hright__list,#filter,.Hright").toggleClass("active");
	// });
	// $(".Hright__list li > a").click(function(){
	// 	$(".nav,.Hright__list,#filter").removeClass("active");
	// });


	$("#nav").click(function () {
		$(this).toggleClass("active");
		$(".Hright__list,#filter,.Hright").toggleClass("active");
	});


	// $(".menu-trigger").click(function () {
	// 	  $(this).toggleClass("active");
	// 	  $(this).next().toggleClass("onanimation");
	// 	  $('ul li').hide();
	// 	  $('ul li').each(function(i) {
	// 	 	 $(this).delay(80 * i).fadeIn(500);
	// 	  });
	// });



	// FAQ アコーディオンMenu
	$(".faq--a").hide();
	$(".faq--q").click(function(){
		$("p",this).toggleClass("acc--btn__txt--on");
		if($("+ul",this).css("display")=="none"){
			$("+ul",this).slideDown("500");
		}else{
			$("+ul",this).slideUp("500");
		}
	});
	$('.slide').slick({
		infinite: true,
		arrows:true,
		dots:false,
		autoplay:true,
		autoplaySpeed:2400,
		slidesToShow:1,
		slidesToScroll: 1,
		centerMode: true,
		centerPadding:0,
		asNavFor: '.slideThumb'
	});

	$('.slideThumb').slick({
		infinite: true,
   		slidesToShow: 4,
		asNavFor: '.slide',
		focusOnSelect: true
	});

});
$(function() {
	$(".hover_img").hover(
	//↑.hover_imgはアニメーションを付けたい要素を指定します。
	function(){
	     $(this).stop(true, true).fadeTo(300,0.65);
	     //↑ここでの設定はカーソルを乗せたときの動き
	     //最初の指定でスピード指定、二番目の指定で透明度の指定
	},
	function(){
	    $(this).stop(true, true).fadeTo(300,1.0);
	     //↑ここでの設定はカーソルが離れたときの動き
	     //最初の指定でスピード指定、二番目の指定で透明度の指定
	});
});
