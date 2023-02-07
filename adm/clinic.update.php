<?php
$pid = "a_clinic";
include_once("../include/header.php");
//ADM 한의원 관리
?>


<section class="clinic">
    <div class="panel">
        <button type="button" class="btn btn_whiteline"  onclick="location.href='./clinic.php'">목록</button>
        <button type="button" class="btn btn_red" >등록하기</button>
    </div>
    <div class="box3">
        <div class="flex jc-sb">
            <div>
                <label>그룹</label><select name="search">
                    <option value="">그룹 선택</option>
                </select>
                <label>한의원명</label><input type="text" placeholder="한의원명"/>
                <label>사업자등록번호</label><input type="text" placeholder="사업자등록번호"/>
            </div>
            <div>
                <label>업태</label><input type="text" placeholder="업태"/>
                <label>대표자명</label><input type="text" placeholder="대표자명"/>
                <label>대표전화</label><input type="text" placeholder="대표전화"/>
            </div>
            <div>
                <label>대표이메일</label><input type="text" placeholder="대표이메일"/>
                <label>기본주소</label><input type="text" placeholder="기본주소"/>
                <label>상세주소</label><input type="text" placeholder="상세주소"/>
            </div>
        </div>
    </div>
</section>


<!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>