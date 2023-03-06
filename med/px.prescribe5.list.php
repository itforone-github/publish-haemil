<?php
$pid = "px_prescribe5";
include_once("../include/header.php");
//3. 서술식 목록
?>


    <section class="p_px5">
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
                    <button type="button" class="btn btn_red btn_sdw" onclick="location.href='px.prescribe5.php'">서술식 주문</button>
                </span>
            </div>
            <div class="box2">
                <div class="table">
                    <table>
                        <colgroup>
                            <col width="50px">
                            <col width="120px">
                            <col width="70px">
                            <col width="120px">
                            <col width="*">
                            <col width="*">
                            <col width="70px">
                            <col width="140px">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>등록일</th>
                            <th>환자명</th>
                            <th>생년월일</th>
                            <th>연락처</th>
                            <th>처방 내용</th>
                            <th>주문 상태</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>2022-01-01</td>
                            <td>김환자</td>
                            <td>90-01-01</td>
                            <td>010-0000-0000</td>
                            <td>처방 내용 앞부분이 이렇게 보입니다</td>
                            <td><button type="button" class="btn btn_red2">주문접수</button></td>
                            <td>
                                <button type="button" class="btn btn_mini btn_whiteline" onclick="location.href='px.prescribe5.done.php'">수정</button>
                                <button type="button" class="btn btn_mini btn_redline">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2022-01-01</td>
                            <td>김환자</td>
                            <td>90-01-01</td>
                            <td>010-0000-0000</td>
                            <td>처방 내용 앞부분이 이렇게 보입니다</td>
                            <td><button type="button" class="btn btn_red">견적사항</button></td>
                            <td>
                                <button type="button" class="btn btn_mini btn_whiteline" onclick="location.href='px.prescribe5.done.php'">상세</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2022-01-01</td>
                            <td>김환자</td>
                            <td>90-01-01</td>
                            <td>010-0000-0000</td>
                            <td>처방 내용 앞부분이 이렇게 보입니다</td>
                            <td><button type="button" class="btn btn_gray">결제완료</button></td>
                            <td>
                                <button type="button" class="btn btn_mini btn_whiteline" onclick="location.href='px.prescribe5.done.php'">상세</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2022-01-01</td>
                            <td>김환자</td>
                            <td>90-01-01</td>
                            <td>010-0000-0000</td>
                            <td>처방 내용 앞부분이 이렇게 보입니다</td>
                            <td><button type="button" class="btn btn_gray3">주문취소</button></td>
                            <td>
                                <button type="button" class="btn btn_mini btn_whiteline" onclick="location.href='px.prescribe5.done.php'">상세</button>
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