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
                        <a href="/pages/employment_hunHwang.php" class=" on" target="_self" title="취업현황">
                            <span>취업현황</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/employment_example.php" class="" target="_self" title="취업사례">
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
                        <h3 class="subtop_title">취업현황</h3>
                        <p class="subtop_p">취업정보 &gt; 취업현황</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1348" class="fa" data-toggle="sns_share" data-service="facebook" data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1348" class="bd" data-toggle="sns_share" data-service="band" data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1348" class="tw" data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1348" class="ks" data-toggle="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.</dd>
                                </dl>
                                <div class="qr_img"> <img src="/datas/qrcode/menu/software/1348.png" alt="QR Code">  </div>
                                <a href="#" class="btn_close"><img src="/pages/software/img/sub/navi_close_btn.png" alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div id="page_content"><h3 class="h3_butt">연도별 취업 우수현황</h3>
                            <div class="table_type1">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>성 명</th>
                                        <th>졸업년도</th>
                                        <th>산업체*</th>
                                        <th>담당업무</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>이OO</td>
                                        <td>2019.8</td>
                                        <td>삼성SDS</td>
                                        <td>소프트웨어 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>이OO</td>
                                        <td>2021.2</td>
                                        <td>㈜비에치에너지</td>
                                        <td>인공지능 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>황OO</td>
                                        <td>2021.2</td>
                                        <td>㈜대상정보기술</td>
                                        <td>소프트웨어 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>김OO</td>
                                        <td>2021.2</td>
                                        <td>솔트웨어</td>
                                        <td>클라우드 개발/운영자</td>
                                    </tr>
                                    <tr>
                                        <td>임OO</td>
                                        <td>2021.2</td>
                                        <td>한국가스기술공사</td>
                                        <td>정보시스템 운영자</td>
                                    </tr>
                                    <tr>
                                        <td>이OO</td>
                                        <td>2020.2</td>
                                        <td>대신정보통신(주)</td>
                                        <td>소프트웨어 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>김OO</td>
                                        <td>2020.2</td>
                                        <td>현대E&amp;T(주)</td>
                                        <td>소프트웨어 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>강OO</td>
                                        <td>2020.2</td>
                                        <td>㈜메타파스</td>
                                        <td>소프트웨어 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>이OO</td>
                                        <td>2020.2</td>
                                        <td>㈜미르이즈</td>
                                        <td>정보시스템 운영자</td>
                                    </tr>
                                    <tr>
                                        <td>윤OO</td>
                                        <td>2020.2</td>
                                        <td>㈜모메드솔루션</td>
                                        <td>정보시스템 운영자</td>
                                    </tr>
                                    <tr>
                                        <td>이OO</td>
                                        <td>2020.2</td>
                                        <td>㈜텔레트론</td>
                                        <td>정보시스템 운영자</td>
                                    </tr>
                                    <tr>
                                        <td>윤O</td>
                                        <td>2020.2</td>
                                        <td>서림정보통신(주)</td>
                                        <td>소프트웨어 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>임OO</td>
                                        <td>2019.2</td>
                                        <td>㈜다나와</td>
                                        <td>소프트웨어 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>문OO</td>
                                        <td>2019.2</td>
                                        <td>에임시스템(주)</td>
                                        <td>소프트웨어 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>한OO</td>
                                        <td>2019.2</td>
                                        <td>롯데피에스넷(주)</td>
                                        <td>소프트웨어 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>최OO</td>
                                        <td>2018.2</td>
                                        <td>교보CNS</td>
                                        <td>정보시스템 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>최OO</td>
                                        <td>2018.2</td>
                                        <td>대보정보통신</td>
                                        <td>정보시스템 개발자</td>
                                    </tr>
                                    <tr>
                                        <td>이OO</td>
                                        <td>2017.2</td>
                                        <td>정보통신자격협회</td>
                                        <td>시스템개발기획</td>
                                    </tr>
                                    <tr>
                                        <td>신OO</td>
                                        <td>2017.2</td>
                                        <td>사이버택</td>
                                        <td>정보시스템 운영자</td>
                                    </tr>
                                    <tr>
                                        <td>박OO</td>
                                        <td>2017.2</td>
                                        <td>㈜광명 전산실</td>
                                        <td>정보시스템 운영자</td>
                                    </tr>
                                    <tr>
                                        <td>박OO</td>
                                        <td>2017.2</td>
                                        <td>㈜인포데이터</td>
                                        <td>정보시스템 운영자</td>
                                    </tr>
                                </table>
                            </div>
                            <p class="text_type1"><strong>* 졸업후 초기 취업현황입니다.</strong></p></div>
                    </div>
                </div>
                <!-- contents -->
            </div>
        </div>
    </div>
<?php
include_once(G5_PATH.'/tail.php');