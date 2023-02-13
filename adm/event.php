<?php
$pid = "a_event";
include_once("../include/header.php");
//ADM 이벤트 관리
?>

    <section class="event">
        <div class="panel">
            <p>총 <span class="red">4</span>개 </p>
            <div>
                <input type="date"/>
                <p>~</p>
                <input type="date"/>
            </div>
            <div>
                <span class="select"><input type="radio" id="select1" name="select" class="red" checked/><label for="select1">전체</label>
                <input type="radio" id="select2" name="select" class="red"/><label for="select2">승인대기</label>
                <input type="radio" id="select3" name="select" class="red"/><label for="select3">승인완료</label>
                <input type="radio" id="select4" name="select" class="red"/><label for="select4">승인거부</label></span>
            </div>
            <div>
                <select name="search">
                    <option value="">선택</option>
                </select>
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>
            </div>
            <span>
            <button type="button" class="btn btn_blue btn_sdw" >선택 승인</button>
            <button type="button" class="btn btn_red btn_sdw" >선택 거절</button>
            <button type="button" class="btn btn_whiteline" >선택 삭제</button>
            <button type="button" class="btn btn_red" onclick="location.href='../adm/event.update.php'">이벤트 등록</button>
            </span>
        </div>
        <div class="box3">
            <div class="table adm">
                    <table>
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="checkbox"/></th>
                            <th>No.</th>
                            <th>요청일</th>
                            <th>한의원명</th>
                            <th>기간</th>
                            <th>대표 이미지</th>
                            <th>제목</th>
                            <th>승인</th>
                            <th>진행</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>4</td>
                            <td>23-01-01</td>
                            <td>유신한의원</td>
                            <td>2022-10-13 ~ 2022-11-30</td>
                            <td><div class="thumb_img" style="background-image: url(../img/common/noimg2.png)"></div></td>
                            <td>무료 사상체질 검사 &amp; 맛보기 한약</td>
                            <td><span class="ev1pr1">승인대기</span></td>
                            <td><span class="ev2pr1">진행예정</span></td>
                            <td>
                                <button type="button" class="btn btn_mini btn_redline" onclick="location.href='./event.view.php'">보기</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>4</td>
                            <td>23-01-01</td>
                            <td>유신한의원</td>
                            <td>2022-10-13 ~ 2022-11-30</td>
                            <td><div class="thumb_img" style="background-image: url(../img/common/noimg2.png)"></div></td>
                            <td>무료 사상체질 검사 &amp; 맛보기 한약</td>
                            <td><span class="ev1pr2">승인완료</span></td>
                            <td><span class="ev2pr2">진행중</span></td>
                            <td>
                                <button type="button" class="btn btn_mini btn_redline" onclick="location.href='./event.view.php'">보기</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>4</td>
                            <td>23-01-01</td>
                            <td>유신한의원</td>
                            <td>2022-10-13 ~ 2022-11-30</td>
                            <td><div class="thumb_img" style="background-image: url(../img/common/noimg2.png)"></div></td>
                            <td>무료 사상체질 검사 &amp; 맛보기 한약</td>
                            <td><span class="ev1pr3">승인거부</span></td>
                            <td><span class="ev2pr3">진행완료</span></td>
                            <td>
                                <button type="button" class="btn btn_mini btn_redline" onclick="location.href='./event.view.php'">보기</button>
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
        <p><i class="fa-regular fa-hourglass"></i> 준비중입니다.</p>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>