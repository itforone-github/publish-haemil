<?php
$pid = "treat_reserv";
include_once("../include/header.php");
//2.4	예약진료 관리 > 예약관리
?>
<section class="ready">

</section>

<section class="ready_page">
    <section class="treat main">
        <div class="tm_real_time">
            <div class="box2">
                <div class="box_title">
                    <strong>실시간 진료 명단</strong>
                    <div class="title_btn">
                        <span>7명</span>
                        <a class="arrow on"><img src="../img/common/arrow_left.svg"/></a>
                        <a class="arrow off"><img src="../img/common/arrow_right.svg"/></a>
                        <a class="btn btn_small btn_white">직접접수</a>
                    </div>
                </div>
                <div class="list">
                    <ul>
                        <li>
                            <strong class="patient_name">김환자</strong>
                            <p>
                                <span class="state ing">진료중</span>
                                <!-- 진료중일 때 class : ing, 대기중일 때 class : standby -->
                                <a class="btn btn_mini btn_line">완료</a>
                            </p>
                        </li>
                        <li>
                            <strong class="patient_name">이환자</strong>
                            <p>
                                <span class="state standby">대기중</span>
                                <a class="btn btn_mini btn_line">호출</a>
                            </p>
                        </li>
                        <li>
                            <strong class="patient_name">박환자</strong>
                            <p>
                                <span class="state standby">대기중</span>
                                <a class="btn btn_mini btn_line">호출</a>
                            </p>
                        </li>
                        <li>
                            <strong class="patient_name">정환자</strong>
                            <p>
                                <span class="state standby">대기중</span>
                                <a class="btn btn_mini btn_line">호출</a>
                            </p>
                        </li>
                        <li>
                            <strong class="patient_name">강환자</strong>
                            <p>
                                <span class="state standby">대기중</span>
                                <a class="btn btn_mini btn_line">호출</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tm_register">
            <div class="flex js">
                <h3>현장접수</h3>
                <a class="btn btn_mini btn_sdw btn_white">환자검색</a>
            </div>
            <div class="box1">
                <div class="form">
                    <label>이름</label><input type="text" placeholder="이름"/>
                    <label>주민등록번호</label><input type="text" placeholder="주민등록번호"/>
                    <label>연락처</label><input type="text" placeholder="연락처"/>
                    <label>주소</label><input type="text" placeholder="주소"/>
                </div>
                <a class="btn btn_middle btn_red">등록</a>
            </div>
        </div>
        <div class="tm_today">
            <div class="box2">
                <div class="box_title bg_red">
                    <strong>금일 진료 예약건</strong>
                    <div class="title_btn">
                        <span>7명</span>
                        <a class="arrow on"><img src="../img/common/arrow_left.svg"/></a>
                        <a class="arrow off"><img src="../img/common/arrow_right.svg"/></a>
                        <a class="btn btn_small btn_white">직접접수</a>
                    </div>
                </div>
                <div class="list">
                    <ul>
                        <li>
                            <p>
                                <strong class="patient_name">김환자</strong>
                                <span class="birth">1990-01-30</span>
                            </p>
                            <p>
                                <span class="time">11:00</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong class="patient_name">김환자</strong>
                                <span class="birth">1990-01-30</span>
                            </p>
                            <p>
                                <span class="time">11:00</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong class="patient_name">김환자</strong>
                                <span class="birth">1990-01-30</span>
                            </p>
                            <p>
                                <span class="time">11:00</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong class="patient_name">김환자</strong>
                                <span class="birth">1990-01-30</span>
                            </p>
                            <p>
                                <span class="time">11:00</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong class="patient_name">김환자</strong>
                                <span class="birth">1990-01-30</span>
                            </p>
                            <p>
                                <span class="time">11:00</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tm_request">
            <div class="flex js">
                <h3>진료 예약 요청</h3>
                <p class="title_btn">
                    <span>7명</span>
                    <a class="arrow on"><img src="../img/common/arrow_b_left.svg"/></a>
                    <a class="arrow off"><img src="../img/common/arrow_b_right.svg"/></a>
                </p>
            </div>
            <div class="box1">
                <ul class="list">
                    <li>
                        <p>김환자</p>
                        <p>
                            <span class="date_time">2022-11-02 11:00</span>
                            <a class="btn btn_mini btn_line">확인</a>
                        </p>
                    </li>
                    <li>
                        <p>김환자</p>
                        <p>
                            <span class="date_time">2022-11-02 11:00</span>
                            <a class="btn btn_mini btn_line">확인</a>
                        </p>
                    </li>
                    <li>
                        <p>김환자</p>
                        <p>
                            <span class="date_time">2022-11-02 11:00</span>
                            <a class="btn btn_mini btn_line">확인</a>
                        </p>
                    </li>
                    <li>
                        <p>김환자</p>
                        <p>
                            <span class="date_time">2022-11-02 11:00</span>
                            <a class="btn btn_mini btn_line">확인</a>
                        </p>
                    </li>
                    <li>
                        <p>김환자</p>
                        <p>
                            <span class="date_time">2022-11-02 11:00</span>
                            <a class="btn btn_mini btn_line">확인</a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="latest">
        <div>
            <h3>최근 진료 내역</h3>&nbsp;&nbsp;&nbsp;
            <div class="search">
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요"><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>
            </div>
        </div>
        <div class="box2">
            <div class="table">
                <table>
                    <thead>
                    <tr>
                        <th>진료완료일시</th>
                        <th>구분</th>
                        <th>성함</th>
                        <th>생년월일</th>
                        <th>연락처</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2022-10-31</td>
                        <td>예약</td>
                        <td>김환자</td>
                        <td>1990-10-01</td>
                        <td>010-0000-0000</td>
                    </tr>
                    <tr>
                        <td>2022-10-31</td>
                        <td>예약</td>
                        <td>김환자</td>
                        <td>1990-10-01</td>
                        <td>010-0000-0000</td>
                    </tr>
                    <tr>
                        <td>2022-10-31</td>
                        <td>예약</td>
                        <td>김환자</td>
                        <td>1990-10-01</td>
                        <td>010-0000-0000</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
</section>
<!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>
