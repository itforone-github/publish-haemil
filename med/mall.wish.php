<?php
$pid = "mall_wish";
include_once("../include/header.php");
//찜상품 보관함
?>
    <section class="ready"></section>
    <section class="m_wish ready_page">
        <div class="mall_list">
            <ul>
                <li onclick="location.href='mall.view.php'">
                    <div class="img"><img src="../img/med/mall_event01.jpg" /></div>
                    <div class="text">
                        <strong>기획전</strong>
                        <p>경옥고S스틱박스(15g)</p>
                        <span>옵션가 확인</span>
                    </div>
                </li>
                <li>
                    <div class="img"><img src="../img/med/mall_event02.jpg" /></div>
                    <div class="text">
                        <strong>NEW</strong>
                        <p>경옥고S스틱박스(15g)</p>
                        <span>옵션가 확인</span>
                    </div>
                </li>
                <li>
                    <div class="img"><img src="../img/med/mall_event03.jpg" /></div>
                    <div class="text">
                        <strong>일시품절</strong>
                        <p>경옥고S스틱박스(15g)</p>
                        <span>옵션가 확인</span>
                    </div>
                </li>
                <li>
                    <div class="img"><img src="../img/med/mall_event04.jpg" /></div>
                    <div class="text">
                        <strong>기획전</strong>
                        <p>경옥고S스틱박스(15g)</p>
                        <span>옵션가 확인</span>
                    </div>
                </li>
            </ul>
            <div class="b-pagination-outer">
                <ul id="border-pagination">
                    <li><a class="" href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>