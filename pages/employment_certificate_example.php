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
                        <a href="/pages/employment_certificate.php" class="" target="_self" title="자격증">
                            <span>자격증</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/employment_certificate_example.php" class="on" target="_self" title="자격증 취득현황">
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
                        <h3 class="subtop_title">자격증 취득현황</h3>
                        <p class="subtop_p">취업정보 &gt; 자격증 취득현황</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1339" class="fa" data-toggle="sns_share" data-service="facebook" data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1339" class="bd" data-toggle="sns_share" data-service="band" data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1339" class="tw" data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///page/?site=software&amp;mn=1339" class="ks" data-toggle="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.</dd>
                                </dl>
                                <div class="qr_img"> <img src="/datas/qrcode/menu/software/1339.png" alt="QR Code">  </div>
                                <a href="#" class="btn_close"><img src="/pages/software/img/sub/navi_close_btn.png" alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div id="page_content"><div class="table_type1">
                                <table>
                                    <caption>자격증 취득 현황 목록</caption>
                                    <colgroup>
                                        <col width="10%">
                                        <col width="20%">
                                        <col>
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th scope="col">년도</th>
                                        <th scope="col">자격증명</th>
                                        <th scope="col">취득학생</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="td_year" rowspan="7">2022년</td>
                                        <td>정보처리기사</td>
                                        <td class="txtl">이예나, 안효원, 임민하, 이정훈</td>
                                    </tr>
                                    <tr>
                                        <td>SQL 개발자</td>
                                        <td class="txtl">임민하</td>
                                    </tr>
                                    <tr>
                                        <td>데이터 분석 준전문가</td>
                                        <td class="txtl">임상현, 임지은, 이예나 </td>
                                    </tr>
                                    <tr>
                                        <td>데이터베이스관리사</td>
                                        <td class="txtl">하예송, 박승현, 이규형, 이권욱, 이시형, 안효원, 황동재, 장재용, 조겸비</td>
                                    </tr>
                                    <tr>
                                        <td>스마트웹퍼블리셔</td>
                                        <td class="txtl">이자양, 이승준, 김도여, 하예송, 진서형, 박세령, 박금령, 이시형, 조겸비, 박승현, 임지은, 황동재, 안효원, 이권</td>
                                    </tr>
                                    <tr>
                                        <td>네트워크관리사</td>
                                        <td class="txtl">박예진, 박세령, 이권욱, 하예송, 최낙운, 조겸비, 안태현, 이규형, 차승효, 임지은, 김현식, 김도여</td>
                                    </tr>
                                    <tr>
                                        <td>ITQ</td>
                                        <td class="txtl">이자양, 김도여</td>
                                    </tr>
                                    <tr>
                                        <td class="td_year" rowspan="9">2021년</td>
                                        <td>정보처리기사</td>
                                        <td class="txtl">김채윤, 이아름</td>
                                    </tr>
                                    <tr>
                                        <td>인공지능자격</td>
                                        <td class="txtl">임상현, 이예나, 안효원</td>
                                    </tr>
                                    <tr>
                                        <td>SQL 개발자</td>
                                        <td class="txtl">전주영, 이예나</td>
                                    </tr>
                                    <tr>
                                        <td>객체지향개발자</td>
                                        <td class="txtl">임상현, 이정훈, 이예나, 황동재, 안효원, 유동훈, 박세빈, 이정훈</td>
                                    </tr>
                                    <tr>
                                        <td>리눅스마스터</td>
                                        <td class="txtl">임상현, 전주영, 임민하, 이정훈, 이예나, 강민재, 안효원 </td>
                                    </tr>
                                    <tr>
                                        <td>데이터베이스관리사</td>
                                        <td class="txtl">임상현, 전주영, 임민하, 이정훈, 이예나, 박세빈, 이선호, 임지은</td>
                                    </tr>
                                    <tr>
                                        <td>스마트웹퍼블리셔</td>
                                        <td class="txtl">임지은, 박세빈, 임상현, 전주영, 임민하, 황동제,안효원</td>
                                    </tr>
                                    <tr>
                                        <td>정보처리산업기사</td>
                                        <td class="txtl">김제헌</td>
                                    </tr>
                                    <tr>
                                        <td>ITQ 마스터</td>
                                        <td class="txtl">하예송</td>
                                    </tr>
                                    <tr>
                                        <td class="td_year" rowspan="8">2020년</td>
                                        <td>정보처리기사</td>
                                        <td class="txtl">김성호, 황경하</td>
                                    </tr>
                                    <tr>
                                        <td>객체지향개발자</td>
                                        <td class="txtl">임정문, 임상현, 안효원, 전주영, 황동재, 이용훈, 이규정</td>
                                    </tr>
                                    <tr>
                                        <td>네트워크관리사</td>
                                        <td class="txtl">박세빈, 안효원, 유동훈, 이시형, 임민하, 임상현, 임정문, 전주영, 황동재, 원현웅, 신동주, 임채민</td>
                                    </tr>
                                    <tr>
                                        <td>리눅스마스터</td>
                                        <td class="txtl">김채윤</td>
                                    </tr>
                                    <tr>
                                        <td>AWS Cerified Cloud Practitioner</td>
                                        <td class="txtl">김성호</td>
                                    </tr>
                                    <tr>
                                        <td>IOT지식능력검정</td>
                                        <td class="txtl">노우석</td>
                                    </tr>
                                    <tr>
                                        <td>COS Expert 공인강사</td>
                                        <td class="txtl">노우석</td>
                                    </tr>
                                    <tr>
                                        <td>무인항공촬영전문가</td>
                                        <td class="txtl">임상현</td>
                                    </tr>
                                    <tr>
                                        <td class="td_year" rowspan="7">2019년</td>                        <td>정보처리기사</td>
                                        <td class="txtl">강재현, 윤별, 이대현, 최희성, 김근수, 박현준, 노광은</td>
                                    </tr>
                                    <tr>
                                        <td>스마트웹퍼블리셔 2급</td>
                                        <td class="txtl">최홍창, 임채민, 김채윤, 노우석, 이아름, 장소영, 이용훈, 김아영, 황경하, 이규정, 김준수, 김동현, 이대현, 김근수, 최희성, 박현준, 윤별, 노광은, 강재현</td>
                                    </tr>
                                    <tr>
                                        <td>스마트웹퍼블리셔 1급</td>
                                        <td class="txtl">이창연, 안채은, 고채영</td>
                                    </tr>
                                    <tr>
                                        <td>GTQ</td>
                                        <td class="txtl">이규정, 안채은</td>
                                    </tr>
                                    <tr>
                                        <td>리눅스마스터</td>
                                        <td class="txtl">이규정, 이아름, 노우석</td>
                                    </tr>
                                    <tr>
                                        <td>데이터베이스관리사</td>
                                        <td class="txtl">노광은, 박현준, 윤별, 이봉형, 이전규, 고채영, 김아영, 김채윤, 이아름, 이용훈, 장소영, 김근수, 이대현, 이규정, 이창연, 황경하</td>
                                    </tr>
                                    <tr>
                                        <td>네트워크관리사</td>
                                        <td class="txtl">김주희, 이창연, 김성호, 황경하, 이용훈, 김채윤, 이아름, 노우석</td>
                                    </tr>
                                    <tr>
                                        <td class="td_year" rowspan="5">2018년</td>                        <td>ITQ정보기술작격</td>
                                        <td class="txtl">노우석, 이해미, 김택근, 김채윤</td>
                                    </tr>
                                    <tr>
                                        <td>정보처리기사</td>
                                        <td class="txtl">임광민, 한종균, 문현오</td>
                                    </tr>
                                    <tr>
                                        <td>네트워크관리사</td>
                                        <td class="txtl">이대현, 강재현, 윤별, 최희성, 노광은</td>
                                    </tr>
                                    <tr>
                                        <td>데이터베이스관리사</td>
                                        <td class="txtl">박기엽, 이하늘, 이대현, 최희성, 김근수, 김준수, 김성호, 김주희, 김동현, 황경하, 안채은, 이규정, 이창연</td>
                                    </tr>
                                    <tr>
                                        <td>리눅스마스터</td>
                                        <td class="txtl">이대현, 윤별, 강재현</td>
                                    </tr>
                                    <tr>
                                        <td class="td_year" rowspan="3">2017년</td>                        <td>인터넷보안관리사</td>
                                        <td class="txtl">안다희, 한종균, 임광민, 김성제, 지현우, 고채영, 송차정, 김진희</td>
                                    </tr>
                                    <tr>
                                        <td>웹퍼블리셔</td>
                                        <td class="txtl">이창연, 전주영, 김주희, 김보경, 임정문, 고채영, 이지희,  안채은, 한종균, 안다희, 최성문, 강주성, 성민경, 박기엽,  임광민</td>
                                    </tr>
                                    <tr>
                                        <td>정보처리기사</td>
                                        <td class="txtl">최윤진, 최현석, 김효중</td>
                                    </tr>
                                    <tr>
                                        <td class="td_year" rowspan="5">2016년</td>                        <td>인터넷보안관리사</td>
                                        <td class="txtl">최현석  최윤진  최성문  주광락  정석훈  하영광  임채민  임완섭  이정근  윤　별  신진욱  신영동  신경재  서민재  배　준  박현준  박재현  박재영  박예선  박성배  박기엽  노세환  김효중  김해한  김윤권  김영주  김소영  김소라  김선비  김민호  김무영  고덕림  강주성</td>
                                    </tr>
                                    <tr>
                                        <td>정보처리기사</td>
                                        <td class="txtl">박준혁, 이제성, 김무영, 임완섭, 주광락, 박진우, 김영주, 신경재</td>
                                    </tr>
                                    <tr>
                                        <td>데이터베이스관리사</td>
                                        <td class="txtl">최현석, 서민재, 최윤진, 김윤권, 신영동, 용정복, 신진욱, 김민호, 노신비, 김해한, 김효중, 박재영, 김무영, 이제성, 박재현</td>
                                    </tr>
                                    <tr>
                                        <td>리눅스마스터</td>
                                        <td class="txtl">노신비</td>
                                    </tr>
                                    <tr>
                                        <td>스마트폰앱개발자</td>
                                        <td class="txtl">최지운, 정석훈, 박재현, 서민재, 김무영, 이제성</td>
                                    </tr>
                                    <tr>
                                        <td class="td_year" rowspan="4">2015년</td>                        <td>네트워크관리사</td>
                                        <td class="txtl">최지운 정석훈 최현석 최윤진 이정근 김윤권 배　준 김준수 박현준 노신비 이전규 강재현 안다희 성민경</td>
                                    </tr>
                                    <tr>
                                        <td>리눅스마스터</td>
                                        <td class="txtl">김무영 박진우 주광락 임완섭 신경재 김영주 최윤진 이정근</td>
                                    </tr>
                                    <tr>
                                        <td>MOS</td>
                                        <td class="txtl">서민재 최지운 강재현 이대현</td>
                                    </tr>
                                    <tr>
                                        <td>정보처리기사</td>
                                        <td class="txtl">박영석 장혁빈</td>
                                    </tr>
                                    <tr>
                                        <td class="td_year" rowspan="8">2014년</td>                        <td>ITQ</td>
                                        <td class="txtl">노신비</td>
                                    </tr>
                                    <tr>
                                        <td>MOS</td>
                                        <td class="txtl">노신비 박민국</td>
                                    </tr>
                                    <tr>
                                        <td>PC정비사</td>
                                        <td class="txtl">박영석 변경석</td>
                                    </tr>
                                    <tr>
                                        <td>스마트폰앱개발자</td>
                                        <td class="txtl">임광민  임완섭  김무영  박영석  장혁빈  한승훈  김용현  김다중  김슬비  변경석</td>
                                    </tr>
                                    <tr>
                                        <td>리눅스마스터</td>
                                        <td class="txtl">이제성  박영석</td>
                                    </tr>
                                    <tr>
                                        <td>네트워크관리사</td>
                                        <td class="txtl">김진희  박진우  임완섭  주광락  김영주  김무영  신경재  김효중  이제성  한종균  문영훈  박준혁  박찬구</td>
                                    </tr>
                                    <tr>
                                        <td>CCNA(국제자격증)</td>
                                        <td class="txtl">박진우  임완섭  주광락  신경재  박영석  한승훈</td>
                                    </tr>
                                    <tr>
                                        <td>정보처리기사</td>
                                        <td class="txtl">변경석  김선일</td>
                                    </tr>
                                    <tr>
                                        <td class="td_year" rowspan="3">2013년</td>                        <td>네트워크관리사</td>
                                        <td class="txtl">장혁빈  김지혜  박영석  이신용  민효선  오권찬  김진솔  한승훈  김다중  강은지  김슬비  변경석  김선민  김도균  신일규  최다연  김경용</td>
                                    </tr>
                                    <tr>
                                        <td>리눅스마스터</td>
                                        <td class="txtl">장혁빈 김선민</td>
                                    </tr>
                                    <tr>
                                        <td>MOS</td>
                                        <td class="txtl">이하늘 임광빈 박영욱 방승태</td>
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