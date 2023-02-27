<?php
$pid = "setting_point_charge";
include_once("../include/header.php");
//5.5.3	포인트 > 충전내역
?>

    <section class="s_point_charge list">
        <div class="text-right mb20">
            <a class="btn btn_sdw btn_mini btn_red" href="../med/setting.point.charge.php">충전하기</a>
        </div>
        <div class="box2">
            <div class="inr">
                <div class="table">
                    <table>
                        <colgroup>
                            <col width="20px"/>
                            <col width=""/>
                            <col width="200px"/>
                            <col width="200px"/>
                            <col width="20px"/>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>요청일자</th>
                            <th>선결제 상품</th>
                            <th>지금 예정 포인트</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>2</td>
                            <td>22-10-15</td>
                            <td>30,000,000</td>
                            <td>32,100,000</td>
                            <td><button type="button" class="btn btn_mini btn_red">취소가능</button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>22-10-15</td>
                            <td>30,000,000</td>
                            <td>32,100,000</td>
                            <td><button type="button" class="btn btn_mini btn_gray">지금완료</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>