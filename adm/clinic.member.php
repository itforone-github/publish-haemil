<?php
$pid = "a_clinicmem";
include_once("../include/header.php");
//ADM 한의원 직원관리
?>

<section class="clinicmem">
    <div class="panel">
        <p>총 <span class="red">4</span>명 </p>
        <div>
            <select name="search">
                <option value="">선택</option>
            </select>
            <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

        </div>
        <button type="button" class="btn btn_red" onclick="location.href='./clinic.memupdate.php'">등록하기</button>
    </div>
    <div class="tagbox">
        <p><strong>한의원명</strong></p>
        <p><a><span class="tag active">전체</span></a></p>
        <p><a><span class="tag">전체</span></a></p>
    </div>
    <div class="box3">
        <div class="table adm">
            <table>
                <thead>
                <tr>
                    <th><input type="checkbox" name="checkbox"></th>
                    <th>No.</th>
                    <th>한의원명</th>
                    <th>담당자</th>
                    <th>연락처</th>
                    <th>아이디</th>
                    <th>권한</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" name="checkbox"></td>
                    <td>1</td>
                    <td>유신한의원</td>
                    <td>김유신</td>
                    <td>010-0000-0000</td>
                    <td>yoshin01</td>
                    <td>최고관리자</td>
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