<?php
    if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
    run_event('pre_head');

    include_once(G5_PATH.'/head.sub.php');
    include_once(G5_LIB_PATH.'/latest.lib.php');
//    include_once(G5_LIB_PATH.'/outlogin.lib.php');
//    include_once(G5_LIB_PATH.'/poll.lib.php');
    include_once(G5_LIB_PATH.'/visit.lib.php');
    include_once(G5_LIB_PATH.'/connect.lib.php');
    include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?php
//if(defined('_INDEX_')) { // index에서만 실행
//    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
//}
//?>
<div id="wrap">
    <!-- skip navi -->

    <div title="스킵 메뉴" class="skipMenu">
        <a href="#visualp">본문 바로가기</a>
        <a href="#navigation">주 메뉴 바로가기</a>
    </div>
    <!-- skip navi -->
    <header id="header" class="">
        <div class="header">
            <div id="menuwrap">
                <div class="logowrap">
                    <h1><a href="/index.php"><img src="http://ai.gwangju.ac.kr/pages/software/img/common/logo.png"
                                                           alt="광주대학교 AI소프트웨어학과"></a></h1>
                </div>

                <ul id="navigation">
                    <li>
                        <a href="/pages/dept_info.php" class="btnPullDown" target="_self" title="학과정보">
                            <span>학과정보</span>
                        </a>
                        <div class="navigation_s1 pullDown">

                            <ul class="depth2">
                                <li>
                                    <a href="/pages/dept_info.php" class="" target="_self" title="학과소개">
                                        <span class="depth_lmn">학과소개</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/pages/dept_vision.php" class="" target="_self" title="비젼과 교육목표">
                                        <span class="depth_lmn">비젼과 교육목표</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/pages/dept_info_prof.php" class="" target="_self"
                                       title="교수소개">
                                        <span class="depth_lmn">교수소개</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/pages/dept_san_hak_lab.php" class="" target="_self" title="산학협력연구실">
                                        <span class="depth_lmn">산학협력연구실</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/pages/dept_grad_course.php" class="" target="_self" title="졸업후진로">
                                        <span class="depth_lmn">졸업후진로</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/pages/edu_procedure.php" class="btnPullDown" target="_self" title="교육과정">
                            <span>교육과정</span>
                        </a>
                        <div class="navigation_s2 pullDown">

                            <ul class="depth2">
                                <li>
                                    <a href="/pages/edu_procedure.php" class="" target="_self" title="교육과정">
                                        <span class="depth_lmn">교육과정</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/pages/edu_system.php" class="" target="_self" title="교과목 이수체계">
                                        <span class="depth_lmn">교과목 이수체계</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/pages/edu_notSub.php" class="" target="_self" title="비교과교육과정">
                                        <span class="depth_lmn">비교과교육과정</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/pages/edu_guide.php" class="" target="_self" title="학업가이드">
                                        <span class="depth_lmn">학업가이드</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/pages/admission_info.php" class="btnPullDown" target="_self" title="입학정보">
                            <span>입학정보</span>
                        </a>
                        <div class="navigation_s3 pullDown">

                            <ul class="depth2">
                                <li>
                                    <a href="/pages/admission_info.php" class="" target="_self" title="입학안내">
                                        <span class="depth_lmn">입학안내</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://iphak.gwangju.ac.kr/bbs/?b_id=iphak_admission_notice&site=iphak&mn=307" class="" target="_self" title="새창">
                                        <span class="depth_lmn">입학공지</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/bbs/board.php?bo_table=admission_cons" class=""
                                       target="_self" title="입학상담">
                                        <span class="depth_lmn">입학상담</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/pages/employment_hunHwang.php" class="btnPullDown" target="_self" title="취업정보">
                            <span>취업정보</span>
                        </a>
                        <div class="navigation_s4 pullDown">

                            <ul class="depth2">
                                <li>
                                    <a href="/pages/employment_hunHwang.php" class="" target="_self" title="취업현황">
                                        <span class="depth_lmn">취업현황</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/pages/employment_example.php" class=""
                                       target="_self" title="취업사례">
                                        <span class="depth_lmn">취업사례</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/pages/employment_certificate.php" class="" target="_self" title="자격증">
                                        <span class="depth_lmn">자격증</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/pages/employment_certificate_example.php" class="" target="_self" title="자격증 취득현황">
                                        <span class="depth_lmn">자격증 취득현황</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/bbs/board.php?bo_table=employment_info" class=""
                                       target="_self" title="취업안내">
                                        <span class="depth_lmn">취업안내</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/bbs/board.php?bo_table=community_notice" class="btnPullDown"
                           target="_self" title="커뮤니티">
                            <span>커뮤니티</span>
                        </a>
                        <div class="navigation_s5 pullDown">

                            <ul class="depth2">
                                <li>
                                    <a href="/bbs/board.php?bo_table=community_notice" class="" target="_self" title="공지사항">
                                        <span class="depth_lmn">공지사항</span>
                                    </a>

                                </li>
                                <li>
                                    <a href="/bbs/board.php?bo_table=dept_news" class="" target="_self" title="학과소식">
                                        <span class="depth_lmn">학과소식</span>
                                    </a>

                                </li>
                                <li>
                                    <a href="/bbs/board.php?bo_table=referenceRoom" class=""
                                       target="_self" title="자료실">
                                        <span class="depth_lmn">자료실</span>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <a href="https://www.gwangju.ac.kr/" target="_blank" class="btn_gwhome">광주대학교 </a>
            </div>
            <div class="pullDownbg" style="heigth:0 !important;display:none"></div>
        </div>
        <div class="header_info">
            <ul>
                <li><a href="/page/?site=basic&mn=1226" class="login"><span class="hidden">로그인</span></a></li>
                <li>
                    <div id="header_menu" class="header_menu">
                        <a href="#none" title="navBtn1 open" class="navBtn1">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <hr/>
