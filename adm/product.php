<?php
$pid = "a_product";
include_once("../include/header.php");
//ADM 상품 관리
?>

    <section class="product">
        <div class="panel">
            <p>총 <span class="red">4</span>개 </p>
            <div>
                <select name="search">
                    <option value="">선택</option>
                </select>
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

            </div>
            <button type="button" class="btn btn_red"  onclick="location.href='./product.update.php'">등록하기</button>
        </div>
        <div class="tagbox">
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
        <div class="box5">
            <div>
                <div class="pro_item">
                    <img src="../img/common/noimg.png">
                    <div class="item_txt">
                        <p><span class="item_cate">기획전</span></p>
                        <p class="item_name">경옥고S스틱박스</p>
                        <p class="item_price">10,000원</p>
                    </div>
                </div>
                <div class="pro_item">
                    <img src="../img/common/noimg.png">
                    <div class="item_txt">
                        <p><span class="item_cate">기획전</span></p>
                        <p class="item_name">경옥고S스틱박스</p>
                        <p class="item_price">10,000원</p>
                    </div>
                </div>
                <div class="pro_item">
                    <img src="../img/common/noimg.png">
                    <div class="item_txt">
                        <p><span class="item_cate">기획전</span></p>
                        <p class="item_name">경옥고S스틱박스</p>
                        <p class="item_price">10,000원</p>
                    </div>
                </div>
                <div class="pro_item">
                    <img src="../img/common/noimg.png">
                    <div class="item_txt">
                        <p><span class="item_cate">기획전</span></p>
                        <p class="item_name">경옥고S스틱박스</p>
                        <p class="item_price">10,000원</p>
                    </div>
                </div>
                <div class="pro_item">
                    <img src="../img/common/noimg.png">
                    <div class="item_txt">
                        <p><span class="item_cate">기획전</span></p>
                        <p class="item_name">경옥고S스틱박스</p>
                        <p class="item_price">10,000원</p>
                    </div>
                </div>
            </div>
            <div class="b-pagination-outer ">
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