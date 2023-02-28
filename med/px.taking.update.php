<?php
$pid = "px_taking";
include_once("../include/header.php");
//3.7.2 복용법 관리
?>


    <section class="p_taking">

        <div class="panel">
                <span>
                    <button type="button" class="btn btn_white btn_sdw" onclick="location.href='../med/px.taking.php'">목록</button>
                    <button type="button" class="btn btn_red btn_sdw">등록</button>
                </span>
        </div>
        <div class="form">
            <div class="box2">
                <div class="select_wrap">
                    <select>
                        <option value="">식전</option>
                    </select>
                    <select>
                        <option value="">10분</option>
                    </select>
                    <select>
                        <option value="">1회</option>
                    </select>
                </div>
                <div>
                    <input type="text" placeholder="복용법 제목을 입력하세요." />
                    <div>
                        <!--에디터-->
                        <textarea placeholder="복용법을 입력하세요."></textarea>
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