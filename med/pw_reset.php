<?php
$pid = "pw_reset";
include_once("../include/header.php");
//비밀번호 재설정
?>

<!--1.3 아이디/비밀번호 찾기-->
<div class="wrap_bg">
  <div class="mb_wrap">

    <div class="box2">
      <h1><img src="../img/common/logo_w.svg" alt="해밀한의원 원외탕전실"/><span>비밀번호 재설정</span></h1>


      <form>
        <div class="find_form">
          <div class="form_wrap">

                    <!--비밀번호찾기-->
                    <input type="text" placeholder="비밀번호 재설정"/>
                    <input type="text" placeholder="비밀번호 재설정 확인"/>

                    <div class="btn_wrap">
                        <a href="login.php" class="btn btn_large btn_sdw btn_red">비밀번호 재설정</a>
                    </div>

            </div>
          </div>


        </div>
      </form>




    </div>

  </div>
</div>

<script type="text/javascript">
    function message()
    {
        swal.fire({
            html:'회원님의 정보와 일치하는 아이디는<br> <strong>○○○○</strong>입니다.',
            confirmButtonText : '확인'
        });
    };

</script>


<!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>