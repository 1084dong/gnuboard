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
                        <a href="/pages/employment_example.php" class="on" target="_self" title="취업사례">
                            <span>취업사례</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/employment_certificate.php" class="" target="_self" title="자격증">
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
                        <h3 class="subtop_title">취업사례</h3>
                        <p class="subtop_p">취업정보 &gt; 취업사례</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///board/?board=employment_case&amp;site=software&amp;mn=1352" class="fa" data-toggle="sns_share" data-service="facebook" data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///board/?board=employment_case&amp;site=software&amp;mn=1352" class="bd" data-toggle="sns_share" data-service="band" data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///board/?board=employment_case&amp;site=software&amp;mn=1352" class="tw" data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///board/?board=employment_case&amp;site=software&amp;mn=1352" class="ks" data-toggle="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.</dd>
                                </dl>
                                <div class="qr_img"> <img src="/datas/qrcode/menu/software/1352.png" alt="QR Code">  </div>
                                <a href="#" class="btn_close"><img src="/pages/software/img/sub/navi_close_btn.png" alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div class="tab_type4">
                            <ul>
                                <li><a href="" class="on">취업대표사례 1</a></li>
                                <li><a href="">취업대표사례 2</a></li>
                                <li><a href="">기타 사례</a></li>
                            </ul>
                        </div>

                        <!--사례 1-->
                        <div class="tab_wrap">
                            <div class="dpm_ex">
                                <h3 class="h3_butt">2020년 졸업 이○○학생 경력사항</h3>
                                <h4 class="h4_butt">취득 자격증</h4>
                                <ul class="ul_type1">
                                    <li>2019년 : 정보처리기사, 스마트웹퍼블리셔2급 취득</li>
                                    <li>2018년 : 리눅스마스터, 데이터베이스관리사, 네트워크관리사 취득</li>
                                    <li>2015년 : MOS 취득</li>
                                </ul>

                                <h4 class="h4_butt">프로젝트 수행 경력</h4>
                                <div class="table_type1">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>연번</th>
                                            <th>구분</th>
                                            <th>프로그램명</th>
                                            <th>과제명</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>교과</td>
                                            <td>캡스톤디자인1</td>
                                            <td>빅데이터 기반 미세먼지 모니터링 시스템</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>비교과</td>
                                            <td>산학프로젝트</td>
                                            <td>IOT기반 미세먼지 관제 시스템</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>비교과</td>
                                            <td>단기집중교육</td>
                                            <td>LoRa 기반 미세먼지 관제시스템</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>비교과</td>
                                            <td>PBL사회맞춤형 동아리</td>
                                            <td>IoT 센서 기술을 이용한 스마트 창문 제어</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>교과</td>
                                            <td>캡스톤디자인2</td>
                                            <td>LoRa 네트워크를 활용한 IoT형 초미세먼지 농도 관제시스템</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="h4_butt">수상 경력</h4>
                                <p class="text_type1">2019 LINC+ PBL 교육성과 경진대회 최우수상, 우수상 수상</p>
                                <ul class="ul_type1">
                                    <li>최우수상 : IoT 센서 기술을 이용한 스마트 창문 제어</li>
                                    <li>우수상 : LoRa 네트워크를 활용한 IoT형 초미세먼지 농도 관제시스템</li>
                                </ul>

                                <h4 class="h4_butt">대외 출품 경력</h4>
                                <p class="text_type1">2019 산학협력 EXPO : “LoRa 네트워크를 활용한 IoT형 초미세먼지 농도 관제시스템” 작품 출품</p>
                            </div>
                        </div>
                        <!--//사례 1-->

                        <!--사례 2-->
                        <div class="tab_wrap" style="display: none">
                            <div class="dpm_ex">
                                <h3 class="h3_butt">2020년 졸업 황○○학생 경력사항</h3>

                                <h4 class="h4_butt">프로그램 및 성과</h4>
                                <div class="table_type1">
                                    <table>
                                        <colgroup>
                                            <col width="25%">
                                            <col width="25%">
                                            <col width="25%">
                                            <col width="25%">
                                        </colgroup>
                                        <thead>
                                        <tr>
                                            <th>단기/장기 현장실습 <br>(실습시기 및 기간/기관명)</th>
                                            <th>정규 캡스톤디자인 이수 <br> (이수학년/과목명/ 주요 내용)</th>
                                            <th>기타 산학연계 교육과정 이수 <br>(비교과 및 산학공동기술개발 과제 참여 등)</th>
                                            <th>취업 <br> (성과내용/ 회사명,업종 등)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td  class="txtl">
                                                <ul class="ul_type1">
                                                    <li>단기 현장실습
                                                        <ul class="ul_type2">
                                                            <li>19.6.24~7.19(4주)</li>
                                                            <li> 대상정보기술㈜</li>
                                                        </ul>
                                                    </li>
                                                    <li>단기 현장실습
                                                        <ul class="ul_type2">
                                                            <li>19.12.23~20.1.17(4주)</li>
                                                            <li> 대상정보기술㈜</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="txtl">
                                                <ul class="ul_type1">
                                                    <li>4학년, 캡스톤디자인1
                                                        <ul class="ul_type2">
                                                            <li>IOT 스마트 보관함</li>
                                                            <li>대상정보기술㈜</li>
                                                        </ul>
                                                    </li>
                                                    <li>4학년, 캡스톤디자인2
                                                        <ul class="ul_type2">
                                                            <li>노마스크 감지 시스템</li>
                                                            <li>대상정보기술㈜</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="txtl">
                                                <ul class="ul_type1">
                                                    <li>PBL사회맞춤형동아리</li>
                                                    <li>산학프로젝트</li>
                                                    <li>단기집중교육</li>
                                                    <li>전공역량강화프로그램</li>
                                                    <li>취업역량강화캠프</li>
                                                    <li>IOT융합특강</li>
                                                    <li>현장견학 및 전시참관</li>
                                                    <li>인도네시아ICAPS 참가</li>
                                                </ul>
                                            </td>
                                            <td class="txtl">
                                                <ul class="ul_type1">
                                                    <li>회사명: 대상정보기술㈜ </li>
                                                    <li>업종: 응용 소프트웨어 개발 및 공급 </li>
                                                    <li>성과내용: 2019년 하계 및 동계 현장실습 수행 및 각종 산학연계 프로젝트 과제 수행 경험을 통해 협약기업 대상정보기술㈜ 본사 개발자로 취업 연계 </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h4 class="h4_butt">취득 자격증</h4>
                                <ul class="ul_type1">
                                    <li>정보처리기사, 네트워크관리사, 스마트웹퍼블리셔, 데이터베이스관리사, 컴퓨터활용능력</li>
                                </ul>

                                <h4 class="h4_butt">수상 경력</h4>
                                <ul class="ul_type1">
                                    <li>2018 청년취업아카데미 우수상</li>
                                    <li>2018년 캡스톤디자인경진대회 수상</li>
                                </ul>
                            </div>
                        </div>                        <div id="page_content"><form id="default_board">
                                <input type="hidden" name="board" value="employment_case">
                                <input type="hidden" name="site" value="software">
                                <input type="hidden" name="mn" value="1352">
                                <input type="hidden" name="type" value="">
                            </form>
                            <div id="board_wrap">

                            </div>
                            <div id="bbs_loading">
                                <div class="board_list_bg">
                                    <div class="loader"></div>
                                </div>
                            </div></div>
                    </div>
                </div>
                <!-- contents -->
            </div>
        </div>
    </div>
<?php
include_once(G5_PATH.'/tail.php');