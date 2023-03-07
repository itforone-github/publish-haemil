<?php
$pid = "print";
include_once("../include/header.php");
//조제지시서
?>

<script>
    window.print();
</script>

<div id="order_print_wrapper" class="orderprint" onClick="print()">
    <!--<h3>후한의원 창원점 / 055-286-9900 / 탕 / 일반 [20첩] / 2023-02-22 / 1일3회 / 식전 /30분</h3>-->
    <h3>카드결제</h3>
    <div class="table">

        <table>
            <!--<colgroup>
                <col style="width:*%">
                <col style="width:20%">
                <col style="width:20%">
                <col style="width:20%">
                <col style="width:15%">
                <col style="width:12%">
            </colgroup>-->
            <thead>
            <tr>
                <th>한의원명</th>
                <th>한의원 전화</th>
                <th>주문번호</th>
                <th>환자명</th>
                <!--th>주문일자</th-->
                <th>출고일자</th>
                <!--th>체질</th-->
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>경희원한의원</td>
                <td>2298-1888</td>
                <td>202303021306-1</td>
                <td>김현희</td>
                <!--td>2017-04-22</td-->
                <td>2023-03-02</td>
                <!--td></td-->
            </tr>
            </tbody>
        </table>
    </div>

    <div class="table">
        <table>
            <colgroup></colgroup>
            <thead>
            <tr>
                <th>No.</th>
                <th>상품명/옵션명</th>
                <th>수량</th>
                <th>가격</th>
                <th>합계</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <th>상품/20박스</th>
                <th>1개</th>
                <th>10,000원</th>
                <th>10,000원</th>
            </tr>
            </tbody>
        </table>
    </div>


    <div class="info">
        <dl>
            <dt>발송지정보</dt><dd>[ 경희원한의원 ] / 2298-1888 / 2298-1888</dd>
        </dl>
        <dl>
            <dt>배송지주소</dt><dd>서울 성동구 동호로2나길 14 </dd>
        </dl>
        <dl>
            <dt>수령인/TEL/HP</dt><dd>[ 김현희 ]  / 010-2674-7263</dd>
        </dl>
        <dl>
            <dt>배송요청사항</dt><dd>없음</dd>
        </dl>
    </div>


    <div class="info pay_frm">
        <dl><dt>상품금액</dt><dd>32,940원</dd></dl>
        <dl><dt>배송비</dt><dd>18,500원</dd></dl>
        <dl><dt>결제 금액</dt><dd>51,440원</dd></dl>
        <dl><dt class="tot_price_frm">총금액</dt><dd>51,440원</dd></dl>
    </div>
</div>
</div>

<?php include '../include/footer.php'; ?>