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
                        <a href="/pages/dept_san_hak_lab.php" class="on" target="_self" title="산학협력연구실">
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
                        <h3 class="subtop_title">산학협력연구실</h3>
                        <p class="subtop_p">학과정보 &gt; 산학협력연구실</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1327" class="fa" data-toggle="sns_share" data-service="facebook" data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1327" class="bd" data-toggle="sns_share" data-service="band" data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1327" class="tw" data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1327" class="ks" data-toggle="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.</dd>
                                </dl>
                                <div class="qr_img"> <img src="https://ai.gwangju.ac.kr/datas/qrcode/menu/software/1327.png" alt="QR Code">  </div>
                                <a href="#" class="btn_close"><img src="https://ai.gwangju.ac.kr/pages/software/img/sub/navi_close_btn.png" alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div id="page_content"><h3 class="h3_butt">산학협력연구실</h3>
                            <p class="text_type1">산업체 현장밀착형 실무교육을 강화하고, 취업후 현장 실무에 즉시 투입할 수 있는 취업역량을 함양하기 위해 산학협력연구실을 운영합니다.
                                산학협력연구실은 산업체와 협약을 체결하고 산업체 수요를 반영하여 PBL(Project Based Learning) 기반 비교과프로그램(PBL 사회맞춤형동아리, 산학프로젝트, 등)을 운영하며, 산업체와의 상생발전을 위해 기술개발과제 및 기술지도를 수행합니다.</p>

                            <h4 class="h4_butt">차세대 네트워크 연구실 (Next Generation Network Lab.) </h4>
                            <div class="imgtxt_box">
                                <div class="img">
                                    <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/lab_img01.png" alt="">
                                </div>
                                <div class="txt">
                                    <p class="text_type1">4차 산업혁명 시대의 신기술 동향에 발맞추어 지능형 IoT네트워크, 차세대 네트워크 시스템, 인공지능 분야인 머신러닝/딥러닝 플랫폼 개발, 리눅스(Linux)기반 오프소프트웨어 개발을 통해 인공지능 및 시스템 관리 전문가 양성. 연구실 멤버 1인 1특허 보유를 권장하고 있으며, 산업체에 실질적으로 적용 가능한 아이템을 도출하여 산업현장의 애로기술을 개발</p>
                                    <ul class="ul_type1">
                                        <li>구성원
                                            <ul class="ul_type2">
                                                <li>담당교수 : 김광현 교수</li>
                                                <li>연구학생 : 약 6명</li>
                                            </ul>
                                        </li>
                                        <li>협약기업 : 디엠테크㈜, 현네트워크㈜</li>
                                        <li>주요활동 : PBL 사회맞춤형 동아리, 산학프로젝트, 기술개발, 기술지도</li>
                                    </ul>
                                </div>
                            </div>

                            <h4 class="h4_butt">인공지능 빅데이터 연구실 (AI & BigData Lab.)</h4>
                            <div class="imgtxt_box">
                                <div class="img">
                                    <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/lab_img02.png" alt="">
                                </div>
                                <div class="txt">
                                    <p class="text_type1">인공지능과 빅데이터 분야의 지식과 기술을 연구하고 이를 산업분야에 적용하여 제품과 서비스를 개발함으로써 개발 능력과 현장 실무 능력을 배양하기 위한 연구실. </p>
                                    <ul class="ul_type1">
                                        <li>구성원
                                            <ul class="ul_type2">
                                                <li>담당교수 : 조정호 교수</li>
                                                <li>연구학생 : 약 8명</li>
                                            </ul>
                                        </li>
                                        <li>협약기업 : ㈜모메드솔루션</li>
                                        <li>주요활동 : PBL 사회맞춤형 동아리, 산학프로젝트, 기술개발, 기술지도</li>
                                    </ul>
                                </div>
                            </div>

                            <h4 class="h4_butt">차세대 소프트웨어 & 시스템 개발 연구실(NSS Lab, Next Software & System Lab.)</h4>
                            <div class="imgtxt_box">
                                <div class="img">
                                    <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/lab_img03.png" alt="">
                                </div>
                                <div class="txt">
                                    <p class="text_type1">인공지능과 사물인터넷이 융합된 지능형 사물인터넷(AIOT) 서비스 및 시스템 개발</p>
                                    <ul class="ul_type1">
                                        <li>구성원
                                            <ul class="ul_type2">
                                                <li>담당교수 : 노선식 교수</li>
                                                <li>연구학생 : 약 7명</li>
                                            </ul>
                                        </li>
                                        <li>협약기업 : ㈜리눅스아이티, ㈜디유</li>
                                        <li>주요활동 : PBL 사회맞춤형 동아리, 산학프로젝트, 현장실습, 기술개발, 기술지도</li>
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