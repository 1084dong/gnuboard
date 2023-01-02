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
                <h2 class="s_visual3">입학정보</h2>
                <ul class="sub_2dmenu">
                    <li>
                        <a href="/pages/admission_info.php" class="on" target="_self" title="입학안내">
                            <span>입학안내</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://iphak.gwangju.ac.kr/bbs/?b_id=iphak_admission_notice&amp;site=iphak&amp;mn=307" class=" blank" target="_blank" title="새창">
                            <span>입학공지</span>
                        </a>
                    </li>
                    <li>
                        <a href="/bbs/board.php?bo_table=admission_cons" class="" target="_self" title="입학상담">
                            <span>입학상담</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content_box">
                <!-- contents -->
                <div id="contents">
                    <div class="contents_top">
                        <h3 class="subtop_title">입학안내</h3>
                        <p class="subtop_p">입학정보 &gt; 입학안내</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1336" class="fa" data-toggle="sns_share" data-service="facebook" data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1336" class="bd" data-toggle="sns_share" data-service="band" data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1336" class="tw" data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1336" class="ks" data-toggle="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.</dd>
                                </dl>
                                <div class="qr_img"> <img src="/datas/qrcode/menu/software/1336.png" alt="QR Code">  </div>
                                <a href="#" class="btn_close"><img src="/pages/software/img/sub/navi_close_btn.png" alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div id="page_content"><div class="s0301_top">
                                <h3>2023학년도 정시모집</h3>
                                <p>꿈이 시작되는 곳 광주대학교 AI소프트웨어학과에서 <br> 4차 산업혁명시대 첨단산업의 AI·소프트웨어를 주도할 2023학년도 신입생 정시모집을 합니다.</p>
                            </div>

                            <br>

                            <h4 class="h4_butt">원서접수 및 전형일정</h4>
                            <div class="table_type1">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>구  분</th>
                                        <th>일  정</th>
                                        <th>비  고</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>원서접수</th>
                                        <td>2022. 12. 29.(목) ~ 2023. 01. 02.(월) 18:00</td>
                                        <td>인터넷접수, 창구접수<br>수능 미응시자도 지원가능</td>
                                    </tr>
                                    <tr>
                                        <th>서류제출</th>
                                        <td>2022. 12. 29.(목) ~ 2023. 01. 06.(금) 18:00</td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th>합격자발표</th>
                                        <td>2023. 01. 16.(월) 13:00</td>
                                        <td>본교 홈페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>합격자 등록</th>
                                        <td>2023. 02. 07.(화) ~ 02. 09.(목) 16:00</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>충원합격자 발표 및 등록</th>
                                        <td>2023. 02. 09.(목) 21:00 ~ 02. 16.(목) 18:00</td>
                                        <td>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div></div>
                    </div>
                </div>
                <!-- contents -->
            </div>
        </div>
    </div>
<?php
include_once(G5_PATH.'/tail.php');