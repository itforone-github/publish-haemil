<?php
$pid = "px_often";
include_once("../include/header.php");
//3.8.1	자주 쓰는 처방 > 목록
?>


    <section class="p_often">
        <div class="list">
            <div class="area_top">
                <div class="total">
                    <p>총 <span class="red">4</span>개 </p>
                    <div class="search">
                        <select name="search">
                            <option value="">전체</option>
                        </select>
                        <input class="search-bar" type="search" placeholder="검색어를 입력하세요" />
                        <button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>
                    </div>
                </div>
                <span class="btn_wrap">
                    <button type="button" class="btn btn_white btn_sdw">선택 삭제</button>
                    <button type="button" class="btn btn_red btn_sdw" onclick="location.href='px.often.update.php'">처방 등록</button>
                </span>
            </div>
            <div class="box2">
                <div class="table">
                    <table>
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="checkbox" /></th>
                            <th>No.</th>
                            <th>처방명</th>
                            <th>구분</th>
                            <th>약재수</th>
                            <th>사용 약재</th>
                            <th>등록일</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>1</td>
                            <td>맞춥형 처방1</td>
                            <td>산제처방</td>
                            <td>3</td>
                            <td>한약재1, 한약재2, 한약재3...</td>
                            <td>2022-01-01</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_redline2">처방하기</button>
                                <button type="button" class="btn btn_mini btn_whiteline" onclick="location.href='px.often.update.php'">수정</button>
                                <button type="button" class="btn btn_mini btn_redline">삭제</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="b-pagination-outer">
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
        </div>

    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>