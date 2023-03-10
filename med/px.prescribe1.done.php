<?php
$pid = "px_order";
include_once("../include/header.php");
//3.02 탕전처방
?>

 <section class="px pre1">
            <div class="box2">
                <div class="box_title bg_red">
                    <strong>환자 정보</strong>
                    <div class="title_btn mari-auto">
                        <!--button type="button" class="btn btn_white">한의원으로 주문하기</button>
                        <button type="button" class="btn btn_black"  data-toggle="modal" data-target="#pxmembermodal">환자 목록 보기</button-->
                    </div>
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
                                <input type="radio" id="type5" name="type" checked onClick="return false;"/><label for="type5">없음</label>
                                <input type="radio" id="type1" name="type" onClick="return false;"/><label for="type1">태양인</label>
                                <input type="radio" id="type2" name="type" onClick="return false;"/><label for="type2">태음인</label>
                                <input type="radio" id="type3" name="type" onClick="return false;"/><label for="type3">소양인</label>
                                <input type="radio" id="type4" name="type" onClick="return false;"/><label for="type4">소음인</label>
                            </span></p>
                            <p><label>기본주소</label><input type="text" value="기본주소" readonly/></p>
                            <p><label>상세주소</label><input type="text" value="상세주소" readonly/></p>
                            <p><label>기타번호</label><input type="text" value="기타번호" readonly/></p>
                        </div>
                    </div>
                    <p class="flex"><label class="mari-auto">처방 메모</label><textarea type="text" placeholder="처방 메모" readonly></textarea></p>
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
            <div class="box2">
                <div class="box_title bg_white">
                    <strong>처방 내용</strong>
                    <div class="title_btn mari-auto">
                        <input type="text" class="btn btn_redline btn_sdw" value="처방명을 입력하세요." readonly/>
                    </div>
                    <div class="title_btn">
                        <!--button type="button" class="btn btn_red">처방 저장</button-->
                        <button type="button" class="btn btn_black">초기화</button>
                    </div>
                </div>
                <div class="box_line1">
                    <div class="mari-auto" style="line-height: 40px;">
                        <input type="checkbox" id="check3" name="type"  readonly/> <label for="check3"> 첩약보험탕전</label>
                        <!--첩약보험탕전 시 노출>
                        <br><span class="circle">
                            <input type="radio" id="check3-1" name="check3" /> <label for="check3-1"> 10일분(20첩)-31,250원</label>
                            <input type="radio" id="check3-2" name="check3" /> <label for="check3-2"> 5일분(10첩)-15,630원</label>
                        </span>
                        <첩약보험탕전 시 노출-->
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
                <div class="box_line2 number flex">
                    <p>첩수
                        <span class="input_no">
                            <button type="button" onclick=""><i class="far fa-minus"></i><!-- 수량감소 --></button>
                            <input type="text" name="cheup_cnt" value="2" readonly>
                            <button type="button" onclick=""><i class="far fa-plus"></i><!-- 수량증가 --></button>
                        </span>
                    </p>
                    <select name="option">
                        <option value="">일반</option>
                        <option value="">증류</option>
                    </select>
                    <p>팩수
                        <span class="input_no">
                            <button type="button" onclick=""><i class="far fa-minus"></i><!-- 수량감소 --></button>
                            <input type="text" name="cheup_cnt" value="45" readonly>
                            <button type="button" onclick=""><i class="far fa-plus"></i><!-- 수량증가 --></button>
                        </span>
                    </p>
                    <p>팩용량
                        <span class="input_no">
                            <button type="button" onclick=""><i class="far fa-minus"></i><!-- 수량감소 --></button>
                            <input type="text" name="cheup_cnt" value="120" readonly>
                            <button type="button" onclick=""><i class="far fa-plus"></i><!-- 수량증가 --></button>
                        </span>
                    </p>
                    <button type="button" class="btn btn_gray2 btn_h40">기본설정</button>
                </div>
                <div class="box_line2">
                    <span>
                        <input type="checkbox" id="plus1" name="type"  readonly/> <label for="plus1"> 재탕</label>
                        <input type="checkbox" id="plus2" name="type"  readonly/> <label for="plus2"> 주수상반</label>
                    </span>
                    <!--주수상반시 노출 */
                    <p><strong>주수상반</strong>
                        <select name="option" class="plus2">
                            <option value="">전부 적용</option>
                            <option value="">탕전비만 적용</option>
                        </select>
                    </p>
                   /* 주수상반시 -->
                    <!--재탕시 노출 */
                    <div class="flex">
                        <p><strong>재탕</strong> 팩수
                            <span class="input_no">
                                <button type="button" onclick=""><i class="far fa-minus"></i></button>
                                <input type="text" name="cheup_cnt" value="45">
                                <button type="button" onclick=""><i class="far fa-plus"></i></button>
                            </span>
                        </p>
                        <p>팩용량
                            <span class="input_no">
                                <button type="button" onclick=""><i class="far fa-minus"></i></button>
                                <input type="text" name="cheup_cnt" value="120">
                                <button type="button" onclick=""><i class="far fa-plus"></i></button>
                            </span>
                        </p>
                    </div>
                    /*-재탕시 -->
                </div>
                <div class="box_line">
                    <textarea type="text" placeholder="처방 비고를 입력하세요.(탕전실에 전달됩니다.)" readonly>처방 비고를 입력하세요.(탕전실에 전달됩니다.)</textarea>
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
            <div class="box2 taking">
                <div class="box_title bg_white">
                    <strong>복용법</strong>
                    <div class="title_btn mari-auto">
                        <input type="text" class="btn btn_line" value="복용법명을 입력하세요." readonly/>
                        <button type="button" class="btn btn_black">복용법 저장</button>
                        <button type="button" class="btn btn_red"  data-toggle="modal" data-target="#pxtakemodal">복용법 목록</button>
                    </div>
                    <div class="title_btn">
                        <button type="button" class="btn btn_gray">복용법 없음</button>
                        <button type="button" class="btn btn_black">초기화</button>
                    </div>
                </div>
                <div class="box_line1">
                    <div class="flex w100">
                        <select readonly>
                            <option value="">식전</option>
                        </select>
                        <select readonly>
                            <option value="">10분</option>
                        </select>
                        <select readonly>
                            <option value="">1회</option>
                        </select>
                    </div>
                </div>
                <div class="box_line2">
                    <div class="editor"><!--에디터 적용-->
                        <textarea type="text" placeholder="복용법을 입력하세요." readonly>복용법을 입력하세요.</textarea>
                    </div>
                    <dl class="file_wrap">
                        <dd><a class="btn btn_blue">복용법 파일 첨부</a> 파일을 선택하세요..</dd>
                    </dl>
                </div>
            </div>
            <div class="box2 packing">
                <div class="box_title bg_white">
                    <strong>포장</strong>
                    <div class="title_btn">
                        <button type="button" class="btn btn_black">기본설정</button>
                    </div>
                </div>
                <div class="box_line1">
                    <p class="tit">전용 박스 <span>탕박스+에어셀박스</span></p>
                    <ul class="flex flexwrap circle">
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack1-1" name="pack1" onClick="return false;"/> <label for="pack1-1"> 45팩 박스</label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack1-2" name="pack1" onClick="return false;"/> <label for="pack1-2"> 60팩 박스</label>
                        </li>
                    </ul>
                </div>
                <div class="box_line2">
                    <p class="tit">파우치 타입 <span>파우치 타입을 선택해 주세요.</span></p>
                    <div class="tagbox">
                        <div>
                            <p><a><span class="tag active">스탠딩 파우치</span></a></p>
                            <p><a><span class="tag">스파우트 파우치(45팩 1박스)</span></a></p>
                        </div>
                    </div>
                    <ul class="flex flexwrap circle">
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack2-1" name="pack2" onClick="return false;"/> <label for="pack2-1"> 포장 이름</label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack2-2" name="pack2" onClick="return false;"/> <label for="pack2-2"> 포장 이름</label>
                        </li>
                        <li>
                            <div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div>
                            <input type="radio" id="pack2-3" name="pack2" onClick="return false;"/> <label for="pack2-3"> 포장 이름</label>
                        </li>
                    </ul>
                    <div class="warning"> <!--스파우트 선택시 노출-->
                        <p>스파우트 주문 시 유의사항</p>
                        <p class="txt_red">스파우트 탕전시, 완벽한 멸균처리가 어려워 다소 문제가 발생할 수 있음을 미리 양해 부탁드립니다.</p>
                    </div>
                </div>
                <div class="box_line2">
                    <p class="tit">파우치 인쇄 <span>중복선택 가능 | 파우치 인쇄 타입을 선택해주세요</span></p>
                    <input type="checkbox" id="print1" name="print" onClick="return false;"/> <label for="print1"> 없음</label>
                    <input type="checkbox" id="print2" name="print" onClick="return false;"/> <label for="print2"> 한의원명</label>
                    <input type="checkbox" id="print3" name="print" onClick="return false;"/> <label for="print3"> 환자명</label>
                    <input type="checkbox" id="print4" name="print" onClick="return false;"/> <label for="print4"> 조제일자</label>
                    <input type="checkbox" id="print5" name="print" onClick="return false;"/> <label for="print5"> 연락처</label>
                </div>
                <div class="box_line2">
                    <p class="tit">달이는 시간 <span>달이는 시간을 선택해 주세요.</span></p>
                    <span class="circle">
                    <input type="radio" id="time1" name="time" onClick="return false;"/> <label for="time1"> 1시간 30분</label>
                    <input type="radio" id="time2" name="time" onClick="return false;"/> <label for="time2"> 2시간</label>
                    <input type="radio" id="time3" name="time" onClick="return false;"/> <label for="time3"> 3시간</label>
                    </span>
                </div>
            </div>
    </div>
    <div class="right">
            <div class="sticky">
                <div class="box5">
                    <dl>
                        <dt><strong>제품명</strong> 제품명</dt>
                        <dd>탕(湯)</dd>
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
                        <dt><strong>탕전비</strong> 0원 X 0팩 [주수상반]</dt>
                        <dd>0 원</dd>
                    </dl>
                    <dl>
                        <dt><strong>포장비</strong> 0원 X 0ea</dt>
                        <dd>0 원</dd>
                    </dl>
                    <dl>
                        <dt><strong>기타재료</strong> -</dt>
                        <dd>0 원</dd>
                    </dl>
                    <dl>
                        <dt><strong>배송비</strong> 0원 X 0ea</dt>
                        <dd>0 원</dd>
                    </dl>
                    <dl>
                        <dt><strong>약재비</strong> <span>0 원</span></dt>
                        <dt><strong>탕전비</strong> <span>0 원</span></dt>
                        <dt><strong>총금액</strong> <span class="yellow">0 원</span></span></dt>
                    </dl>
                </div>
                <a class="btn w100 btn_red btn_order">결제하기</a>
            </div>
    </div>
</section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>