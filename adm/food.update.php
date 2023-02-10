<?php
$pid = "a_foodupd";
include_once("../include/header.php");
//ADM 질병음식 등록
?>
    <section class="foodupd">
        <div class="panel">
            <label class="title">질병명</label><input type="text" placeholder="질병명을 입력하세요" class="title" />
            <span>
            <button type="button" class="btn btn_whiteline"  onclick="location.href='../adm/food.php'">목록</button>
            <button type="button" class="btn btn_red">등록</button>
            </span>
        </div>
        <div class="box3">
            <p class="name">음식 설명</p>
            <p class="line"><label>카테고리</label><input type="text" placeholder="음식에 대한 설명을 입력하세요."/></p>
            <p class="name">질병에 알맞는 음식</p>
            <div>
                <div class="newpic">
                    <div class="newpic-upload">
                        <div class="newpic-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="newpic-preview">
                            <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                            </div>
                        </div>
                    </div>
                    <input type="text" placeholder="음식명을 입력하세요."/>
                    <div class="flex">
                        <button type="button" class="btn btn_whiteline" >삭제</button>
                        <button type="button" class="btn btn_redline">추가</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>