<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
    
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<footer id="footer">
  <div class="footWrapper">
    <div class="row1">
      <a href="#" style="width:80px;"><img src="<?php echo G5_URL ?>/ackr-imgs/ackr-logo-gray.svg" alt="로고_무채색"></a>
      <p class="ackrfull">Academic Center for K-Religion</p>
    </div>
    <div class="row1">
      <div class="col">
        <p><a href="#"><b>회원약관</b></a><span class="v-line">|</span> <a href="#"><b>개인정보 취급 방침</b></a></p>
      </div>
      <div class="col">
        <p>서울시 마포구 백범로 35 (신수동) 서강대학교 다산관 637호<span class="v-line v-line2">|</span> <span>Copyright ⓒ 2021 <b>ACKR</b> All rights reserved.</span></p>
        <span></span>
      </div>
    </div>
  </div>
</footer>

<style>
#footer {
  position: relative;
  background: #eee;
  height: 150px;
  width: 100%;
}
  .footWrapper {
    padding: 1rem 0;
    width: 1200px;
    position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
  }
    .footWrapper > .row1:first-child {
      padding-right: 2rem;
      border-right: 2px solid #e1e1e1;
    }
    .footWrapper > .row1:last-child {
      padding-left: 2rem;
    }
      .row1 > .col > p {display: flex; padding: 4px 0;}
      .row1 > .col > span > a {padding-right: 0 1em;}
      .row1 > .col:last-child>  p, .ackrfull {font-size: 14px;}
      .v-line {margin: 0 1em; color: #ddd}

@media(max-width:1200px) {
  #footer {
    height: 200px;
  }

  .footWrapper {
    width: 100%;
    flex-direction: column;

  }
  .footWrapper > .row1:first-child {
    padding-right: 2rem;
    border-right: none;
  }
  .footWrapper > .row1:first-child {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .footWrapper > .row1 > .col > p {
    justify-content: center;
  }
  .footWrapper > .row1:first-child,
  .footWrapper > .row1:last-child  {
    padding: 0;
  }
  .row1 > .col:first-child {
    padding: 1rem 0;
  }
  .row1 > .col:last-child >  p {
    flex-direction: column;
    word-break:keep-all;
    text-align: center;
    padding: 0 1em;
  }
  .v-line2 {display:none;}
}
}
</style>

<div class="scrollTopBtn" id="top">
  <i class="bi bi-arrow1-up-square"></i>
</div>
<style media="screen">
.scrollTopBtn {
  position: fixed; z-index: 10;
  bottom: 18px; right: 18px;
  font-size:2.5rem; opacity: .5; cursor: pointer;
}
@media (max-width:640px) {
  .scrollTopBtn {
    bottom: 12px; right: 12px;
  }
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo G5_URL ?>/ackr-js/nav.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script><script>AOS.init();</script>
<script>
  $("#top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");