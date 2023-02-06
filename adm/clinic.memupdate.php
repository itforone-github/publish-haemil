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
                <label>그룹</label><select name="search">
                    <option value="">그룹 선택</option>
                </select>
                <label>한의원명</label><input type="text" placeholder="한의원명">
                <label>사업자등록번호</label><input type="text" placeholder="사업자등록번호">
            </div>
            <div>
                <label>업태</label><input type="text" placeholder="업태">
                <label>대표자명</label><input type="text" placeholder="대표자명">
                <label>대표전화</label><input type="text" placeholder="대표전화">
            </div>
            <div>
                <label>대표이메일</label><input type="text" placeholder="대표이메일">
                <label>기본주소</label><input type="text" placeholder="기본주소">
                <label>상세주소</label><input type="text" placeholder="상세주소">
            </div>
        </div>
        <div class="flex jc-sb">
            <div>
                <label>성함</label><input type="text" placeholder="성함">
                <label>핸드폰 번호</label><input type="text" placeholder="핸드폰 번호">
            </div>
            <div>
                <label>아이디</label><input type="text" placeholder="아이디">
                <label>비밀번호</label><input type="text" placeholder="비밀번호">
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
