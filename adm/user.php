<?php
$pid = "a_user";
include_once("../include/header.php");
//ADM 회원관리
?>
<section class="ready">
</section>
<section class="user ready_page">
    <div class="panel">
        <p>총 <span class="red">4</span>명 </p>
        <div>
            <select name="search">
                <option value="">선택</option>
            </select>
            <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

        </div>
        <button type="button" class="btn btn_red" onclick="location.href='./user.update.php'">회원 등록</button>
    </div>
    <div class="box3">
        <div class="table adm">
            <table>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>성명</th>
                    <th>연락처</th>
                    <th>주소</th>
                    <th>아이디</th>
                    <th>OS</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>김유신</td>
                    <td>010-0000-0000</td>
                    <td>부산시 해운대구 센텀동로 7</td>
                    <td>yoshin01</td>
                    <td>AOS</td>
                    <td><button type="button" class="btn btn_whiteline">수정</button><button type="button" class="btn btn_redline">삭제</button></td>
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