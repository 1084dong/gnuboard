<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
?>


    <div id="page_content">
        <link href="/pages/software/sass/main.css">


        <div id="intro_popup" class="intro_popup" style="display: none">
            <div class="intro_popbox">
                <p>“AI·소프트웨어 개발자를 넘어 AI·소프트웨어 전문가로!”</p>
                <h3>AI소프트웨어학과</h3>
                <div class="intro_video">

                    <video src="http://ai.gwangju.ac.kr/pages/software/img/main/vlog.mp4" poster="/pages/software/img/main/vlog.png"
                           style="width: 100%;height: 100%;" controls></video>
                    <!--
                                    <video src="/datas/bbs/gallery/e47fc9ad2812289f7cf7a90f7d928e8e.mp4" poster="/datas/bbs/gallery/a79c4f5d153d3c4c597d75c8c9322c9c.jpg" style="width: 100%;height: 100%;" controls></video>
                                -->
                </div>
                <div class="intro_dpm">
                    <h4>취업우수사례</h4>
                    <dl>
                        <dt> 삼성SDS</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜비에치에너지</dt>
                        <dd>인공지능 개발자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜대상정보기술</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>
                    <dl>
                        <dt> 솔트웨어</dt>
                        <dd>클라우드 개발/운영자</dd>
                    </dl>
                    <dl>
                        <dt> 한국가스기술공사</dt>
                        <dd>정보시스템 운영자</dd>
                    </dl>
                    <dl>
                        <dt> 대신정보통신(주)</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>
                    <dl>
                        <dt> 현대E&amp;T(주)</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜메타파스</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜미르이즈</dt>
                        <dd>정보시스템 운영자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜모메드솔루션</dt>
                        <dd>정보시스템 운영자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜텔레트론</dt>
                        <dd>정보시스템 운영자</dd>
                    </dl>
                    <dl>
                        <dt> 서림정보통신(주)</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>

                    <a href="/page/?site=software&mn=1348" class="more">더보기</a>
                </div>
                <div class="close_box">
                    <!--<a href="" class="close_not_today">오늘하루 열지않기</a>-->
                    <a href="/page/?site=software&mn=1338" class="btn_close"></a>
                </div>
            </div>
            <div class="bg"></div>
        </div>


        <div id="intro_popup2" class="intro_popup" style="display: none">
            <div class="intro_popbox">
                <p>“AI·소프트웨어 개발자를 넘어 AI·소프트웨어 전문가로!”</p>
                <h3>AI소프트웨어학과</h3>
                <div class="intro_video">
                    <video src="http://ai.gwangju.ac.kr/datas/bbs/gallery/e47fc9ad2812289f7cf7a90f7d928e8e.mp4"
                           poster="http://ai.gwangju.ac.kr/datas/bbs/gallery/a79c4f5d153d3c4c597d75c8c9322c9c.jpg"
                           style="width: 100%;height: 100%;" controls=""></video>
                </div>
                <div class="intro_dpm">
                    <h4>취업우수사례</h4>
                    <dl>
                        <dt> 삼성SDS</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜비에치에너지</dt>
                        <dd>인공지능 개발자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜대상정보기술</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>
                    <dl>
                        <dt> 솔트웨어</dt>
                        <dd>클라우드 개발/운영자</dd>
                    </dl>
                    <dl>
                        <dt> 한국가스기술공사</dt>
                        <dd>정보시스템 운영자</dd>
                    </dl>
                    <dl>
                        <dt> 대신정보통신(주)</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>
                    <dl>
                        <dt> 현대E&amp;T(주)</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜메타파스</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜미르이즈</dt>
                        <dd>정보시스템 운영자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜모메드솔루션</dt>
                        <dd>정보시스템 운영자</dd>
                    </dl>
                    <dl>
                        <dt> ㈜텔레트론</dt>
                        <dd>정보시스템 운영자</dd>
                    </dl>
                    <dl>
                        <dt> 서림정보통신(주)</dt>
                        <dd>소프트웨어 개발자</dd>
                    </dl>

                    <a href="http://ai.gwangju.ac.kr/page/?site=software&mn=1348" class="more">더보기</a>
                </div>
                <div class="close_box">
                    <!--<a href="" class="close_not_today">오늘하루 열지않기</a>-->
                    <a href="#" onclick="intro_popup_close2(); return false;" class="btn_close"></a>
                </div>
            </div>
            <div class="bg"></div>
        </div>

        <div id="visual_wrap">
            <div id="visual" class="visual_list" style="overflow: hidden;white-space: nowrap">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <figure class="easyimage easyimage-full"><img alt=""
                                                                      src="http://ai.gwangju.ac.kr//datas/editor/20210721/ba5780a90fae9ad85dadc9782dc0340b"
                                                                      width="1920"/>
                            <figcaption></figcaption>
                        </figure>
                    </li>
                    <li class="swiper-slide">
                        <figure class="easyimage easyimage-full"><img alt=""
                                                                      src="http://ai.gwangju.ac.kr/datas/editor/20210721/d0beab27fb38b84d8b8dd9f218b2ff5f"
                                                                      width="1920"/>
                            <figcaption></figcaption>
                        </figure>
                    </li>
                    <li class="swiper-slide">
                        <figure class="easyimage easyimage-full"><img alt=""
                                                                      src="http://ai.gwangju.ac.kr/datas/editor/20210721/30ab11d5916ca0795dee5954d66f1bc8"
                                                                      width="1920"/>
                            <figcaption></figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
            <div class="visual_navi main_box">
                <a href="" class="visual_stop"></a>
                <div class="hidden visual_page"></div>
                <ul class="visual_point">

                </ul>
            </div>
        </div>

        <div id="main_intro">
            <div class="main_box">
                <div class="intro_box">
                    <h3 class="oline">AI SOFTWARE</h3>
                    <p>AI소프트웨어학과에서는 4차 산업혁명시대에
                        AI·소프트웨어 분야를 선도할 미래형 창의·융합 인재를 양성하며,
                        소프트웨어·AI를 기반으로 타 산업과의 연계를 통해 인공지능·소프트웨어 개발자를 넘어
                        인공지능·소프트웨어 전문가가 될 수 있는 인재를 육성하고 있습니다.</p>
                    <a href="/board/?board=iphak_qna&site=software&mn=1337" class="btn_01" target="_blank">입학상담</a>
                    <a href="https://iphak.gwangju.ac.kr/bbs/?b_id=iphak_admission_notice&site=iphak&mn=307"
                       class="btn_02" target="_blank">입학정보</a>

                    <script>
                        function intro_popup_open() {
                            $('#intro_popup').show();
                        }

                        function intro_popup_open2() {
                            $('#intro_popup2').show();
                        }

                        function intro_popup_close2() {
                            $('#intro_popup2').hide();
                        }
                    </script>
                    <a href="#" onclick="intro_popup_open(); return false;" class="btn_03" target="_blank">
                        AI소프트웨어학과_브이로그</a>
                    <a href="#" onclick="intro_popup_open2(); return false;" class="btn_04" target="_blank">
                        AI소프트웨어학과_소개영상</a>

                </div>
                <div id="pop_wrap" class="pop_wrap">
                    <div id="popup" class="pop_list" style="overflow: hidden;white-space: nowrap">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <figure class="easyimage easyimage-full"><img alt=""
                                                                              src="http://ai.gwangju.ac.kr/datas/editor/20220624/a5165560f7cc1b7ae2811cd966d40904"
                                                                              width="486"/>
                                    <figcaption></figcaption>
                                </figure>
                            </li>
                            <li class="swiper-slide">
                                <figure class="easyimage easyimage-full"><img alt=""
                                                                              src="http://ai.gwangju.ac.kr/datas/editor/20220624/a534c320111c69409a043533dc6a1f15"
                                                                              width="486"/>
                                    <figcaption></figcaption>
                                </figure>
                            </li>
                            <li class="swiper-slide">
                                <figure class="easyimage easyimage-full"><img alt=""
                                                                              src="http://ai.gwangju.ac.kr/datas/editor/20220624/e3b4adec4bd7695a8f5928485cac20f2"
                                                                              width="486"/>
                                    <figcaption></figcaption>
                                </figure>
                            </li>
                            <li class="swiper-slide">
                                <figure class="easyimage easyimage-full"><img alt=""
                                                                              src="http://ai.gwangju.ac.kr/datas/editor/20220624/16ada6c86064186772360f5f211a1675"
                                                                              width="486"/>
                                    <figcaption></figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>

                    <div class="pop_navi">
                        <a href="" id="pop_prev" class="pop_prev"></a>
                        <p class="popup_page"></p>
                        <a href="" id="pop_next" class="pop_next"></a>
                    </div>
                </div>
                <div class="notice_wrap">
                    <h3 class="h3_type1">공지사항.</h3>
                    <ul>
                        <li>
                            <a href="/board/?board=hakgwa_notice&site=software&mn=1340&type=view&post_idx=1803">
                                <h4>4차산업혁명 핵심기술 특강</h4>
                                <p>


                                    &nbsp; </p>
                                <p class="date">2022-12-21</p>
                            </a>
                        </li>
                        <li>
                            <a href="/board/?board=hakgwa_notice&site=software&mn=1340&type=view&post_idx=1791">
                                <h4>2022학년도 2학기 자격증 제출 공지</h4>
                                <p>해당기간에 자격증을 취득한 학생은 아래와 같이 제출하여 주시기 바랍니다.
                                    &nbsp;
                                    ▶ 자격증 취득 기간 : 2022년 9월 1일 &sim; 12월 10일

                                    ▶ 제출 방법

                                    제출: 자격증 스캔(고해상도) 받아 첨부 &rArr; ssroh70@gmail.com


                                    ▶ 제출기한: 2022년 12월 19일

                                    ▶ 문의 : 노선식교수 </p>
                                <p class="date">2022-12-14</p>
                            </a>
                        </li>
                        <li>
                            <a href="/board/?board=hakgwa_notice&site=software&mn=1340&type=view&post_idx=1729">
                                <h4>2022년 여름방학 단기집중교육 신청 안내</h4>
                                <p>이번 여름 방학때 아래와 같이 3주간 단기 집중교육을 실시하니 많은 신청 바랍니다.

                                    교육내용: 인공지능 프로그래밍 기초 (파이썬/머신러닝/딥러닝 등)
                                    신청기간: 2022.06.14~2022.06.24
                                    교육기간: 2022.07.25~2022.08.12 (3주간 총 60시간 예정)
                                    교육시간: 14:00 ~ 18:00 (하루 4시간 예정)
                                    교육장소: 전산관 0515
                                    교육대상: AI소프트웨어학과 1~4학년 재학생
                                    교육인원: 선착순 15명
                                    교육신청: https://forms.gle/FPTqFRPHG13Z17b48
                                    기타사항: 입문자/초보자&nbsp;수강 가능

                                    ※ 상기 내용은 학과 사정에 따라 변경 될 수 있습니다.


                                </p>
                                <p class="date">2022-06-14</p>
                            </a>
                        </li>
                    </ul>
                    <a href="/board/?board=hakgwa_notice&site=software&mn=1340" class="more">공지사항 더보기</a>
                </div>
            </div>
        </div>

        <div id="main_news">
            <div class="main_box">

                <h3 class="h3_type2">새소식.</h3>
                <div class="news_arrow">
                    <p>광주대학교 AI소프트웨어학과의 새로운 소식을 만나보세요.</p>
                    <a href="/board/?board=hakgwa_news&site=software&mn=1341" class="more"></a>
                </div>
                <div class="news_first">
                    <a href="/board/?board=hakgwa_news&site=software&mn=1341&type=view&post_idx=1790">
                        <div class="imgbox">
                            <img src="_thumb." alt="&#039;보행데이터 활용 헬스케어 AI 해커톤 경진대회&#039; 장려상 수상">
                        </div>
                        <div class="txtbox">
                            <h4>&#039;보행데이터 활용 헬스케어 AI 해커톤 경진대회&#039; 장려상 수상</h4>
                            <p class="date">2022-12-13</p>
                            <p class="txt">


                                &nbsp;


                                &nbsp;


                                빅데이터&middot;AI분야 ICC 공유협업 협의회 및 한림대학교 의료 인공지능 학습용 데이터 구축사업단, 디지털트윈 보행 융합 데이터 구축 사업단에서
                                주관한 &#39;보행데이터 활용 헬스케어 AI 해커톤 경진대회&#39;에서 광주대학교 AI소프트웨어학과 김도여, 김주형, 이자양, 조희헌학생이 장려상인
                                한림대학교 산학협력단장상을 받았다.

                                이번 대회는 LINC 3.0사업 빅데이터&middot;AI분야 ICC 5개 대학(한림대, 경남대, 경상국립대, 광주대, 한동대), 한림대의료 인공지능 학습용
                                데이터 구축사업단, 디지털트윈 보행 융합 데이터 구축사업단이 공동으로 주관하고 한국지능정보사회진흥원이 후원하며 ㈜더존비즈온이 협찬해 의료데이터 기반의 헬스케어
                                AI 활용 혁신서비스 발굴 아이디어를 도출하기 위해 진행됐다.

                                광주대학교 AI소프트웨어학과 김도여, 김주형, 이자양, 조희헌은 &#39;NGN&#39;이라는 팀으로 참가하였다. NGN팀은 &#39;근감소증 환자와
                                일반인들을 구분하는 CNN 기반의 알고리즘&#39;이라는 주제로&nbsp;대회 첫날 빅데이터, 인공지능 분야 전문가 멘토링과 교육을 통해 아이디어를 구체화하고
                                다음날 오후 전문심사위원의 평가를 거쳐 장려상을 수상하였다.</p>
                        </div>
                    </a>
                </div>
                <div class="news_list">
                    <ul>
                        <li>
                            <a href="/board/?board=hakgwa_news&site=software&mn=1341&type=view&post_idx=1786">
                                <img src="_thumb." alt="[전문가 특강] 광주테크노파크 스마트융합기술센터와 미래의료산업 방향성">
                                <dl>
                                    <dt><span>2022-11-22</span>[전문가 특강] 광주테크노파크 스마트융합기술센터와 미래의료산업 방향성</dt>
                                    <dd>교육일시: 2022.11.22.
                                        교육장소: 전산관 5층 LINC+ AI Lab
                                        교육내용: 광주테크노파크 스마트융합기술센터와 미래의료산업 방향성
                                        강사명: (재)광주테크노파크 센터장 반재삼
                                        &nbsp;


                                        &nbsp;


                                        &nbsp;


                                        &nbsp;


                                        &nbsp;


                                        &nbsp;
                                    </dd>
                                </dl>
                            </a>
                        </li>
                        <li>
                            <a href="/board/?board=hakgwa_news&site=software&mn=1341&type=view&post_idx=1785">
                                <img src="_thumb." alt="[전문가 특강] 4차 산업혁명과 국내 인공지능 정책">
                                <dl>
                                    <dt><span>2022-11-14</span>[전문가 특강] 4차 산업혁명과 국내 인공지능 정책</dt>
                                    <dd>교육일시: 2022.11.14.
                                        교육장소: 전산관 5층 LINC+ AI Lab
                                        교육내용: 4차 산업혁명과 국내 인공지능 정책
                                        강사명: 인공지능산업융합사업단 오여진
                                        &nbsp;


                                        &nbsp;


                                        &nbsp;


                                        &nbsp;


                                        &nbsp;
                                    </dd>
                                </dl>
                            </a>
                        </li>
                        <li>
                            <a href="/board/?board=hakgwa_news&site=software&mn=1341&type=view&post_idx=1784">
                                <img src="_thumb." alt="[전문가 특강] AI 융합기술과 비즈니스 활용">
                                <dl>
                                    <dt><span>2022-11-08</span>[전문가 특강] AI 융합기술과 비즈니스 활용</dt>
                                    <dd>교육일시: 2022.11.08.
                                        교육장소: 전산관 5층 LINC+ AI Lab
                                        교육내용: AI융합기술과 비즈니스
                                        강사명: (주)지아이랩 연구소장 김국세
                                        &nbsp;


                                        &nbsp;


                                        &nbsp;


                                        &nbsp;


                                    </dd>
                                </dl>
                            </a>
                        </li>
                        <li>
                            <a href="/board/?board=hakgwa_news&site=software&mn=1341&type=view&post_idx=1778">
                                <img src="_thumb." alt="2022년 여름방학 단기집중교육">
                                <dl>
                                    <dt><span>2022-08-10</span>2022년 여름방학 단기집중교육</dt>
                                    <dd>
                                        교육기간: 2022.07.25~2022.08.12
                                        교육내용: 인공지능 프로그래밍 기초 (파이썬/머신러닝/딥러닝 등)

                                        &nbsp;


                                        &nbsp;


                                        &nbsp;


                                        &nbsp;
                                    </dd>
                                </dl>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- 취업현황 -->
                <div class="epm_wrap">
                    <h3 class="h3_type2">취업현황.</h3>
                    <div class="epm_list">
                        <ul>
                            <li>
                                <div class="logobox">
                                    <img src="http://ai.gwangju.ac.kr/datas/job/f36c315687b4f34dc7463bb37995b6aa.png" alt="">

                                </div>
                                <p class="date">2019.8 졸업</p>
                                <h4>삼성SDS <span>소프트웨어 개발자</span></h4>
                            </li>
                            <li>
                                <div class="logobox">
                                    <img src="http://ai.gwangju.ac.kr/datas/job/4367f3753d32683d781795b678c6ea40.jpg" alt="">

                                </div>
                                <p class="date">2021.2 졸업</p>
                                <h4>㈜비에치에너지 <span>인공지능 개발자</span></h4>
                            </li>
                            <li>
                                <div class="logobox">
                                    <img src="http://ai.gwangju.ac.kr/datas/job/6c5be0acbf0442582889f4290bc2b050.jpg" alt="">

                                </div>
                                <p class="date">2021.2 졸업</p>
                                <h4>㈜대상정보기술 <span>소프트웨어 개발자</span></h4>
                            </li>
                            <li>
                                <div class="logobox">
                                    <img src="http://ai.gwangju.ac.kr/datas/job/f1036e247daf91e038ef5de29bfea7a9.jpg" alt="">

                                </div>
                                <p class="date">2021.2 졸업</p>
                                <h4>솔트웨어 <span>클라우드 개발/운영자</span></h4>
                            </li>
                            <li>
                                <div class="logobox">
                                    <img src="http://ai.gwangju.ac.kr/datas/job/3c2fe9278d0a66e6563a8860d0e4e40b.jpg" alt="">

                                </div>
                                <p class="date">2021.2 졸업</p>
                                <h4>한국가스기술공사 <span>정보시스템 운영자</span></h4>
                            </li>
                            <li>
                                <div class="logobox">
                                    <img src="http://ai.gwangju.ac.kr/datas/job/5760b21af37d8ddcbd9051be8f7cffd7.png" alt="">

                                </div>
                                <p class="date">2020.2 졸업</p>
                                <h4>대신정보통신(주) <span>소프트웨어 개발자</span></h4>
                            </li>
                            <li>
                                <div class="logobox">
                                    <img src="http://ai.gwangju.ac.kr/datas/job/8881f07ecdfb25ca8759b3c7a76d24c1.png" alt="">

                                </div>
                                <p class="date">2020.2 졸업</p>
                                <h4>현대E&amp;T(주) <span>소프트웨어 개발자</span></h4>
                            </li>
                        </ul>
                    </div>
                    <a href="/page/?site=software&mn=1348" class="more">취업현황 더보기</a>
                </div>
                <!-- //취업현황 -->
            </div>
        </div>
        <!--
        <div id="main_photo">
            <div class="main_box">
                <h3 class="h3_type2">우리들의 이야기.</h3>
                <p>함께, 그리고 같이 새로운 가치를 만들어 갈 AI소프트웨어학과의 미래를 기대합니다.</p>
                <a href="/board/?board=gallery&site=software&mn=1343" class="more">더보기</a>
                <div class="videobox">
                                    <iframe src="https://www.youtube.com/embed/TWmf85FsNsU?rel=0&showinfo=0&color=white&iv_load_policy=3" title="/" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;height: 100%;"></iframe>
                            </div>
                <div class="photo_box photo1">
                    <ul>
                                            <li>
                                <a href="/board/?board=gallery&site=software&mn=1343&type=view&post_idx=1728">
                                    <img src="_thumb." alt="2022-01 캡스톤디자인 (딥러닝 기반 부모 음성 스마트 인형)">
                                    <p>2022-01 캡스톤디자인 (딥러닝 기반 부모 음성 스마트 인형)</p>
                                </a>
                            </li>
                                            <li>
                                <a href="/board/?board=gallery&site=software&mn=1343&type=view&post_idx=1684">
                                    <img src="/datas/editor/20210720/8a51c6db465a4305001be42c15869f51_thumb.png" alt="감정케어를 위한 머신러닝 스마트미러">
                                    <p>감정케어를 위한 머신러닝 스마트미러</p>
                                </a>
                            </li>
                                    </ul>
                </div>
                <div class="photo_box photo2">
                    <ul>
                                            <li>
                                <a href="/board/?board=gallery&site=software&mn=1343&type=view&post_idx=1683">
                                    <img src="/datas/editor/20210720/32cf4a8dd833b1c9e18b80ed87c57cd6_thumb.png" alt="인공지능기반 전력예측 통합관제 시스템">
                                    <p>인공지능기반 전력예측 통합관제 시스템</p>
                                </a>
                            </li>
                                            <li>
                                <a href="/board/?board=gallery&site=software&mn=1343&type=view&post_idx=1682">
                                    <img src="/datas/editor/20210720/da3ba83f60360d26aa82dc61ccdef7ae_thumb.png" alt="노마스크 감지 시스템">
                                    <p>노마스크 감지 시스템</p>
                                </a>
                            </li>

                    </ul>
                </div>
            </div>
        </div>
        -->
    </div>

<?php
include_once(G5_PATH.'/tail.php');