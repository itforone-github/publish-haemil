<?php
$pid = "a_order2";
include_once("../include/header.php");
//ADM 주문 배송 관리 (약속처방)
?>

    <section class="order2">
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
                    <option value="">주문번호</option>
                    <option value="">환자명</option>
                    <option value="">주문자명</option>
                    <option value="">업체명</option>
                    <option value="">상품명</option>
                </select>

                <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

            </div>
            <span>
            <button type="button" class="btn btn_gray2 btn_sdw"  >엑셀 다운</button>
            <button type="button" class="btn btn_whiteline" >엑셀 업로드</button>
            </span>
        </div>
        <div class="tagbox">
            <div>
                <p><strong>상품 분류</strong></p>
            </div>
            <div>
                <p><a><span class="tag active">전체</span></a></p>
                <p><a><span class="tag">약속처방</span></a></p>
                <p><a><span class="tag">한의학몰</span></a></p>
            </div>
            <!--div>
                <p><strong>결제 분류</strong></p>
            </div>
            <div>
                <p><a><span class="tag active">전체</span></a></p>
                <p><a><span class="tag">현금결제</span></a></p>
                <p><a><span class="tag">카드결제</span></a></p>
                <p><a><span class="tag">가상계좌</span></a></p>
                <p><a><span class="tag">전액포인트</span></a></p>
            </div-->
        </div>
        <div class="box3">
            <div  class="table adm">
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
                        <col width=""/>
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
                        <th class="" rowspan="2">업체명(원장)</th>
                        <th class="" rowspan="1">주문상태</th>
                        <th class="" rowspan="1">주문번호</th>
                        <th class="" colspan="1">환자명</th>
                        <th class="" colspan="1">배송지</th>
                        <th class="" rowspan="2">수량</th>
                        <!--th class="" rowspan="2">결제수단</th-->
                        <th class="" rowspan="2">주문금액</th>
                        <th class="" rowspan="2">관리</th>
                    </tr>
                    <tr>
                        <th class="" colspan="1">상품 분류</th>
                        <th class="" colspan="1">상품/처방명</th>
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
                        <td class="" rowspan="2">한의원(김원장)</td>
                        <td class="" rowspan="1">
                            <select class="">
                                <option value="주문접수" selected="">주문접수</option>
                                <option value="작업중">작업중</option>
                                <option value="배송중">배송중</option>
                                <option value="배송완료">배송완료</option>
                                <option value="주문취소">주문취소</option>
                            </select>
                        </td>
                        <td class="" colspan="1"><span class="txt_blue txt_under"><a>202302081123-1</a></span></td>
                        <td class="" colspan="1">김환자</td>
                        <td class="" colspan="1">부산광역시 기장군 정관읍 용수공단 1길</td>
                        <td scope="col" rowspan="2" class="">1</td>
                        <!--td class="" rowspan="2">현금결제</td-->
                        <td class="" rowspan="2">119,400원</td>
                        <td class="" rowspan="2"><button type="button" class="btn btn_whiteline">보기</button><button type="button" class="btn btn_redline">취소</button></td>
                    </tr>
                    <tr>
                        <td class="" rowspan="1">한의학몰</td>
                        <td class="" rowspan="1">쑥뜸</td>
                        <td class="" rowspan="1">010-0000-0000</td>
                        <td class="" rowspan="1">
                            <div class="flex delivery">
                            <div>
                                <select>
                                    <option value="">택배사선택</option>
                                    <option value="10054">직접배송</option>
                                    <option value="10056">CJ택배</option>
                                    <option value="10057">로젠택배</option>
                                    <option value="10058">퀵서비스</option>
                                    <option value="10059">기타(직접수령)</option>
                                    <option value="10065">우체국택배</option>
                                </select>
                            </div>
                            <div><input type="text" value="" placeholder="운송장번호를 입력해주세요.">
                            </div>
                                <button type="button"  class="btn btn_red">저장</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="" scope="col" rowspan="2">
                            <input type="checkbox" name="chk[]" value="0" id="chk_0" />
                        </td>
                        <td class="" rowspan="2">8862</td>
                        <td class="" rowspan="2">23-02-08</td>
                        <td class="" rowspan="2">한의원(김원장)</td>
                        <td class="" rowspan="1">
                            <select class="">
                                <option value="주문접수" selected="">주문접수</option>
                                <option value="작업중">작업중</option>
                                <option value="배송중">배송중</option>
                                <option value="배송완료">배송완료</option>
                                <option value="주문취소">주문취소</option>
                            </select>
                        </td>
                        <td class="" colspan="1"><span class="txt_red txt_under"><a>202302081123-1</a></span></td>
                        <td class="" colspan="1">김환자</td>
                        <td class="" colspan="1">부산광역시 기장군 정관읍 용수공단 1길</td>
                        <td scope="col" rowspan="2" class="">1</td>
                        <!--td class="" rowspan="2">현금결제</td-->
                        <td class="" rowspan="2">119,400원</td>
                        <td class="" rowspan="2"><button type="button" class="btn btn_whiteline">보기</button><button type="button" class="btn btn_redline">취소</button></td>
                    </tr>
                    <tr>
                        <td class="" rowspan="1">약속처방</td>
                        <td class="" rowspan="1">경옥고</td>
                        <td class="" rowspan="1">010-0000-0000</td>
                        <td class="" rowspan="1">
                            <div class="flex delivery">
                                <div>
                                    <select>
                                        <option value="">택배사선택</option>
                                        <option value="10054">직접배송</option>
                                        <option value="10056">CJ택배</option>
                                        <option value="10057">로젠택배</option>
                                        <option value="10058">퀵서비스</option>
                                        <option value="10059">기타(직접수령)</option>
                                        <option value="10065">우체국택배</option>
                                    </select>
                                </div>
                                <div><input type="text" value="" placeholder="운송장번호를 입력해주세요.">
                                </div>
                                <button type="button"  class="btn btn_red">저장</button>
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
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>