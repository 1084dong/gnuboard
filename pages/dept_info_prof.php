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
                        <a href="/pages/dept_info_prof.php" class="on" target="_self" title="교수소개">
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
                        <h3 class="subtop_title">교수소개</h3>
                        <p class="subtop_p">학과정보 &gt; 교수소개</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///professor/?site=software&amp;mn=1326" class="fa" data-toggle="sns_share" data-service="facebook" data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///professor/?site=software&amp;mn=1326" class="bd" data-toggle="sns_share" data-service="band" data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///professor/?site=software&amp;mn=1326" class="tw" data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///professor/?site=software&amp;mn=1326" class="ks" data-toggle="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.</dd>
                                </dl>
                                <div class="qr_img"> <img src="/datas/qrcode/menu/software/1326.png" alt="QR Code">  </div>
                                <a href="#" class="btn_close"><img src="/pages/software/img/sub/navi_close_btn.png" alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div id="page_content"><div class="professor">
                                <ul>
                                    <li>
                                        <div class="img"><img alt="김광현" src="https://ai.gwangju.ac.kr/datas/professor/6be0c3237fc8ff5e48e1d6426660311a.jpg"></div>
                                        <dl>
                                            <dt>김광현 교수 <span>학과장</span></dt>
                                            <dd>최종학위 : 이학박사</dd>
                                            <dd>연구실 : 전산관 504호</dd>
                                            <dd>이메일 : <a href="mailto:ghkim@gwangju.ac.kr">ghkim@gwangju.ac.kr</a></dd>
                                            <dd>관심분야 : 머신러닝/딥러닝, 오픈소프트웨어, 차세대네트워크구축</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <div class="img"><img alt="조정호" src="https://ai.gwangju.ac.kr/datas/professor/28ffc17a09c16fdda87de2e8f2cd25c8.jpg"></div>
                                        <dl>
                                            <dt>조정호 교수 <span></span></dt>
                                            <dd>최종학위 : 이학박사</dd>
                                            <dd>연구실 : 전산관 503호</dd>
                                            <dd>이메일 : <a href="mailto:chcho@gwangju.ac.kr">chcho@gwangju.ac.kr</a></dd>
                                            <dd>관심분야 : 인공지능, 빅데이터, 디지털트윈, 소프트웨어 설계 및 검증</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <div class="img"><img alt="이우" src="https://ai.gwangju.ac.kr/datas/professor/515503581d66dfe80219e953fbbb3122.jpg"></div>
                                        <dl>
                                            <dt>이우 교수 <span></span></dt>
                                            <dd>최종학위 : 이학박사</dd>
                                            <dd>연구실 : 전산관 502호</dd>
                                            <dd>이메일 : <a href="mailto:woolee@gwangju.ac.kr">woolee@gwangju.ac.kr</a></dd>
                                            <dd>관심분야 : 수리논리, 이산수학, 응용수학</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <div class="img"><img alt="노선식" src="https://ai.gwangju.ac.kr/datas/professor/372cb4c928eb5866b90644921f913538.jpg"></div>
                                        <dl>
                                            <dt>노선식 교수 <span></span></dt>
                                            <dd>최종학위 : 공학박사</dd>
                                            <dd>연구실 : 호심관 1808호</dd>
                                            <dd>이메일 : <a href="mailto:ssroh@gwangju.ac.kr">ssroh@gwangju.ac.kr</a></dd>
                                            <dd>관심분야 : 지능형 IOT, 블록체인, 정보보안, C/Python 프로그래밍</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <div class="img"><img alt="이금성" src="https://ai.gwangju.ac.kr/datas/professor/b2f4b600be8336f9cead85456b19603b.jpg"></div>
                                        <dl>
                                            <dt>이금성 교수 <span>겸임교수</span></dt>
                                            <dd>최종학위 : 공학박사</dd>
                                            <dd>연구실 : 인성관 513호</dd>
                                            <dd>이메일 : <a href="mailto:luxfree@gmail.com">luxfree@gmail.com</a></dd>
                                            <dd>관심분야 : 인공지능,네트워크,보안,리눅스프로그래밍</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <div class="img"><img alt="이태훈" src="https://ai.gwangju.ac.kr/datas/professor/4b3e7d164eaaf728829f759b4b1bd609.jpg"></div>
                                        <dl>
                                            <dt>이태훈 교수 <span>겸임교수</span></dt>
                                            <dd>최종학위 : 공학박사 수료</dd>
                                            <dd>연구실 : (주)디유</dd>
                                            <dd>이메일 : <a href="mailto:asadal.osj@gmail.com">asadal.osj@gmail.com</a></dd>
                                            <dd>홈페이지 :
                                                <a href="http://www.dius.kr" target="_blank" title="이태훈">http://www.dius.kr<span class="blank"></span></a>
                                            </dd>
                                            <dd>관심분야 : 블록체인, 인공지능, 소프트웨어 아키텍처 및 설계, 디자인 패턴</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <div class="img"><img alt="송성근" src="https://ai.gwangju.ac.kr/datas/professor/4d90561df406fef602285234efacfebd.jpg"></div>
                                        <dl>
                                            <dt>송성근 교수 <span>겸임교수</span></dt>
                                            <dd>최종학위 : 공학석사</dd>
                                            <dd>연구실 : 디엠테크(주)</dd>
                                            <dd>이메일 : <a href="mailto:cromyan@gmail.com">cromyan@gmail.com</a></dd>
                                            <dd>관심분야 : 사물인터넷, 네트워크 플랫폼, 임베디드 S/W</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <div class="img"><img style="width: 100%;" alt="이현석" src="https://ai.gwangju.ac.kr/datas/professor/8fb018560a1922f59b3f71fb8fd2dfbd.jpg"></div>
                                        <dl>
                                            <dt>이현석 교수 <span>겸임교수</span></dt>
                                            <dd>최종학위 : 공학석사</dd>
                                            <dd>연구실 : (주)큐넷</dd>
                                            <dd>이메일 : <a href="mailto:terraninin.edu@gmail.com">terraninin.edu@gmail.com</a></dd>
                                            <dd>관심분야 : 인공지능, 머신러닝/딥러닝</dd>
                                        </dl>
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