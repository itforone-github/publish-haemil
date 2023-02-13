<?php
$pid = "a_event";
include_once("../include/header.php");
//ADM 이벤트
?>

    <section class="event view">
        <div class="panel">
            <span>
            <button type="button" class="btn btn_whiteline"  onclick="location.href='./notice.php'">목록</button>
            <button type="button" class="btn btn_blue" >승인하기</button>
            <button type="button" class="btn btn_red" >승인거절</button>
            </span>
        </div>

        <div class="box3">
            <div class="flex w100 flexwrap">
                <p class="sub">이벤트 기간 <span class="txt_bold">2022-10-01 ~ 2022-11-30</span> <br class="visible-md2"/>
                    요청일 <span class="txt_bold">2022-10-01</span><br class="visible-md2"/>
                    최종수정일 <span class="txt_bold">2022-10-31</span>                    </p>
                <span>
            <button type="button" class="btn btn_line2" >진행예정</button>
            <button type="button" class="btn btn_redline2" >승인대기</button></span>
            </div>
            <p class="title">제목입니다.</p>
            <div class="cont">
            <div class="editor">
                <textarea class="w100" readonly>내용입니다</textarea>
            </div>
            </div>
            <div>
                <label>대표이미지</label>
                <div class="thumb_img" style="background-image: url(../img/common/noimg2.png)"></div>
                <br>
                <label>등록이미지</label>
                <div id="visual">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="../img/common/noimg2.png" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="../img/common/noimg2.png" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <div class="answer">
                <div><!--거절완료시-->
                    <p class="txt_bold">승인거절 사유 2023-00-00</p>
                    <div class="reply">
                        <p>이러한 사유로 거절.</p>
                    </div><!--거절완료시-->
                    <p class="txt_bold">승인 메모(최고관리자) 2023-00-00</p>
                    <div class="reply">
                        <p>담당자랑 통화완료함.</p>
                    </div>

                </div>
                <div class="rqselect">
                    <label>메모 선택</label>
                    <select name="">
                        <option value="">거절 사유</option>
                        <option value="">승인 메모</option>
                    </select>
                </div>
                <div class="editor">
                    <label>거절 사유|승인 메모</label>
                    <textarea placeholder="내용을 입력하세요" class="w100"></textarea><!--에디터-->
                    <button type="button" class="btn btn_red">등록</button>
                </div>
            </div>
        </div>

        <div class="box3">
            <p class="title">신청 문의 내역</p>

            <select name="search">
                <option value="">전체</option>
                <option value="">신청</option>
                <option value="">문의</option>
            </select>
            <div class="table adm">
                <table>
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>유형</th>
                        <th>성명</th>
                        <th>사상체질</th>
                        <th>연락처</th>
                        <th>내용</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>신청</td>
                        <td>김유신</td>
                        <td>없음</td>
                        <td>010-0000-0000</td>
                        <td>내용</td>
                        <td><button type="button" class="btn btn_redline" data-toggle="modal" data-target="#eventmodal01">보기</button></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>문의</td>
                        <td>김유신</td>
                        <td>소양인</td>
                        <td>010-0000-0000</td>
                        <td>내용</td>
                        <td><button type="button" class="btn btn_redline" data-toggle="modal" data-target="#eventmodal01">보기</button></td>
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


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 0,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>