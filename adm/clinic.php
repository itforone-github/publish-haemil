<?php
$pid = "a_clinic";
include_once("../include/header.php");
//ADM 한의원 관리
?>

<section class="clinic">
    <div class="panel">
        <p>총 <span class="red">4</span>개 </p>
        <div>
            <select name="search">
                <option value="">선택</option>
                <option value="">전화번호</option>
                <option value="">주소</option>
                <option value="">사업자번호</option>
            </select>
            <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

        </div>
        <button type="button" class="btn btn_red"  onclick="location.href='./clinic.update.php'">등록하기</button>
    </div>
    <div class="tagbox">
        <div>
            <p><strong>한의원명</strong></p>
        </div>
        <div>
            <p><a><span class="tag active">전체</span></a></p>
            <p><a><span class="tag">전체</span></a></p>
        </div>
    </div>
    <div class="box3">
        <div class="table adm">
            <table>
                <thead>
                <tr>
                    <th><input type="checkbox" name="checkbox"/></th>
                    <th>No.</th>
                    <th>한의원명</th>
                    <th>대표자</th>
                    <th>사업자등록번호</th>
                    <th>주소</th>
                    <th>대표전화</th>
                    <th>직원 계정 수</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" name="checkbox"/></td>
                    <td>1</td>
                    <td>유신한의원</td>
                    <td>김유신</td>
                    <td>000-00-00000</td>
                    <td>부산시 해운대구 센텀동로 7</td>
                    <td>051-000-0000</td>
                    <td>4</td>
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