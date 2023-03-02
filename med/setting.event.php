<?php
$pid = "setting_event";
include_once("../include/header.php");
//5.4이벤트관리(준비중)
?>

    <section class="s_event ready_page">
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
                    <button type="button" class="btn btn_red btn_sdw" onclick="location.href='px.event.update.php'">이벤트 등록</button>
                </span>
            </div>
            <div class="box2">
                <div class="table">
                    <table>
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="checkbox" /></th>
                            <th>No.</th>
                            <th>상태</th>
                            <th>기간</th>
                            <th>대표 이미지</th>
                            <th>제목</th>
                            <th>신청/문의</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>4</td>
                            <td>승인 중</td>
                            <td>2022-10-13 ~ 2022-11-30</td>
                            <td><div class="thumb_img" style="background-image: url(../img/common/noimg2.png)"></div></td>
                            <td>무료 사상체질 검사 & 맛보기 한약</td>
                            <td>0명</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_redline">보기</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>3</td>
                            <td>승인거절</td>
                            <td>2022-10-13 ~ 2022-11-30</td>
                            <td><div class="thumb_img" style="background-image: url(../img/common/noimg2.png)"></div></td>
                            <td>맞춤 다이어트 한약</td>
                            <td>0명</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_redline">보기</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>2</td>
                            <td>승인완료</td>
                            <td>2022-10-13 ~ 2022-11-30</td>
                            <td><div class="thumb_img" style="background-image: url(../img/common/noimg2.png)"></div></td>
                            <td>무료 인바디</td>
                            <td>36명</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_redline">보기</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>1</td>
                            <td>승인완료</td>
                            <td>2022-10-13 ~ 2022-11-30</td>
                            <td><div class="thumb_img" style="background-image: url(../img/common/noimg2.png)"></div></td>
                            <td>1:1 맞춤처방 다이어트</td>
                            <td>124명</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_redline">보기</button>
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

    <section class="ready">
    </section>
    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>