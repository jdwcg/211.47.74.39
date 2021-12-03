
<?php
  include_once('./ackr-header.php');
?>
    <section class="containerWrapperSubTitle">
        <div class="containerHeight"></div>
        <div class="container">
            <h1>연구소 소개</h1>
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
                    <article id="sub_a3Article">
                        <div id="line" class="a3_all">
                            <h1>프로젝트소개</h1>
                            <h2 class="prjIntroimg"><img src="assets/imgs/main.png" alt="프로젝트소개"></h2>
                            <style media="screen">
                            @media(min-width: 480px){
                              .prjIntroimg  {
                                width: 500px !important;
                                }
                              }
                            </style>
                            <div class="project">
                              <p class="first">
                                  ‘ACKR’은 ‘한국학중앙연구원’과 ‘한국학진흥사업단’의 ‘K학술확산연구소’
                                  사업에 선정되어 서강대학교 다산관 637호에 신설한 프로젝트 연구소이다.
                                  연구 기간은 2021년 7월 1일부터 2026년 6월 30일까지 총 5년이며 과제를 수행하기 위한 지원 사업비는 매년 10억이다.
                              </p>
                              <p class="second">
                                <b>연구 주제와 부제</b><br>
                                &lt;K종교의 이미지, 참여 그리고 실천, K-Religion: The Image, Participation and Practice&gt;
                                K종교의 독자적 이미지 구축을 위한 멀티미디어 강의 및 다큐멘터리 영상 제작 플랫폼
                                Making the Multi-media Lecture and Documentary Film Platform for the Integral Image of K-Religion
                              </p>
                              <p class="third">
                                연구소 플랫폼에서는 5년간 50개(총 600시간, 3,600개 비디오 클립)의 동영상 강좌를 제작하여 K-Mooc 및 유튜브에 업로딩한다.
                                강의는 한국어, 영어 그리고 스페인어를 지원한다. K-종교를 주제로 두 편의 다큐멘터리를 출품하며,
                                3번의 국제회의, 소스북, 연구서, 백서를 간행하고 보조 방송을 제작하여 동영상을 수강하는 세계 각국 학생들의 강좌 이해를 돕는다.
                                홈페이지, 모바일 애플리케이션, AI 기반 챗봇 시스템 구축하고 보조 방송을 개설한다.
                              </p>
                            </div>
                        </div>
                        <div class="height" style="padding: 2rem 0;"> </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <style media="screen">
      .project > p {
        text-align: justify;
      }
    </style>

    <?php
      include_once('./ackr-footer.php');
    ?>
