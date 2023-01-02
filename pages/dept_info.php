<?php
ini_set("display_errors", 1);
include_once('../common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH . '/head.php');
?>
    <div class="sub_wrap">
        <div id="sub_content">
            <!-- lnb -->
            <div class="lnb">
                <h2 class="s_visual1">학과정보</h2>
                <ul class="sub_2dmenu">
                    <li>
                        <a href="/pages/dept_info.php" class="on" target="_self" title="학과소개">
                            <span>학과소개</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/dept_vision.php" class="" target="_self" title="비젼과 교육목표">
                            <span>비젼과 교육목표</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/dept_info_prof.php" class="" target="_self" title="교수소개">
                            <span>교수소개</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/dept_san_hak_lab.php" class="" target="_self" title="산학협력연구실">
                            <span>산학협력연구실</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/dept_grad_course.php" class="" target="_self" title="졸업후진로">
                            <span>졸업후진로</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content_box">
                <!-- contents -->
                <div id="contents">
                    <div class="contents_top">
                        <h3 class="subtop_title">학과소개</h3>
                        <p class="subtop_p">학과정보 &gt; 학과소개</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1324" class="fa"
                                           data-toggle="sns_share" data-service="facebook"
                                           data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1324" class="bd"
                                           data-toggle="sns_share" data-service="band"
                                           data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1324" class="tw"
                                           data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a>
                                    </li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1324" class="ks"
                                           data-toggle="sns_share" data-service="kakaostory"
                                           data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.
                                    </dd>
                                </dl>
                                <div class="qr_img"><img src="/datas/qrcode/menu/software/1324.png" alt="QR Code"></div>
                                <a href="#" class="btn_close"><img src="/pages/software/img/sub/navi_close_btn.png"
                                                                   alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div id="page_content">
                            <div class="greed">
                                <p class="tit">미래 사회는 4차 산업혁명시대이며, <br>
                                    <span>소프트웨어와 인공지능(AI, Artificial Intelligence)</span>가 이끄는 사회입니다.
                                </p>

                                <ul>
                                    <li>4차 산업혁명시대는 IT를 뛰어넘어 소프트웨어와 인공지능(AI, Artificial Intelligence)가 이끄는 사회입니다.</li>
                                    <li>광주대학교 AI소프트웨어학과에서는 4차 산업혁명시대에 AI·소프트웨어 분야를 선도할 미래형 창의·융합 인재를 양성합니다.</li>
                                    <li>소프트웨어·AI를 기반으로 타 산업과의 연계를 통해 IT·소프트웨어 개발자를 넘어 인공지능·소프트웨어 전문가가 될 수 있는 교육과정을 운영하고
                                        있습니다.
                                    </li>
                                </ul>

                                <ol>
                                    <li>4차 산업혁명시대의 핵심기술인 소프트웨어와 AI에 대한 기초·실무 기술 학습 및 산업체 현장교육 실시</li>
                                    <li>특성화 분야인 인공지능, 지능형 사물인터넷(IOT, Internet of Things) 기반의 프로젝트기반 교육(PBL, Project
                                        Based Learning)과 창의·융합교육 실시
                                    </li>
                                    <li>지역 특화 산업인 에너지·자동차 분야에 대한 융합 교육을 운영하여 신산업·첨단산업분야를 선도하는 AI·소프트웨어 산업 리더 양성</li>
                                </ol>
                                <!--  <p class="greed_p">
                                      미래 사회는 4차 산업혁명시대이며, 소프트웨어와 인공지능(AI, Artificial Intelligence)가 이끄는 사회입니다. <br>
                                      AI소프트웨어학과에서는 4차 산업혁명시대에 AI·소프트웨어 분야를 선도할 미래형 창의·융합 인재를 양성합니다.<br>
                                      소프트웨어·AI를 기반으로 타 산업과의 연계를 통해 인공지능·소프트웨어 개발자를 넘어<br>
                                      인공지능·소프트웨어 전문가가 될 수 있는 인재를 육성하고 있습니다.<br>
                                      4차 산업혁명시대의 핵심기술인 소프트웨어와 AI에 대한 기초 및<br>
                                      실무 기술을 학습하고, 특성화 분야인<br>
                                      지능형 사물인터넷(IOT, Internet of Things) 기반의 프로젝트<br>
                                      기반 교육(PBL, Project Based Learning)을 합니다.<br>
                                      지역 특화 산업인 에너지·자동차 분야에 대한 융합 전공을 운영하여<br>
                                      신산업·첨단산업군을 이끄는 AI·소프트웨어 산업 리더를 양성합니다.
                                  </p>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contents -->
            </div>
        </div>
    </div>
<?php
include_once(G5_PATH . '/tail.php');