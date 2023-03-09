<?php
$pid = "a_patient";
include_once("../include/header.php");
//ADM 환자 관리
?>


<section class="patient">
    <div class="panel">
        <p>총 <span class="red">4</span>명 </p>
        <div>
            <select name="search">
                <option value="">이름</option>
                <option value="">한의원명</option>
                <option value="">휴대폰번호</option>
            </select>
            <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

        </div>
        <span>
            <button type="button" class="btn btn_gray2"">엑셀 다운</button>
            <!--<button type="button" class="btn btn_whiteline">선택 삭제</button>-->
        </span>
    </div>
    <div class="box3">
        <div class="table adm">
            <table>
                <thead>
                <tr>
                    <!--<th><input type="checkbox" name="checkbox"/></th>-->
                    <th>No.</th>
                    <th>차트번호</th>
                    <th>한의원명</th>
                    <th>이름</th>
                    <!--<th>어플연동(ID)</th>-->
                    <th>생년월일</th>
                    <th>연락처</th>
                    <th>체질구분</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr class="past_btn">
                    <!--<td><input type="checkbox" name="checkbox"/></td>-->
                    <td>1</td>
                    <td>00000001</td>
                    <td>유신한의원</td>
                    <td>김환자</td>
                    <!--<td>kim900101</td>-->
                    <td>1990-01-01</td>
                    <td>010-0000-0000</td>
                    <td>소양인</td>
                    <td>
                        <button type="button" class="btn btn_whiteline"  data-toggle="modal" data-target="#patientmodal01">보기</button>
                        <button type="button" class="btn btn_whiteline" onclick="alert('팝업처리')">과거처방내역</button>
                        <!--<button type="button" class="btn btn_redline">삭제</button>-->
                    </td>
                </tr>
                <!-- 과거이력을 볼수있는 팝업처리로 변경 -->
                <?/*/
                <tr class="past_list">
                    <td colspan="10">
                        <!--과거처방내역-->
                        <table class="">
                            <colgroup>
                                <col width=""/>
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
                                <th class="" rowspan="2">번호</th>
                                <th class="" rowspan="2">주문일</th>
                                <th class="" rowspan="2">업체명</th>
                                <th class="" rowspan="1">주문상태</th>
                                <th class="" rowspan="1">주문번호</th>
                                <th class="" colspan="1">환자명</th>
                                <th class="" colspan="1">배송지</th>
                                <th class="" rowspan="2">수량</th>
                                <!--th class="" rowspan="2">결제수단</th-->
                                <th class="" rowspan="2">주문금액</th>
                                <th class="" rowspan="2">조제 지시서</th>
                                <th class="" rowspan="2">복용법</th>
                                <th class="" rowspan="2">관리</th>
                            </tr>
                            <tr>
                                <th class="" rowspan="1">처방방식</th>
                                <th class="" colspan="1">상품/처방명</th>
                                <th class="" colspan="1">연락처</th>
                                <th class="" colspan="1">배송정보</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="" rowspan="2">8862</td>
                                <td class="" rowspan="2">23-02-08</td>
                                <td class="" rowspan="2">한의원</td>
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
                                <td class="" rowspan="2"><button type="button"  class="btn btn_blue btn_sdw btn_h40">발행</button> </td> <!--최초발행 btn_blue 재발행 btn_red-->
                                <td class="" rowspan="2"><button type="button" class="btn btn_whiteline btn_sdw btn_h40">발행</button></td>
                                <td class="" rowspan="2"><button type="button" class="btn btn_whiteline">수정</button><button type="button" class="btn btn_redline">취소</button></td>
                            </tr>
                            <tr>
                                <td class="" rowspan="1">탕전처방</td>
                                <td class="" rowspan="1">맞춤처방</td>
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
                                <td class="" rowspan="2">8862</td>
                                <td class="" rowspan="2">23-02-08</td>
                                <td class="" rowspan="2">한의원</td>
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
                                <td class="" rowspan="2"><button type="button"  class="btn btn_red btn_sdw btn_h40">재발행</button> </td>
                                <td class="" rowspan="2"><button type="button" class="btn btn_whiteline btn_sdw btn_h40">발행</button></td>
                                <td class="" rowspan="2"><button type="button" class="btn btn_whiteline">수정</button><button type="button" class="btn btn_redline">취소</button></td>
                            </tr>
                            <tr>
                                <td class="" rowspan="1">탕전처방</td>
                                <td class="" rowspan="1">맞춤처방</td>
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


                    </td>
                </tr>
                */?>
                <tr class="past_btn">
                    <!--<td><input type="checkbox" name="checkbox"/></td>-->
                    <td>1</td>
                    <td>00000001</td>
                    <td>유신한의원</td>
                    <td>김환자</td>
                    <!--<td>kim900101</td>-->
                    <td>1990-01-01</td>
                    <td>010-0000-0000</td>
                    <td>소양인</td>
                    <td>
                        <button type="button" class="btn btn_whiteline"  data-toggle="modal" data-target="#patientmodal01">보기</button>
                        <button type="button" class="btn btn_whiteline" onclick="alert('팝업처리')">과거처방내역</button>
                        <!--<button type="button" class="btn btn_redline">삭제</button>-->
                    </td>
                </tr>
                <!--<tr class="past_list">
                    <td colspan="10">
                        <div class="empty">과거처방내역이 없습니다.</div>
                    </td>
                </tr>-->
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
