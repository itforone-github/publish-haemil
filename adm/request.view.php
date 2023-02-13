<?php
$pid = "a_request";
include_once("../include/header.php");
//ADM 공지 등록
?>

    <section class="request view">
        <div class="panel">
            <span>
            <button type="button" class="btn btn_whiteline"  onclick="location.href='./request.php'">목록</button>
            <button type="button" class="btn btn_blue" >수정</button>
            <button type="button" class="btn btn_red" >삭제</button>
            </span>
        </div>

        <div class="box3">
            <div>
                <p class="sub">구분 <span class="txt_bold">한의원</span> 작성일 <span class="txt_bold">2023-00-00</span>
                요청자 <span class="txt_bold">유진한의원</span> 아이디 <span class="txt_bold">usin1</span> 연락처 <span class="txt_bold">010-0000-0000</span></p>
            </div>
            <p class="title">제목입니다.</p>
            <div class="cont">
            <div class="editor">
                <textarea class="w100" readonly>내용입니다</textarea>
            </div>
            </div>
            <div>
                <label>첨부 파일</label>
                <p class="download"><a href="#"><i class="fas fa-folder-download"></i> 첨부파일1.hwp</a></p>
            </div>
            <div class="answer">
                <div>
                    <p class="txt_bold">답변일 2023-00-00</p>
                    <div class="reply">
                        <p>답변 내용입니다.</p>
                    </div>

                </div>
                <div class="rqselect">
                    <label>답변하기</label>
                    <select name="">
                        <option value="">처리상태</option>
                        <option value="">처리중</option>
                        <option value="">처리완료</option>
                    </select>
                    <button type="button" class="btn btn_red btn_h40">저장</button>
                </div>
                <div class="editor">
                    <label>답변 작성</label>
                    <textarea placeholder="내용을 입력하세요" class="w100"></textarea><!--에디터-->
                    <button type="button" class="btn btn_red">등록</button>
                </div>
            </div>
        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>