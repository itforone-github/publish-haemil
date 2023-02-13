<?php
$pid = "a_popupupd";
include_once("../include/header.php");
//ADM 팝업 등록
?>
    <section class="popupupd">
        <div class="panel">
            <label class="title">팝업제목</label><input type="text" placeholder="팝업제목을 입력하세요" class="title" />

            <span>
            <button type="button" class="btn btn_whiteline"  onclick="location.href='./popup.php'">목록</button>
            <button type="button" class="btn btn_red"  >등록</button>
            </span>
        </div>
        <div class="box3">
            <p class="name">기기 분류</p>
            <p class="line"><label>접속기기 설정</label><select><option>전체</option><option>PC</option><option>모바일</option></select></p>
            <p class="name">시간</p>
            <p class="line"><label>다시 보지 않음 시간 설정</label><input type="text" placeholder="0"/>시간</p>
            <p class="name">분류</p>
            <p class="line"><label>선택</label><select><option>공지</option><option>이벤트</option></select></p>
            <p class="name">팝업위치</p>
            <p class="line"><label>선택</label><select><option>로그인 전</option><option>로그인 후</option></select></p>
            <p class="name">시작/종료 일시</p>
            <p class="line"><label>시작일</label><input type="date" /><input type="time" /></p>
            <p class="line"><label>종료일</label><input type="date" /><input type="time" /></p>
            <p class="name">위치</p>
            <p class="line"><label>왼쪽 여백</label><input type="text" placeholder="0"/>px</p>
            <p class="line"><label>위쪽 여백</label><input type="text" placeholder="0"/>px</p>
            <p class="name">크기</p>
            <p class="line"><label>너비</label><input type="text" placeholder="0"/>px</p>
            <p class="line"><label>높이</label><input type="text" placeholder="0"/>px</p>
            <div class="editor">
                <!--스마트 에디터 설치-->
                <textarea placeholder="상세 설명을 작성하세요"></textarea>
            </div>
        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>