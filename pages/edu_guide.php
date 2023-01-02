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
                <h2 class="s_visual2">교육과정</h2>
                <ul class="sub_2dmenu">
                    <li>
                        <a href="/pages/edu_procedure.php" class="" target="_self" title="교육과정">
                            <span>교육과정</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/edu_system.php" class="" target="_self" title="교과목 이수체계">
                            <span>교과목 이수체계</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/edu_notSub.php" class="" target="_self" title="비교과교육과정">
                            <span>비교과교육과정</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/edu_guide.php" class="on" target="_self" title="학업가이드">
                            <span>학업가이드</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content_box">
                <!-- contents -->
                <div id="contents">
                    <div class="contents_top">
                        <h3 class="subtop_title">학업가이드</h3>
                        <p class="subtop_p">교육과정 &gt; 학업가이드</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1353" class="fa" data-toggle="sns_share" data-service="facebook" data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1353" class="bd" data-toggle="sns_share" data-service="band" data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1353" class="tw" data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1353" class="ks" data-toggle="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.</dd>
                                </dl>
                                <div class="qr_img"> <img src="/datas/qrcode/menu/software/1353.png" alt="QR Code">  </div>
                                <a href="#" class="btn_close"><img src="/pages/software/img/sub/navi_close_btn.png" alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div id="page_content"><h3 class="h3_butt">2017학년도 신입생 졸업요건</h3>
                            <p class="text_type1">교양최대이수학점은 48학점이며, 핵심교양 4개영역 중 3개 영역 이상에서 12학점이상 취득하고,  균형교양 5개영역 중 3개영역 이상에서 9학점이상 취득하여야 한다.</p>
                            <div class="table_type1">
                                <table>
                                    <thead>
                                    <tr>

                                        <th colspan="2" rowspan="2">학부(과)</th>
                                        <th rowspan="2">졸업최소이수학점</th>
                                        <th colspan="3">교양최소학점</th>
                                        <th colspan="2">단일전공</th>
                                        <th colspan="2">복수전공</th>
                                        <th rowspan="2">수강
                                            신청
                                            학점</th>
                                    </tr>
                                    <tr>
                                        <th>기초</th>
                                        <th>핵심</th>
                                        <th>균형</th>
                                        <th>전공
                                            학점</th>
                                        <th>잔여
                                            학점</th>
                                        <th>주전공</th>
                                        <th>복수
                                            전공</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td colspan="2">융합소프트웨어학과</td>
                                        <td>140</td>
                                        <td>14</td>
                                        <td>12</td>
                                        <td>9</td>
                                        <td>72</td>
                                        <td>33</td>
                                        <td>45</td>
                                        <td>45</td>
                                        <td>18</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                            <h3 class="h3_butt">2018학년도 신입생 졸업요건</h3>
                            <p class="text_type1">교양최대이수학점은 48학점이며, 호심교양 3개영역 중 2개 영역에서 9학점이상 취득하고, 균형교양 5개 영역 중 3개영역 이상에서 12학점 이상 취득하여야 한다.</p>

                            <div class="table_type1">
                                <table>
                                    <thead>
                                    <tr>

                                        <th colspan="2" rowspan="2">학부(과)</th>
                                        <th rowspan="2">졸업최소이수학점</th>
                                        <th colspan="3">교양최소학점</th>
                                        <th colspan="2">단일전공</th>
                                        <th colspan="2">복수전공</th>
                                        <th rowspan="2">수강
                                            신청
                                            학점</th>
                                    </tr>
                                    <tr>
                                        <th>기초</th>
                                        <th>핵심</th>
                                        <th>균형</th>
                                        <th>전공
                                            학점</th>
                                        <th>잔여
                                            학점</th>
                                        <th>주전공</th>
                                        <th>복수
                                            전공</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td colspan="2">융합소프트웨어학과</td>
                                        <td>140</td>
                                        <td>12</td>
                                        <td>9</td>
                                        <td>12</td>
                                        <td>72</td>
                                        <td>35</td>
                                        <td>45</td>
                                        <td>45</td>
                                        <td>18</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                            <h3 class="h3_butt">2019학년도 신입생 졸업요건</h3>
                            <p class="text_type1">교양최대이수학점은 48학점이며, 호심교양 3개영역 중 2개 영역에서 9학점이상 취득하고, 균형교양 5개 영역 중 3개영역 이상에서 12학점 이상 취득하여야 한다</p>

                            <div class="table_type1">
                                <table>
                                    <thead>
                                    <tr>

                                        <th colspan="2" rowspan="2">학부(과)</th>
                                        <th rowspan="2">졸업최소이수학점</th>
                                        <th colspan="3">교양최소학점</th>
                                        <th colspan="2">단일전공</th>
                                        <th colspan="2">복수전공</th>
                                        <th rowspan="2">수강
                                            신청
                                            학점</th>
                                    </tr>
                                    <tr>
                                        <th>기초</th>
                                        <th>핵심</th>
                                        <th>균형</th>
                                        <th>전공
                                            학점</th>
                                        <th>잔여
                                            학점</th>
                                        <th>주전공</th>
                                        <th>복수
                                            전공</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="2">융합소프트웨어학과</td>
                                        <td>140</td>
                                        <td>12</td>
                                        <td>9</td>
                                        <td>12</td>
                                        <td>72</td>
                                        <td>35</td>
                                        <td>45</td>
                                        <td>45</td>
                                        <td>18</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                            <h3 class="h3_butt">2020학년도 신입생 졸업요건</h3>
                            <p class="text_type1">교양최대이수학점은 48학점이며, 호심교양 3개 영역 중 2개이상 영역에서 9학점 이상을 취득하고, 균형교양 5개 영역 중 3개이상 영역에서 12학점 이상 취득하여야 한다.</p>

                            <div class="table_type1">
                                <table>
                                    <thead>
                                    <tr>

                                        <th colspan="2" rowspan="2">학부(과)</th>
                                        <th rowspan="2">졸업최소이수학점</th>
                                        <th colspan="3">교양최소학점</th>
                                        <th colspan="2">단일전공</th>
                                        <th colspan="2">복수전공</th>
                                        <th rowspan="2">수강
                                            신청
                                            학점</th>
                                    </tr>
                                    <tr>
                                        <th>기초</th>
                                        <th>핵심</th>
                                        <th>균형</th>
                                        <th>전공
                                            학점</th>
                                        <th>잔여
                                            학점</th>
                                        <th>주전공</th>
                                        <th>복수
                                            전공</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="2">융합소프트웨어학과</td>
                                        <td>140</td>
                                        <td>12</td>
                                        <td>9</td>
                                        <td>12</td>
                                        <td>72</td>
                                        <td>35</td>
                                        <td>45</td>
                                        <td>45</td>
                                        <td>18</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                            <h3 class="h3_butt">2021학년도 신입생 졸업요건</h3>
                            <p class="text_type1">교양최대이수학점은 48학점이며, 호심교양 3개 영역 중 2개이상 영역에서 9학점 이상을 취득하고, 균형교양 5개 영역 중 3개이상 영역에서 12학점 이상 취득하여야 한다.</p>

                            <div class="table_type1">
                                <table>
                                    <thead>
                                    <tr>

                                        <th colspan="2" rowspan="2">학부(과)</th>
                                        <th rowspan="2">졸업최소이수학점</th>
                                        <th colspan="3">교양최소학점</th>
                                        <th colspan="2">단일전공</th>
                                        <th colspan="2">복수전공</th>
                                        <th rowspan="2">수강
                                            신청
                                            학점</th>
                                    </tr>
                                    <tr>
                                        <th>기초</th>
                                        <th>핵심</th>
                                        <th>균형</th>
                                        <th>전공
                                            학점</th>
                                        <th>잔여
                                            학점</th>
                                        <th>주전공</th>
                                        <th>복수
                                            전공</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="2">융합소프트웨어학과</td>
                                        <td>140</td>
                                        <td>12</td>
                                        <td>9</td>
                                        <td>12</td>
                                        <td>72</td>
                                        <td>35</td>
                                        <td>45</td>
                                        <td>45</td>
                                        <td>18</td>
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