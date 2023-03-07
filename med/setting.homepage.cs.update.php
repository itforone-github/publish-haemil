<?php
$pid = "setting_homepage";
include_once("../include/header.php");
//5.8	홈페이지 제작·관리
?>

    <section class="cs_update">

        <div class="panel">
            <h3>CS 접수 등록</h3>
            <span>
                <button type="button" class="btn btn_white btn_sdw" onclick="location.href='../med/px.taking.php'">목록</button>
                <button type="button" class="btn btn_red btn_sdw">등록</button>
            </span>
        </div>
        <div class="form">
            <div class="box2">
                <div>
                    <input type="text" placeholder="제목을 입력하세요." />
                    <div>
                        <!--에디터-->
                        <textarea placeholder="내용을 입력하세요."></textarea>
                    </div>
                </div>
                <div>
                    <dl class="file_wrap">
                        <dd><a class="btn btn_black">파일첨부</a> 파일을 선택하세요..</dd>
                        <a class="btn btn_line">추가</a>
                    </dl>
                </div>
            </div>
        </div>

    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>