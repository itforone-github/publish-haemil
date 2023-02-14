<?php
$pid = "mall_main";
include_once("../include/header.php");
//4.01	한의학몰 메인
?>

    <section class="mall main">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="../img/mall_slider01.jpg" /></div>
                <div class="swiper-slide"><img src="../img/mall_slider02.jpg" /></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Swiper JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                },
            });
        </script>
    </section>

    <section class="latest mall main">
        <div class="mm_event">
            <h3>기획전 모아보기 <span>10/21~11/10</span></h3>
            <ul>
                <li>
                    <img src="../img/mall_event01.jpg" />
                    <p>경옥고S스틱박스(15g)</p>
                    <span>옵션가 확인</span>
                </li>
                <li>
                    <img src="../img/mall_event02.jpg" />
                    <p>경옥고S스틱박스(15g)</p>
                    <span>옵션가 확인</span>
                </li>
                <li>
                    <img src="../img/mall_event03.jpg" />
                    <p>경옥고S스틱박스(15g)</p>
                    <span>옵션가 확인</span>
                </li>
                <li>
                    <img src="../img/mall_event04.jpg" />
                    <p>경옥고S스틱박스(15g)</p>
                    <span>옵션가 확인</span>
                </li>
            </ul>
        </div>
        <div class="mm_notice">
            <h3>공지사항</h3>
            <div class="box1">
                <ul class="list">
                    <li>
                        <p>공지사항입니다.</p>
                        <p class="date_time">2022-11-02</p>
                    </li>
                    <li>
                        <p>공지사항입니다.</p>
                        <p class="date_time">2022-11-02</p>
                    </li>
                    <li>
                        <p>공지사항입니다.</p>
                        <p class="date_time">2022-11-02</p>
                    </li>
                    <li>
                        <p>공지사항입니다.</p>
                        <p class="date_time">2022-11-02</p>
                    </li>
                    <li>
                        <p>공지사항입니다.</p>
                        <p class="date_time">2022-11-02</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>