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
                        <a href="/pages/dept_san_hak_lab.php" class="" target="_self" title="산학협력연구실">
                            <span>산학협력연구실</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/dept_grad_course.php" class="on" target="_self" title="졸업후진로">
                            <span>졸업후진로</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content_box">
                <!-- contents -->
                <div id="contents">
                    <div class="contents_top">
                        <h3 class="subtop_title">졸업후진로</h3>
                        <p class="subtop_p">학과정보 &gt; 졸업후진로</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1344" class="fa" data-toggle="sns_share" data-service="facebook" data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1344" class="bd" data-toggle="sns_share" data-service="band" data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1344" class="tw" data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1344" class="ks" data-toggle="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.</dd>
                                </dl>
                                <div class="qr_img"> <img src="/datas/qrcode/menu/software/1344.png" alt="QR Code">  </div>
                                <a href="#" class="btn_close"><img src="/pages/software/img/sub/navi_close_btn.png" alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div id="page_content"><h3 class="h3_butt">인공지능(AI) 소프트웨어 개발자</h3>
                            <p class="text_type1">딥러닝, 기계학습 등 전문지식을 바탕으로 인공지능 기반 소프트웨어를 개발하여 실생활에 활용할 수 있는 다양한 제품에 접목하여 일반 사용자들의 편의성을 극대화 시킨다. 인공지능 소프트웨어 전문가는 사물인터넷, 로봇 설계, 메타버스 게임, 검색엔진, 빅데이터, 영상 및 음성 인식, 자율주행 자동차 등 다양한 영역에서 활용이 가능한 인공지능 플랫폼을 설계하고 개발하여 4차산업혁명 시대의 전문가로 진출하도록 한다.  </p>

                            <h3 class="h3_butt">응용소프트웨어개발자</h3>
                            <p class="text_type1">사용자의 다양한 문제 해결을 위해 명령을 수행하는 응용 프로그램(애플리케이션)을 개발하고 컴퓨터시스템의 사용 환경에 따라 소프트웨어를 개발하고 사용자의 환경을 반영하여 소프트웨어를 업그레이드한다. 해당 소프트웨어의 용도에 따라 회계처리, 고객관리 같은 사무용 소프트웨어, 전자메일이나 웹브라우저 같은 컴퓨터 통신용이나 미디어 재생 및 그래픽 도구 등 멀티미디어 도구, 통계처리 등을 위한 분석 소프트웨어 설계 및 기획과 프로그래밍, 유지 개선 등 개발 분야 전반을 모두 포함하는 전문가로 진출할 수 있다.</p>

                            <h3 class="h3_butt">사물인터넷 전문가</h3>
                            <p class="text_type1">사물 인터넷 전문가는 정보 통신 기술(ICT) 분야의 직업인 컴퓨터 프로그래머, 네트워크 시스템 개발자와 상호 협력하여, 자율주행 자동차, 에너지 및 재생에너지, 헬스 케어, 보안 등의 분야에서 소프트웨어 개발 및 유지보수 업무를 담당합니다. 특히, 사물 인터넷 전문가는 스마트 홈, 스마트 빌딩, 스마트 시티, 스마트 물류, 공항 출입국 관리 시스템 등 사람들의 일상생활 속 정보통신 환경을 편리하고 안전하게 구축하는 전문가로 성장할 수 있다.   </p>

                            <h3 class="h3_butt">빅데이터 전문가</h3>
                            <p class="text_type1">빅데이터 전문가는 대량의 빅데이터로 사람들의 행동이나 시장의 변화 등을 분석하는데 도움이 되는 정보를 제공합니다. 구체적으로 데이터 수집, 데이터 저장 및 분석, 데이터 시각화 등을 통한 정보 제공을 담당합니다. 빅데이터 전문가는 금융 분야(신용 리스크 관리, 로보어드바이저), 유통 분야(상품 판매 예측, 백화점 상품 진열), 제조 분야(불량 발생 예측) 서비스 분야, 의료 분야, 공공 분야 등 다양한 영역으로 진출하여 취업의 문이 활짝 열려있다. </p>

                            <h3 class="h3_butt">네트워크 및 시스템 관리자</h3>
                            <p class="text_type1">클라이언트, 서버, 인터넷 및 인트라넷 형태의 전산망 관련 하드웨어 및 소프트웨어를 관리하고 운영한다. 네트워크의 고장 및 운영상에 이상이 발견되면 문제점을 파악하여 복구한다. 네트워크관리자는 사용자의 네트워크의 접속이 원활하도록 서비스를 제공하고, 외부망과 연동되는 통신회선(전용선, 전화망 등)에 대해서  통신장애를 관리한다. 네트워크 및 클라우드 통신망의 급증으로  데이터 통신 시스템의 운영 관리, 시스템 내의 장애를 처리하고 관리할 수 있는 네트워크 관리자의 수요는 꾸준하게 증가하고 있다.  </p>
                        </div>
                    </div>
                </div>
                <!-- contents -->
            </div>
        </div>
    </div>
<?php
include_once(G5_PATH.'/tail.php');