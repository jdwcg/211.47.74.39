<?php
  include_once('./ackr-header_eng.php');
  setcookie("lang", "eng", time() + 86400 * 30, '/');
?>
<style>
    button {margin: 1rem 0; transition: all .4s; border-radius: 3px;}
    button:hover { border: 1px solid #333; background: #333; color: #fff !important; }

    .btn3Wrap {
      color: #fff;
    }
    .btn3WrapSub {
      width: 90px;
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
            Our research center will secure research success with specific, and realistic images in regard to Korean Religion (K-Religion). This is not limited to traditional religions, but will include all religious activities and theories observed in Korea, that many people directly, and indirectly participate in, or adhere to.
        </p>
        <div class="btnwrapper btn3Wrap"><a class="btn3" onclick="location.href='sub_a2_eng.php'"><span class='btn3Inner' style="color: #a50b25;">more</span> </a></div>
    </div>
</section>

<div class="space"></div>

<section class="containerMainSection2">
    <div class="row row1">
        <div class="col" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="col">
            <div class="containerHarp" data-aos="fade-left" data-aos-duration="700" data-aos-delay="300">
                <h1>Research Title and Subtitle</h1>
                <p>
                    "K-Religion: The Image, Participation and Practice" - Making the Multi-media Lecture and Documentary Film Platform for the Integral Image of K-Religion-
                </p>
                <div class="btnwrapper btn3Wrap btn3WrapSub"><a class="btn3" onclick="location.href='sub_a3_eng.php'"><span class='btn3Inner' style="color: #a50b25;">more</span> </a></div>
            </div>
        </div>
    </div>
    <div class="row row2">
        <div class="col" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="col">
            <div class="containerHarp" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                <h1>Lecture Curriculum</h1>
                <p>
                    All K-religion lectures are composite studies that encompass culture and art, and include specific practices, and cultural and artistic achievements currently practiced in Korean religions. These lectures will not only demonstrate Korean attributes, but will possess a versatile application, which can be applied worldwid...
                </p>
                <div class="btnwrapper btn3Wrap btn3WrapSub"><a class="btn3" onclick="location.href='sub_c2_eng.php'"><span class='btn3Inner' style="color: #a50b25;">more</span> </a></div>
            </div>
        </div>
    </div>
    <div class="row row3">
        <div class="col" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="col">
            <div class="containerHarp" data-aos="fade-left" data-aos-duration="700" data-aos-delay="300">
                <h1>Research Plan, White Paper, and Documentary Production</h1>
                <p>
                  The K-Religion Institute will examine the domestic and international tendencies, and our research center will share the results of our research, which is founded in raising awareness about images, content, specific creativity, and the creative nature of Korean Religion, via the third academic conference...
                </p>
                <div class="btnwrapper btn3Wrap btn3WrapSub"><a class="btn3" onclick="location.href='sub_c3_eng.php'"><span class='btn3Inner' style="color: #a50b25;">more</span> </a></div>
            </div>
        </div>
    </div>
</section>
<section class="containerMainSection3">
    <h1>Archive</h1>
    <div class="container">
        <h2>Document</h2>
        <div class="row">
            <div class="col"><a href="/bbs/board.php?bo_table=doc"><img src="./assets/imgs/sample4.jpg" alt="sample4"></a></div>
            <div class="col"><a href="/bbs/board.php?bo_table=doc"><img src="./assets/imgs/sample5.jpg" alt="sample5"></a></div>
            <div class="col"><a href="/bbs/board.php?bo_table=doc"><img src="./assets/imgs/sample6.jpg" alt="sample6"></a></div>
        </div>
    </div>
    <div class="container">
        <h2>Photo</h2>
        <div class="row">
            <div class="col"><a href="bbs/board.php?bo_table=doc"><img src="assets/imgs/sample1.jpg" alt="sample1"></a></div>
            <div class="col"><a href="bbs/board.php?bo_table=doc"><img src="assets/imgs/sample2.jpg" alt="sample2"></a></div>
            <div class="col"><a href="bbs/board.php?bo_table=doc"><img src="assets/imgs/sample3.jpg" alt="sample3"></a></div>
        </div>
    </div>
</section>
<div class="container mainbottom">
    <h1>Contact Us</h1>
    <p>
      ADDRESS : 35 Baekbeom-ro, Mapo-gu, Seoul 04107, Korea Dasan Hall, rm 637 (Campus Map #17)
        <br>PHONE : 02-720-5253
        <!-- <br>이메일 : kimsh@sogang.ac.kr(임시) -->
    </p>
    <div class="btnwrapper btn3Wrap btn3WrapSub" style="width: auto;"><a class="btn3" onclick="location.href='sub_a5_eng.php'" ><span class='btn3Inner'style="color: #a50b25;">more</span> </a></div>
</div>



<?php
  include_once('./ackr-footer_eng.php');
?>
