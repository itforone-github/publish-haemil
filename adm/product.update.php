<?php
$pid = "a_productupd";
include_once("../include/header.php");
//ADM 상품 관리
?>

    <section class="productupd">
        <div class="panel">
            <label class="title">상품명</label><input type="text" placeholder="상품명을 입력하세요" class="title" />
            <button type="button" class="btn btn_red">등록하기</button>
        </div>
        <div class="box3">
            <p class="name">기본 분류</p>
            <p class="line"><label>카테고리</label><select><option>기획전</option><option>빈용방</option></select></p>
            <p class="name">그룹 분류</p>
            <p class="line"><span class="select"><input type="radio" id="select" name="group"/><label for="select"/>그룹</label>
                            <input type="radio" id="select2" name="group"/><label for="select2">개별</label></span></p>
            <p class="line">            <label>카테고리</label><select><option>기획전</option><option>빈용방</option></select></p>
            <p class="name">가격 정보</p>
            <p class="line"><label>상품명</label><input type="text" placeholder="상품명을 입력하세요"/><button type="button" class="btn_whiteline">옵션 추가</button></p>
            <p class="name">옵션 정보</p>
            <p class="line"><label>옵션명</label><input type="text" placeholder="옵션명을 입력하세요"/>
                            <br class="visible-md2"/><label>추가 가격</label><input type="text" placeholder="추가 가격을 입력하세요"/>
                            <button type="button" class="btn_whiteline"><i class="fa-solid fa-xmark"></i></button></p>
            <p class="name">처방 정보</p>
            <p class="line"><label>약재명</label><input type="text" placeholder="약재명을 입력하세요"/>
                            <br class="visible-md2"/><label>원산지</label><input type="text" placeholder="원산지을 입력하세요"/>
                            <br class="visible-md2"/><label>원산지</label><input type="text" placeholder="원산지를 입력하세요"/> <button type="button" class="btn_whiteline">구성 추가</button></p>
            <p class="line"><label>약재명</label><input type="text" placeholder="약재명을 입력하세요"/>
                            <br class="visible-md2"/><label>원산지</label><input type="text" placeholder="원산지을 입력하세요"/>
                            <br class="visible-md2"/><label>원산지</label><input type="text" placeholder="원산지를 입력하세요"/>
                            <button type="button" class="btn_whiteline"><i class="fa-solid fa-xmark"></i></button></p>
            <p class="name">상품 정보</p>
            <p class="line"><label>포장 방법</label><select class="st-sm"><option>환/ea</option><option>g/ea</option><option>개/상자</option><option>팩/ea</option></select>
                            <input type="text" placeholder="0" class="ip-sm"/><label>환</label><input type="text" placeholder="0" class="ip-sm"/><label>ea</label>
                            <br class="visible-md2"/><input type="text" placeholder="포장 방법을 입력하세요"/></p>
        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>