<?php
$pid = "sign_up";
include_once("../include/header.php");
//환자메인
?>

  <!--1.2 회원가입-->
  <div class="wrap_bg">
    <div class="mb_wrap">

      <div class="box2">
        <h1><img src="../img/common/logo_w.svg" alt="해밀한의원 원외탕전실"><span>회원가입</span></h1>


        <form>
          <div class="sign_form">
            <div class="form_wrap">
              <div>
                <input type="text" placeholder="아이디">
                <input type="password" placeholder="비밀번호">
                <input type="password" placeholder="비밀번호 확인">
              </div>
              <div>
                <input type="email" placeholder="이메일">
                <input type="text" placeholder="직장/한의원명">
                <input type="text" placeholder="업태">
              </div>
              <div>
                <input type="text" placeholder="우편번호">
                <input type="text" placeholder="사업자주소">
                <!--우편번호/자업자주소 필드 클릭시 우편번호 찾기-->
                <input type="text" placeholder="상세주소">
              </div>
            </div>
            <div class="form_wrap">
              <div>
                <input type="text" placeholder="성명">
                <input type="text" placeholder="휴대폰번호">
                <input type="date" placeholder="생년월일">
              </div>
              <div>
                <input type="text" placeholder="사업자등록번호">
                <input type="text" placeholder="대표자명">
                <input type="text" placeholder="대표전화">
              </div>
              <div>
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
            <div class="btn_wrap">
              <a href="login.php" class="btn btn_sdw btn_red">회원가입요청</a>
              <a href="" class="btn btn_sdw btn_gray">최소하기</a>
            </div>
          </div>
        </form>




      </div>

    </div>
  </div>

<!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>
