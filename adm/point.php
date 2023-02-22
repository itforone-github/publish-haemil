<?php
$pid = "a_point";
include_once("../include/header.php");
//ADM 포인트내역
?>


<section class="point">
    <div class="panel">
        <div>
            <select name="search">
            <option value="">선택</option>
            </select>
            <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

        </div>
        <button type="button" class="btn btn_red" data-toggle="modal" data-target="#pointmodal01">추가/차감</button>
    </div>
    <div class="box3">
        <div class="table adm">
            <table>
                <thead>
                <tr>
                    <th>번호</th>
                    <th>일자</th>
                    <th>소속</th>
                    <th>아이디</th>
                    <th>내용</th>
                    <th>포인트 추가</th>
                    <th>포인트 차감</th>
                    <th>잔여 포인트</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>2022-10-31</td>
                    <td>유신한의원</td>
                    <td>yooshin1</td>
                    <td>상품 결제후 포인트 차감</td>
                    <td class="red">-10,000</td>
                    <td class="blue">+</td>
                    <td>10,000</td>
                    <td>
                        <button type="button" class="btn btn_white">상세</button></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="b-pagination-outer ">
            <ul id="border-pagination">
                <li><a class="" href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#" class="active">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
    </div>
</section>



    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>