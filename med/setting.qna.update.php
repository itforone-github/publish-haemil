<?php
$pid = "setting_qna";
include_once("../include/header.php");
//5.7.2	요청문의하기 > 등록
?>


    <section class="s_qna board_form">
        <div class="area_top">
            <div>
            </div>
            <span class="btn_wrap">
                <button type="button" class="btn btn_white btn_sdw" onclick="location.href='../med/setting.qna.php'">목록</button>
                <button type="button" class="btn btn_red btn_sdw">등록</button>
            </span>
        </div>
        <div class="form">
            <div class="box2">
                <div>
                    <select>
                        <option>합배송 문의</option>
                        <option>포인트 결제 관련</option>
                        <option>이벤트 내용 수정</option>
                        <option>오류 문의</option>
                    </select>
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