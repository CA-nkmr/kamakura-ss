
<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php');
?>
<div id="pagetop"><a href="#top">ページトップへ</a></div>
<?php wp_footer(); ?>	
<script type="text/javascript" src="//code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript">

$(function() {
    var showFlag = false;
    var topBtn = $('#pagetop');    
    topBtn.css('bottom', '-100px');
    var showFlag = false;
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            if (showFlag == false) {
                showFlag = true;
                topBtn.stop().animate({'bottom' : '20px'}, 200); 
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn.stop().animate({'bottom' : '-100px'}, 200); 
            }
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

  $(function(){
  $('a[href^="#"]').click(function(){
    var speed = 300;
    var headerHight = 120;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top-headerHight;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

</script>
<?php if(is_parent_slug() === 'members'||is_page('contact')): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
	<script src="/cms/wp-content/themes/kmkr/js/jquery.validationEngine-ja.js" type="text/javascript" charset="utf-8"></script>
	<script src="/cms/wp-content/themes/kmkr/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="/cms/wp-content/themes/kmkr/js/validationEngine.jquery.css" type="text/css"/>
<script>
jQuery(document).ready(function(){
	jQuery("#form1").validationEngine('attach', {
		scroll: false,
	});
    jQuery("#last_name").addClass("validate[required]").attr("data-prompt-position", "inline");
	jQuery("#first_name").addClass("validate[required]").attr("data-prompt-position", "inline");
    jQuery("#company").addClass("validate[required]").attr("data-prompt-position", "inline");
	jQuery("#business").addClass("validate[required]").attr("data-prompt-position", "inline");
    jQuery("#zip").addClass("validate[required]").attr("data-prompt-position", "inline");
	jQuery("#pref").addClass("validate[required]").attr("data-prompt-position", "inline");
    jQuery("#add").addClass("validate[required]").attr("data-prompt-position", "inline");
	jQuery("#email").addClass("validate[required,custom[email]]").attr("data-prompt-position", "inline");
	jQuery("#tel").addClass("validate[required,custom[phone]]").attr("data-prompt-position", "inline");
});
</script>
<?php endif; ?>
</body>
</html>