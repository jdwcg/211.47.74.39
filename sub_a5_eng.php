
<?php
  include_once('./ackr-header_eng.php');
?>
    <section class="containerWrapperSubTitle">
        <div class="containerHeight"></div>
        <div class="container">
            <h1>About Us</h1>
        </div>
    </section>
    <div class="spaceSub"></div>

    <section>
        <div class="container section01">
            <div class="row">
                <div class="col subMenuList">
                    <ul>
                        <li></li>
                        <li><a href="sub_a1_eng.php?id=greeting">greetings<i class="bi bi-chevron-compact-right"></i></a></li>
                        <li><a href="sub_a2_eng.php?id=vision">vision<i class="bi bi-chevron-compact-right"></i></a></li>
                        <li><a href="sub_a3_eng.php?id=prj">Project Intro<i class="bi bi-chevron-compact-right"></i></a></li>
                        <li><a href="sub_a4_eng.php?id=organization">organization<i class="bi bi-chevron-compact-right"></i></a></li>
                        <li><a href="sub_a5_eng.php?id=location">Location<i class="bi bi-chevron-compact-right"></i></a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col">
                    <article id="sub_a5Article">
                        <h1>Location</h1>
                        <div class="sub_a5Container">
                          <section class="sub_a5Top">
                            <h2>ADDRESS : 35 Baekbeom-ro, Mapo-gu, Seoul 04107, Korea Dasan Hall, rm 637 (Campus Map #17)</h2>
                            <p>PHONE : 02-720-5253</p>
                            <div>
                              <!-- * 카카오맵 - 지도퍼가기 -->
                              <!-- 1. 지도 노드 -->
                              <div id="daumRoughmapContainer1637125535516" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%"></div>

                              <!--
                              	2. 설치 스크립트
                              	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                              -->
                              <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                              <!-- 3. 실행 스크립트 -->

                            </div>
                          </section>
                          <section class="sub_a5Middle">
                            <hr>
                            <h2 class="subway"><p>Subway</p></h2>
                            <div>
                              <h3>Transportation</h3>
                              <p>Sinchon Station, Line 2, Exit 6 <br>(8 minutes on foot to the main gate)</p>
                            </div>
                            <div>
                              <h3>Seoul Station</h3>
                              <p>From subway line 1 to line 2</p>
                            </div>
                            <div>
                              <h3>Yongsan Station</h3>
                              <p>After boarding Line 1, transfer to Line 2 at City Hall Station and get off at Sinchon Station</p>
                            </div>
                            <div>
                              <h3>Cheongnyangni Station</h3>
                              <p>After boarding Line 1, transfer to Line 2 at City Hall Station and get off at Sinchon Station</p>
                            </div>
                            <div>
                              <h3>Gangnam Express Bus Terminal</h3>
                              <p>After boarding Line 3, transfer to Line 2 at Euljiro 3-ga Station and get off at Sinchon Station</p>
                            </div>
                            <div>
                              <h3>From Dong Seoul Bus Terminal</h3>
                              <p>Take Line 2 at Gangbyeon Station and get off at Sinchon Station</p>
                            </div>
                            <div>
                              <h3>Southern terminal</h3>
                              <p>After boarding Line 3, transfer to Line 2 at Euljiro 3-ga Station and get off at Sinchon Station</p>
                            </div>
                            <div>
                              <h3>From Gimpo Airport</h3>
                              <p>After boarding the Airport Railroad, transfer to Line 2 at Hongik University Station and get off at Sinchon Station</p>
                            </div>
                            <div>
                              <h3>Incheon Airport</h3>
                              <p>After boarding the Airport Railroad, transfer to Line 2 at Hongik University Station and get off at Sinchon Station</p>
                            </div>
                          </section>
                          <section class="sub_a5Middle">
                            <hr>
                            <h2 class="bus"><p>Bus</p></h2>
                            <div>
                              <h3>Seoul city center</h3>
                              <p>Trunk/Branch Bus : 110A, 110B, 153, 604, 740, 753, 921, 5712, 5714, 6712, 7016, 7016, 7613, 8153<br>
                                Town Bus : Mapo 07, Mapo 11, Mapo 12, Mapo 14
                              </p>
                            </div>
                            <div>
                              <h3>Incheon International Airport</h3>
                              <p>Take No. 6002 at Bus Stop 5B or 12A on the 1st floor Arrivals floor and get off in front of Shinchon Hyundai Department Store</p>
                            </div>
                          </section>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <?php
      include_once('./ackr-footer_eng.php');
    ?>
