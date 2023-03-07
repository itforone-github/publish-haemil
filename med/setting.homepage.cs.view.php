<?php
$pid = "setting_homepage";
include_once("../include/header.php");
//5.8	홈페이지 제작·관리
?>

    <section class="latest flex">
        <div class="cs_view">
            <div class="area_top">
                <h3>CS 접수 상세</h3>
                <span class="btn_wrap">
                <button type="button" class="btn btn_white btn_sdw" onclick="location.href='../med/setting.homepage.cs.php'">목록</button>
                <button type="button" class="btn btn_gray btn_sdw">삭제</button>
                <button type="button" class="btn btn_red btn_sdw" onclick="location.href='../med/setting.homepage.cs.update.php'">수정</button>
                </span>
            </div>
            <div class="box2">
                <div class="view_info">
                    <p class="sub">구분 <span class="txt_bold">홈페이지</span> 작성일 <span class="txt_bold">2023-00-00</span>
                            요청자 <span class="txt_bold">유진한의원</span></p>
                </div>

                <div class="view_title">
                    <strong>접수완료</strong> 팝업수정부탁드립니다!
                </div>
                <dl>
                    <dt>문의내용</dt>
                    <dd>
                    봄철 이벤트 삭제 부탁드리고~
                    첨부해드리는 데이터 새로 팝업 하나 올려주시면 감사하겠습니다~
                    </dd>
                </dl>
                <dl class="file">
                    <dt>첨부파일</dt>
                    <dd class="download">
                        <p><a href="#"><i class="fas fa-folder-download"></i> 첨부파일1.hwp</a></p>
                        <p><a href="#"><i class="fas fa-folder-download"></i> 첨부이미지1.jpg</a></p>
                    </dd>
                </dl>

            </div>
        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>