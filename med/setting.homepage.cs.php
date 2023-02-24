<?php
$pid = "setting_homepage";
include_once("../include/header.php");
//5.8	홈페이지 제작·관리
?>

    <section class="setting main">
        <div class="cs_info">
            <div class="box2">
                <div class="box_title bg_red">
                    <strong>홈페이지 기본 정보</strong>
                    <button class="btn btn_mini btn_line">변경하기</button>
                </div>
                <div class="list">
                    <ul>
                        <li>
                            <p><span><img src="../img/common/ic_setting01.svg" /></span>주소</p>
                            <p>부산시 해운대구 센텀동로 17</p>
                        </li>
                        <li>
                            <p><span><img src="../img/common/ic_setting02.svg" /></span>홈페이지 담당자</p>
                            <p>김유진</p>
                        </li>
                        <li>
                            <p><span><img src="../img/common/ic_setting03.svg" /></span>담당자 전화번호</p>
                            <p><strong>051-000-0000</strong></p>
                        </li>
                        <li>
                            <p><span><img src="../img/common/ic_setting03.svg" /></span>도메인 만료일</p>
                            <p><strong>2024-10-01</strong></p>
                        </li>
                    </ul>
                    <br>
                    <a class="btn btn_middle btn_gray">CS 접수하기</a>
                </div>
            </div>
        </div>
        <div class="cs_register">
            <h3>추가 제작 문의</h3>
            <div class="box1">
                <div class="form">
                    <label>어플리케이션 제작</label><input type="text" placeholder="어플리케이션 제작"/>
                    <label>담당자 성함</label><input type="text" placeholder="담당자 성함을 입력하세요."/>
                    <label>연락처</label><input type="text" placeholder="연락처를 입력하세요."/>
                    <label>내용</label><input type="text" placeholder="내용을 입력하세요."/>
                </div>
                <a class="btn btn_middle btn_red">문의하기</a>
            </div>
        </div>
    </section>

    <section class="latest flex">
        <div>
            <h3>CS 접수 목록</h3>
            <div class="box2">
                <div class="table">
                    <table>
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>구분</th>
                            <th>내용</th>
                            <th>처리상태</th>
                            <th>등록일</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>3</td>
                            <td>홈페이지</td>
                            <td>게시판을 하나 더 만들고 싶어요</td>
                            <td>접수완료</td>
                            <td>2022-10-01</td>
                            <td><button class="btn btn_mini btn_line">수정</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>홈페이지</td>
                            <td>보도 게시판에 카테고리를 설정하고 싶어요</td>
                            <td><strong>확인 중</strong></td>
                            <td>2022-10-01</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>홈페이지</td>
                            <td>논문 다운로드하게끔 가능한가요?</td>
                            <td><strong>처리완료</strong></td>
                            <td>2022-10-01</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>