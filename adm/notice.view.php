<?php
$pid = "a_notice";
include_once("../include/header.php");
//ADM 공지 등록
?>

    <section class="notice view">
        <div class="panel">
            <span>
            <button type="button" class="btn btn_whiteline"  onclick="location.href='./notice.php'">목록</button>
            <button type="button" class="btn btn_blue" >수정</button>
            <button type="button" class="btn btn_red" >삭제</button>
            </span>
        </div>

        <div class="box3">
            <div>
                <p class="sub">노출 구분 <span class="txt_bold">전체</span> 작성일 <span class="txt_bold">2023-00-00</span></p>
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
        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>