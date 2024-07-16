
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
</body>
</html>