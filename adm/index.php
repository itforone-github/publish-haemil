<?php
$pid = "a_index";
include_once("../include/header.php");
//ADM 통합메인
?>

    <section class="adm_main">
        <div class="weekorder">
            <h3>최근 7일간(11.01~11.07) 주문배송</h3>
            <div class="box3">
                <ul class="list week">
                    <li>
                        <p><span><img src="../img/common/ic_week01.svg"/></span>총 주문금액</p>
                        <p><strong>100,000</strong> 원</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_week02.svg"/></span>조제·준비 중</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_week03.svg"/></span>배송 중</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_week04.svg"/></span>배송 완료</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="todayorder">
            <div class="box4">
                <div class="box_title bg_red">
                    <strong>금일 주문배송 요약</strong>
                    <div class="title_btn">
                        <input type="date">
                    </div>
                </div>
                <ul class="list">
                    <li>
                        <p><span><img src="../img/common/ic_order01.svg"/></span>총 주문건수</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_order02.svg"/></span>한의학몰</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_order03.svg"/></span>탕/환/산</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_order03.svg"/></span>약속처방</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_order03.svg"/></span>서술식 주문</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="monthlyorder">
            <div class="box4">
                <div class="box_title">
                    <strong>2022년 11월 주문배송 요약</strong>
                    <div class="title_btn">
                        <a class="arrow on"><img src="../img/common/arrow_left.svg"/></a>
                        <a class="arrow off"><img src="../img/common/arrow_right.svg"/></a>
                    </div>
                </div>
                <ul class="list">
                    <li>
                        <p><span><img src="../img/common/ic_order01.svg"/></span>총 주문건수</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_order02.svg"/></span>한의학몰</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_order03.svg"/></span>탕/환/산</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_order03.svg"/></span>약속처방</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                    <li>
                        <p><span><img src="../img/common/ic_order03.svg"/></span>서술식 주문</p>
                        <p><strong>100,000</strong> 건</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="request_latest">
        <h3>문의·요청</h3>
        <div class="box3">
            <div class="table adm">
                <table>
                    <thead>
                    <tr>
                        <th>작성일</th>
                        <th>작성자</th>
                        <th>구분</th>
                        <th>제목</th>
                        <th>작성내용</th>
                        <th>처리상태</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2022-10-31</td>
                        <td>유신한의원</td>
                        <td>문의</td>
                        <td>합배송문의</td>
                        <td>230212745 주문건 합배송하고 싶어요</td>
                        <td>접수 완료</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>