<?php
$pid = "a_patient";
include_once("../include/header.php");
//ADM 환자 관리
?>


<section class="patient">
    <div class="panel">
        <p>총 <span class="red">4</span>명 </p>
        <div>
            <select name="search">
                <option value="">선택</option>
            </select>
            <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

        </div>
        <span>
            <button type="button" class="btn btn_gray2"">엑셀 다운</button>
            <button type="button" class="btn btn_whiteline">선택 삭제</button>
        </span>
    </div>
    <div class="box3">
        <div class="table adm">
            <table>
                <thead>
                <tr>
                    <th><input type="checkbox" name="checkbox"></th>
                    <th>No.</th>
                    <th>차트번호</th>
                    <th>한의원명</th>
                    <th>성함</th>
                    <th>어플연동(ID)</th>
                    <th>생년월일</th>
                    <th>연락처</th>
                    <th>체질구분</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" name="checkbox"></td>
                    <td>1</td>
                    <td>00000001</td>
                    <td>유신한의원</td>
                    <td>김환자</td>
                    <td>kim900101</td>
                    <td>1990-01-01</td>
                    <td>010-0000-0000</td>
                    <td>소양인</td>
                    <td><button type="button" class="btn btn_whiteline"  data-toggle="modal" data-target="#patientmodal01">보기</button><button type="button" class="btn btn_redline">삭제</button></td>
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
