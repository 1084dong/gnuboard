<?php
ini_set("display_errors", 1);
include_once('../common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
?>
    <div class="sub_wrap">
        <div id="sub_content">
            <!-- lnb -->
            <div class="lnb">
                <h2 class="s_visual1">학과정보</h2>
                <ul class="sub_2dmenu">
                    <li>
                        <a href="/pages/dept_info.php" class="" target="_self" title="학과소개">
                            <span>학과소개</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/dept_vision.php" class="on" target="_self" title="비젼과 교육목표">
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
                        <h3 class="subtop_title">비젼과 교육목표</h3>
                        <p class="subtop_p">학과정보 &gt; 비젼과 교육목표</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1325" class="fa" data-toggle="sns_share" data-service="facebook" data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1325" class="bd" data-toggle="sns_share" data-service="band" data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1325" class="tw" data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1325" class="ks" data-toggle="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.</dd>
                                </dl>
                                <div class="qr_img"> <img src="/datas/qrcode/menu/software/1325.png" alt="QR Code">  </div>
                                <a href="#" class="btn_close"><img src="/pages/software/img/sub/navi_close_btn.png" alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div id="page_content"><!--<div class="img_type1">-->
                            <!--    <img src="/pages/software/img/sub/vision.png" alt="">-->
                            <!--</div>-->


                            <div class="goal_box">
                                <h3 class="goal_1">비전</h3>
                                <p class="goal_p1">지역사회/산업의 상생발전을 주도하는 AI·소프트웨어 특성화 학과</p>
                            </div>

                            <span class="arrow"></span>

                            <div class="goal_box">
                                <h3 class="goal_2_2">교육목표</h3>
                                <p class="goal_p2"> <span>4차 산업혁명시대의 AI·소프트웨어 전문가 양성</span>4차 산업혁명 핵심 기술 기반 융합교육/ 현장중심 산학공동 실무교육</p>
                            </div>

                            <span class="arrow"></span>

                            <div class="goal_box">
                                <h3 class="goal_2">인재상</h3>
                                <p>4차 산업혁명 시대의 창의 · 융합형 AI·소프트웨어 전문가</p>
                            </div>

                            <span class="arrow"></span>

                            <div class="goal_box">
                                <h3 class="goal_2">인재유형</h3>
                                <p class="goal_p4">AI·소프트웨어 개발자</p>
                                <p class="goal_p4">지능형 시스템 관리자</p>
                            </div>

                            <span class="arrow w50"></span>
                            <span class="arrow w50"></span>

                            <div class="goal_box">
                                <h3 class="goal_3">전공역량</h3>
                                <p class="goal_p5">AI·소프트웨어 설계역량</p>
                                <p class="goal_p5">AI·소프트웨어 개발역량</p>
                                <p class="goal_p5">산업체현장적응역량</p>
                                <p class="goal_p5">네트워크 · 시스템 구축역량</p>
                            </div>

                            <span class="arrow"></span>

                            <div class="goal_box">
                                <h3 class="goal_3_2">교육추진전략</h3>
                                <div class="goal_p6">
                                    <dl>
                                        <dt>핵심교양</dt>
                                        <dd>4차산업혁명 기초 역량 함양</dd>
                                    </dl>
                                    <ul class="ul_type1">
                                        <li>GU인성</li>
                                        <li>소통/협업능력</li>
                                        <li>자기계발/창의몰입</li>
                                        <li>대인관계/리더십</li>
                                    </ul>
                                </div>
                                <div class="goal_p6">
                                    <dl>
                                        <dt>전공교과 과정</dt>
                                        <dd>실무 산학공동교육</dd>
                                    </dl>
                                    <ul class="ul_type1">
                                        <li>산학공동PBL수업</li>
                                        <li>산업체 현장교육</li>
                                        <li>현장형 실무교육</li>
                                        <li>지능형 IOT 특성화교육</li>
                                    </ul>
                                </div>
                                <div class="goal_p6">
                                    <dl>
                                        <dt>비교과 과정</dt>
                                        <dd>취업 및 실무 역량 강화</dd>
                                    </dl>
                                    <ul class="ul_type1">
                                        <li>단기집중교육</li>
                                        <li>프로젝트형 실무역량배양</li>
                                        <li>취업역량 강화</li>
                                        <li>전공재능기부</li>
                                    </ul>
                                </div>
                                <div class="goal_p6">
                                    <dl>
                                        <dt>융합 교육</dt>
                                        <dd>창의융합 역량강화</dd>
                                    </dl>
                                    <ul class="ul_type1">
                                        <li>에너지, 자동차 등 융합 교육</li>
                                        <li>융합캡스톤디자인</li>
                                        <li>융합동아리</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contents -->
            </div>
        </div>
    </div>
<?php
include_once(G5_PATH.'/tail.php');