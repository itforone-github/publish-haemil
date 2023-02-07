<?php
include_once("../include/head.sub.php");
$header_type = 0;       // 헤더타입
$footer_type = 0;       // 푸터타입
$header_name = "";      // 상단페이지명
$exp = "";      // 상단페이지 설명문

switch ($pid) {
    ////med
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
    ////adm
    //1. 통합관리
    case "a_index" :
        $header_type = 2;
        $footer_type = 2;
        $header_name = "통합 메인";
        $exp = "";
        break;
    //2. 포인트관리
    case "a_point" :
        $header_type = 2;
        $footer_type = 2;
        $header_name = "포인트 내역";
        $exp = "";
        break;
    case "a_pointset" :
        $header_type = 2;
        $footer_type = 2;
        $header_name = "선결제 금액 관리";
        $exp = "";
        break;
    //3. 한의원관리
    case "a_clinicmem" :
        $header_type = 2;
        $footer_type = 2;
        $header_name = "한의원 직원 관리";
        $exp = "";
        break;
    case "a_clinic" :
        $header_type = 2;
        $footer_type = 2;
        $header_name = "한의원 관리";
        $exp = "";
        break;
    case "a_clinicgrp" :
        $header_type = 2;
        $footer_type = 2;
        $header_name = "그룹 관리";
        $exp = "";
        break;
    //4. 환자관리
    case "a_patient" :
        $header_type = 2;
        $footer_type = 2;
        $header_name = "환자 관리";
        $exp = "";
        break;
    //5. 상품관리
    case "a_product" :
        $header_type = 2;
        $footer_type = 2;
        $header_name = "상품 관리";
        $exp = "";
        break;
    case "a_productupd" :
        $header_type = 2;
        $footer_type = 2;
        $header_name = "상품 등록";
        $exp = "";
        break;
}
?>
<?php if ($header_type == 0) { ?>
<?php } else if ($header_type == 1) { ?>
<div class="page-wrapper chiller-theme toggled">
        <?php include '../include/sidebar.php'; ?>
        <!-- sidebar-wrapper  -->
        <header>
            <div class="tnb">
                <a heft="../med/index.php">
                    <img src="../img/common/top_menu01.svg"/><span>메인</span>
                </a>
                <a>
                    <img src="../img/common/top_menu02.svg"/><span>계좌정보</span>
                </a>
                <a>
                    <img src="../img/common/top_menu03.svg"/><span>마이페이지</span>
                </a>
                <a>
                    <img src="../img/common/top_menu04.svg"/><span>홈페이지</span>
                </a>
                <a>
                    <img src="../img/common/top_menu05.svg"/><span>로그아웃</span>
                </a>
            </div>
        </header>
        <main class="page-content">
        <div class="container-fluid">
                <h2>
                    <strong><?=$header_name?></strong>
                    <span><?=$exp?></span>
                </h2>
 <?php } else if ($header_type == 2) { ?>
    <div class="page-wrapper chiller-theme toggled">
            <?php include '../include/sideadm.php'; ?>
            <!-- sidebar-wrapper  -->
            <header>
                <div class="tnb">
                    <a heft="../adm/index.php">
                        <img src="../img/common/top_menu01.svg"/><span>메인</span>
                    </a>
                    <a>
                        <img src="../img/common/top_menu03.svg"/><span>마이페이지</span>
                    </a>
                    <a heft="../med/index.php">
                        <img src="../img/common/top_menu04.svg"/><span>홈페이지</span>
                    </a>
                    <a>
                        <img src="../img/common/top_menu05.svg"/><span>로그아웃</span>
                    </a>
                </div>
            </header>
            <main class="page-content">
                <div class="container-fluid">
                    <h2>
                        <strong><?=$header_name?></strong>
                        <span><?=$exp?></span>
                    </h2>
<?php } else { ?>
<?php } ?>