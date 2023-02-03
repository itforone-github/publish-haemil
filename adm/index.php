<?php
$pid = "a_index";
include_once("../include/header.php");
//ADM 통합메인
?>

    <section class="patient_main">
        <div class="register">
            <h3>간편 환자등록</h3>
            <div class="box1">
                <div class="form">
                    <label>이름</label><input type="text" placeholder="이름">
                    <label>주민등록번호</label><input type="text" placeholder="주민등록번호">
                    <label>연락처</label><input type="text" placeholder="연락처">
                    <label>주소</label><input type="text" placeholder="주소">
                </div>
                <a class="btn btn_middle btn_red">등록</a>
            </div>
        </div>
    </section>

    <section class="patient_latest">
        <h3>최근 진료 리뷰</h3>
        <div class="box2">
            <div class="table">
                <table>
                    <thead>
                    <tr>
                        <th>작성일</th>
                        <th>구분</th>
                        <th>작성내용</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2022-10-31</td>
                        <td>예약인증</td>
                        <td>언제나 친절하고 과잉 진료 없이 원하는 통증만 딱 잡아주십니다 약 떨어질 쯤에 미리 연락주셔서 편하게 예약 잡았어요</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>