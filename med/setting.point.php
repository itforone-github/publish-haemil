<?php
$pid = "setting_point";
include_once("../include/header.php");
//5.5.1	포인트 > 목록
?>

    <section class="s_point">
        <div class="">
            <div class="box2">
                <div class="box_title bg_red">
                    <strong>현재포인트</strong>
                </div>
                <div class="inr flex js">
                    <p class="txt_bold"><span><img src="../img/common/ic_setting04.svg" /></span> 잔여포인트</p>
                    <p>
                        <strong>1,000</strong>점 &nbsp;
                        <a href="../med/setting.point.charge.php" class="btn btn_mini btn_red btn_sdw">충전하기</a>
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="s_point latest">
        <h3>포인트 사용 내역</h3>
        <div class="box2">
            <div class="table">
                <table>
                    <thead>
                    <tr>
                        <th>날짜</th>
                        <th>구분</th>
                        <th>금액</th>
                        <th>내용</th>
                        <th>총합계</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2022-11-01</td>
                        <td><span class="txt_red">사용</span></td>
                        <td>21,000점</td>
                        <td>처방 포인트 결제</td>
                        <td>1,000점</td>
                    </tr>
                    <tr>
                        <td>2022-11-01</td>
                        <td><span class="txt_red">사용</span></td>
                        <td>21,000점</td>
                        <td>처방 포인트 결제</td>
                        <td>22,000점</td>
                    </tr>
                    <tr>
                        <td>2022-11-01</td>
                        <td><span>적립</span></td>
                        <td>21,000점</td>
                        <td>처방 포인트 결제</td>
                        <td>43,000점</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>