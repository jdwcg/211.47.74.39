<?php
include_once('./ackr-header-vision_eng.php');
?>
<style>@import url('ackr-css/vision.css');</style>
    <section class="containerMainSection1">
    </section>
    <section >
        <div class="container section01" style="margin-top: 70px;">
            <div class="row">

                <div class="col">
                    <article id="vison">
                        <div id="line">
                            <p >
                              Our research center hopes to create a synergistic effect for domestic and international research in regard to Korean Religion,<br>
                              by producing and disseminating systematic video lectures and documentaries on the topic of Korean religions.
                            </p>
                            <style>
                              @media(max-width: 800px) {
                                #vison #line p:first-child {
                                  margin-top: 70px;
                              }}
                            </style>
                            <p class="scrollBtn"><a class="scroll iconWrap"><i class="bi bi-mouse"></i><br><i class="bi bi-chevron-double-down"></i></a></p>
                            <style media="screen">
                            .bi-mouse {
                                font-size: 2rem;
                            }
                            .scrollBtn {padding: 1rem 0; cursor: pointer; }
                            @media(max-width: 480px) {.iconWrap {display: flex; flex-direction: column;}}
                            </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$('.bi-mouse').on('click', function () {
$('html,body').animate({
scrollTop: 880
}, 300);
});
</script>

                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="height" ></div>
<style>
    .height {
        height:70vh;
    }
</style>
<section class="vision-content">
    <div class="vision-index">
        <ul>
          <li><a href="sub_a1_eng.php?id=greeting">Greeting<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
          <li><a href="sub_a2_eng.php?id=vision">Vision<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
          <li><a href="sub_a3_eng.php?id=prj">Project Intro<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
          <li><a href="sub_a4_eng.php?id=organization">Organization<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
          <li><a href="sub_a5_eng.php?id=location">Location<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
        </ul>
    </div>
    <div class=" line-desc" >
        <h2 id="target"></h2>
        <h2 >VISION</h2>
        <p>To this end, we present three visions : Korea, digital, and global.</p>
        <div class="row">
        <div class="col">
            <img src="./ackr-imgs/map-korea.svg" alt="이미지">
        </div>
        <div class="col">
            <p>
            <span class="material-icons md-36">looks_one KOREA</span> <br>
            Our research center will secure research success with specific, and realistic images in regard to Korean Religion (K-Religion). This is not limited to traditional religions, but will include all religious activities and theories observed in Korea, that many people directly, and indirectly participate in, or adhere to.</p>
        </div>
        </div>
        <div class="row">
        <div class="col">
            <img src="./ackr-imgs/map-brain.svg" alt="이미지">
        </div>
        <div class="col">
            <p>
            <span class="material-icons md-36">looks_two DIGITAL</span> <br>
            Our research center will produce all research materials and lectures digitally, via video. Through the digital archive, we plan to, not only have an effective means of proliferating materials such documentaries, interviews, and videos, but also have a viable means of continually preserving these materials.</p>

        </div>
        </div>
        <div class="row">
        <div class="col">
            <img src="./ackr-imgs/map-world.svg" alt="이미지">
        </div>
        <div class="col">
            <p>
            <span class="material-icons md-36">looks_3 GLOBAL</span> <br>
            All materials, both on-line and off-line, will be produced in English as well, however our research center is scheduled to gradually expand our language options. Through this plan, our research will establish a K-Religion Network covering the entire world.</p>

        </div>
        </div>
    </div>
</section>

<style>.space {height: 78vh !important;} .subMenuList { display: none; } @media (max-width:800px) { .section01 { margin-top: 0 !important; } }</style>

<style media="screen">
.line-desc {
/* border: 1px solid #eee; */
}
.line-desc h2 {
    text-align: center;
    padding: 2rem 1em;
}
.line-desc p { text-align: center; padding: 2rem 1em !important; }
.line-desc .row {
display: flex;
justify-content: center;
}
.line-desc .row .col {
display: flex;
justify-content: center;
align-items: center;
overflow: hidden;
width: 400px; height: 500px;
}
.line-desc .row .col p {
text-align: left;
}
.line-desc .row .col span {
/* border: 1px solid tan; */
margin: 0 0 24px 0;
letter-spacing: -4px;
}
.line-desc .row .col img {
transform: scale(.8);
}
.line-desc .row:nth-child(4) {
display: flex;
flex-direction: row-reverse;
}
.line-desc .row:nth-child(4) p {
text-align: right;
}
@media (max-width:800px) {
.line-desc .row:nth-child(4) {
    display: flex;
    flex-direction: row;
}
.line-desc .row:nth-child(4) p {
    text-align: left;
}
}
@media (max-width:640px) {
.line-desc .row,
.line-desc .row:nth-child(4) {
    flex-direction: column;
}
.line-desc .row .col {
    width: 100%;
    height: auto;
}
.line-desc .row .col p {
    text-align: center;
}
.line-desc .row .col img {
    padding: 0 3em;
}
}

.material-icons.md-18 { font-size: 18px; }
.material-icons.md-24 { font-size: 24px; }
.material-icons.md-36 { font-size: 36px;  color: #ccb495;}
.material-icons.md-48 { font-size: 48px; }

</style>



<script>
jQuery(document).ready(function($) {
$(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
});
});
</script>

<?php
include_once('./ackr-footer_eng.php');
?>
