<?php
$pid = "px_prescribe4";
include_once("../include/header.php");
//	약속 처방재 > 주문
?>

    <section class="p_coded order">
        <div class="area_top">
            <div class="btn_wrap">
                <a class="btn btn_sdw btn_mini btn_white">목록</a>
            </div>
        </div>
        <div class="box2">
            <div class="table">
                <table>
                    <thead>
                    </thead>
                    <tr>
                        <th colspan="2">주문상품</th>
                        <th>수량</th>
                        <th>상품금액</th>
                    </tr>
                    <tbody>
                    <tr>
                        <td><div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div></td>
                        <td>몸앤장 탕박스</td>
                        <td>1개</td>
                        <td>10,000원</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="px pre1">
        <div class="box2">
            <div class="box_title bg_red">
                <strong>배송 정보</strong>
                <div class="title_btn">
                    <button type="button" class="btn btn_white slideup2">닫기</button>
                </div>
            </div>
            <div class="preform slideform2">
                <div class="flex">
                    <div>
                        <h6>주문자</h6>
                        <p><label>성함</label><input type="text" placeholder="성함"/></p>
                        <p><label>우편번호</label><input type="text" placeholder="우편번호"/></p>
                        <p><label>기본주소</label><input type="text" placeholder="기본주소"/></p>
                        <p><label>상세주소</label><input type="text" placeholder="상세주소"/></p>
                        <p><label>전화번호</label><input type="text" placeholder="전화번호"/></p>
                    </div>
                    <div>
                        <h6>받는 사람
                            <span class="circle">
                                <input type="checkbox" id="check1" name="type" /> <label for="check1"> 한의원으로 배송</label>
                                <input type="checkbox" id="check2" name="type" /> <label for="check2"> 환자 정보와 동일</label>
                            </span></h6>
                        <p><label>성함</label><input type="text" placeholder="성함"/></p>
                        <p><label>우편번호</label><input type="text" placeholder="우편번호"/></p>
                        <p><label>기본주소</label><input type="text" placeholder="기본주소"/></p>
                        <p><label>상세주소</label><input type="text" placeholder="상세주소"/></p>
                        <p><label>전화번호</label><input type="text" placeholder="전화번호"/></p>
                        <p><label>배송 요청사항</label><input type="text" placeholder="배송 요청사항"/></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px pre1">
        <div class="box5">
            <dl>
                <dt><strong>상품금액</strong> <span>0 원</span></dt>
                <dt><strong>배송비</strong> <span>0 원</span></dt>
                <dt><strong>총금액</strong> <span class="yellow">0 원</span></span></dt>
            </dl>
        </div>
        <a class="btn w100 btn_red btn_order">결제하기</a>
    </section>
    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>