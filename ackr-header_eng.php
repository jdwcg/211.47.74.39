<?php
    include_once('./_common.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo G5_URL ?>/ackr-css/sub.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/ackr-css/main.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/ackr-css/default.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/assets/sub_a3.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/assets/sub_c2.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/assets/sub_c3.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/assets/sub_c4.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/assets/sub_d1.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/assets/sub_a4.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/assets/sub_d2.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/assets/sub_a5.css">


    <title>ACKR</title>
</head>
<body>
    <div class="containerWrapperTnb">
        <div class="container tnb">
            <div class="col">
                <a href="<?php echo G5_URL ?>/index.php"><i class="bi bi-globe2"></i> KR</a>
                <a href="<?php echo G5_URL ?>/sub_sitemap_eng.php">Site Map</a>
            </div>
            <div class="col">
                <?php if ($is_member) {  ?>
                <a href="<?php echo G5_BBS_URL ?>/logout.php">sign out</a>
                <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">modify</a>
                <?php if ($is_admin) {  ?>
                <a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">admin</a></li>
                <?php }  ?>
                <?php } else {  ?>
                <a href="<?php echo G5_BBS_URL ?>/login.php">sign in</a>
                <a href="<?php echo G5_BBS_URL ?>/register.php">sign up</a>
                <?php }  ?>
                <!-- <a href="https://ackr.org/bbs/login.php">로그인</a>
                <a href="https://ackr.org/bbs/register.php">회원가입</a> -->
            </div>
        </div>
    </div>
    <div class="containerWrapperHeader" id="containerWrapperHeader">
        <div class="container header">
            <div class="logo"><a href="<?php echo G5_URL ?>/index_eng.php"><img src="<?php echo G5_URL ?>/ackr-imgs/ackr-logo-m.svg" alt="로고"></a></div>
            <ul>
                <li class="gnb">
                    <a href="#">Summary</a>
                    <ul>
                      <li><a href="<?php echo G5_URL ?>/sub_a1_eng.php?id=greeting">Greeting</a></li>
                      <li><a href="<?php echo G5_URL ?>/sub_a2_eng.php?id=vision">Vision</a></li>
                      <li><a href="<?php echo G5_URL ?>/sub_a3_eng.php?id=prj">Intro</a></li>
                      <li><a href="<?php echo G5_URL ?>/sub_a4_eng.php?id=organization">Organization</a></li>
                      <li><a href="<?php echo G5_URL ?>/sub_a5_eng.php?id=location">Location</a></li>
                    </ul>
                </li>
                <li class="gnb">
                    <a href="#">News</a>
                    <ul>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">Notice</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news">Report</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=fellow">Sympathy</a></li>
                    </ul>
                </li>
                <li class="gnb">
                    <a href="#">Project</a>
                    <ul>
                        <li><a href="<?php echo G5_URL ?>/sub_c1_eng.php">Plan</a></li>
                        <li><a href="<?php echo G5_URL ?>/sub_c2_eng.php">Lecture</a></li>
                        <li><a href="<?php echo G5_URL ?>/sub_c3_eng.php">Activities</a></li>
                        <li><a href="<?php echo G5_URL ?>/sub_c4_eng.php">Event</a></li>
                    </ul>
                </li>
                <li class="gnb">
                    <a href="#">People</a>
                    <ul>
                        <li><a href="<?php echo G5_URL ?>/sub_d1_eng.php">Researchers</a></li>
                        <li><a href="<?php echo G5_URL ?>/sub_d2_eng.php">Partnership</a></li>
                    </ul>
                </li>
                <li class="gnb">
                    <a href="#">Reference</a>
                    <ul>
                        <!-- <li><a href="sub_e1.php">문서</a></li>
                        <li><a href="sub_e2.php">사진</a></li>
                        <li><a href="sub_e3.php">동영상</a></li> -->
                        <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=doc">Document</a></li>
                        <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=gallery">Photo</a></li>
                        <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=video">Video</a></li>
                        <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=free">Free</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

<!-- 모듈화 -->
    <header id="header-m">
        <div class="headerBar">
            <div class="lang"><a href="<?php echo G5_URL ?>/index.php"><i class="bi bi-globe2"></i>&nbsp;KR</a></div>
            <div class="logo-m"><a href="<?php echo G5_URL ?>/index_eng.php"><img src="<?php echo G5_URL ?>/ackr-imgs/ackr-logo-m.svg" alt="logo"></a></div>
            <div class="navBtn"><button><i class="bi bi-list"></i></button></div>
        </div>
        <div class="menuSlide">
            <div class="navBg"></div>
            <div class="nav">
                <ul>
                   <style media="screen">
                      .gnb-m a {text-align: left;}
                   </style>
                    <li class="gnb-m">
                        <a href="#">Summary<i class="bi bi-chevron-compact-down"></i></a>
                        <ul>
                            <li><a href="<?php echo G5_URL ?>/sub_a1_eng.php">Greeting</a></li>
                            <li><a href="<?php echo G5_URL ?>/sub_a2_eng.php">Vision</a></li>
                            <li><a href="<?php echo G5_URL ?>/sub_a3_eng.php">Intro</a></li>
                            <li><a href="<?php echo G5_URL ?>/sub_a4_eng.php">Organization</a></li>
                            <li><a href="<?php echo G5_URL ?>/sub_a5_eng.php">Location</a></li>
                        </ul>
                    </li>
                    <li class="gnb-m">
                        <a href="#">News<i class="bi bi-chevron-compact-down"></i></a>
                        <ul>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">Notice</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news">Report</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=fellow">Sympathy</a></li>
                        </ul>
                    </li>
                    <li class="gnb-m">
                        <a href="#">Project<i class="bi bi-chevron-compact-down"></i></a>
                        <ul>
                          <li><a href="<?php echo G5_URL ?>/sub_c1_eng.php">Plan</a></li>
                          <li><a href="<?php echo G5_URL ?>/sub_c2_eng.php">Lecture</a></li>
                          <li><a href="<?php echo G5_URL ?>/sub_c3_eng.php">Activities</a></li>
                          <li><a href="<?php echo G5_URL ?>/sub_c4_eng.php">Event</a></li>
                        </ul>
                    </li>
                    <li class="gnb-m">
                        <a href="#">People<i class="bi bi-chevron-compact-down"></i></a>
                        <ul>
                          <li><a href="<?php echo G5_URL ?>/sub_d1_eng.php">Researchers</a></li>
                          <li><a href="<?php echo G5_URL ?>/sub_d2_eng.php">Partnership</a></li>
                        </ul>
                    </li>
                    <li class="gnb-m">
                        <a href="#">Reference<i class="bi bi-chevron-compact-down"></i></a>
                        <ul>
                          <!-- <li><a href="sub_e1.php">문서</a></li>
                          <li><a href="sub_e2.php">사진</a></li>
                          <li><a href="sub_e3.php">동영상</a></li>
                          <li><a href="sub_e4.php">자유업로드</a></li> -->

                        <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=doc">Document</a></li>
                        <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=gallery">Photo</a></li>
                        <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=video">Video</a></li>
                        <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=free">Free</a></li>
                        </ul>
                    </li>
                    <li class="gnb-m">
                        <a href="<?php echo G5_URL ?>/sub_sitemap.php">Site Map</i></a>
                    </li>


                    <?php if ($is_member) {  ?>
                        <li class="gnb-m">
                            <a href="<?php echo G5_URL ?>/bbs/logout.php">sign out</i></a>
                        </li>
                        <li class="gnb-m">
                            <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">modify</a>
                        </li>
                    <?php if ($is_admin) {  ?>
                    <li class="gnb-m">
                            <a href="<?php echo correct_goto_url(G5_ADMIN_URL);?>">admin</i></a>
                        </li>
                    <?php }  ?>
                    <?php } else {  ?>
                        <li class="gnb-m">
                        <a href="<?php echo G5_URL ?>/bbs/login.php">sign in</i></a>
                    </li>
                    <li class="gnb-m">
                        <a href="<?php echo G5_URL ?>/bbs/register.php">sign up</i></a>
                    </li>
                    <?php }  ?>
                </ul>
            </div>
        </div>
    </header>
