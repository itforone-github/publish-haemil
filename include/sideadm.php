<link href="../css/adm.css" rel="stylesheet" type="text/css" />
<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
<i class="fa-light fa-bars"></i>
</a>
<nav id="sidebar" class="sidebar-wrapper sideadm">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="#"><img src="../img/common/logo.svg" alt="해밀한의원 원외탕전실"/></a>
            <div id="close-sidebar">
                <i class="fa-light fa-xmark"></i>
            </div>
        </div>


        <div class="sidebar-menu">
            <!-- sidebar-content  -->
            <div class="side-icon">
                <a href="../adm/index.php" <?php if($lnb_type == 1){ echo "class='active'"; } ?>>
                    <!-- <span class="badge badge-pill badge-warning notification">3</span> -->
                    <img src="../img/common/sideadm_icon01.svg"/>
                    <p>통합 관리자</p>
                </a>
                <a href="../adm/index.app.php"  <?php if($lnb_type == 2){ echo "class='active'"; } ?>>
                    <img src="../img/common/sideadm_icon02.svg"/>
                    <p>어플 관리자</p>
                </a>
            </div>
            <div class="lnb">
                <?php if ($lnb_type == 1) { ?>
                <div id="side-icon1">
                    <ul>
                    <li class="header-menu">
                        <span>관리자</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <img src="../img/common/sideadm01_02.svg"/>
                            <span>포인트 관리</span>
                            <!-- <span class="badge badge-pill badge-danger">3</span> -->
                        </a>
                            <div class="sidebar-submenu" <?php if($pid == "a_point" || $pid == "a_pointcfm" || $pid == "a_pointset") { echo "style='display: block'"; }?>>
                            <ul>
                                <li  <?php if($pid == "a_point") { echo "class='active'"; }?>>
                                    <a href="../adm/point.php">전체 포인트 내역
                                    </a>
                                </li>
                                <li  <?php if($pid == "a_pointset") { echo "class='active'"; }?>>
                                    <a href="../adm/point.set.php">선결제 금액 관리</a>
                                </li>
                                <li  <?php if($pid == "a_pointcfm") { echo "class='active'"; }?>>
                                    <a href="../adm/point.confirm.php">포인트 지급 관리</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <img src="../img/common/sideadm01_03.svg"/>
                            <span>한의원 관리</span>
                        </a>
                            <div class="sidebar-submenu" <?php if($pid == "a_clinic" || $pid == "a_clinicmem" || $pid == "a_clinicgrp") { echo "style='display: block'"; }?>>
                            <ul>
                                <li  <?php if($pid == "a_clinicmem") { echo "class='active'"; }?>>
                                    <a href="../adm/clinic.member.php">한의원 직원 관리
                                    </a>
                                </li>
                                <li  <?php if($pid == "a_clinic") { echo "class='active'"; }?>>
                                    <a href="../adm/clinic.php">한의원 관리</a>
                                </li>
                                <li  <?php if($pid == "a_clinicgrp") { echo "class='active'"; }?>>
                                    <a href="../adm/clinic.group.php">그룹 관리</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../adm/patient.php" <?php if($pid == "a_patient") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm01_04.svg"/>
                            <span>환자 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../adm/product.php" <?php if($pid == "a_product" || $pid == "a_productupd") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm01_05.svg"/>
                            <span>상품 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <img src="../img/common/sideadm01_06.svg"/>
                            <span>주문 배송 관리</span>
                        </a>
                        <div class="sidebar-submenu" <?php if($pid == "a_order1" || $pid == "a_order2") { echo "style='display: block'"; }?>>
                            <ul>
                                <li  <?php if($pid == "a_order1") { echo "class='active'"; }?>>
                                    <a href="../adm/order1.php">처방주문
                                    </a>
                                </li>
                                <li  <?php if($pid == "a_order2") { echo "class='active'"; }?>>
                                    <a href="../adm/order2.php">약속처방</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../adm/readymade.php" <?php if($pid == "a_redaymade" || $pid == "a_readymadeupd") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm01_09.svg"/>
                            <span>기성처방 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../adm/medicine.php" <?php if($pid == "a_medicine") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm01_07.svg"/>
                            <span>약재 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <img src="../img/common/sideadm01_10.svg"/>
                            <span>탕전 포장 관리</span>
                        </a>
                        <div class="sidebar-submenu" <?php if($pid == "a_box" || $pid == "a_pouch") { echo "style='display: block'"; }?>>
                            <ul>
                                <li  <?php if($pid == "a_box") { echo "class='active'"; }?>>
                                    <a href="../adm/box.php">전용박스 관리
                                    </a>
                                </li>
                                <li  <?php if($pid == "a_pouch") { echo "class='active'"; }?>>
                                    <a href="../adm/pouch.php">파우치 관리</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <img src="../img/common/sideadm01_08.svg"/>
                            <span>환제 포장 관리</span>
                        </a>
                        <div class="sidebar-submenu" <?php if($pid == "a_texture" || $pid == "a_plastic"  || $pid == "a_stick"  || $pid == "a_stickprt"  || $pid == "a_stickdsg"  || $pid == "a_onetouch"  || $pid == "a_smallpill"  || $pid == "a_case") { echo "style='display: block'"; }?>>
                            <ul>
                                <li  <?php if($pid == "a_texture") { echo "class='active'"; }?>>
                                    <a href="../adm/texture.php">제형 관리
                                    </a>
                                </li>
                                <li  <?php if($pid == "a_plastic") { echo "class='active'"; }?>>
                                    <a href="../adm/plastic.php">비닐 포장 관리</a>
                                </li>
                                <li  <?php if($pid == "a_stick") { echo "class='active'"; }?>>
                                    <a href="../adm/stick.php">박스 포장 관리</a>
                                </li>
                                <li  <?php if($pid == "a_stickprt") { echo "class='active'"; }?>>
                                    <a href="../adm/stick.print.php">스틱 인쇄 관리</a>
                                </li>
                                <li  <?php if($pid == "a_stickdsg") { echo "class='active'"; }?>>
                                    <a href="../adm/stick.design.php">스틱 디자인 관리</a>
                                </li>
                                <li  <?php if($pid == "a_onetouch") { echo "class='active'"; }?>>
                                    <a href="../adm/onetouch.php">원터치통 포장 관리</a>
                                </li>
                                <!--li>
                                    <a href="#">환스틱 포장 관리</a>
                                </li-->
                                <li  <?php if($pid == "a_smallpill") { echo "class='active'"; }?>>
                                    <a href="../adm/smalllpill.php">탄자대 포장 관리</a>
                                </li>
                                <li  <?php if($pid == "a_case") { echo "class='active'"; }?>>
                                    <a href="../adm/case.php">케이스 관리</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#" <?php if($pid == "a_powder") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm01_10.svg"/>
                            <span>산제 포장 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../adm/notice.php" <?php if($pid == "a_notice") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm01_11.svg"/>
                            <span>공지 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../adm/request.php" <?php if($pid == "a_request") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm01_12.svg"/>
                            <span>문의·요청 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="../adm/popup.php" <?php if($pid == "a_popup") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm01_13.svg"/>
                            <span>팝업 관리</span>
                        </a>
                    </li>
                    </ul>
                </div>
                <?php }  else if ($lnb_type == 2) { ?>
                <div id="side-icon2">
                    <ul>
                    <li class="header-menu">
                        <span>관리자</span>
                    </li>
                    <li class="sidebar-dropdown ready_bubble">
                        <a href="../adm/user.php" <?php if($pid == "a_user") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm01_01.svg"/>
                            <span>회원 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown ready_bubble">
                        <a href="../adm/event.php" <?php if($pid == "a_event") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm02_01.svg"/>
                            <span>이벤트 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown ready_bubble">
                        <a href="../adm/review.php" <?php if($pid == "a_review") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm02_02.svg"/>
                            <span>신고리뷰 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown ready_bubble">
                        <a href="../adm/appmedi.php" <?php if($pid == "a_appmedi") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm02_03.svg"/>
                            <span>한약재 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown ready_bubble">
                        <a href="../adm/faq.php" <?php if($pid == "a_faq") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm02_04.svg"/>
                            <span>FAQ 관리</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown ready_bubble">
                        <a href="../adm/food.php" <?php if($pid == "a_food") { echo "class='active'"; }?>>
                            <img src="../img/common/sideadm02_05.svg"/>
                            <span>질병음식 관리</span>
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