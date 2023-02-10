<?php
$pid = "a_noticeupd";
include_once("../include/header.php");
//ADM 공지 등록
?>

    <section class="noticeupd">
        <div class="panel">
            <span>
            <button type="button" class="btn btn_whiteline"  onclick="location.href='./notice.php'">목록</button>
            <button type="button" class="btn btn_red" >등록</button>
            </span>
        </div>

        <div class="box3">
            <div class="select">
                <label>노출 구분</label><select name="">
                    <option value="">전체</option>
                    <option value="">APP</option>
                    <option value="">한의원</option>
                </select>
            </div>
            <input type="text" placeholder="제목을 입력하세요"/>
            <div class="editor">
                <textarea placeholder="내용을 입력하세요" class="w100"></textarea><!--에디터-->
            </div>
            <dl class="file_wrap">
                <dd><a class="btn btn_black">파일첨부</a> 파일을 선택하세요..</dd>
                <a class="btn btn_line">추가</a>
            </dl>
        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>