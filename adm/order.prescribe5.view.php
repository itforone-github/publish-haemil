<?php
$pid = "a_order1";
include_once("../include/header.php");
//3.0 서술식
?>

 <section class="px pre1">
            <div class="box4">
                <div class="box_title">
                    <strong>견적 진행</strong>
                    <div class="title_btn">
                        <button type="button" class="btn btn_white slideup3">닫기</button>
                        <button type="button" class="btn btn_black">주문 취소</button>
                        <!--<button type="button" class="btn btn_gray3 ">견적 진행중</button> 관리자 결제 요청 전-->
                        <button type="button" class="btn btn_white txt_bold txt_red" data-toggle="modal" data-target="#pxpr5modal">견적 확정 및 결제</button>
                    </div>
                </div>
                <div class="preform slideform3">
                    <div class="messagewrap">
                        <div class="message adm">
                            <p><strong>해밀원 관리자</strong> 23-02-28 09:26</p>
                            <div>작성 견적에서 한약재1은 첨가 불가하며 대체품 한약재2를 사용하여 총 2000g 45팩 견적 배송비 포함 52,000원 입니다.</div>
                        </div>
                        <div class="message mine">
                            <p>23-02-28 09:27 <strong>한의원</strong></p>
                            <div>한약재2 빼주세요</div>
                        </div>
                        <div class="message adm">
                            <p><strong>해밀원 관리자</strong> 23-02-28 09:28</p>
                            <div>한약재2 제외하여 48,000원입니다.</div>
                        </div>
                    </div>
                    <div class="flex w100">
                        <input type="text" placeholder="메세지를 작성하세요" class="btn_sdw message"/>
                        <button type="button" class="btn btn_red txt_bold btn_h40">전송</button>
                    </div>
                </div>
            </div>
</section>
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
                                <input type="radio" id="type5" name="type" checked readonly/><label for="type5">없음</label>
                                <input type="radio" id="type1" name="type" readonly/><label for="type1">태양인</label>
                                <input type="radio" id="type2" name="type" readonly/><label for="type2">태음인</label>
                                <input type="radio" id="type3" name="type" readonly/><label for="type3">소양인</label>
                                <input type="radio" id="type4" name="type" readonly/><label for="type4">소음인</label>
                            </span></p>
                            <p><label>기본주소</label><input type="text" value="기본주소" readonly/></p>
                            <p><label>상세주소</label><input type="text" value="상세주소" readonly/></p>
                            <p><label>기타번호</label><input type="text" value="기타번호" readonly/></p>
                        </div>
                    </div>
                    <p class="flex"><label class="mari-auto">처방 메모</label><textarea type="text" placeholder="처방메모" readonly>처방 메모</textarea></p>
                </div>
            </div>
</section>
<section class="px pre2">
    <div class="left">
            <div class="box3 px5">
                <div class="box_title bg_white">
                    <strong>처방 내용</strong>
                    <div class="title_btn mari-auto">
                        <input type="text" class="btn btn_redline btn_sdw" value="처방명을 입력하세요." readonly/>
                    </div>
                    <!--div class="title_btn">
                        <button type="button" class="btn btn_red">처방 저장</button>
                    </div-->
                </div>
                <div class="box_line px5">
                    <div class="editor"><!--에디터 적용-->
                        <textarea type="text" placeholder="처방을 입력하세요" class="" readonly>처방을 입력하세요</textarea>
                    </div>
                    <dl class="file_wrap">
                        <dd><!--a class="btn btn_black">파일 첨부</a--> 파일을 선택하세요..</dd>
                    </dl>
                </div>
            </div>
            <div class="box3 taking">
                <div class="box_title bg_white">
                    <strong>복용법</strong>
                    <div class="title_btn mari-auto">
                        <input type="text" class="btn btn_line" value="복용법명을 입력하세요." readonly/>
                        <!--button type="button" class="btn btn_black">복용법 저장</button>
                        <button type="button" class="btn btn_red"  data-toggle="modal" data-target="#pxtakemodal">복용법 목록</button-->
                    </div>
                    <!--div class="title_btn">
                        <button type="button" class="btn btn_gray">복용법 없음</button>
                        <button type="button" class="btn btn_black">초기화</button>
                    </div-->
                </div>
                <div class="box_line">
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
                        <dd><!--a class="btn btn_blue">복용법 파일 첨부</a--> 파일을 선택하세요..</dd>
                    </dl>
                </div>
            </div>
    </div>
    <div class="right">
            <div class="sticky">
                <div class="box3">
                    <div class="box_title bg_red">
                        <strong>배송 정보</strong>
                        <div class="title_btn">
                        </div>
                    </div>
                    <div class="preform">
                        <div>
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
                <!--a class="btn w100 btn_red btn_order">주문하기</a-->
            </div>
    </div>
</section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>