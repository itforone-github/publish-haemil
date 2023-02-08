<?php
$pid = "a_productupd";
include_once("../include/header.php");
//ADM 상품 등록
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
            <p class="line"><label>선택</label><select><option>그룹</option><option>개별</option></select></p>
            <!--그룹시 노출-->
            <p class="line group"><span class="select"><input type="checkbox" id="group2-1" name="group2"/><label for="group2-1">기본</label>
                                 <input type="checkbox" id="group2-2" name="group2"/><label for="group2-2">하늘체</label></span></p>
            <!--개별시 노출-->
            <p class="line indiv"><label>개별 한의원</label><input type="text"  placeholder="한의원명을 입력하세요"/>
                                <button type="button" class="btn_whiteline" data-toggle="modal" data-target="#productupmodal01">검색</button></p>
            <!--노출 한의원 개별 설정-->
            <div class="price">
                <p class="name">ㅇㅇ한의원 가격 정보</p>
                <p class="line"><label>판매가</label><input type="text" placeholder="판매가를 입력하세요"/><button type="button" class="btn_whiteline">옵션 추가</button></p>
                <p class="name">옵션 정보</p>
                <p class="line"><label>옵션명</label><input type="text" placeholder="옵션명을 입력하세요"/>
                    <br class="visible-md2"/><label>추가 가격</label><input type="text" placeholder="추가 가격을 입력하세요"/>
                    <button type="button" class="btn_whiteline"><i class="fa-solid fa-xmark"></i></button></p>
            </div>
            <p class="name">가격 정보</p>
            <p class="line"><label>판매가</label><input type="text" placeholder="판매가를 입력하세요"/><button type="button" class="btn_whiteline">옵션 추가</button></p>
            <p class="name">옵션 정보</p>
            <p class="line"><label>옵션명</label><input type="text" placeholder="옵션명을 입력하세요"/>
                            <br class="visible-md2"/><label>추가 가격</label><input type="text" placeholder="추가 가격을 입력하세요"/>
                            <button type="button" class="btn_whiteline"><i class="fa-solid fa-xmark"></i></button></p>
            <p class="name">처방 정보</p>
            <p class="line"><label>약재명</label><input type="text" placeholder="약재명을 입력하세요"/>
                            <br class="visible-md2"/><label>원산지</label><input type="text" placeholder="원산지를 입력하세요"/>
                            <br class="visible-lg2"/><label>약재량</label><input type="text" placeholder="약재량을 입력하세요"/>
                            <button type="button" class="btn_whiteline">구성 추가</button></p>
            <p class="line"><label>약재명</label><input type="text" placeholder="약재명을 입력하세요"/>
                            <br class="visible-md2"/><label>원산지</label><input type="text" placeholder="원산지를 입력하세요"/>
                            <br class="visible-lg2"/><label>약재량</label><input type="text" placeholder="약재량을 입력하세요"/>
                            <button type="button" class="btn_whiteline"><i class="fa-solid fa-xmark"></i></button></p>
            <p class="name">상품 정보</p>
            <p class="line"><label>포장 방법</label><select class="st-sm"><option>환/ea</option><option>g/ea</option><option>개/상자</option><option>팩/ea</option></select>
                            <input type="text" placeholder="0" class="ip-sm"/><label>환</label><input type="text" placeholder="0" class="ip-sm"/><label>ea</label>
                            <br class="visible-md2"/><input type="text" placeholder="포장 방법을 입력하세요"/></p>
            <p class="name">배송 정보</p>
            <p class="line"><label>배송 비용</label><select class="st-sm"><option>유료</option><option>무료</option></select>
                            <input type="text" placeholder="배송비를 입력하세요"/>
                            <br class="visible-md2"/><input type="text" placeholder="배송 안내 예) 주문 후 2~3일 내"/></p>
            <p class="name">구매 분류</p>
            <p class="line"><label>처방 상태</label><input type="radio" id="select1-1" name="select1" checked/><label for="select1-1">처방가능</label>
                                 <input type="radio" id="select1-2" name="select1"/><label for="select1-2">처방불가</label></p>
            <p class="line"><label>노출 상태</label><input type="radio" id="select2-1" name="select2" checked/><label for="select2-1">노출</label>
                                 <input type="radio" id="select2-2" name="select2"/><label for="select2-2">노출안함</label></p>
            <p class="line"><label>결제 수단</label><input type="checkbox" id="select3-1" name="select3" /><label for="select3-1">카드</label>
                                 <input type="checkbox" id="select3-2" name="select3"/><label for="select3-2">현금</label></p>
            <div class="editor">
                <!--스마트 에디터 설치-->
                <textarea placeholder="상세 설명을 작성하세요"></textarea>
            </div>
            <p class="name">사진 등록</p>
            <div> <!--기본 5개-->
                <div class="newpic-upload">
                    <div class="newpic-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="newpic-preview">
                        <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                        </div>
                    </div>
                </div>
                <div class="newpic-upload">
                    <div class="newpic-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="newpic-preview">
                        <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                        </div>
                    </div>
                </div>
                <div class="newpic-upload">
                    <div class="newpic-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="newpic-preview">
                        <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                        </div>
                    </div>
                </div>
                <div class="newpic-upload">
                    <div class="newpic-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="newpic-preview">
                        <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                        </div>
                    </div>
                </div>
                <div class="newpic-upload">
                    <div class="newpic-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="newpic-preview">
                        <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>