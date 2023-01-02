<?php
    if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
    run_event('pre_head');

    $g5_debug['php']['begin_time'] = $begin_time = get_microtime();

    //타이틀 설정
    if (!isset($g5['title'])) {
        $g5['title'] = $config['cf_title'];
        $g5_head_title = $g5['title'];
    }
    else {
        // 상태바에 표시될 제목
        $g5_head_title = implode(' | ', array_filter(array($g5['title'], $config['cf_title'])));
    }

    $g5['title'] = strip_tags($g5['title']);
    $g5_head_title = strip_tags($g5_head_title);

    // 현재 접속자
    // 게시판 제목에 ' 포함되면 오류 발생
    $g5['lo_location'] = addslashes($g5['title']);
    if (!$g5['lo_location'])
        $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
    $g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
    if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

?>
<!DOCTYPE HTML>
<html lang="ko">
<head>
    <?php if($config['cf_add_meta']) echo $config['cf_add_meta'].PHP_EOL; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes"/>
    <meta name="theme-color" content="#009457">
    <meta name="description" content="AI소프트웨어학과">
    <meta name="keywords" content="AI소프트웨어학과">
    <meta name="author" content="AI소프트웨어학과">
    <meta property="og:type" content="website">
    <meta property="og:title" content="AI소프트웨어학과">
    <meta property="og:url" content="http://ai.gwangju.ac.kr/">
    <meta property="og:site_name" content="AI소프트웨어학과">
    <meta property="og:description" content="AI소프트웨어학과">
    <meta property="og:image" content="http://ai.gwangju.ac.kr/link_thumb.jpg">
    <meta name="twitter:url" content="http://ai.gwangju.ac.kr/">
    <meta name="twitter:description" content="AI소프트웨어학과">
    <meta name="twitter:image" content="http://ai.gwangju.ac.kr/link_thumb.jpg">
    <meta name="naver-site-verification" content="66646699f86d20456f3b01486f5f9c41a8569ba0"/>
    <link rel="icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css"
          href="http://ai.gwangju.ac.kr/pages/software/sass/layout.css?time=1672107360">
    <title><?php echo $g5_head_title; ?></title>
    <link rel="stylesheet" type="text/css" href="http://ai.gwangju.ac.kr/pages/software/css/basic.css?time=1672107360"/>
    <link rel="stylesheet" type="text/css"
          href="http://ai.gwangju.ac.kr/pages/software/css/layout.css?time=1672107360"/>
    <link rel="stylesheet" type="text/css"
          href="http://ai.gwangju.ac.kr/pages/software/css/common.css?time=1672107360"/>
    <link rel="stylesheet" type="text/css"
          href="http://ai.gwangju.ac.kr/pages/software/css/contents.css?time=1672107360"/>

    <link rel="stylesheet" type="text/css" href="http://ai.gwangju.ac.kr/pages/software/main/main.css?time=1672107360"/>
    <link rel="stylesheet" href="/tmp/toastr.css">
    <link href="/tmp/jquery-confirm.min.css" type="text/css" rel="stylesheet">
    <script>
        // 자바스크립트에서 사용하는 전역변수 선언
        var g5_url       = "<?php echo G5_URL ?>";
        var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
        var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
        var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
        var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
        var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
        var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
        var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
        var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
        <?php if(defined('G5_USE_SHOP') && G5_USE_SHOP) { ?>
        var g5_shop_url = "<?php echo G5_SHOP_URL; ?>";
        <?php } ?>
        <?php if(defined('G5_IS_ADMIN')) { ?>
        var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
        <?php } ?>
    </script>
    <script>
        if (getParam('group') === 'cms1' || getParam('group') === 'old') {
            window.location.reload();
        }

        function getParam(sname) {
            var params = location.search.substr(location.search.indexOf("?") + 1);
            var sval = "";
            params = params.split("&");
            for (var i = 0; i < params.length; i++) {
                temp = params[i].split("=");
                if ([temp[0]] == sname) {
                    sval = temp[1];
                }
            }
            return sval;
        }
    </script>
    <?php
        add_javascript('<script src="'.G5_JS_URL.'/jquery-1.12.4.min.js"></script>', 0);
        add_javascript('<script src="'.G5_JS_URL.'/jquery-migrate-1.4.1.min.js"></script>', 0);
        if (defined('_SHOP_')) {
            if(!G5_IS_MOBILE) {
                add_javascript('<script src="'.G5_JS_URL.'/jquery.shop.menu.js?ver='.G5_JS_VER.'"></script>', 0);
            }
        } else {
            add_javascript('<script src="'.G5_JS_URL.'/jquery.menu.js?ver='.G5_JS_VER.'"></script>', 0);
        }
        add_javascript('<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'"></script>', 0);
        add_javascript('<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'"></script>', 0);
        add_javascript('<script src="'.G5_JS_URL.'/placeholders.min.js"></script>', 0);
        add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/font-awesome/css/font-awesome.min.css">', 0);
        if(!defined('G5_IS_ADMIN')) echo $config['cf_add_script'];
    ?>
    <script>
        var site = "software";
        var mn = "";
        var mn1 = "";
        var mn2 = "";
        var mn3 = "";
        var mn4 = "";
        var home_type = "main";
    </script>
    <script src="http://ai.gwangju.ac.kr/assets/js/jquery-3.5.1.min.js"></script>
    <script src="http://ai.gwangju.ac.kr/assets/libs/swiperjs/swiper-bundle.min.js"></script>
    <script src="http://ai.gwangju.ac.kr/assets/js/common.js"></script>
    <script src="http://ai.gwangju.ac.kr/assets/js/send_sns.js"></script>
    <script src="http://ai.gwangju.ac.kr/assets/libs/toast/js/toastr.min.js"></script>
    <script src="http://ai.gwangju.ac.kr/assets/js/jquery.form.min.js"></script>
    <script src="http://ai.gwangju.ac.kr/assets/js/jquery-confirm.min.js"></script>
    <script src="http://ai.gwangju.ac.kr/pages/software/js/basic.js"></script>
    <script src="http://ai.gwangju.ac.kr/pages/software/main/main.js?time=1672107360"></script>
    <script src="http://ai.gwangju.ac.kr/pages/software/js/menu.js?time=1672107360"></script>
</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

//    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
//    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}