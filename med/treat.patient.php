<?php
$pid = "treat_patient";
include_once("../include/header.php");
//2.2환자관리
?>

<section class="t_patient">
        <div class="register">
            <div class="box2">
                <div class="box_title bg_red">
                    <strong>환자 등록</strong>
                    <div class="title_btn">
                        <a class="btn btn_small btn_white">등록하기</a>
                    </div>
                </div>
                <div class="form">
                    <dl>
                        <dt><label>차트번호</label></dt>
                        <dd>
                            <input type="text" placeholder="차트번호"/>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label>이름</label></dt>
                        <dd>
                            <input type="text" placeholder="이름"/>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label>주민등록번호</label></dt>
                        <dd>
                            <p class="flex">
                            <input type="text" placeholder="주민번호 앞자리"/>
                            <input type="text" placeholder="주민번호 뒷자리"/>
                            </p>
                            <p class="ref">주민번호는 최초 1회만 수집 가능합니다.</p>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label>주소</label></dt>
                        <dd>
                            <input type="text" placeholder="기본주소"/>
                            <input type="text" placeholder="상세주소"/>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label>휴대폰 번호</label></dt>
                        <dd>
                            <input type="text" placeholder="휴대폰 번호"/>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label>기타 연락처</label></dt>
                        <dd>
                            <input type="text" placeholder="기타 연락처"/>
                        </dd>
                    </dl>
                    <dl>
                        <dt>체질선택</dt>
                        <dd class="circle">
                            <input type="radio" id="type4" name="type" checked /><label for="type4">없음</label>
                            <input type="radio" id="type1" name="type" /><label for="type1">태양인</label>
                            <input type="radio" id="type2" name="type" /><label for="type2">태음인</label>
                            <input type="radio" id="type3" name="type" /><label for="type3">소양인</label>
                            <input type="radio" id="type4" name="type" /><label for="type4">소음인</label>
                        </dd>
                    </dl>
                    <textarea placeholder="처방메모를 입력하세요. (탕전실에는 전달되지 않습니다.)">

                    </textarea>
                </div>
            </div>
        </div>
        <div class="list">
            <div class="area_top">
                <div class="total">
                    <h3>간편 환자 등록</h3>
                    <p>현재 총 <span class="red">4</span>명 </p>
                    <div class="search">
                        <select name="search">
                            <option value="">전체</option>
                        </select>
                        <input class="search-bar" type="search" placeholder="검색어를 입력하세요" />
                        <button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>
                    </div>
                </div>
                <span class="btn_wrap">
                    <button type="button" class="btn btn_gray2 btn_sdw">엑셀 다운</button>
                    <button type="button" class="btn btn_whiteline btn_sdw">선택 삭제</button>
                </span>
            </div>
            <div class="box2">
                <div class="table">
                    <table>
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="checkbox" /></th>
                            <th>No.</th>
                            <th>차트번호</th>
                            <th>성함</th>
                            <th>생년월일</th>
                            <th>연락처</th>
                            <th>주소지</th>
                            <th>체질구분</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="past_btn">
                                <td><input type="checkbox" name="checkbox" /></td>
                                <td>1</td>
                                <td>00000001</td>
                                <td>김환자</td>
                                <td>1990-01-01</td>
                                <td>010-0000-0000</td>
                                <td>부산시 해운대구 센텀동로</td>
                                <td>소양인</td>
                                <td>
                                    <button type="button" class="btn btn_mini btn_whiteline" data-toggle="modal" data-target="#patientmodal01">수정</button>
                                    <button type="button" class="btn btn_mini btn_redline">삭제</button>
                                </td>
                            </tr>
                            <tr class="past_list">
                                <td colspan="9">
                                    <!--과거처방내역-->
                                    <table class="">

                                        <thead>
                                        <tr>
                                            <th class="" rowspan="2">번호</th>
                                            <th class="" rowspan="2">주문일</th>
                                            <th class="" rowspan="1">주문상태</th>
                                            <th class="" rowspan="1">주문번호</th>

                                            <th class="" rowspan="2">수량</th>
                                            <th class="" rowspan="2">결제수단</th>
                                            <th class="" rowspan="2">주문금액</th>
                                            <th class="" rowspan="2">조제 지시서</th>
                                            <th class="" rowspan="2">복용법</th>
                                            <th class="" rowspan="2">관리</th>
                                        </tr>
                                        <tr>
                                            <th class="" rowspan="1">처방방식</th>
                                            <th class="" colspan="1">상품/처방명</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="" rowspan="2">8862</td>
                                            <td class="" rowspan="2">23-02-08</td>

                                            <td class="" rowspan="1">
                                                <span class="state">주문접수</span>
                                            </td>
                                            <td class="" colspan="1"><span class="txt_blue txt_under"><a href="../med/px.prescribe1.view.php">202302081123-1</a></span></td>

                                            <td scope="col" rowspan="2" class="">1</td>
                                            <td class="" rowspan="2">현금결제</td>
                                            <td class="" rowspan="2">119,400원</td>
                                            <td class="" rowspan="2"><button type="button"  class="btn btn_red btn_h40">확인</button> </td> <!--최초발행 btn_blue 재발행 btn_red-->
                                            <td class="" rowspan="2"><button type="button" class="btn btn_whiteline btn_h40">확인</button></td>
                                            <td class="" rowspan="2"><button type="button" class="btn btn_whiteline" onclick="location.href='../med/px.prescribe5.view.php'">수정</button>
                                                <button type="button" class="btn btn_redline">취소</button></td>
                                        </tr>
                                        <tr>
                                            <td class="" rowspan="1">탕전처방</td>
                                            <td class="" rowspan="1">맞춤처방</td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" rowspan="2">8862</td>
                                            <td class="" rowspan="2">23-02-08</td>

                                            <td class="" rowspan="1">
                                                <span class="state">주문접수</span>
                                            </td>
                                            <td class="" colspan="1"><span class="txt_blue txt_under"><a href="../med/px.prescribe1.view.php">202302081123-1</a></span></td>

                                            <td scope="col" rowspan="2" class="">1</td>
                                            <td class="" rowspan="2">현금결제</td>
                                            <td class="" rowspan="2">119,400원</td>
                                            <td class="" rowspan="2"><button type="button"  class="btn btn_red btn_h40">확인</button> </td> <!--최초발행 btn_blue 재발행 btn_red-->
                                            <td class="" rowspan="2"><button type="button" class="btn btn_whiteline btn_h40">확인</button></td>
                                            <td class="" rowspan="2"><button type="button" class="btn btn_whiteline" onclick="location.href='../med/px.prescribe5.view.php'">수정</button>
                                                <button type="button" class="btn btn_redline">취소</button></td>
                                        </tr>
                                        <tr>
                                            <td class="" rowspan="1">탕전처방</td>
                                            <td class="" rowspan="1">맞춤처방</td>
                                            </td>
                                        </tr>                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr class="past_btn">
                                <td><input type="checkbox" name="checkbox" /></td>
                                <td>1</td>
                                <td>00000001</td>
                                <td>김환자</td>
                                <td>1990-01-01</td>
                                <td>010-0000-0000</td>
                                <td>부산시 해운대구 센텀동로</td>
                                <td>소양인</td>
                                <td>
                                    <button type="button" class="btn btn_mini btn_whiteline" data-toggle="modal" data-target="#patientmodal01">수정</button>
                                    <button type="button" class="btn btn_mini btn_redline">삭제</button>
                                </td>
                            </tr>
                            <tr class="past_list">
                                <td colspan="9">
                                    <div class="empty">과거처방내역이 없습니다.</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="b-pagination-outer">
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

<script>
$(function(){
    $(".past_list").css("display","none");
    $(".past_list:first").addClass("selected")
    $(".past_btn").click(function(){
        if($("+.past_list", this).css("display")=="none"){
            $(".past_list").slideUp(0);
            $("+.past_list", this).slideDown(0);
            $(".past_btn").removeClass("selected");
            $(this).addClass("selected");
        }
    }).mouseover(function(){
        $(this).addClass("over")
    }).mouseout(function(){
        $(this).removeClass("over")
    })
    //$("dt").click().mouseover().mouseout()
})
</script>

<!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>
