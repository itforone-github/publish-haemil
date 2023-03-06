<?php
$pid = "mall_list";
include_once("../include/header.php");
//3.11.1	약속 처방재 > 목록
?>

    <section class="p_coded">
        <div class="panel">
            <div>

                <select name="search">
                    <option value="">선택</option>
                </select>&nbsp;
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요"><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

            </div>
        </div>
        <div class="tagbox box2">
            <div>
                <p><strong>카테고리</strong></p>
            </div>
            <div>
                <p><a><span class="tag active">전체</span></a></p>
                <p><a><span class="tag">기획전</span></a></p>
                <p><a><span class="tag">빈용방</span></a></p>
                <p><a><span class="tag">경옥고</span></a></p>
                <p><a><span class="tag">공진단</span></a></p>
                <p><a><span class="tag">근골격</span></a></p>
                <p><a><span class="tag">대사질환</span></a></p>
                <p><a><span class="tag">부인과</span></a></p>
                <p><a><span class="tag">보허약</span></a></p>
                <p><a><span class="tag">소화기</span></a></p>
                <p><a><span class="tag">순환기</span></a></p>
                <p><a><span class="tag">신경과</span></a></p>
                <p><a><span class="tag">피부과</span></a></p>
                <p><a><span class="tag">해독약</span></a></p>
                <p><a><span class="tag">호흡기</span></a></p>
                <p><a><span class="tag">외용재</span></a></p>
                <p><a><span class="tag">부자재</span></a></p>
                <p><a><span class="tag">다이어트</span></a></p>
                <p><a><span class="tag">그외처방</span></a></p>
            </div>
        </div>

    </section>

    <section>
        <div class="mall_list">
            <ul>
                <li onclick="location.href='mall.view.php'">
                    <div class="img"><img src="../img//med/mall_event01.jpg" /></div>
                    <div class="text">
                        <strong>기획전</strong>
                        <p>경옥고S스틱박스(15g)</p>
                        <span>옵션가 확인</span>
                    </div>
                </li>
                <li>
                    <div class="img"><img src="../img//med/mall_event02.jpg" /></div>
                    <div class="text">
                        <strong>NEW</strong>
                        <p>경옥고S스틱박스(15g)</p>
                        <span>옵션가 확인</span>
                    </div>
                </li>
                <li>
                    <div class="img"><img src="../img//med/mall_event03.jpg" /></div>
                    <div class="text">
                        <strong>일시품절</strong>
                        <p>경옥고S스틱박스(15g)</p>
                        <span>옵션가 확인</span>
                    </div>
                </li>
                <li>
                    <div class="img"><img src="../img//med/mall_event04.jpg" /></div>
                    <div class="text">
                        <strong>기획전</strong>
                        <p>경옥고S스틱박스(15g)</p>
                        <span>옵션가 확인</span>
                    </div>
                </li>
                <li>
                    <div class="img"><img src="../img//med/mall_event04.jpg" /></div>
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