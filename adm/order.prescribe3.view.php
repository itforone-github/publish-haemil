<?php
$pid = "a_order1";
include_once("../include/header.php");
//3.0. 산제처방
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
                    <p><strong>제형</strong> 초미립제분(10원/g)-비닐포장만 가능 합니다.
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
                    <p class="tit">대분류</p>
                    <ul class="flex flexwrap circle">
                        <li>
                            <input type="radio" id="pack1-0" name="pack0" checked onClick="return false;"/> <label for="pack1-0"> 비닐 포장</label>
                        </li>
                </div>

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
                <a class="btn w100 btn_red btn_order">결제하기</a>
            </div>
    </div>
</section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>