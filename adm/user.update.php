<?php
$pid = "a_user";
include_once("../include/header.php");
//ADM 회원 등록
?>


<section class="userupd">
    <div class="panel">
        <button type="button" class="btn btn_whiteline"  onclick="location.href='./clinic.php'">목록</button>
        <button type="button" class="btn btn_red" >등록하기</button>
    </div>
    <div class="box3">
        <div class="flex jc-sb">
            <div>
                <label>성함</label><input type="text" placeholder="성함"/>
                <label>아이디</label><input type="text" placeholder="아이디"/>
                <label>비밀번호</label><input type="password" placeholder="비밀번호"/>
            </div>
            <div>
                <label>기본주소</label><input type="text" placeholder="기본주소"/><!--클릭시 찾기 모달-->
                <label>상세주소</label><input type="text" placeholder="상세주소"/>
                <label>핸드폰번호</label><input type="text" placeholder="010-0000-0000"/>
            </div>
            <div>
                <label>OS</label><select name="search">
                    <option value="">AOS</option>
                    <option value="">iOS</option>
                </select>
            </div>
        </div>
    </div>
</section>


<!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>
