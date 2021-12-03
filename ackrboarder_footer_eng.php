<style>
  #footer .container .row .col:nth-child(1) ul li:nth-child(1) a {font-size: 14px}
  #footer .container .row .col:nth-child(1) ul li:nth-child(2) a {font-size: 12px}
  #footer .container .row .col:nth-child(1) ul li:nth-child(3) a {font-size: 12px}
</style>
<footer id="footer">
  <div class="footWrapper">
    <div class="row1">
      <a href="#" style="width:80px;"><img src="<?php echo G5_URL ?>/ackr-imgs/ackr-logo-gray.svg" alt="로고_무채색"></a>
      <p class="ackrfull">Academic Center for K-Religion</p>
    </div>
    <div class="row1">
      <div class="col">
        <p><a href="#"><b>Terms & Conditions</b></a><span class="v-line">|</span> <a href="#"><b>Privacy Policy</b></a></p>
      </div>
      <div class="col">
        <p>#637, Dasan Hall, Sogang University, 35, Baekbeom-ro, Mapo-gu, Seoul(Sinsu-dong)<span class="v-line v-line2">|</span> <span>Copyright ⓒ 2021 <b>ACKR</b> All rights reserved.</span></p>
        <span></span>
      </div>
    </div>
  </div>
</footer>
<div class="scrollTopBtn" id="top">
  <i class="bi bi-arrow-up-square"></i>
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
<script src="../ackr-js/nav.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script><script>AOS.init();</script>
<script>
  $("#top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
</script>
</body>
</html>
