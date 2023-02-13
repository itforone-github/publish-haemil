<link href="../css/med.css" rel="stylesheet" type="text/css" />
<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
<i class="fa-light fa-bars"></i>
</a>
<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="#"><img src="../img/common/logo.svg" alt="해밀한의원 원외탕전실"/></a>
            <div id="close-sidebar">
                <i class="fa-light fa-xmark"></i>
            </div>
        </div>

        <div class="sidebar-header">
            <div class="user-info">
                <span class="user-name">유신한의원</span>
                <span class="user-role"><img src="../img/common/user_icon01.svg"/>김유신 담당자</span>
                <span class="user-point">
                <img src="../img/common/user_icon02.svg">1,000점
                </span>
            </div>
        </div>


        <div class="sidebar-menu">
            <!-- sidebar-content  -->
            <div class="side-icon">
                <!--<a href="#side-icon1" class="active"> 탭형태 삭제 -->
                <a href="../med/index.php" <?php if($lnb_type == 1){ echo "class='active'"; } ?>>
                    <!-- <span class="badge badge-pill badge-warning notification">3</span> -->
                    <img src="../img/common/sidebar_icon01.svg"/>
                    <p>환자진료</p>
                </a>
                <a href="../med/px.main.php" <?php if($lnb_type == 2){ echo "class='active'"; } ?>>
                    <img src="../img/common/sidebar_icon02.svg"/>
                    <p>처방하기</p>
                </a>
                <a href="../med/mall.main.php" <?php if($lnb_type == 3){ echo "class='active'"; } ?>>
                    <img src="../img/common/sidebar_icon03.svg"/>
                    <p>한의학몰</p>
                </a>
                <a href="../med/setting.main.php" <?php if($lnb_type == 4){ echo "class='active'"; } ?>>
                    <img src="../img/common/sidebar_icon04.svg"/>
                    <p>기본설정</p>
                </a>
            </div>
            <div class="lnb">
                <?php if ($lnb_type == 1) { ?>
                <div id="side-icon1">
                    <ul>
                    <li class="header-menu">
                        <span>진료실</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../med/treat.patient.php" <?php if($pid == "treat_patient") { echo "class='active'"; }?>>
                            <img src="../img/common/sidemenu01_01.svg"/>
                            <span>환자 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <img src="../img/common/sidemenu01_02.svg"/>
                            <span>예약·진료 관리</span>
                            <!-- <span class="badge badge-pill badge-danger">3</span> -->
                        </a>
                            <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">실시간 진료 관리
                                        <!-- <span class="badge badge-pill badge-success">on</span> -->
                                    </a>
                                </li>
                                <li>
                                    <a href="#">예약관리</a>
                                </li>
                                <li>
                                    <a href="#">최근 진료 내역</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="sidebar-dropdown">
                        <a href="#">
                        <img src="../img/common/sidemenu01_03.svg">
                            <span>원격 진료</span>
                        </a>
                    </li> -->
                    <li class="sidebar-dropdown">
                        <a href="#">
                        <img src="../img/common/sidemenu01_04.svg"/>
                            <span>진료 리뷰 관리</span>
                        </a>
                    </li>

                    </ul>
                </div>
                <?php } else if ($lnb_type == 2) { ?>
                <div id="side-icon2">
                    <ul>
                    <li class="header-menu">
                        <span>탕진실</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <img src="../img/common/sidemenu02_01.svg"/>
                            <span>처방하기</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">탕전처방</a>
                                </li>
                                <li>
                                    <a href="#">환제처방</a>
                                </li>
                                <li>
                                    <a href="#">산제처방</a>
                                </li>
                                <li>
                                    <a href="#">약속처방</a>
                                </li>
                                <li>
                                    <a href="#">서술식</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../med/px.taking.php" <?php if($pid == "px_taking") { echo "class='active'"; }?>>
                            <img src="../img/common/sidemenu02_02.svg"/>
                            <span>복용법 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../med/px.often.php" <?php if($pid == "px_often") { echo "class='active'"; }?>>
                            <img src="../img/common/sidemenu02_03.svg"/>
                            <span>자주 쓰는 처방</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../med/px.order.php" <?php if($pid == "px_order") { echo "class='active'"; }?>>
                            <img src="../img/common/sidemenu02_04.svg"/>
                            <span>주문 배송 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <img src="../img/common/sidemenu02_05.svg"/>
                            <span>처방 기본 설정</span>
                        </a>
                    </li>

                    </ul>
                </div>
                <?php } else if ($lnb_type == 3) { ?>
                <div id="side-icon3">
                    <ul>
                    <li class="header-menu">
                        <span>카테고리</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <img src="../img/common/sidemenu03_01.svg"/>
                            <span>약속 처방재</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <img src="../img/common/sidemenu03_02.svg"/>
                            <span>기획전</span>
                        </a>
                    </li>
                    <li class="header-menu">
                        <span>주문관리</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                        <img src="../img/common/sidemenu03_03.svg"/>
                            <span>장바구니</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                        <img src="../img/common/sidemenu03_04.svg"/>
                            <span>주문·배송 조회</span>
                        </a>
                    </li>

                    </ul>
                </div>
                <?php } else if ($lnb_type == 4) { ?>
                <div id="side-icon4">
                    <ul>
                    <li class="header-menu">
                        <span>기본설정</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../med/setting.clinic.php" <?php if($pid == "setting_clinic") { echo "class='active'"; }?>>
                            <img src="../img/common/sidemenu04_01.svg"/>
                            <span>한의원 정보</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../med/setting.appointment.php" <?php if($pid == "setting_appointment") { echo "class='active'"; }?>>
                            <img src="../img/common/sidemenu04_02.svg"/>
                            <span>진료 예약 설정</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../med/setting.event.php" <?php if($pid == "setting_event") { echo "class='active'"; }?>>
                        <img src="../img/common/sidemenu04_03.svg"/>
                            <span>이벤트 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../med/setting.point.php" <?php if($pid == "setting_point") { echo "class='active'"; }?>>
                        <img src="../img/common/sidemenu04_04.svg"/>
                            <span>포인트 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                        <img src="../img/common/sidemenu04_05.svg"/>
                            <span>직원 계정 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                        <img src="../img/common/sidemenu04_06.svg"/>
                            <span>요청·문의하기</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                        <img src="../img/common/sidemenu04_07.svg"/>
                            <span>홈페이지 제작·관리</span>
                        </a>
                    </li>

                    </ul>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- sidebar-menu  -->
    </div>

</nav>