<?php
$pid = "px_taking";
include_once("../include/header.php");
//3.7.2 복용법 관리
?>


    <section class="p_taking">
        <div class="list">
            <div class="area_top">
                <div class="total">
                    <p>총 <span class="red">4</span>명 </p>
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
                    <button type="button" class="btn btn_red btn_sdw" onclick="location.href='px.taking.update.php'">복용법 등록</button>
                </span>
            </div>
            <div class="box2">
                <div class="table">
                    <table>
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="checkbox" /></th>
                            <th>No.</th>
                            <th>복용시기</th>
                            <th>복용시간</th>
                            <th>복용횟수</th>
                            <th>제목</th>
                            <th>내용</th>
                            <th>첨부파일</th>
                            <th>등록일</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>1</td>
                            <td>식전</td>
                            <td>30분</td>
                            <td>5회</td>
                            <td>복용법1</td>
                            <td>복용안내 : 최대한 시간에 맞춰 드셔야 효능이 좃습니다. 약을 몰아서 드시지...</td>
                            <td><span class="txt_under"><a>사진.png</a></span></td>
                            <td>2022-01-01</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_whiteline" onclick="location.href='px.taking.update.php'">수정</button>
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