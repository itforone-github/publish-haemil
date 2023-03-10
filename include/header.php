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
    case "pw_reset" :
        $header_type = 0;
        $footer_type = 0;
        $header_name = "비밀번호 재설정";
        break;
    //2. 환자진료
    case "index" :  
        $header_type = 1;
		$footer_type = 1;
        $lnb_type = 1;
        $header_name = "환자 메인";
        $exp = "환자 관리, 진료 접수, 예약 관리가 가능합니다.";
        break;
    case "treat_patient" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 1;
        $header_name = "환자 관리";
        $exp = "신규 환자 등록, 기존 환자 정보 수정이 가능합니다.";
        break;
    case "treat_reserv" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 1;
        $header_name = "예약·진료 관리";
        $exp = "진료 접수, 예약 관리가 가능합니다.";
        break;
    case "treat_review" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 1;
        $header_name = "진료 리뷰";
        $exp = "해밀원 어플로 작성된 리뷰를 관리할 수 있습니다.";
        break;
    //3. 처방하기
    case "px_main" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "처방메인";
        $exp = "처방 및 환재, 복용법 관리가 가능합니다.";
        break;
    case "px_prescribe1" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "탕전처방";
        $exp = "환자에 따른 처방이 가능합니다.";
        break;
    case "px_prescribe2" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "환제처방";
        $exp = "환자에 따른 처방이 가능합니다.";
        break;
    case "px_prescribe3" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "산제처방";
        $exp = "환자에 따른 처방이 가능합니다.";
        break;
    case "px_prescribe4" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "약속처방";
        $exp = "환자에 따른 처방이 가능합니다.";
        break;
    case "px_prescribe5" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "서술식";
        $exp = "환자에 따른 처방이 가능합니다.";
        break;
    case "px_wish" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "약속처방 보관함";
        $exp = "약속처방을 저장하여 확인 가능합니다.";
        break;
    case "px_taking" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "복용법 관리";
        $exp = "복용법 등록, 수정, 관리가 가능합니다.";
        break;
    case "px_often" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "자주 쓰는 처방";
        $exp = "자주 쓰는 처방 등록, 수정, 관리가 가능합니다.";
        break;
    case "px_coded" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "약속 처방재";
        $exp = "";
        break;
    case "px_order" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "주문 배송 관리";
        $exp = "처방 완료된 건의 상태 조회가 가능합니다.";
        break;
    case "px_setting" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 2;
        $header_name = "처방 기본 설정";
        $exp = "처방의 기본값을 설정할 수 있습니다.";
        break;
    //4. 한의학몰
    case "mall_main" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 3;
        $header_name = "한의학몰 메인";
        $exp = "약속처방 외 한의학 제품 구매가 가능합니다.";
        break;
    case "mall_list" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 3;
        $header_name = "기획전";
        $exp = "";
        break;
    case "mall_view" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 3;
        $header_name = "기획전";
        $exp = "약속처방 외 한의학 제품 구매가 가능합니다.";
        break;

    case "mall_cart" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 3;
        $header_name = "장바구니";
        $exp = "제품 장바구니 관리가 가능합니다.";
        break;
    case "mall_order" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 3;
        $header_name = "주문·배송 조회";
        $exp = "주문·배송 조회가 가능합니다.";
        break;
    case "mall_wish" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 3;
        $header_name = "찜상품 보관함";
        $exp = "저장하신 상품들을 확인 가능합니다.";
        break;
    //5. 기본설정
    case "setting_main" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 4;
        $header_name = "기본설정 메인";
        $exp = "한의원 정보 관리가 가능합니다.";
    case "setting_clinic" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 4;
        $header_name = "한의원 정보";
        $exp = "한의원 정보 관리가 가능합니다.";
        break;
    case "setting_appointment" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 4;
        $header_name = "진료 예약 설정";
        $exp = "진료 예약 시간, 인원 관리가 가능합니다.";
        break;
    case "setting_event" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 4;
        $header_name = "이벤트 관리";
        $exp = "이벤트 신청, 목록 등 관리가 가능합니다.";
        break;
    case "setting_point" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 4;
        $header_name = "포인트 관리";
        $exp = "포인트 내역 확인, 충전, 관리가 가능합니다.";
        break;
    case "setting_point_charge" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 4;
        $header_name = "포인트 충전";
        $exp = "포인트 선결제가 가능합니다.";
        break;
    case "setting_member" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 4;
        $header_name = "직원계정 관리";
        $exp = "직원계정 관리";
        break;
    case "setting_qna" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 4;
        $header_name = "요청·문의하기";
        $exp = "요청·문의가 가능합니다.";
        break;
    case "setting_homepage" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 4;
        $header_name = "홈페이지 제작·관리";
        $exp = "한의원 홈페이지 제작·관리가 가능합니다.";
        break;
    case "homepage_sample" :
        $header_type = 1;
        $footer_type = 1;
        $lnb_type = 4;
        $header_name = "";
        $exp = "";
        break;
    ////adm
    //1. 통합관리
    case "a_index" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "통합 메인";
        $exp = "";
        break;
    //2. 포인트관리
    case "a_point" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "전체 포인트 내역";
        $exp = "";
        break;
    case "a_pointcfm" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "포인트 지급 관리";
        $exp = "";
        break;
    case "a_pointset" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "선결제 금액 관리";
        $exp = "";
        break;
    //3. 한의원관리
    case "a_clinic" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "한의원 관리";
        $exp = "";
        break;
    case "a_clinicmem" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "직원 계정 관리";
        $exp = "";
        break;
    case "a_clinicgrp" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "그룹 관리";
        $exp = "";
        break;
    //4. 환자관리
    case "a_patient" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "환자 관리";
        $exp = "";
        break;
    //5. 상품관리
    case "a_product" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "상품 관리";
        $exp = "";
        break;
    case "a_productupd" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "상품 등록";
        $exp = "";
        break;
    //6. 주문배송관리
    case "a_order1" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "주문 배송 관리";
        $exp = "처방주문";
        break;
    case "a_order2" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "주문 배송 관리";
        $exp = "약속처방";
        break;
    case "a_order_view" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "주문 배송 관리 수정";
        $exp = "처방주문";
        break;

    //7. 약재관리
    case "a_medicine" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "약재 관리";
        $exp = "해밀원원외탕전실 전체 약재 리스트 입니다.";
        break;
    //8. 제형관리
    case "a_texture" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "제형 관리";
        $exp = "";
        break;
    //9. 환제관리
    case "a_plastic" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "비닐 포장 관리";
        $exp = "";
        break;
    case "a_stick" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "박스 포장 관리";
        $exp = "";
        break;
    case "a_stickprt" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "스틱 인쇄 관리";
        $exp = "";
        break;
    case "a_stickdsg" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "스틱 디자인 관리";
        $exp = "";
        break;
    case "a_onetouch" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "원터치통 관리";
        $exp = "";
        break;
    case "a_sticklist" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "환스틱 관리";
        $exp = "";
        break;
    case "a_smallpill" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "탄자대 포장 관리";
        $exp = "";
        break;
    case "a_case" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "케이스 관리";
        $exp = "";
        break;
    //10.기성처방관리
    case "a_readymade" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "기성처방 관리";
        $exp = "";
        break;
    case "a_readymadeupd" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "기성처방 등록";
        $exp = "";
        break;
    //11.포장관리
    case "a_box" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "전용박스 관리";
        $exp = "";
        break;
    case "a_pouch" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "파우치 관리";
        $exp = "";
        break;
    //12.공지 관리
    case "a_notice" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "공지 관리";
        $exp = "";
        break;
    case "a_noticeupd" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "공지 등록";
        $exp = "";
        break;
    //13.문의요청 관리
    case "a_request" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "문의요청 관리";
        $exp = "";
        break;
    //14.팝업 관리
    case "a_popup" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "팝업 관리";
        $exp = "";
        break;
    case "a_popupupd" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 1;
        $header_name = "팝업 등록";
        $exp = "";
        break;
    ////어플관리자
    // 1.메인
    case "a_indexapp" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 2;
        $header_name = "어플 관리";
        $exp = "";
        break;
    // 2.회원 관리
    case "a_user" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 2;
        $header_name = "회원 관리";
        $exp = "";
        break;
    // 3.이벤트 관리
    case "a_event" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 2;
        $header_name = "이벤트 관리";
        $exp = "";
        break;
    case "a_eventupd" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 2;
        $header_name = "이벤트 등록";
        $exp = "";
        break;
    // 4.신고리뷰 관리
    case "a_review" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 2;
        $header_name = "신고리뷰 관리";
        $exp = "관리자 확인 후 블라인드 처리됩니다.";
        break;
    // 5.한약재 관리
    case "a_appmedi" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 2;
        $header_name = "한약재 관리";
        $exp = "";
        break;
    // 6.faq 관리
    case "a_faq" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 2;
        $header_name = "FAQ 관리";
        $exp = "";
        break;
    // 7.질병음식 관리
    case "a_food" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 2;
        $header_name = "질병음식 관리";
        $exp = "";
        break;
    case "a_foodupd" :
        $header_type = 2;
        $footer_type = 2;
        $lnb_type = 2;
        $header_name = "질병음식 등록";
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
                <a href="../med/setting.clinic.php">
                    <img src="../img/common/top_menu03.svg"/><span>마이페이지</span>
                </a>
                <a href="../med/setting.homepage.php">
                    <img src="../img/common/top_menu04.svg"/><span>홈페이지</span>
                </a>
                <a>
                    <img src="../img/common/top_menu05.svg"/><span>로그아웃</span>
                </a>
                <a> <!--알림 있을 때만-->
                    <img src="../img/common/top_menu06.svg"/><span class="txt_red txt_bold">새 메세지가 도착했습니다!</span>
                </a>
            </div>
        </header>
        <main class="page-content">
        <div class="container-fluid <?php if ($pid == 'homepage_sample') { echo 'sample_bg';} ?>" >
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
                    <a href="../adm/index.php">
                        <img src="../img/common/top_menu01.svg"/><span>메인</span>
                    </a>
                    <a>
                        <img src="../img/common/top_menu03.svg"/><span>마이페이지</span>
                    </a>
                    <a href="../med/index.php">
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