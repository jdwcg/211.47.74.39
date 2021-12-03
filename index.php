<?php
  include_once('./ackr-header.php');
  setcookie("lang", "kr", time() + 86400 * 30, '/');
?>
<style>

    button {margin: 1rem 0; transition: all .4s; border-radius: 3px;}
    button:hover { border: 1px solid #333; background: #333; color: #fff !important; }

    .btn3Wrap {
      color: #fff;
    }
    .btn3WrapSub {
      width: 100px;
      margin-top: 14px;
    }
    @media (max-width: 480px) {
      .btn3WrapSub {
        width: auto;
      }
    }

    .btn3 {
overflow: hidden;
position: relative;
padding: 12px 24px;
color: #fff !important;
border: 1px solid #a50b25;
    }
    .btn3::before{

      content: "";
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      height: 100%;
      z-index: -1;
      background-color: #000;
      -webkit-transform: scaleX(.3);
      transform: scaleX(.3);
      opacity: 0;
      transition: all .3s
      color: #fff !important;
    }
    .btn3:hover::before{
      overflow: hidden;
      opacity: 1;
      background: #a50b25;
      -webkit-transform: scaleX(1);
      transform: scaleX(1);
      transition: -webkit-transform .2s cubic-bezier(.08, .35, .13, 1.02), opacity .2s;
      color: #fff !important;
    }
    .btn3Inner {display: block;}
    .btn3:hover >.btn3Inner {color: #fff !important;}
</style>



<section class="containerMainSection1">
    <div class="containerHeight"></div>
    <div class="container">
        <h1>Academic Center for<br>
            <strong>K-Religion</strong>
        </h1>
        <p>
            한국종교 ('K-종교')에 대한 구체적이고 현실적인 이미지와 연구성과를 확보한다.<br>이는 한국 전통종교 뿐 아니라 한국에서 관찰되고 많은 사람들이 직-간접적으로 참여, 실천하고 있는 모든 종교 이론 및 활동이 포함된다.
        </p>
        <!-- <div class="btnwrapper"><button class="btn3" onclick="location.href='sub_a2.php'">더 보기</button></div> -->
        <div class="btnwrapper btn3Wrap"><a class="btn3" onclick="location.href='sub_a2.php'"><span class='btn3Inner' style="color: #a50b25;">더 보기</span> </a></div>
    </div>
</section>

<div class="space"></div>

<section class="containerMainSection2">
    <div class="row row1">
        <div class="col" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="col">
            <div class="containerHarp" data-aos="fade-left" data-aos-duration="700" data-aos-delay="300">
                <h1>연구 주제와 부제</h1>
                <p>
                    "K종교의 이미지, 참여 그리고 실천, K-Religion: The Image, Participation and Practice" -K종교의 독자적 이미지 구축을 위한 멀티미디어 강의 및 다큐멘터리 영상 제작 플랫폼, Making the Multi-media Lecture and Documentary Film Platform for the Integral Image of K-Religion-
                </p>
                <div class="btnwrapper btn3Wrap btn3WrapSub"><a class="btn3" onclick="location.href='sub_a3.php'"><span class='btn3Inner' style="color: #a50b25;">더 보기</span> </a></div>
            </div>
        </div>
    </div>
    <div class="row row2">
        <div class="col" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="col">
            <div class="containerHarp" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                <h1>강의 컬리큘럼</h1>
                <p>
                    K종교 강의는 모두 문화와 예술을 아우르는 융복합 연구이며, 현재 한국종교에서 행하는 구체적 실천과 문화 예술적 성과를 포괄한다. 한국적 특성이 드러나는 강의인 동시에 전 세계에서 통용될 수 있는 범용성을 지닌다. 일부 특정 해외 권역 (라틴) 맞춤형 강좌로‘천주교의 성모 마리아’, (북미) ...
                </p>
                <div class="btnwrapper btn3Wrap btn3WrapSub"><a class="btn3" onclick="location.href='sub_c2.php'"><span class='btn3Inner' style="color: #a50b25;">더 보기</span> </a></div>
            </div>
        </div>
    </div>
    <div class="row row3">
        <div class="col" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="col">
            <div class="containerHarp" data-aos="fade-left" data-aos-duration="700" data-aos-delay="300">
                <h1>발간 및 다큐멘터리 제작</h1>
                <p>
                    K종교 연구의 국내외 경향을 검토하고, 본 연구계획서에서 제안한 한국종교의 이미지, 물질, 구체성의 독창성과 창의성을 부각시키는 연구 성과를 3번의 학술대회에서 공유한다. 학술대회의 결과물을 토대로 영문은 The Holy Matters and Activities of Korean Religions (가제)의 제목으로 ...
                </p>
                <div class="btnwrapper btn3Wrap btn3WrapSub"><a class="btn3" onclick="location.href='sub_c3.php'"><span class='btn3Inner' style="color: #a50b25;">더 보기</span> </a></div>
            </div>
        </div>
    </div>
</section>
<section class="containerMainSection3">
    <h1>Archive</h1>
    <div class="container">
        <h2>문서</h2>
        <div class="row">
            <div class="col"><a href="/bbs/board.php?bo_table=doc"><img src="./assets/imgs/sample4.jpg" alt="sample4"></a></div>
            <div class="col"><a href="/bbs/board.php?bo_table=doc"><img src="./assets/imgs/sample5.jpg" alt="sample5"></a></div>
            <div class="col"><a href="/bbs/board.php?bo_table=doc"><img src="./assets/imgs/sample6.jpg" alt="sample6"></a></div>
        </div>
    </div>
    <div class="container" >
        <h2>사진</h2>
        <div class="row">
            <div class="col"><a href="bbs/board.php?bo_table=doc"><img src="assets/imgs/sample1.jpg" alt="sample1"></a></div>
            <div class="col"><a href="bbs/board.php?bo_table=doc"><img src="assets/imgs/sample2.jpg" alt="sample2"></a></div>
            <div class="col"><a href="bbs/board.php?bo_table=doc"><img src="assets/imgs/sample3.jpg" alt="sample3"></a></div>
        </div>
    </div>
</section>
<div class="container mainbottom" >
    <h1>Contact Us</h1>
    <p>
        연구소 주소 : [04107] 서울시 마포구 백범로 35 (신수동) 서강대학교 다산관 637호
        <br>대표전화 : 02-720-5253
        <!-- <br>이메일 : kimsh@sogang.ac.kr(임시) -->
        <br>연구소 및 프로젝트 관련 문의사항은 상기 대표전화 및 이메일로 문의바랍니다.
    </p>
    <div class="btnwrapper btn3Wrap btn3WrapSub" style="width: auto;"><a class="btn3" onclick="location.href='sub_a5.php'" ><span class='btn3Inner'style="color: #a50b25;">더 보기</span> </a></div>
</div>

<?php
  include_once('./ackr-footer.php');
?>
