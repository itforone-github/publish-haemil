<?php
$pid = "a_order1";
include_once("../include/header.php");
//3.0. 환제처방
?>

 <section class="px pre1">
            <div class="box3">
                <div class="box_title bg_red">
                    <strong>환자 정보</strong>
                    <!--div class="title_btn mari-auto">
                        <button type="button" class="btn btn_white">한의원으로 주문하기</button>
                        <button type="button" class="btn btn_black"  data-toggle="modal" data-target="#pxmembermodal">환자 목록 보기</button>
                    </div-->
                    <div class="title_btn">
                        <!--button type="button" class="btn btn_white txt_red">신규 환자 저장</button-->
                        <button type="button" class="btn btn_white slideup1">닫기</button>
                    </div>
                </div>
                <div class="preform slideform1">
                    <div class="flex">
                        <div>
                            <p><label>차트번호</label><input type="text" value="차트번호" readonly/></p>
                            <p><label>이름</label><input type="text" value="이름" readonly/></p>
                            <p><label>주민번호</label><input type="text" value="주민번호 앞자리" class="input-sm2" readonly/><input type="text" value="주민번호 뒷자리" class="input-sm2" readonly/></p>
                            <p><label>휴대폰</label><input type="text" value="휴대폰" readonly/></p>
                        </div>
                        <div>
                            <p><label>체질구분</label>
                            <span class="circle">
                                <input type="radio" id="type5" name="type" checked  onClick="return false;"/><label for="type5">없음</label>
                                <input type="radio" id="type1" name="type"  onClick="return false;"/><label for="type1">태양인</label>
                                <input type="radio" id="type2" name="type"  onClick="return false;"/><label for="type2">태음인</label>
                                <input type="radio" id="type3" name="type"  onClick="return false;"/><label for="type3">소양인</label>
                                <input type="radio" id="type4" name="type"  onClick="return false;"/><label for="type4">소음인</label>
                            </span></p>
                            <p><label>기본주소</label><input type="text" value="기본주소" readonly/></p>
                            <p><label>상세주소</label><input type="text" value="상세주소" readonly/></p>
                            <p><label>기타번호</label><input type="text" value="기타번호" readonly/></p>
                        </div>
                    </div>
                    <p class="flex"><label class="mari-auto">처방 메모</label><textarea type="text" placeholder="처방 메모" readonly>처방 메모</textarea></p>
                </div>
            </div>
</section>
<section class="px pre1">
            <div class="box3">
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
                            <p><label>성함</label><input type="text" value="성함" readonly/></p>
                            <p><label>우편번호</label><input type="text" value="우편번호" readonly/></p>
                            <p><label>기본주소</label><input type="text" value="기본주소" readonly/></p>
                            <p><label>상세주소</label><input type="text" value="상세주소" readonly/></p>
                            <p><label>전화번호</label><input type="text" value="전화번호" readonly/></p>
                        </div>
                        <div>
                            <h6>받는 사람
                            <!--span class="circle">
                                <input type="checkbox" id="check1" name="type" /> <label for="check1"> 한의원으로 배송</label>
                                <input type="checkbox" id="check2" name="type" /> <label for="check2"> 환자 정보와 동일</label>
                            </span--></h6>
                            <p><label>성함</label><input type="text" value="성함" readonly/></p>
                            <p><label>우편번호</label><input type="text" value="우편번호" readonly/></p>
                            <p><label>기본주소</label><input type="text" value="기본주소" readonly/></p>
                            <p><label>상세주소</label><input type="text" value="상세주소" readonly/></p>
                            <p><label>전화번호</label><input type="text" value="전화번호" readonly/></p>
                            <p><label>배송 요청사항</label><input type="text" value="배송 요청사항" readonly/></p>
                        </div>
                    </div>
                </div>
            </div>
</section>
<section class="px pre2">
    <div class="left">
            <div class="box3">
                <div class="box_title bg_white">
                    <strong>처방 내용</strong>
                    <div class="title_btn mari-auto">
                        <input type="text" class="btn btn_redline btn_sdw" value="처방명을 입력하세요."/>
                    </div>
                    <div class="title_btn">
                        <button type="button" class="btn btn_red">처방 저장</button>
                        <button type="button" class="btn btn_black">초기화</button>
                    </div>
                </div>
                <div class="box_line">
                    <div class="mari-auto" style="line-height: 40px;">
                        <p class="txt_red txt_bold">※ 1kg 이상만 주문가능</p>
                    </div>
                    <div class="btn_box">
                        <button type="button" class="btn btn_blue"  data-toggle="modal" data-target="#pxlistmodal">기성처방/나의처방</button>
                        <button type="button" class="btn btn_red"  data-toggle="modal" data-target="#pxmedimodal">약재 전체보기</button>
                        <div class="search">
                            <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>
                            <div id="medi_sch_field" style=""><!--display: block;-->
                                <table id="medi_sch_tb">
                                    <tr class=" " data-index="">
                                        <td style="font-weight: bold;">한약재명</td>
                                        <td>원산지</td>
                                        <td>g 당 100원</td>
                                        <td>후하</td>
                                        <td>후하추천</td>
                                        <td>20-12-03</td>
                                    </tr>
                                    <tr class=" " data-index="">
                                        <td style="font-weight: bold;">한약재명</td>
                                        <td>원산지</td>
                                        <td>g 당 100원</td>
                                        <td>불가</td>
                                        <td>해당없음</td>
                                        <td>20-12-03</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_line2">
                    <div class="table">
                        <table>
                            <thead>
                            <tr>
                                <th>약재명</th>
                                <th>후하</th>
                                <th>후하유무</th>
                                <th>원산지</th>
                                <th>첩량(g)</th>
                                <th>약재량(총 g)</th>
                                <th>약재비(원)</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>약재명</td>
                                <td>후하추천</td>
                                <td><input type="checkbox" name="chk[]" value="0" id="chk_0" /></td>
                                <td>원산지</td>
                                <td><input type="text" class="btn_h40" value="0" readonly/> </td>
                                <td class="txt_red">0 g</td>
                                <td>0 원</td>
                                <td><button type="button" class="btn btn_whiteline">삭제</button></td>
                            </tr>
                            <tr>
                                <td>약재명</td>
                                <td>후하추천</td>
                                <td><input type="checkbox" name="chk[]" value="0" id="chk_0" /></td>
                                <td>원산지</td>
                                <td><input type="text" class="btn_h40" value="0" readonly/> </td>
                                <td class="txt_red">0 g</td>
                                <td>0 원</td>
                                <td><button type="button" class="btn btn_whiteline">삭제</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="box_line2 number2 flex">
                    <p>첩수
                        <span class="input_no">
                            <button type="button" onclick=""><i class="far fa-minus"></i><!-- 수량감소 --></button>
                            <input type="text" name="cheup_cnt" value="2">
                            <button type="button" onclick=""><i class="far fa-plus"></i><!-- 수량증가 --></button>
                        </span>
                    </p>
                    <p><strong>제형</strong>
                    <select name="option" readonly>
                        <option value="">수환 - 소녹두대 [15원/g]-4mm</option>
                        <option value="">-</option>
                    </select>
                    </p>
                    <p class="male-auto">예상 출고량
                        <span class="input_no">
                            <input type="text" value="0" readonly/>
                        </span> g
                    </p>
                </div>
                <div class="box_line">
                    <textarea type="text" placeholder="처방 비고를 입력하세요.(탕전실에 전달됩니다.)" readonly>처방 비고를 입력하세요.</textarea>
                </div>
            </div>
            <div class="box5">
                <div class="flex count">
                    <div  class="flex jc-sb">
                        <p class="tit">약재 총무게(g)</p>
                        <p><span class="number">0</span> g ×<span class="number">0</span> 첩 =<span class="number">0</span> g </p>
                    </div>
                    <div class="flex  jc-sb">
                        <p  class="tit">약재 총금액(원)</p>
                        <p><span class="number">0</span> 원 ×<span class="number">0</span> 첩 =<span class="number">0</span> 원 </p>
                    </div>
                </div>
            </div>
            <div class="box3 packing">
                <div class="box_title bg_white">
                    <strong>포장</strong>
                    <div class="title_btn">
                        <button type="button" class="btn btn_black">기본설정</button>
                    </div>
                </div>
                <div class="box_line">
                    <p class="tit">대분류 <span>포장 대분류를 선택해주세요.</span></p>
                    <ul class="flex flexwrap circle">
                        <li> <!--밀환 탄자대/앵두대-->
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack1-0" name="pack0"  onClick="return false;"/> <label for="pack1-0"> 지퍼백</label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack1-1" name="pack1"  onClick="return false;"/> <label for="pack1-1"> 진공팩</label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack1-2" name="pack1"  onClick="return false;"/> <label for="pack1-2"> 스탠드 지퍼백</label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack1-3" name="pack1"  onClick="return false;"/> <label for="pack1-3"> 원터치통 포장</label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack1-4" name="pack1"  onClick="return false;"/> <label for="pack1-4"> 스틱 포장</label>
                        </li>
                        <li>  <!--밀환 탄자대-->
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack1-5" name="pack1"  onClick="return false;"/> <label for="pack1-5"> 청병</label>
                        </li>
                        <li> <!--밀환 탄자대-->
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack1-6" name="pack1"  onClick="return false;"/> <label for="pack1-6"> 사탕 포장</label>
                        </li>
                    <div class="warning">
                        <p>스틱 포장 시 유의사항</p>
                        <p class="txt_red">포장 출고 수량에 따라 추가비용 발생 될 수 있습니다. 주문약재 무게가 3kg 이상일 경우만 스틱포장 가능합니다.</p>
                    </div>
                </div>
                <!--대분류:청병 -밀환 탄자대-->
                <div class="box_line2">
                    <p class="tit">금박 선택 <span></span></p>
                    <span class="circle">
                    <input type="radio" id="gold1" name="gold"  onClick="return false;"/> <label for="gold1"> 금박</label>
                    <input type="radio" id="gold2" name="gold"  onClick="return false;"/> <label for="gold2"> 무금박</label>
                    </span>
                </div>
                <div class="box_line2">
                    <p class="tit">씰링 선택 <span></span></span></p>
                    <span class="circle">
                    <input type="radio" id="ceil1" name="ceil"  onClick="return false;"/> <label for="ceil1"> 씰링</label>
                    <input type="radio" id="ceil2" name="ceil"  onClick="return false;"/> <label for="ceil2"> 씰링안함</label>
                    </span>
                </div>
                <div class="box_line2">
                    <p class="tit">케이스 선택 <span></span></p>
                    <div class="tagbox">
                        <div>
                            <p><a><span class="tag active">원목 (인쇄)</span></a></p>
                            <p><a><span class="tag">함지 (인쇄)</span></a></p>
                            <p><a><span class="tag">함지 (무인쇄)</span></a></p>
                        </div>
                    </div>
                    <ul class="flex flexwrap circle">
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="case-1" name="case"  onClick="return false;"/> <label for="case-1"> 이름 </label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="case-2" name="case"  onClick="return false;"/> <label for="case-2"> 이름 </label>
                        </li>
                    </ul>
                </div>
                <!--대분류:원터치통포장-->
                <div class="box_line2">
                    <p class="tit">원터치통 포장 <span>원터치통 포장을 선택해 주세요.</span></p>
                    <ul class="flex flexwrap circle">
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="one-1" name="one"  onClick="return false;"/> <label for="one-1"> 70cc(약50g) </label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="one-2" name="one"  onClick="return false;"/> <label for="one-2"> 220cc(약145g) </label>
                        </li>
                    </ul>
                </div>
                <!--대분류:원터치통포장-->
                <!--대분류:스틱포장-->
                <div class="box_line2">
                    <p class="tit">스틱 포장 <span></span></p>
                    <span class="circle">
                    <input type="radio" id="g1" name="g"  onClick="return false;"/> <label for="g1"> 3g</label>
                    <input type="radio" id="g2" name="g"  onClick="return false;"/> <label for="g2"> 4g</label>
                    <input type="radio" id="g3" name="g"  onClick="return false;"/> <label for="g3"> 5g</label>
                    </span>
                </div>
                <div class="box_line2 circle">
                    <p class="tit">스틱 인쇄 <span>스틱 인쇄 타입을 선택해주세요</span></p>
                    <input type="radio" id="print1" name="print"  onClick="return false;"/> <label for="print1"> 없음</label>
                    <input type="radio" id="print2" name="print"  onClick="return false;"/> <label for="print2"> 환명</label>
                    <input type="radio" id="print5" name="print"  onClick="return false;"/> <label for="print5"> 환명+한의원명</label>
                    <input type="radio" id="print3" name="print"  onClick="return false;"/> <label for="print3"> 환명+한의원명+연락처</label>
                    <input type="text" class="btn btn_redline btn_sdw" placeholder="환명을 입력하세요."/>
                </div>

                <div class="box_line2">
                    <p class="tit">스틱 디자인 <span>스틱 디자인 선택을 선택해주세요</span></p>
                    <ul class="flex flexwrap circle">
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack2-1" name="pack2"  onClick="return false;"/> <label for="pack2-1"> 스틱 디자인 </label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack2-2" name="pack2"  onClick="return false;"/> <label for="pack2-2"> 스틱 디자인 </label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack2-3" name="pack2"  onClick="return false;"/> <label for="pack2-3"> 스틱 디자인 </label>
                        </li>
                    </ul>
                </div>
                <div class="box_line2">
                    <p class="tit">스틱 포장 <span>스틱 포장을 선택해 주세요.</span></p>
                    <div class="tagbox">
                        <div>
                            <p><a><span class="tag active">인박스</span></a></p>
                            <p><a><span class="tag">아웃박스</span></a></p>
                            <p><a><span class="tag">인박스+아웃박스</span></a></p>
                        </div>
                    </div>
                    <ul class="flex flexwrap circle">
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack2-1" name="pack2"  onClick="return false;"/> <label for="pack2-1"> 포장 이름</label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack2-2" name="pack2"  onClick="return false;"/> <label for="pack2-2"> 포장 이름</label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack2-3" name="pack2"  onClick="return false;"/> <label for="pack2-3"> 포장 이름</label>
                        </li>
                    </ul>
                </div>
                <!--대분류:스틱포장-->
            </div>
    </div>
    <div class="right">
            <div class="sticky">
                <div class="box5">
                    <dl>
                        <dt><strong>제품명</strong> 제품명</dt>
                        <dd>환(丸)</dd>
                    </dl>
                    <dl>
                        <dt><strong>약재비</strong> 0원 X 0첩</dt>
                        <dd>0 원</dd>
                    </dl>
                    <dl>
                        <dt><strong>조제비</strong> 0원</dt>
                        <dd>0 원</dd>
                    </dl>
                    <dl>
                        <dt><strong>제환비</strong> 0원 X 3,000g(기본 무게)</dt>
                        <dd>0 원</dd>
                    </dl>
                    <dl>
                        <dt><strong>포장비</strong> 0원 X 1 ( 10kg 당 계산 )</dt>
                        <dd>0 원</dd>
                    </dl>
                    <dl>
                        <dt><strong>기타재료</strong> -</dt>
                        <dd>0 원</dd>
                    </dl>
                    <dl>
                        <dt><strong>배송비</strong> 0원 X  1 ( 10kg 당 계산 )</dt>
                        <dd>0 원</dd>
                    </dl>
                    <dl>
                        <dt><strong>약재비</strong> <span>0 원</span></dt>
                        <dt><strong>제환비</strong> <span>0 원</span></dt>
                        <dt><strong>총금액</strong> <span class="yellow">0 원</span></span></dt>
                    </dl>
                </div>
            </div>
    </div>
</section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>