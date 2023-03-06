<?php
$pid = "mall_cart";
include_once("../include/header.php");
//4.02	한의학몰 > 장바구니
?>
    <section class="ready"></section>
    <section class="m_cart ready_page">
        <div class="panel">
            <p>총 <span class="red">4</span>개 </p>
            <div>

                <select name="search">
                    <option value="">선택</option>
                </select>
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

            </div>
            <span>
            <button type="button" class="btn btn_gray2 btn_sdw"  >비우기</button>
            <button type="button" class="btn btn_white btn_sdw" >선택 삭제</button>
            <button type="button" class="btn btn_red btn_sdw"  >선택 상품 주문하기</button>
            </span>
        </div>
        <div class="list">
            <div class="box2">
                <div class="table">
                    <table class="">
                        <colgroup>
                            <col width="20px"/>
                            <col width="20px"/>
                            <col width="120px"/>
                            <col width=""/>
                            <col width=""/>
                            <col width="100px"/>
                            <col width="100px"/>
                            <col width="100px"/>
                            <col width="120px"/>
                        </colgroup>
                        <thead>
                        <tr>
                            <th class="" scope="col">
                                <input type="checkbox" name="chkall" value="1" id="chkall"/>
                                <label for="chkall">　</label>
                            </th>
                            <th class="">번호</th>
                            <th class="">담은 날짜</th>
                            <th class="">제품 이미지</th>
                            <th class="">제품명</th>
                            <th class="">가격</th>
                            <th class="">수량</th>
                            <th class="">금액</th>
                            <th class=""></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="" scope="col">
                                <input type="checkbox" name="chk[]" value="0" id="chk_0" />
                            </td>
                            <td class="">1</td>
                            <td class="">2023-02-08</td>
                            <td class=""><div class="img thumb_img"><img src="../img/common/noimg2.png"></div></td>
                            <td class="">밀환 - 앵두대 [30원/g]</td>
                            <td class="">0원</td>
                            <td class="">2</td>
                            <td class="">0원</td>
                            <td class="">
                                <button type="button" class="btn btn_redline">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="" scope="col">
                                <input type="checkbox" name="chk[]" value="0" id="chk_0" />
                            </td>
                            <td class="">1</td>
                            <td class="">2023-02-08</td>
                            <td class=""><div class="img thumb_img"><img src="../img/common/noimg2.png"></div></td>
                            <td class="">밀환 - 앵두대 [30원/g]</td>
                            <td class="">0원</td>
                            <td class="">2</td>
                            <td class="">0원</td>
                            <td class="">
                                <button type="button" class="btn btn_redline">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="" scope="col">
                                <input type="checkbox" name="chk[]" value="0" id="chk_0" />
                            </td>
                            <td class="">1</td>
                            <td class="">2023-02-08</td>
                            <td class=""><div class="img thumb_img"><img src="../img/common/noimg2.png"></div></td>
                            <td class="">밀환 - 앵두대 [30원/g]</td>
                            <td class="">0원</td>
                            <td class="">2</td>
                            <td class="">0원</td>
                            <td class="">
                                <button type="button" class="btn btn_redline">삭제</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="" scope="col">
                                <input type="checkbox" name="chk[]" value="0" id="chk_0" />
                            </td>
                            <td class="">1</td>
                            <td class="">2023-02-08</td>
                            <td class=""><div class="img thumb_img"><img src="../img/common/noimg2.png"></div></td>
                            <td class="">밀환 - 앵두대 [30원/g]</td>
                            <td class="">0원</td>
                            <td class="">2</td>
                            <td class="">0원</td>
                            <td class="">
                                <button type="button" class="btn btn_redline">삭제</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mc_total">
                    <div class="price">
                        상품금액 0원 + 배송비 3,5800원 = 총 금액 <strong>3,500</strong>원
                    </div>
                    <div class="btn_wrap">
                        <button class="btn btn_black">선택 제품 처방하기</button>
                        <button class="btn btn_red">선택 제품 처방하기</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>