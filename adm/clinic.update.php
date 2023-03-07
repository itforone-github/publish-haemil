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
                <div class="group_select">
                    <label>그룹</label>
                    <select name="search">
                        <option value="">그룹 선택</option>
                    </select>
                </div>
                <label>한의원명</label><input type="text" placeholder="한의원명"/>
                <label>사업자등록번호</label><input type="text" placeholder="사업자등록번호"/>
                <label>대표자명</label><input type="text" placeholder="대표자명"/>
                <label>원장아이디(주계정)</label><input type="text" placeholder="원장아이디(주계정)"/>
            </div>
            <div>
                <label>기본주소</label><input type="text" placeholder="기본주소"/>
                <label>상세주소</label><input type="text" placeholder="상세주소"/>
                <label>업태</label><input type="text" placeholder="업태"/>
                <label>대표전화</label><input type="text" placeholder="대표전화"/>
                <label>팩스번호</label><input type="text" placeholder="팩스번호"/>
            </div>
            <div>
                <label>이메일</label><input type="email" placeholder="이메일"/>
                <dl class="file_wrap">
                    <dt>사업자등록증(면허증)</dt>
                    <dd><a class="btn btn_black">파일첨부</a> 파일을 선택하세요..</dd>
                </dl>
                <dl class="file_wrap">
                    <dt>원외탕전실 계약서</dt>
                    <dd><a class="btn btn_black">파일첨부</a> 파일을 선택하세요..</dd>
                </dl>
                <a class="btn btn_large btn_red">계약서 파일 다운로드</a>

            </div>
        </div>
    </div>

    <!--수정시 직원계정목록-->
    <div class="box3">

        <div class="table adm">
            <table>
                <thead>
                <tr>
                    <th><input type="checkbox" name="checkbox"></th>
                    <th>No.</th>
                    <th>아이디</th>
                    <th>담당자</th>
                    <th>연락처</th>
                    <th>권한</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" name="checkbox"></td>
                    <td>1</td>
                    <td>yoshin01</td>
                    <td>김유신</td>
                    <td>010-0000-0000</td>
                    <td>최고관리자</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
    <!--//수정시 직원계정목록 -->

</section>


<!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>
