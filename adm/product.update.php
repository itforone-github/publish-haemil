<?php
$pid = "a_productupd";
include_once("../include/header.php");
//ADM 상품 관리
?>

    <section class="productupd">
        <div class="panel">
            <p>총 <span class="red">4</span>개 </p>
            <div>
                <select name="search">
                    <option value="">선택</option>
                </select>
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

            </div>
            <button type="button" class="btn btn_red">등록하기</button>
        </div>
        <div class="box3">

        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>