<?php
$pid = "setting_qna";
include_once("../include/header.php");
//5.7.1	요청문의하기 > 목록
?>

    <section class="s_qna">
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
                    <button type="button" class="btn btn_red btn_sdw" onclick="location.href='setting.qna.update.php'">등록하기</button>
                </span>
            </div>
            <div class="box2">
                <div class="table">
                    <table>
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="checkbox" /></th>
                            <th>No.</th>
                            <th>제목</th>
                            <th>내용</th>
                            <th>처리상태</th>
                            <th>등록일</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>4</td>
                            <td>합배송 문의</td>
                            <td onclick="location.href='../med/setting.qna.view.php'">안녕하세요 1일자 주문 2건 합배송 부탁드립니다 ...</td>
                            <td><span>접수완료</span></td>
                            <td>2022-10-11</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_line" onclick="location.href='../med/setting.qna.update.php'">수정</button>
                                <button type="button" class="btn btn_mini btn_redline">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>3</td>
                            <td>포인트 결제 관련</td>
                            <td>포인트는 어디서 얻을 수 있나요?</td>
                            <td><span class="txt_bold">확인 중</span></td>
                            <td>2022-10-11</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_line">수정</button>
                                <button type="button" class="btn btn_mini btn_redline">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>2</td>
                            <td>이벤트 내용수정</td>
                            <td>오류 문의</td>
                            <td><span class="txt_bold">처리완료</span></td>
                            <td>2022-10-11</td>
                            <td>
                                <button type="button" class="btn btn_mini btn_line">수정</button>
                                <button type="button" class="btn btn_mini btn_redline">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox" /></td>
                            <td>1</td>
                            <td>오류 문의</td>
                            <td>자동 로그인은 안되나요?</td>
                            <td><span class="txt_bold">처리완료</span></td>
                            <td>2022-10-11</td>
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