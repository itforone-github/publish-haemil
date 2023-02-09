<?php
$pid = "a_noticeupd";
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
                <p>노출 구분 <span class="txt_red">전체</span></p>
            </div>
            <p class="title txt_red">제목입니다.</p>
            <div class="editor">
                <textarea class="w100" readonly></textarea>
            </div>
            <div>
                <label>첨부 파일</label>
                <p class="download"><a href="#"><i class="fas fa-folder-download"></i> 첨부파일1.hwp</a></p>
            </div>
        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>