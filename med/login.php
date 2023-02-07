<?php
$pid = "login";
include_once("../include/header.php");
//환자메인
?>

<!--1.1 로그인-->
<div class="wrap_bg">
  <div class="mb_wrap">
    <div class="box1">
      <h1><img src="../img/common/logo_w.svg" alt="해밀한의원 원외탕전실"/></h1>

      <div class="login_form">
        <form>
          <div class="form_wrap">
            <input type="text" placeholder="아이디"/>
            <input type="password" placeholder="비밀번호"/>
              <a href="index.php" class="btn btn_sdw btn_large btn_red">로그인</a>
          </div>

          <div class="btn_wrap">
            <a href="find_pw.php" class="btn btn_sdw btn_white2">아이디 비밀번호 찾기</a>
            <a href="sign_up.php" class="btn btn_sdw btn_black">회원 가입</a>
          </div>


        </form>
      </div>
    </div>
    <section class="login_ft">
      ※ 해밀한의원 원외탕전실에서는 개인에게 한약재를 판매하지 않으며, <br class="hidden-xs"/>
      한의사 면허를 취득한 한의사의 처방에 의한 조제 의뢰를 받고 있습니다.
    </section>
  </div>
  <div class="ft_copy">
    Copyright ©2022 haemilwon.kr
  </div>
</div>

<!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>
