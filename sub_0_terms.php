
<?php
  include_once('./ackr-header.php');
?>
    <section class="containerWrapperSubTitle">
        <div class="containerHeight"></div>
        <div class="container">
            <h1>연구개요</h1>
        </div>
    </section>
    <div class="spaceSub"></div>

    <section>
        <div class="container section01">
            <div class="row">
                <div class="col subMenuList">
                    <ul>
                        <li class="noneHover"></li>
                        <li><a href="sub_a1.php?id=greeting">인사말<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
                        <li><a href="sub_a2.php?id=vision">비전<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
                        <li><a href="sub_a3.php?id=prj">프로젝트소개<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
                        <li><a href="sub_a4.php?id=organization">조직도<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
                        <li><a href="sub_a5.php?id=location">오시는길<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
                        <li class="noneHover"></li>
                    </ul>
                    <style media="screen">.noneHover:hover { background: #f9f9f9 !important;}</style>
                </div>
                <div class="col">
                    <article id="article" >
                        <div id="line" class="sampleClass">
                            <h1>인사말</h1>
                            <div class="greetingWrap">
                              <div class="greeting">

                                <p>
                                  ACKR 홈페이지에 오신 것을 환영합니다.<br>
                                  세계가 알고 싶어하는 한국의 종교문화와<br>
                                  한국인이 알리고 싶어하는 국내 종교연구의<br>
                                  축적된 성과, 그 사이를 이어주는 소통의<br>
                                  장이 되도록 하겠습니다.
                                </p>

                                <div id="soi">
                                  <img src="ackr-imgs/Junsoi-pc.png" alt="소장님이미지">
                                </div>

                                <p>
                                  K종교학술확산 연구소<br>소장 정소이
                                </p>
<!-- <img src="ackr-imgs/greeting.png" alt="인사말이미지"> -->
                              </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <?php
      include_once('./ackr-footer.php');
    ?>
