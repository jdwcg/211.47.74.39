<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../ackr-css/sub.css">
    <link rel="stylesheet" href="../ackr-css/main.css">
    <link rel="stylesheet" href="../ackr-css/default.css">
    <link rel="stylesheet" href="../assets/sub_a3.css">
    <link rel="stylesheet" href="../assets/sub_c2.css">
    <link rel="stylesheet" href="../assets/sub_c3.css">
    <link rel="stylesheet" href="../assets/sub_c4.css">
    <link rel="stylesheet" href="../assets/sub_d1.css">
    <link rel="stylesheet" href="../assets/sub_a4.css">
    <link rel="stylesheet" href="../assets/sub_d2.css">
    <title>ACKR</title>
</head>
<body>
    <div class="containerWrapperTnb">
        <div class="container tnb">
            <div class="col">
                <a href="#"><i class="bi bi-globe2"></i> EN</a>
                <a href="../sub_sitemap.php">사이트맵</a>
            </div>
            <div class="col">
                <a href="https://ackr.org/bbs/login.php">로그인</a>
                <a href="https://ackr.org/bbs/register.php">회원가입</a>
            </div>
        </div>
    </div>
    <div class="containerWrapperHeader" id="containerWrapperHeader">
        <div class="container header">
            <div class="logo"><a href="../index.php"><img src="../ackr-imgs/ackr-logo-m.svg" alt="로고"></a></div>
            <ul>
                <li class="gnb">
                    <a href="#">연구개요</a>
                    <ul>
                      <li><a href="../sub_a1.php?id=greeting">인사말</a></li>
                      <li><a href="../sub_a2.php?id=vision">비전</a></li>
                      <li><a href="../sub_a3.php?id=prj">프로젝트소개</a></li>
                      <li><a href="../sub_a4.php?id=organization">조직도</a></li>
                      <li><a href="../sub_a5.php?id=location">오시는길</a></li>
                    </ul>
                </li>
                <li class="gnb">
                    <a href="#">소식</a>
                    <ul>
                        <li><a href="../sub_b1.php">공지사항</a></li>
                        <li><a href="../sub_b2.php">언론보도</a></li>
                        <li><a href="../sub_b3.php">연구동정원</a></li>
                    </ul>
                </li>
                <li class="gnb">
                    <a href="#">연구프로젝트</a>
                    <ul>
                        <li><a href="../sub_c1.php">연구계획</a></li>
                        <li><a href="../sub_c2.php">강의안내</a></li>
                        <li><a href="../sub_c3.php">연구활동</a></li>
                        <li><a href="../sub_c4.php">학술행사</a></li>
                    </ul>
                </li>
                <li class="gnb">
                    <a href="#">함께하는사람들</a>
                    <ul>
                        <li><a href="../sub_d1.php">연구진/전문가</a></li>
                        <li><a href="../sub_d2.php">협력기관</a></li>
                    </ul>
                </li>
                <li class="gnb">
                    <a href="#">자료실</a>
                    <ul>
                        <!-- <li><a href="../sub_e1.php">문서</a></li>
                        <li><a href="../sub_e2.php">사진</a></li>
                        <li><a href="../sub_e3.php">동영상</a></li> -->

                        <li><a href="../bbs/board.php?bo_table=doc">문서</a></li>
                        <li><a href="../bbs/board.php?bo_table=gallery">사진</a></li>
                        <li><a href="../bbs/board.php?bo_table=video">동영상</a></li>
                        <li><a href="../bbs/board.php?bo_table=free">자유업로드</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

<!-- 모듈화 -->
    <header id="header-m">
        <div class="headerBar">
            <div class="lang"><a href="#"><i class="bi bi-globe2"></i>&nbsp;EN</a></div>
            <div class="logo-m"><a href="../index.php"><img src="../ackr-imgs/ackr-logo-m.svg" alt="로고"></a></div>
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
                        <a href="#">연구개요<i class="bi bi-chevron-compact-down"></i></a>
                        <ul>
                            <li><a href="../sub_a1.php">인사말</a></li>
                            <li><a href="../sub_a2.php">비전</a></li>
                            <li><a href="../sub_a3.php">프로젝트소개</a></li>
                            <li><a href="../sub_a4.php">조직도</a></li>
                            <li><a href="../sub_a5.php">오시는길</a></li>
                        </ul>
                    </li>
                    <li class="gnb-m">
                        <a href="#">소식<i class="bi bi-chevron-compact-down"></i></a>
                        <ul>
                          <li><a href="../sub_b1.php">공지사항</a></li>
                          <li><a href="../sub_b2.php">언론보도</a></li>
                          <li><a href="../sub_b3.php">연구동정원</a></li>
                        </ul>
                    </li>
                    <li class="gnb-m">
                        <a href="#">연구프로젝트<i class="bi bi-chevron-compact-down"></i></a>
                        <ul>
                          <li><a href="../sub_c1.php">연구계획</a></li>
                          <li><a href="../sub_c2.php">강의안내</a></li>
                          <li><a href="../sub_c3.php">연구활동</a></li>
                          <li><a href="../sub_c4.php">학술행사</a></li>
                        </ul>
                    </li>
                    <li class="gnb-m">
                        <a href="#">함께하는사람들<i class="bi bi-chevron-compact-down"></i></a>
                        <ul>
                          <li><a href="../sub_d1.php">연구진/전문가</a></li>
                          <li><a href="../sub_d2.php">협력기관</a></li>
                        </ul>
                    </li>
                    <li class="gnb-m">
                        <a href="#">자료실<i class="bi bi-chevron-compact-down"></i></a>
                        <ul>
                          <!-- <li><a href="../sub_e1.php">문서</a></li>
                          <li><a href="../sub_e2.php">사진</a></li>
                          <li><a href="../sub_e3.php">동영상</a></li>
                          <li><a href="../sub_e4.php">자유업로드</a></li> -->

                          <li><a href="../bbs/board.php?bo_table=doc">문서</a></li>
                        <li><a href="../bbs/board.php?bo_table=gallery">사진</a></li>
                        <li><a href="../bbs/board.php?bo_table=video">동영상</a></li>
                        <li><a href="../bbs/board.php?bo_table=free">자유업로드</a></li>
                        </ul>
                    </li>
                    <li class="gnb-m">
                        <a href="../sub_sitemap.php">사이트맵</i></a>
                    </li>
                    <li class="gnb-m">
                        <a href="https://ackr.org/bbs/register.php">회원가입</i></a>
                    </li>
                    <li class="gnb-m">
                        <a href="https://ackr.org/bbs/login.php">로그인</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
