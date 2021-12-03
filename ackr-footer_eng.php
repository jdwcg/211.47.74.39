<footer id="footer">
  <div class="footWrapper">
    <div class="row1">
      <a href="#" style="width:80px;"><img src="<?php echo G5_URL ?>/ackr-imgs/ackr-logo-gray.svg" alt="로고_무채색"></a>
      <p class="ackrfull">Academic Center for K-Religion</p>
    </div>
    <div class="row1">
      <div class="col">
        <p>
          <!-- <a href="#"><b style="color: #aaa;">Terms & Conditions</b></a><span class="v-line">|</span>  -->
          <a href="#"><b style="color: #aaa;">Privacy Policy</b></a>
        </p>
      </div>
      <div class="col">
        <p>#637, Dasan Hall, Sogang University, 35, Baekbeom-ro, Mapo-gu, Seoul(Sinsu-dong)<span class="v-line v-line2">|</span> <span>Copyright ⓒ 2021 <b>ACKR</b> All rights reserved.</span></p>
        <span></span>
      </div>
    </div>
  </div>
  <div class="scrollTopBtn" id="top">
    <i class="bi bi-arrow-up-circle-fill"></i>
  </div>
</footer>

<style>
#footer {
  position: relative;
  background: #3f383b;
  height: 150px;
  width: 100%;
  color: #aaa;
}
  .footWrapper {
    /* margin: 1rem 0; */
    width: 1200px;
    position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
  }
    .footWrapper > .row1:first-child {
      padding-right: 2rem;
      border-right: 2px solid #aaa;
    }
    .footWrapper > .row1:last-child {
      padding-left: 2rem;
    }
      .row1 > .col > p {display: flex; padding: 4px 0;}
      .row1 > .col > span > a {padding-right: 0 1em;}
      .row1 > .col:last-child>  p, .ackrfull {font-size: 14px;}
      .v-line {margin: 0 1em; color: #aaa}

@media(max-width:1200px) {
  #footer {
    height: 270px;
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


<style media="screen">
.scrollTopBtn {
  position: fixed; z-index: 20;
  bottom: 18px; right: 18px;
  cursor: pointer;

  display: flex; justify-content: center; align-items: center;

  transition: all .3s;
}
.scrollTopBtn:hover {}
.scrollTopBtn > i { color : #aaa; font-size:2.3rem; transition: all .3s;border-radius: 3rem; opacity: .5;}
.scrollTopBtn > i:hover {color: #aaa; opacity: 1;}
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
<script charset="UTF-8">
  new daum.roughmap.Lander({
    "timestamp" : "1637125535516",
    "key" : "283wb",
    "mapHeight" : "280"
  }).render();
</script>
</body>
</html>
