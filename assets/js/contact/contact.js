$(function() {



	  $(".hankaku").change(function(){
	      var str = $(this).val();
	      str = str.replace( /[Ａ-Ｚａ-ｚ０-９－！”＃＄％＆’（）＝＜＞，．？＿［］｛｝＠＾～￥]/g, function(s) {
	          return String.fromCharCode(s.charCodeAt(0) - 65248);
	      });
	      $(this).val(str);
	  }).change();


	  $(".zenkaku").change(function(){
	   var str = $(this).val();
	   str = str.replace( /[A-Za-z0-9-!"#$%&'()=<>,.?_\[\]{}@^~\\]/g, function(s) {
	    return String.fromCharCode(s.charCodeAt(0) + 65248);
	   });
	   $(this).val(str);
	  }).change();




});


$('#agree').click(function(){
    if($("#agree").prop('checked')) {
        $('.privacy-chk__wrapper').find('.chk-control').addClass('is-checked');
        $('#btn-confirm').removeClass('is-not-submit');
    } else{
        $('.privacy-chk__wrapper').find('.chk-control').removeClass('is-checked');
        $('#btn-confirm').addClass('is-not-submit');
    }
});




