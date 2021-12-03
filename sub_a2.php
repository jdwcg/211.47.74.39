<?php
include_once('./ackr-header-vision.php');
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
                                ACKR는‘K-종교’에 관한 체계적 동영상 강의와 다큐멘터리를 제작,<br>
                                배급하여 국내외 한국종교연구에 시너지 효과를 내고자 한다.
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
            <li><a href="sub_a1.php?id=greeting">인사말<i class="bi bi-chevron-compact-right"></i></a></li>
            <li><a href="sub_a2.php?id=vision">비전<i class="bi bi-chevron-compact-right"></i></a></li>
            <li><a href="sub_a3.php?id=prj">프로젝트소개<i class="bi bi-chevron-compact-right"></i></a></li>
            <li><a href="sub_a4.php?id=organization">조직도<i class="bi bi-chevron-compact-right"></i></a></li>
            <li><a href="sub_a5.php?id=location">오시는길<i class="bi bi-chevron-compact-right"></i></a></li>
        </ul>
    </div>
    <div class=" line-desc" >
        <h2 id="target"></h2>
        <h2 >VISION</h2>
        <p>이를 위해 한국, 디지털, 글로벌이라는 3가지 비전을 제시한다.</p>
        <div class="row">
        <div class="col">
            <img src="./ackr-imgs/map-korea.svg" alt="이미지">
        </div>
        <div class="col">
            <p>
            <span class="material-icons md-36">looks_one 한국</span> <br>
            한국종교 ('K-종교')에 대한 구체적이고 현실적인 이미지와 연구성과를 확보한다.
            이는 한국 전통종교 뿐 아니라 한국에서 관찰되고 많은 사람들이 직-간접적으로 참여, 실천하고 있는 모든 종교 이론 및 활동이 포함된다.</p>
        </div>
        </div>
        <div class="row">
        <div class="col">
            <img src="./ackr-imgs/map-brain.svg" alt="이미지">
        </div>
        <div class="col">
            <p>
            <span class="material-icons md-36">looks_two 디지털</span> <br>
            K-종교 연구자료 및 강의를 디지털화, 영상화 한다. 다큐멘터리, 인터뷰 영상 등 디지털 영상자료 아카이브를 통해 효과적인 확산 및 지속가능한 보존을 꾀한다.</p>

        </div>
        </div>
        <div class="row">
        <div class="col">
            <img src="./ackr-imgs/map-world.svg" alt="이미지">
        </div>
        <div class="col">
            <p>
            <span class="material-icons md-36">looks_3 글로벌</span> <br>
            한국 종교의 모든 온·오프라인 자료는 영문으로 동시에 제공되며, 점차 그 외의 지역 언어로도 확대될 예정이다. 이를 통해 한국 종교연구의 전 세계적 ‘K-종교 네트워크’를 구축한다.</p>

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
include_once('./ackr-footer.php');
?>
