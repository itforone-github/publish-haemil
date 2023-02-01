<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=5.0,user-scalable=yes,target-densitydpi=medium-dpi">
    <title>해밀원</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
    <script src="../js/ui.js"></script>

    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/font.css" rel="stylesheet" type="text/css" />
    <link href="../css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/sideber.css" rel="stylesheet" type="text/css" />
    <link href="../css/common.css" rel="stylesheet" type="text/css" />
    <link href="../css/member.css" rel="stylesheet" type="text/css" />
    <link href="../css/layout.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php
$header_type = 0;       // 헤더타입
$footer_type = 0;       // 푸터타입
$header_name = "";      // 상단페이지명
$content = "";      // 상단페이지 설명문

switch ($pid) {
    //1.공통
    case "login" :  
        $header_type = 0;
		$footer_type = 0;
		$header_name = "로그인";
        break;
    case "sign_up" :  
        $header_type = 0;
		$footer_type = 0;
		$header_name = "회원가입";
        break;
    case "find_pw" :  
        $header_type = 0;
        $footer_type = 0;
        $header_name = "아이디/비밀번호 찾기";
        break;
    //2. 환자진료
    case "index" :  
        $header_type = 1;
		$footer_type = 1;
		$header_name = "환자 메인";
        $exp = "환자 관리, 진료 접수, 예약 관리가 가능합니다.";
        break;
}
?>
<? if ($header_type == 0) { ?>
<? } else if ($header_type == 1) { ?>
<div class="page-wrapper chiller-theme toggled">
        <?php include '../include/sidebar.php'; ?>
        <!-- sidebar-wrapper  -->
        <header>
            <div class="tnb">
                <a heft="../med/index.php">
                    <img src="../img/common/top_menu01.svg"><span>메인</span>
                </a>
                <a>
                    <img src="../img/common/top_menu02.svg"><span>계좌정보</span>
                </a>
                <a>
                    <img src="../img/common/top_menu03.svg"><span>마이페이지</span>
                </a>
                <a>
                    <img src="../img/common/top_menu04.svg"><span>홈페이지</span>
                </a>
                <a>
                    <img src="../img/common/top_menu05.svg"><span>로그아웃</span>
                </a>
            </div>
        </header>
        <main class="page-content">
        <div class="container-fluid">
                <h2>
                    <strong><?=$header_name?></strong>
                    <span><?=$exp?></span>
                </h2>
<? } ?>