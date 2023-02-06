<?php
$pid = "a_pointset";
include_once("../include/header.php");
//ADM 선결제 금액관리
?>

<section class="pointset">
    <div class="cardpay">

        <div class="box3">
            <div class="title">
                <h3>카드 충전</h3>
                <p><button type="button" class="btn btn_red">저장하기</button></p>
            </div>
            <div class="table adm">
                <table>
                    <colgroup>
                        <col width="40%">
                        <col width="20%">
                        <col width="*">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>포인트</th>
                        <th class="red">보너스(%)</th>
                        <th>최종 적립 포인트</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="text" placeholder="포인트 금액"></td>
                        <td><input type="text" placeholder="보너스 퍼센트"></td>
                        <td>32,100,000</td>
                    </tr>
                    <tr>
                        <td colspan="3"><button type="button" class="btn btn_redline">추가</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="cashpay">

        <div class="box3">
            <div class="title">
               <h3>현금 충전</h3>
               <p><button type="button" class="btn btn_red">저장하기</button></p>
            </div>
            <div class="table adm">
                <table>
                    <colgroup>
                        <col width="40%">
                        <col width="20%">
                        <col width="*">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>포인트</th>
                        <th class="red">보너스(%)</th>
                        <th>최종 적립 포인트</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="text" placeholder="포인트 금액"></td>
                        <td><input type="text" placeholder="보너스 퍼센트"></td>
                        <td>32,100,000</td>
                    </tr>
                    <tr>
                        <td colspan="3"><button type="button" class="btn btn_redline">추가</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>