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
                        <a href="/pages/employment_certificate_example.php" class="" target="_self" title="자격증 취득현황">
                            <span>자격증 취득현황</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pages/employment_info.php" class="on" target="_self" title="취업안내">
                            <span>취업안내</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content_box">
                <!-- contents -->
                <div id="contents">
                    <div class="contents_top">
                        <h3 class="subtop_title">취업안내</h3>
                        <p class="subtop_p">취업정보 &gt; 취업안내</p>
                        <div class="info">
                            <div class="sns linkfamily">
                                <button id="sns_button" type="button">SNS 공유하기</button>
                                <ul id="sns_share" style="display: none;">
                                    <li><a href="http://ai.gwangju.ac.kr///board/?board=job_notice&amp;site=software&amp;mn=1350" class="fa" data-toggle="sns_share" data-service="facebook" data-title="페이스북 SNS공유"><span>페이스북</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///board/?board=job_notice&amp;site=software&amp;mn=1350" class="bd" data-toggle="sns_share" data-service="band" data-title="네이버밴드 공유"><span>네이버밴드</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///board/?board=job_notice&amp;site=software&amp;mn=1350" class="tw" data-toggle="sns_share" data-service="twitter" data-title="트위터 SNS공유"><span>트위터</span></a></li>
                                    <li><a href="http://ai.gwangju.ac.kr///board/?board=job_notice&amp;site=software&amp;mn=1350" class="ks" data-toggle="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유"><span>카카오스토리</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn_qr_sub"><span>QR코드보기</span></a>
                            <div class="qr_sub_on qr_box" style="display:none">
                                <dl>
                                    <dt>QR코드 서비스</dt>
                                    <dd>스마트폰으로 QR코드를 스캔하시면 <br>
                                        현재 페이지로 바로 접속하실 수 있습니다.</dd>
                                </dl>
                                <div class="qr_img"> <img src="/datas/qrcode/menu/software/1350.png" alt="QR Code">  </div>
                                <a href="#" class="btn_close"><img src="/pages/software/img/sub/navi_close_btn.png" alt="qr코드 서비스 닫기"></a>
                            </div>
                        </div>
                    </div>

                    <div id="contents_wrap">
                        <div id="page_content"><form id="default_board">
                                <input type="hidden" name="board" value="job_notice">
                                <input type="hidden" name="site" value="software">
                                <input type="hidden" name="mn" value="1350">
                                <input type="hidden" name="type" value="">
                            </form>
                            <img src="/img/b2.png">
                        </div>
                    </div>
                </div>
                <!-- contents -->
            </div>
        </div>
    </div>
<?php
include_once(G5_PATH.'/tail.php');