<?php
$pid = "setting_member";
include_once("../include/header.php");
//5.6.2	직원계정관리 > 계정생성
?>

    <section class="s_member">
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
                    <button type="button" class="btn btn_red btn_sdw" data-toggle="modal" data-target="#memberupmodal">계정 생성</button>
                </span>
            </div>
            <div class="box2">
                <div class="table">
                    <table>
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="checkbox" /></th>
                            <th>No.</th>
                            <th>담당자 성함</th>
                            <th>연락처</th>
                            <th>아이디</th>
                            <th>권한</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>4</td>
                            <td>김유신</td>
                            <td>010-0000-0000</td>
                            <td>yoshin01</td>
                            <td>최고관리자</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_line">수정</button>
                                <button type="button" class="btn btn_mini btn_redline">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>3</td>
                            <td>김유신</td>
                            <td>010-0000-0000</td>
                            <td>yoshin01</td>
                            <td>최고관리자</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_line">수정</button>
                                <button type="button" class="btn btn_mini btn_redline">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>2</td>
                            <td>김유신</td>
                            <td>010-0000-0000</td>
                            <td>yoshin01</td>
                            <td>최고관리자</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_line">수정</button>
                                <button type="button" class="btn btn_mini btn_redline">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>1</td>
                            <td>김유신</td>
                            <td>010-0000-0000</td>
                            <td>yoshin01</td>
                            <td>최고관리자</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_line">수정</button>
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