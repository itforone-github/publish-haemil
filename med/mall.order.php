<?php
$pid = "mall_order";
include_once("../include/header.php");
//4.03	주문 배송 조회
?>
    <section class="ready"></section>
    <section class="order ready_page">
        <div class="panel">
            <p>총 <span class="red">4</span>개 </p>
            <div>
                <input type="date"/>
                <p>~</p>
                <input type="date"/>
            </div>
            <div>
                <span class="select"><input type="radio" id="select1" name="select" class="red" checked/><label for="select1">전체</label>
                <input type="radio" id="select2" name="select" class="red"/><label for="select2">오늘</label>
                <input type="radio" id="select3" name="select" class="red"/><label for="select3">이번주</label>
                <input type="radio" id="select4" name="select" class="red"/><label for="select4">이번달</label></span>
            </div>
            <div>

                <select name="search">
                    <option value="">선택</option>
                </select>
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

            </div>
            <span>
            <button type="button" class="btn btn_gray2 btn_sdw"  >엑셀 다운</button>
            <button type="button" class="btn btn_whiteline" >선택 삭제</button>
            </span>
        </div>
        <div class="tagbox box2">
            <p><strong>상태 분류</strong></p>
            <select>
                <option>전체</option>
                <option>주문접수</option>
                <option>작업중</option>
                <option>배송중</option>
                <option>배송완료</option>
                <option>주문취소</option>
            </select>
            <!--<p><a><span class="tag active">전체</span></a></p>
            <p><a><span class="tag">주문접수</span></a></p>
            <p><a><span class="tag">작업중</span></a></p>
            <p><a><span class="tag">배송중</span></a></p>
            <p><a><span class="tag">배송완료</span></a></p>
            <p><a><span class="tag">주문취소</span></a></p>-->
            <p><strong>결제 분류</strong></p>
            <select>
                <option>전체</option>
                <option>현금결제</option>
                <option>카드결제</option>
                <option>가상계좌</option>
                <option>전액포인트</option>
            </select>
            <!--<p><a><span class="tag active">전체</span></a></p>
            <p><a><span class="tag">현금결제</span></a></p>
            <p><a><span class="tag">카드결제</span></a></p>
            <p><a><span class="tag">가상계좌</span></a></p>
            <p><a><span class="tag">전액포인트</span></a></p>-->
            <p class="txt_red">※ 약재실에서 조제지시서를 출력 시 주문취소요청이 불가능합니다.</p>
        </div>
        <div class="list">
            <div class="box2">
                <div class="table">
                    <table class="">
                        <colgroup>
                            <col width="20px"/>
                            <col width=""/>
                            <col width=""/>
                            <col width=""/>
                            <col width=""/>
                            <col width=""/>
                            <col width=""/>
                            <col width=""/>
                            <col width=""/>
                            <col width="60px"/>
                            <col width="50px"/>
                            <col width="20px"/>
                        </colgroup>
                        <thead>
                        <tr>
                            <th class="" scope="col" rowspan="2">
                                <input type="checkbox" name="chkall" value="1" id="chkall"/>
                                <label for="chkall">　</label>
                            </th>
                            <th class="" rowspan="2">번호</th>
                            <th class="" rowspan="2">주문일</th>
                            <th class="" rowspan="2">업체명</th>
                            <th class="" rowspan="2">주문상태</th>
                            <th class="" rowspan="1">주문번호</th>
                            <th class="" colspan="1">성함</th>
                            <th class="" colspan="1">배송지</th>
                            <th class="" rowspan="2">주문수량</th>
                            <th class="" rowspan="2">결제수단</th>
                            <th class="" rowspan="2">주문금액</th>
                            <th class="" rowspan="2">관리</th>
                        </tr>
                        <tr>
                            <th class="" colspan="1">상품명</th>
                            <th class="" colspan="1">연락처</th>
                            <th class="" colspan="1">배송정보</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="" scope="col" rowspan="2">
                                <input type="checkbox" name="chk[]" value="0" id="chk_0" />
                            </td>
                            <td class="" rowspan="2">8862</td>
                            <td class="" rowspan="2">23-02-08</td>
                            <td class="" rowspan="2">유신한의원</td>

                            <td class="" rowspan="2">
                                주문접수
                            </td>
                            <td class="" colspan="1"><span class="txt_blue txt_under"><a>202302081123-1</a></span></td>
                            <td class="" colspan="1">유신한의원</td>
                            <td class="" colspan="1">부산광역시 기장군 정관읍 용수공단 1길</td>
                            <td scope="col" rowspan="2" class="">1</td>
                            <td class="" rowspan="2">현금결제</td>
                            <td class="" rowspan="2">119,400원</td>
                            <td class="" rowspan="2">
                                <button type="button" class="btn btn_whiteline">보기</button> <button type="button" class="btn btn_redline">취소</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="" rowspan="1">쑥뜸</td>
                            <td class="" rowspan="1">010-0000-0000</td>
                            <td class="" rowspan="1">
                                <div class="delivery text_center">
                                    <p class="txt_under"><a>CJ택배 151351581354</a></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="" scope="col" rowspan="2">
                                <input type="checkbox" name="chk[]" value="0" id="chk_0" />
                            </td>
                            <td class="" rowspan="2">8862</td>
                            <td class="" rowspan="2">23-02-08</td>
                            <td class="" rowspan="2">유신한의원</td>

                            <td class="" rowspan="2">
                                주문접수
                            </td>
                            <td class="" colspan="1"><span class="txt_blue txt_under"><a>202302081123-1</a></span></td>
                            <td class="" colspan="1">유신한의원</td>
                            <td class="" colspan="1">부산광역시 기장군 정관읍 용수공단 1길</td>
                            <td scope="col" rowspan="2" class="">1</td>
                            <td class="" rowspan="2">현금결제</td>
                            <td class="" rowspan="2">119,400원</td>
                            <td class="" rowspan="2">
                                <button type="button" class="btn btn_whiteline">보기</button> <button type="button" class="btn btn_redline">취소</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="" rowspan="1">쑥뜸</td>
                            <td class="" rowspan="1">010-0000-0000</td>
                            <td class="" rowspan="1">
                                <div class="delivery text_center">
                                    <p class="txt_under"><a>CJ택배 151351581354</a></p>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="b-pagination-outer ">
                    <ul id="border-pagination">
                        <li><a class="" href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>