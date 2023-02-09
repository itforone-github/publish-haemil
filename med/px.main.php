<?php
$pid = "treat_main";
include_once("../include/header.php");
//처방하기 메인
?>

    <section class="px main">
        <div class="pm_total">
            <h3>처방요약</h3>
            <div class="box1">
                <ul>
                    <li>
                        <p><span><img src="../img/common/ic_week01.svg" /></span>총주문</p>
                        <p><strong>100,000</strong>건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_week02.svg" /> </span>조제 중</p>
                        <p><strong>100,000</strong>건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_week03.svg" /></span>배송 중</p>
                        <p><strong>100,000</strong>건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_week04.svg" /></span>배송 완료</p>
                        <p><strong>100,000</strong>건</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pm_month">
            <div class="box2">
                <div class="box_title">
                    <strong>2022년 11월 처방 요약</strong>
                    <div class="title_btn">
                        <a class="arrow on"><img src="../img/common/arrow_left.svg" /></a>
                        <a class="arrow off"><img src="../img/common/arrow_right.svg" /></a>
                    </div>
                </div>
                <div class="list">
                    <ul>
                        <li>
                            <p><span><img src="../img/common/ic_order01.svg" /></span>총 주문건수</p>
                            <p><strong>100,000</strong>건</p>
                        </li>
                        <li>
                            <p><span><img src="../img/common/ic_order02.svg" /></span>총 한의학몰</p>
                            <p><strong>100,000</strong>건</p>
                        </li>
                        <li>
                            <p><span><img src="../img/common/ic_order03.svg" /></span>탕/환/산</p>
                            <p><strong>10,000</strong>건</p>
                        </li>
                        <li>
                            <p><span><img src="../img/common/ic_order03.svg" /></span>약속처방</p>
                            <p><strong>10,000</strong>건</p>
                        </li>
                        <li>
                            <p><span><img src="../img/common/ic_order03.svg" /></span>서술식 주문</p>
                            <p><strong>1,000</strong>건</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pm_today">
            <div class="box2">
                <div class="box_title bg_red">
                    <strong>금일 처방 요약</strong>
                    <div class="title_btn">
                        <input type="date" placeholder="날짜선택" />
                    </div>
                </div>
                <div class="list">
                    <ul>
                        <li>
                            <p><span><img src="../img/common/ic_order01.svg" /></span>총 주문건수</p>
                            <p><strong>100,000</strong>건</p>
                        </li>
                        <li>
                            <p><span><img src="../img/common/ic_order02.svg" /></span>총 한의학몰</p>
                            <p><strong>100,000</strong>건</p>
                        </li>
                        <li>
                            <p><span><img src="../img/common/ic_order03.svg" /></span>탕/환/산</p>
                            <p><strong>10,000</strong>건</p>
                        </li>
                        <li>
                            <p><span><img src="../img/common/ic_order03.svg" /></span>약속처방</p>
                            <p><strong>10,000</strong>건</p>
                        </li>
                        <li>
                            <p><span><img src="../img/common/ic_order03.svg" /></span>서술식 주문</p>
                            <p><strong>1,000</strong>건</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pm_notice">
            <h3>공지사항</h3>
            <div class="box1">
                <ul>
                    <li>
                        <p>공지사항입니다.</p>
                        <p calss="date_time">2022-11-02</p>
                    </li>
                    <li>
                        <p>공지사항입니다.</p>
                        <p calss="date_time">2022-11-02</p>
                    </li>
                    <li>
                        <p>공지사항입니다.</p>
                        <p calss="date_time">2022-11-02</p>
                    </li>
                    <li>
                        <p>공지사항입니다.</p>
                        <p calss="date_time">2022-11-02</p>
                    </li>
                    <li>
                        <p>공지사항입니다.</p>
                        <p calss="date_time">2022-11-02</p>
                    </li>
                    <li>
                        <p>공지사항입니다.</p>
                        <p calss="date_time">2022-11-02</p>
                    </li>

                </ul>
            </div>
        </div>
    </section>

    <section class="treat latest">
        <h3>최근 처방 내역</h3>
        <div class="box2">
            <div class="table">
                <table>
                    <thead>
                    <tr>
                        <th>구분</th>
                        <th>처방일시</th>
                        <th>주문번호</th>
                        <th>환자 성함</th>
                        <th>팩수</th>
                        <th>팩용량</th>
                        <th>금액</th>
                        <th>배송지</th>
                        <th>연락처</th>
                        <th>진행상황</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>탕전처방</td>
                        <td>2022-10-31 14:38</td>
                        <td>202211011049-1</td>
                        <td>김환자</td>
                        <td>수량</td>
                        <td>수량</td>
                        <td>금액</td>
                        <td>배송지</td>
                        <td>연락처</td>
                        <td>약재실</td>
                    </tr>
                    <tr>
                        <td>탕전처방</td>
                        <td>2022-10-31 14:38</td>
                        <td>202211011049-1</td>
                        <td>김환자</td>
                        <td>수량</td>
                        <td>수량</td>
                        <td>금액</td>
                        <td>배송지</td>
                        <td>연락처</td>
                        <td>약재실</td>
                    </tr>
                    <tr>
                        <td>탕전처방</td>
                        <td>2022-10-31 14:38</td>
                        <td>202211011049-1</td>
                        <td>김환자</td>
                        <td>수량</td>
                        <td>수량</td>
                        <td>금액</td>
                        <td>배송지</td>
                        <td>연락처</td>
                        <td>약재실</td>
                    </tr>
                    <tr>
                        <td>탕전처방</td>
                        <td>2022-10-31 14:38</td>
                        <td>202211011049-1</td>
                        <td>김환자</td>
                        <td>수량</td>
                        <td>수량</td>
                        <td>금액</td>
                        <td>배송지</td>
                        <td>연락처</td>
                        <td>약재실</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>