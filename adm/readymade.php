<?php
$pid = "a_readymade";
include_once("../include/header.php");
//ADM 기성처방 관리
?>


<section class="readymade">
    <div class="panel">
        <p>총 <span class="red">4</span>개 </p>
        <div>
            <select name="search">
                <option value="">선택</option>
            </select>
            <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

        </div>
        <span>
            <button type="button" class="btn btn_blue btn_sdw"  >엑셀 업로드</button>
            <button type="button" class="btn btn_gray2 btn_sdw"  >엑셀 다운</button>
            <button type="button" class="btn btn_whiteline" >선택 삭제</button>
            <button type="button" class="btn btn_red"   onclick="location.href='./readymade.update.php'">처방 등록</button>
        </span>
    </div>
    <div class="box3">
        <div class="table adm">
            <table>
                <thead>
                <tr>
                    <th><input type="checkbox" name="checkbox"/></th>
                    <th>No.</th>
                    <th>처방집명</th>
                    <th>처방전명</th>
                    <th>산출물</th>
                    <th>참고사항</th>
                    <th>약재수</th>
                    <th>누락수</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" name="checkbox"/></td>
                    <td>1</td>
                    <td>동의보감</td>
                    <td>쌍기탕가녹용</td>
                    <td>탕전처방</td>
                    <td>잉부의 감한에 한열이 학질과 같은 증을 다스린다.</td>
                    <td>1</td>
                    <td>1</td>
                    <td><button type="button" class="btn btn_whiteline">보기</button><button type="button" class="btn btn_redline">삭제</button></td>
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
