<?php
$pid = "setting_qna";
include_once("../include/header.php");
//5.7.3	요청문의하기 > 상세
?>

    <section class="latest s_qna">
        <div class="board_view">
            <div class="area_top">
                <h3></h3>
                <span class="btn_wrap">
                <button type="button" class="btn btn_white btn_sdw" onclick="location.href='../med/setting.qna.php'">목록</button>
                <button type="button" class="btn btn_gray btn_sdw">삭제</button>
                <button type="button" class="btn btn_red btn_sdw" onclick="location.href='../med/setting.qna.update.php'">수정</button>
                </span>
            </div>
            <div class="box2">
                <div class="view_info">
                    <p class="sub"> 작성일 <span class="txt_bold">2023-00-00</span>
                            요청자 <span class="txt_bold">유진한의원</span></p>
                </div>

                <div class="view_title">
                    <strong>접수완료</strong> 합배송 문의
                </div>
                <dl>
                    <dt>문의내용</dt>
                    <dd>
                        안녕하세요 1일자 주문 2건 합배송 부탁드립니다 .
                    </dd>
                </dl>
                <dl class="file">
                    <dt>첨부파일</dt>
                    <dd class="download">
                        <p><a href="#"><i class="fas fa-folder-download"></i> 첨부파일1.hwp</a></p>
                        <p><a href="#"><i class="fas fa-folder-download"></i> 첨부이미지1.jpg</a></p>
                    </dd>
                </dl>

                <div class="answer">
                    <div>
                        <p class="txt_bold">답변일 2023-00-00</p>
                        <div class="reply">
                            <p>답변 내용입니다.</p>
                        </div>

                    </div>
                    <div class="editor">
                        <label>답변 작성</label>
                        <textarea placeholder="내용을 입력하세요" class="w100"></textarea><!--에디터-->
                        <button type="button" class="btn btn_red">등록</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>