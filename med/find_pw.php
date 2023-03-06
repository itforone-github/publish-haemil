<?php
$pid = "find_pw";
include_once("../include/header.php");
//환자메인
?>

<!--1.3 아이디/비밀번호 찾기-->
<div class="wrap_bg">
  <div class="mb_wrap">

    <div class="box2">
      <h1><img src="../img/common/logo_w.svg" alt="해밀한의원 원외탕전실"/><span>아이디/비밀번호 찾기</span></h1>


      <form>
        <div class="find_form">
          <div class="form_wrap">
            <div role="tabpanel">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#find_id" aria-controls="find_id" role="tab" data-toggle="tab">ID찾기</a></li>
                <li role="presentation"><a href="#find_pw" aria-controls="find_pw" role="tab" data-toggle="tab">비밀번호 찾기</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="find_id">
                    <!--아이디찾기-->
                    <input type="text" placeholder="직장/한의원명"/>
                    <input type="text" placeholder="사업자등록번호"/>

                    <div class="btn_wrap">
                        <a class="btn btn_large btn_sdw btn_red" onclick="message()">조회하기</a>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="find_pw">
                    <!--비밀번호찾기-->
                    <input type="text" placeholder="아이디"/>
                    <input type="text" placeholder="사업자등록번호"/>

                    <div class="btn_wrap">
                        <a href="pw_reset.php" class="btn btn_large btn_sdw btn_red">비밀번호 재설정</a>
                    </div>
                </div>
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