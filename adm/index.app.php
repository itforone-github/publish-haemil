<?php
$pid = "a_indexapp";
include_once("../include/header.php");
//ADM 어플 관리 메인
?>

    <section class="app_main">
        <div class="event">
            <h3>현재 진행 중인 이벤트</h3>
            <div class="box4">
                <div id="visual">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="../img/common/noimg2.png" />
                                </div>
                                <div class="text">
                                    <strong>[유신한의원] 1:1 맞춤처방 한약 다이어트</strong>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="../img/common/noimg2.png" />
                                </div>
                                <div class="text">
                                    <strong>[유신한의원] 1:1 맞춤처방 한약 다이어트</strong>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="summary">
            <div class="box4">
                <div class="box_title bg_red">
                    <strong>이벤트 요약</strong>
                </div>
                <ul class="list">
                    <li>
                        <p><span><img src="../img/common/ic_event01.svg"/></span>진행 중</p>
                        <p><strong>1</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_event01.svg"/></span>진행 예정</p>
                        <p><strong>1</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_event01.svg"/></span>승인 요청</p>
                        <p><strong>1</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_event01.svg"/></span>승인 거절</p>
                        <p><strong>1</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_event01.svg"/></span>진행 완료</p>
                        <p><strong>1</strong> 건</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="approval">
            <h3>이벤트 승인 요청</h3>
            <div class="box3">
                <ul class="list">
                    <li>
                        <p>
                            <strong class="clinic_name">유신한의원</strong>
                            <span class="title">1:1 맞춤처방 한약 다이어트</span>
                        </p>
                        <p>
                            <span class="time">2022-11-02 ~ 2022-11-20</span>
                        </p>
                        <p>
                            <button type="button" class="btn btn_line">상세</button>
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong class="clinic_name">유신한의원</strong>
                            <span class="title">1:1 맞춤처방 한약 다이어트</span>
                        </p>
                        <p>
                            <span class="time">2022-11-02 ~ 2022-11-20</span>
                        </p>
                        <p>
                            <button type="button" class="btn btn_line">상세</button>
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong class="clinic_name">유신한의원</strong>
                            <span class="title">1:1 맞춤처방 한약 다이어트</span>
                        </p>
                        <p>
                            <span class="time">2022-11-02 ~ 2022-11-20</span>
                        </p>
                        <p>
                            <button type="button" class="btn btn_line">상세</button>
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong class="clinic_name">유신한의원</strong>
                            <span class="title">1:1 맞춤처방 한약 다이어트</span>
                        </p>
                        <p>
                            <span class="time">2022-11-02 ~ 2022-11-20</span>
                        </p>
                        <p>
                            <button type="button" class="btn btn_line">상세</button>
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong class="clinic_name">유신한의원</strong>
                            <span class="title">1:1 맞춤처방 한약 다이어트</span>
                        </p>
                        <p>
                            <span class="time">2022-11-02 ~ 2022-11-20</span>
                        </p>
                        <p>
                            <button type="button" class="btn btn_line">상세</button>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="request_latest">
        <h3>최근 진료 신고</h3>
        <div class="box3">
            <div class="table adm">
                <table>
                    <thead>
                    <tr>
                        <th>작성일</th>
                        <th>한의원명</th>
                        <th>구분</th>
                        <th>아이디</th>
                        <th>신고구분</th>
                        <th>작성내용</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2022-10-31</td>
                        <td>유신한의원</td>
                        <td>예약인증</td>
                        <td>sonnim1</td>
                        <td>고객</td>
                        <td>예약했는데 1분이나 기다림 ㅡㅡ;</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 0,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>