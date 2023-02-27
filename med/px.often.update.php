<?php
$pid = "px_often";
include_once("../include/header.php");
//3.8.2	자주 쓰는 처방 > 등록
?>


    <section class="p_often">
        <div class="area_top">
            <div class="po_title">
                <label for="">처방명</label>
                <input type="text" class="btn btn_redline btn_sdw" placeholder="처방명을 입력하세요."/>
            </div>
            <span class="btn_wrap">
                <button type="button" class="btn btn_white btn_sdw" onclick="location.href='../med/px.often.php'">목록</button>
                <button type="button" class="btn btn_red btn_sdw">처방 등록</button>
                <button type="button" class="btn btn_black">초기화</button>
            </span>
        </div>
        <div class="form">
            <div class="px pre2">
                <div class="box2">
                    <div class="box_line1">
                        <div class="mari-auto" style="line-height: 40px;">
                            <input type="checkbox" id="check3" name="type" /> <label for="check3"> 첩약보험탕전</label>
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
                                    <td><input type="text" class="btn_h40" value="0"/> </td>
                                    <td class="txt_red">0 g</td>
                                    <td>0 원</td>
                                    <td><button type="button" class="btn btn_whiteline">삭제</button></td>
                                </tr>
                                <tr>
                                    <td>약재명</td>
                                    <td>후하추천</td>
                                    <td><input type="checkbox" name="chk[]" value="0" id="chk_0" /></td>
                                    <td>원산지</td>
                                    <td><input type="text" class="btn_h40" value="0"/> </td>
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
                        <input type="text" name="cheup_cnt" value="2">
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
                        <input type="text" name="cheup_cnt" value="45">
                        <button type="button" onclick=""><i class="far fa-plus"></i><!-- 수량증가 --></button>
                    </span>
                        </p>
                        <p>팩용량
                            <span class="input_no">
                        <button type="button" onclick=""><i class="far fa-minus"></i><!-- 수량감소 --></button>
                        <input type="text" name="cheup_cnt" value="120">
                        <button type="button" onclick=""><i class="far fa-plus"></i><!-- 수량증가 --></button>
                    </span>
                        </p>
                        <button type="button" class="btn btn_gray2 btn_h40">기본설정</button>
                    </div>
                    <div class="box_line2">
                <span>
                    <input type="checkbox" id="plus1" name="type" /> <label for="plus1"> 재탕</label>
                    <input type="checkbox" id="plus2" name="type" /> <label for="plus2"> 주수상반</label>
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
                        <textarea type="text" placeholder="처방 비고를 입력하세요.(탕전실에 전달됩니다.)"></textarea>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>