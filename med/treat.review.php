<?php
$pid = "treat_review";
include_once("../include/header.php");
//2.7	진료 리뷰 관리
?>
<section class="ready">
</section>

    <section class="t_review latest ready_page">
        <div class="area_top">
            <h3>리뷰 목록 <span>허위 리뷰 신고 요청시 관리자 확인 후 블라인드 처리됩니다.</span></h3>
            <div class="search">
                <select name="search">
                    <option value="">전체</option>
                </select>
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요"><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>
            </div>
        </div>
        <div class="box2">
            <div class="table">
                <table>
                    <thead>
                    <tr>
                        <th>작성일</th>
                        <th>구분</th>
                        <th>작성자</th>
                        <th>진료일</th>
                        <th>작성내용</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2022-10-31</td>
                        <td>예약인증</td>
                        <td>김환자</td>
                        <td>1990-10-01</td>
                        <td>언제나 친절하고 과잉 진료 없이 원하는 통증만 딱 잡아주십니다 약 떨어질 쯤에 미리 연락주셔서 편하게 예약 잡았어요...</td>
                        <td><button class="btn btn_mini btn_line">신고</button></td>
                    </tr>
                    <tr>
                        <td>2022-10-31</td>
                        <td>예약인증</td>
                        <td>김환자</td>
                        <td>1990-10-01</td>
                        <td>언제나 친절하고 과잉 진료 없이 원하는 통증만 딱 잡아주십니다 약 떨어질 쯤에 미리 연락주셔서 편하게 예약 잡았어요...</td>
                        <td><button class="btn btn_mini btn_line">신고</button></td>
                    </tr>
                    <tr>
                        <td>2022-10-31</td>
                        <td>예약인증</td>
                        <td>김환자</td>
                        <td>1990-10-01</td>
                        <td>언제나 친절하고 과잉 진료 없이 원하는 통증만 딱 잡아주십니다 약 떨어질 쯤에 미리 연락주셔서 편하게 예약 잡았어요...</td>
                        <td><button class="btn btn_mini btn_line">신고</button></td>
                    </tr>
                    <tr>
                        <td>2022-10-31</td>
                        <td>예약인증</td>
                        <td>김환자</td>
                        <td>1990-10-01</td>
                        <td>언제나 친절하고 과잉 진료 없이 원하는 통증만 딱 잡아주십니다 약 떨어질 쯤에 미리 연락주셔서 편하게 예약 잡았어요...</td>
                        <td><button class="btn btn_mini btn_line">신고</button></td>
                    </tr>
                    <tr>
                        <td>2022-10-31</td>
                        <td>예약인증</td>
                        <td>김환자</td>
                        <td>1990-10-01</td>
                        <td>언제나 친절하고 과잉 진료 없이 원하는 통증만 딱 잡아주십니다 약 떨어질 쯤에 미리 연락주셔서 편하게 예약 잡았어요...</td>
                        <td><button class="btn btn_mini btn_line">신고</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
<!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>
