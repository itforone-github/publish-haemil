<?php
$pid = "a_noticeupd";
include_once("../include/header.php");
//ADM 공지 등록
?>

    <section class="noticeupd">
        <div class="panel">
            <span>
            <button type="button" class="btn btn_whiteline"  onclick="location.href='./notice.php'">목록</button>
            <button type="button" class="btn btn_red" >등록하기</button>
            </span>
        </div>

        <div class="box3">
            <div class="select">
                <label>노출 구분</label><select name="search">
                    <option value="">전체</option>
                    <option value="">APP</option>
                    <option value="">한의원</option>
                </select>
            </div>
            <input type="text" placeholder="제목을 입력하세요" class="w100"/>
            <div class="editor">
                <textarea placeholder="내용을 입력하세요" class="w100"></textarea>
            </div>
            <div class="flex jc-sb">
                <div class="filebox">
                    <label for="file">파일찾기</label>
                    <input type="file" id="file"/>
                    <input class="upload-name" value="첨부파일" placeholder="첨부파일"/>
                </div>
                <div>
                    <button type="button" class="btn btn_line btn_h40">삭제</button>
                    <button type="button" class="btn btn_line btn_h40">추가</button>
                </div>
            </div>
            <div class="flex jc-sb">
                <div class="filebox">
                    <label for="file">파일찾기</label>
                    <input type="file" id="file">
                    <input class="upload-name" value="첨부파일" placeholder="첨부파일">
                </div>
                <div>
                    <button type="button" class="btn btn_line btn_h40">삭제</button>
                </div>
            </div>
        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>