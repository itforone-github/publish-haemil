<?php
$pid = "print";
include_once("../include/header.php");
//조제지시서
?>

<script>
    window.print();
</script>

<div id="order_print_wrapper" class="orderprint" onClick="print()">
    <h3>후한의원 창원점 / 055-286-9900<br>
        탕 / 일반 [20첩] / 2023-02-22 / 1일3회 / 식전 /30분</h3>
    <!--<h3>카드결제</h3>-->
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
                <th>탕전방식</th>
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
                <td>일반</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="table">
        <table>
            <colgroup></colgroup>
            <thead>
            <tr>
                <th>첩수</th>
                <th>CC</th>
                <th>팩수</th>
                <th>탕기번호/포장기번호</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>15 첩</td>
                <td>140 cc</td>
                <td>30 팩</td>
                <td>-</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="table">
        <table>
            <colgroup></colgroup>
            <thead>
            <tr>
                <th>파우치</th>
                <th>포장상태</th>
                <th>파우치마킹</th>
                <th>용매</th>
                <th>작업자</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>01. 무광핑크</td>
                <!--<td>--><!--</td>-->
                <td>45팩박스(연녹)</td>
                <td>조제일자/환자명</td>
                <td>-</td>
                <td>-</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="info">
        <dl>
            <dt>발송지정보</dt><dd>[ 경희원한의원 ] / 2298-1888 / 2298-1888</dd>
        </dl>
        <!--<dl><dt>임의/기성처방명</dt><dd>--><!--</dd></dl>-->
        <dl>
            <dt>처방명</dt><dd>없음</dd>
        </dl>
        <dl>
            <dt>탕전비고</dt><dd>없음</dd>
        </dl>
        <dl>
            <dt>파우치마킹</dt><dd>조제일자/환자명</dd>
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

    <div class="table flex">

        <table>
            <colgroup></colgroup>
            <thead>
            <tr>
                <th>No.</th>
                <th>약재명</th>
                <th>원산지</th>
                <th>용량(g)</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>1</td>
                <td>작약.수입.주초</td>
                <td>중국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>2</td>
                <td>대추</td>
                <td>한국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>3</td>
                <td>생강</td>
                <td>한국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>4</td>
                <td>백지.수</td>
                <td>중국</td>
                <td>30</td>
            </tr>
            <tr>
                <td>5</td>
                <td>자감초</td>
                <td>러시아</td>
                <td>30</td>
            </tr>
            <tr>
                <td>6</td>
                <td>대복피</td>
                <td>중국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>7</td>
                <td>길경.수</td>
                <td>중국</td>
                <td>30</td>
            </tr>
            <tr>
                <td>8</td>
                <td><span class="txt_blue">[후하]</span>사인</td>
                <td>미얀마</td>
                <td>60</td>
            </tr>
            <tr>
                <td>9</td>
                <td><span class="txt_blue">[후하]</span>소엽.토</td>
                <td>한국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>10</td>
                <td>모과</td>
                <td>한국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>11</td>
                <td><span class="txt_blue">[후하]</span>목향</td>
                <td>중국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>12</td>
                <td>지실.수.초</td>
                <td>중국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>13</td>
                <td>빈랑</td>
                <td>중국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>14</td>
                <td>신곡.휴먼허브</td>
                <td>한국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>15</td>
                <td>적복령</td>
                <td>중국</td>
                <td>60</td>
            </tr>

            </tbody>
        </table>
        <table>
            <colgroup></colgroup>
            <thead>
            <tr>
                <th>No.</th>
                <th>약재명</th>
                <th>원산지</th>
                <th>용량(g)</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>16</td>
                <td>청피</td>
                <td>중국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>17</td>
                <td>향부자.초</td>
                <td>한국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>18</td>
                <td>반하.법.신흥제약</td>
                <td>중국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>19</td>
                <td>진피.산물</td>
                <td>한국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>20</td>
                <td>후박</td>
                <td>중국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>21</td>
                <td>산사.초</td>
                <td>중국</td>
                <td>90</td>
            </tr>
            <tr>
                <td>22</td>
                <td><span class="txt_blue">[후하]</span>곽향.광</td>
                <td>중국</td>
                <td>90</td>
            </tr>
            <tr>
                <td>23</td>
                <td>백출</td>
                <td>중국</td>
                <td>30</td>
            </tr>
            <tr>
                <td>24</td>
                <td>사삼</td>
                <td>중국</td>
                <td>180</td>
            </tr>
            <tr>
                <td>25</td>
                <td>비파엽</td>
                <td>중국</td>
                <td>60</td>
            </tr>
            <tr>
                <td>26</td>
                <td>연화예</td>
                <td>중국</td>
                <td>60</td>
            </tr>

            </tbody>
        </table>

    </div>

    <div class="info">
        <dl>
            <dt>약재 총무게g</dt>
            <dd>1,620g</dd>
        </dl>
        <dl>
            <dt>약물 총무게cc</dt>
            <dd>7,380cc</dd>
        </dl>
        <dl>
            <dt class="txt_red">달이는 시간</dt>
            <dd><strong class="txt_red">1시간 30분</strong>
                <br><span>[주]약물무게는 약탕기 상태에 따라 가감이 필요할 수 있습니다.</span></dd>
        </dl>
    </div>


    <div class="info pay_frm">
        <dl><dt>약재비</dt><dd>32,940원</dd></dl>
        <dl><dt>탕전비</dt><dd>18,500원</dd></dl>
        <!--<dl><dt>기타재료비</dt><dd>--><!--원</dd></dl>-->
        <dl><dt class="">사용포인트</dt><dd>51,440P</dd></dl>
        <dl><dt>결제 금액</dt><dd>51,440원</dd></dl>
        <dl><dt class="tot_price_frm">총금액</dt><dd>51,440원</dd></dl>
    </div>
</div>
</div>

<?php include '../include/footer.php'; ?>