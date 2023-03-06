<?php
$pid = "mall_view";
include_once("../include/header.php");
//3.11.2	약속 처방재 > 상세
?>

    <section class="p_coded view">
        <div class="area_top">
            <h3>제품 상세정보</h3>
            <div class="btn_wrap">
                <a class="btn btn_sdw btn_mini btn_white">목록</a>
                <a class="btn btn_sdw btn_mini btn_black">이전</a>
                <a class="btn btn_sdw btn_mini btn_black">다음</a>
            </div>
        </div>
        <div class="box2">
            <div class="flex">
                <div class="pc_slider">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../img/med/pc_slider_test.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/med/pc_slider_test.png" />
                            </div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../img/med/pc_slider_test.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/med/pc_slider_test.png" />
                            </div>
                        </div>
                    </div>

                    <!-- Swiper JS -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
                    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

                    <!-- Initialize Swiper -->
                    <script>
                        var swiper = new Swiper(".mySwiper", {
                            spaceBetween: 10,
                            slidesPerView: 4,
                            freeMode: true,
                            watchSlidesProgress: true,
                        });
                        var swiper2 = new Swiper(".mySwiper2", {
                            spaceBetween: 10,
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                            thumbs: {
                                swiper: swiper,
                            },
                        });
                    </script>
                </div>
                <div class="pc_product">
                    <div class="pc_title">
                        <h4 class="txt_red">기획전</h4>
                        <p class="pc_name">당귀수산 60팩(120cc)</p>
                        <p class="pc_price txt_red">가격 문의</p>
                    </div>
                    <div class="pc_info flex">
                        <dl>
                            <dt>처방상태</dt>
                            <dd>처방가능</dd>
                            <dt>포장방법</dt>
                            <dd>비닐 탕약파우치를 진공포장 후, 박스에 포장하여 에어셀 마무리</dd>
                            <dt>상품구성</dt>
                            <dd>60팩, 박스 포장</dd>
                        </dl>
                        <dl>
                            <dt>배송방법</dt>
                            <dd>택배</dd>
                            <dt>배송비</dt>
                            <dd>3,500원 (60,000원 이상 구매 시 무료)</dd>
                        </dl>
                    </div>
                    <div class="pc_medicine">
                        <div class="table">
                            <table>
                                <thead>
                                <tr>
                                    <th>약재명</th>
                                    <th>원산지</th>
                                    <th>약재량</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>당귀미</td>
                                    <td>-</td>
                                    <td>180g</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="pc_qty">
                        <h5>수량선택</h5>
                        <dl>
                            <dt>
                                <p>추가옵션</p>
                                <select>
                                    <option>옵션 선택</option>
                                </select>
                            </dt>
                            <dd>
                                <p>당귀수산 60팩(120cc)</p>
                                <p class="number_controller">
                                    <button><i class="fa-regular fa-minus"></i></button>
                                    <input type="number" value="1"/>
                                    <button><i class="fa-regular fa-plus"></i></button>
                                </p>
                            </dd>
                        </dl>
                    </div>
                    <div class="pc_total">
                        <p>상품금액 0원 + 배송비 3,500원 = 총 금액 <strong class="txt_red">3,500</strong>원</p>
                    </div>
                    <div class="btn_wrap">
                        <a class="btn_wish"><i class="fa-thin fa-star"></i><!--찜하기--></a>
                        <button class="btn btn_red2">처방하기</button>
                        <button class="btn btn_black">장바구니</button>
                        <button class="btn btn_red">구매하기</button>
                    </div>
                </div>

            </div>
            <div class="pc_details">
                <h5>설명</h5>
                <div class="pc_content">
                    <p>당귀수산 – 어혈, 타박, 교통사고</p>
                    <p>당귀미 180g, 적작약, 오약, 향부자, 소목 120g, 홍화 96g, 도인 84g, 육계 72g, 감초 60g, 소주 1,500g, 120cc 60팩</p>
                </div>

            </div>
        </div>

    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>