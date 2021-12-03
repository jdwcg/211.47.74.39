
<?php
  include_once('./ackr-header_eng.php');
?>
    <section class="containerWrapperSubTitle">
        <div class="containerHeight"></div>
        <div class="container">
            <h1>Sitemap</h1>
        </div>
    </section>
    <div class="spaceSub"></div>

    <section>
        <div class="container section01">
            <div class="row">
                <!-- <div class="col subMenuList">
                    <ul>
                        <li></li>
                        <li><a href="sub_a1.php?id=greeting">인사말<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
                        <li><a href="sub_a2.php?id=vision">비전<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
                        <li><a href="sub_a3.php?id=prj">프로젝트소개<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
                        <li><a href="sub_a4.php?id=organization">조직도<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
                        <li><a href="sub_a5.php?id=location">오시는길<span><i class="bi bi-chevron-compact-right"></i></span></a></li>
                        <li></li>
                    </ul>
                </div> -->
                <div class="col">
                    <article id="article" >
                        <div id="line" class="">
                            <!-- <h1>사이트맵</h1> -->
                        </div>

<div class="sitemapTitle"><p>Site Home</p></div>
<div class="sitmapWrapContainer">
  <div class="sitmapWrap">
  <p>Infomation</p>
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col">
          <a href="sub_a1_eng.php?id=greeting">Research outline</a>
          <a href="sub_a1_eng.php?id=greeting">Greetings</a>
          <a href="sub_a3_eng.php?id=greeting">Project Intro</a>
          <a href="sub_a2_eng.php?id=greeting">Vision</a>
          <a href="sub_a4_eng.php?id=greeting">Organization</a>
          <a href="sub_a5_eng.php?id=greeting">Location</a>
        </div>
        <div class="col w_col">
          <a href="sub_d1_eng.php">People Together</a>
          <a href="sub_c1_eng.php">Research Plan</a>
          <a href="sub_c2_eng.php?id=lecture">Lecture Guide</a>
          <a href="sub_c3_eng.php">Research Activities</a>
          <a href="sub_c4_eng.php">Academic Event</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="sitmapWrap">
  <p>Archive</p>
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col">
          <a href="bbs/board.php?bo_table=notice">News</a>
          <a href="bbs/board.php?bo_table=notice">Notice</a>
          <a href="bbs/board.php?bo_table=news">Reports</a>
          <a href="bbs/board.php?bo_table=fellow">Sympathy</a>
        </div>
        <div class="col">
          <a href="bbs/board.php?bo_table=doc">Reference</a>
          <a href="bbs/board.php?bo_table=doc">Document</a>
          <a href="bbs/board.php?bo_table=gallery">Photo</a>
          <a href="bbs/board.php?bo_table=video">Video</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="sitmapWrap">
  <p>Member</p>
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col">
          <a href="bbs/login.php">Sign In</a>
          <a href="bbs/register.php">Sign Up</a>
          <a href="bbs/board.php?bo_table=free">Ask</a>
        </div>

      </div>
    </div>
  </div>
  </div>
</div>

                    </article>
                </div>
            </div>
        </div>
    </section>
<style>
  /* 리셋 */
  .section01 .row .col:last-child {
    border-right: 0;
  }
  .section01 .row .subMenuList {flex: .2}
  .section01 .row .col:last-child { flex: 1; }
  .section01 .row .col:last-child { padding:0; margin:0;}
  a {display: block;text-align: center;}
.sitemapTitle {
  display: flex;
  justify-content: center;
}
.sitemapTitle p {
  text-align: center;
  margin-top: 40px;
  width: 192px;
  padding: 8px 0;
  background: #a50b25;
  color: #fff;
}

.sitmapWrapContainer {
  display: flex;
  margin: 20px 34px;
}
.sitmapWrap {
  flex: 1;
  /* border: 1px solid pink; */
}
.sitmapWrap:first-child {margin-right: 8px;}
.sitmapWrap:last-child {margin-left: 8px; flex: .5;}

@media (max-width:800px) {
  .sitmapWrapContainer {
    display: flex;
    flex-direction: column;
  }
  .section01 {margin-top: 80px;}
  .sitmapWrap:first-child {margin-right: 0;}
  .sitmapWrap:last-child {margin-left: 0; flex: .5;}
}

.sitmapWrap p {
  background: #aaa;
  text-align: center;
  padding: 4px 0;
  margin: 16px;
}
.sitmapWrap .row {
  display:flex;
  /* border: 1px solid tan; */
  flex:1;
}
.sitmapWrap .row .col {
  flex:1;
}
.sitmapWrap .row .col .row .col a {
  /* border: 1px solid tan; */
  background: #eee;
  padding: 8px 4px;
  margin: 16px;
}
.sitmapWrap .row .col .row .col a:first-child {
  background: #333;
  color: #fff;
}
</style>

    <?php
      include_once('./ackr-footer_eng.php');
    ?>
