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
                <h2 class="s_visual4">취업정보</h2>
                <ul class="sub_2dmenu">
                    <li>
                        <a href="/pages/employment_hunHwang.php" class=" " target="_self" title="취업현황">
                            <span>취업현황</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/employment_example.php" class="" target="_self" title="취업사례">
                            <span>취업사례</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/employment_certificate.php" class="on" target="_self" title="자격증">
                            <span>자격증</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/employment_certificate_example.php" class="" target="_self" title="자격증 취득현황">
                            <span>자격증 취득현황</span>
                        </a>
                    </li>
                    <li>
                        <a href="/bbs/board.php?bo_table=employment_info" class="" target="_self" title="취업안내">
                            <span>취업안내</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content_box">
                <!-- contents -->
                <div id="contents">
                    <div class="contents_top">
                        <h3 class="subtop_title">자격증</h3>
                        <p class="subtop_p">취업정보 &gt; 자격증</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1349" class="fa" data-toggle="sns_share" data-service="facebook" data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1349" class="bd" data-toggle="sns_share" data-service="band" data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1349" class="tw" data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1349" class="ks" data-toggle="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.</dd>
                                </dl>
                                <div class="qr_img"> <img src="https://ai.gwangju.ac.kr/datas/qrcode/menu/software/1349.png" alt="QR Code">  </div>
                                <a href="#" class="btn_close"><img src="/pages/software/img/sub/navi_close_btn.png" alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div id="page_content"><div class="license_list">
                                <ul>
                                    <li>
                                        <div class="imgbox">
                                            <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/s0403_img01.jpg" alt="">
                                        </div>
                                        <dl>
                                            <dt>정보처리기사</dt>
                                            <dd>컴퓨터를 효과적으로 활용하기 위해서 하드웨어뿐만 아니라 정교한 소프트웨어가 필요하다. 이에 따라 우수한 프로그램을 개발하여 업무의 효율성을 높이고, 궁극적으로 국가발전에 이바지하기 위해서 컴퓨터에 관한 전문적인 지식과 기술을 갖춘 사람을 양성할 목적으로 제정</dd>
                                        </dl>
                                        <a href="http://www.q-net.or.kr" target="_blank" class="btn_basic btn_b">한국산업인력공단 바로가기 <span class="blank_w"></span></a>
                                    </li>
                                    <li>
                                        <div class="imgbox">
                                            <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/s0403_img02.jpg" alt="">
                                        </div>
                                        <dl>
                                            <dt>정보보안기사</dt>
                                            <dd>IT 및 정보통신 기술에 대한 이론 및 실무지식을 바탕으로 정보보안시스템 및 솔루션 개발, 주요 운영체제 및 네트워크 장비, 정보보안 장비에 대한 운영 및 관리, 조직의 정보보안정책의 수립과 대책수립 및 관리, 정보보호 관련 법규 적용 등의 직무 수행</dd>
                                        </dl>
                                        <a href="http://kisq.or.kr" target="_blank" class="btn_basic btn_b">한국인터넷진흥원 바로가기 <span class="blank_w"></span></a>
                                    </li>
                                    <li>
                                        <div class="imgbox">
                                            <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/s0403_img03.jpg" alt="">
                                        </div>
                                        <dl>
                                            <dt>객체지향개발자</dt>
                                            <dd>객체지향 아키텍처를 설계하고 설계된 아키텍처와 요구사항 정의서를 기반으로 객체지향 프로그래밍을 구현하는 업무를 수행할 수 있는 기술력에 대한 자격</dd>
                                        </dl>
                                        <a href="http://www.aiit.or.kr" target="_blank" class="btn_basic btn_b">한국정보통신교육원 바로가기 <span class="blank_w"></span></a>
                                    </li>
                                    <li>
                                        <div class="imgbox">
                                            <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/s0403_img03.jpg" alt="">
                                        </div>
                                        <dl>
                                            <dt>데이터베이스관리사</dt>
                                            <dd>관계형 데이터베이스 시스템에서 개념, 논리, 물리 스키마 설계 및 최종사용자의 요구사항 분석, SQL 조작 업무를 수행할 수 있는 기술력에 대한 자격</dd>
                                        </dl>
                                        <a href="http://www.aiit.or.kr" target="_blank" class="btn_basic btn_b">한국정보통신교육원 바로가기 <span class="blank_w"></span></a>
                                    </li>
                                    <li>
                                        <div class="imgbox">
                                            <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/s0403_img03.jpg" alt="">
                                        </div>
                                        <dl>
                                            <dt>스마트웹퍼블리셔</dt>
                                            <dd>웹사이트의 화면(UI)을 구현하는 웹디자이너, 웹퍼블리셔, 웹마스터 등의 업무를 수행할 수 있는 기술력에 대한 자격</dd>
                                        </dl>
                                        <a href="http://www.aiit.or.kr" target="_blank" class="btn_basic btn_b">한국정보통신교육원 바로가기 <span class="blank_w"></span></a>
                                    </li>
                                    <li>
                                        <div class="imgbox">
                                            <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/s0403_img04.jpg" alt="">
                                        </div>
                                        <dl>
                                            <dt>네트워크관리사</dt>
                                            <dd>서버를 구축하고 보안 설정, 시스템 최적화 등 네트워크구축 및 이를 효과적으로 관리할 수 있는 인터넷 관련 기술력에 대한 자격</dd>
                                        </dl>
                                        <a href="http://www.icqa.or.kr" target="_blank" class="btn_basic btn_b">한국정보통신자격협회 바로가기 <span class="blank_w"></span></a>
                                    </li>
                                    <li>
                                        <div class="imgbox">
                                            <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/s0403_img04.jpg" alt="">
                                        </div>
                                        <dl>
                                            <dt>스마트홈관리사</dt>
                                            <dd>4차 산업혁명의 핵심인 사물인터넷과 초연결 기술을 기반으로 나날이 발전하는 스마트홈 기기들의 효율적인 구축과 활용을 담당하는 전문 인력을 양성하기 위한 자격</dd>
                                        </dl>
                                        <a href="http://www.icqa.or.kr" target="_blank" class="btn_basic btn_b">한국정보통신자격협회 바로가기 <span class="blank_w"></span></a>
                                    </li>
                                    <li>
                                        <div class="imgbox">
                                            <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/s0403_img04.jpg" alt="">
                                        </div>
                                        <dl>
                                            <dt>인터넷보안관리사</dt>
                                            <dd>서버 보호를 위한 시스템 보안 설정 등의 기술적 점검을 수행하여 서버에 대한 해킹에 효과적으로 예방하는 기술력에 대한 자격</dd>
                                        </dl>
                                        <a href="http://www.icqa.or.kr" target="_blank" class="btn_basic btn_b">한국정보통신자격협회 바로가기 <span class="blank_w"></span></a>
                                    </li>
                                    <li>
                                        <div class="imgbox">
                                            <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/s0403_img05.jpg" alt="">
                                        </div>
                                        <dl>
                                            <dt>리눅스마스터</dt>
                                            <dd>국내 리눅스 시장 활성화에 따른 전문 인력에 대한 객관적인 평가 기준을 마련하고 현장성과 전문성을 갖춘 리눅스 기술인력을 양성하기 위해 마련된 자격</dd>
                                        </dl>
                                        <a href="http://www.ihd.or.kr" target="_blank" class="btn_basic btn_b">한국정보통신진흥협회 바로가기 <span class="blank_w"></span></a>
                                    </li>
                                    <li>
                                        <div class="imgbox">
                                            <img src="https://ai.gwangju.ac.kr/pages/software/img/sub/s0403_img06.jpg" alt="">
                                        </div>
                                        <dl>
                                            <dt>AWS Cetification</dt>
                                            <dd>아마존(Amazon)에서 개발한 자격으로 전문가에게 오늘날 요구되는 기술을 소개하고, 조직이 AWS를 사용하여 클라우드 이니셔티브를 위해 혁신적이고 효율적인 팀을 구축하는 데 도움이 되는 클라우드 전문 지식을 검증</dd>
                                        </dl>
                                        <a href="https://aws.amazon.com/ko/certification" target="_blank" class="btn_basic btn_b">AWS Training and Certification 바로가기 <span class="blank_w"></span></a>
                                    </li>
                                </ul>

                            </div></div>
                    </div>
                </div>
                <!-- contents -->
            </div>
        </div>
    </div>
<?php
include_once(G5_PATH.'/tail.php');