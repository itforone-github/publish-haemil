<?php
$pid = "a_clinicmem";
include_once("../include/header.php");
//ADM 한의원 직원관리
?>


<section class="clinicmem">
    <div class="panel">
        <button type="button" class="btn btn_whiteline"  onclick="location.href='./clinic.member.php'">목록</button>
        <button type="button" class="btn btn_red" >등록하기</button>
    </div>
    <div class="box3">
        <div class="flex jc-sb">
            <div>
                <label>한의원</label>
                <select name="search">
                    <option value="">한의원 선택</option>
                </select>
            </div>
        </div>
        <div class="flex jc-sb">
            <div>
                <label>담당자 성함</label><input type="text" placeholder="성함"/>
                <label>연락처</label><input type="text" placeholder="연락처"/>
            </div>
            <div>
                <label>아이디</label><input type="text" placeholder="아이디"/>
                <label>비밀번호</label><input type="text" placeholder="비밀번호"/>
            </div>
            <div>

                <label>권한</label><select name="search">
                    <option value="">권한 선택</option>
                </select>
            </div>
        </div>
    </div>
</section>


<!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>
