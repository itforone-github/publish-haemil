<?php
$pid = "a_readymadeupd";
include_once("../include/header.php");
//ADM 기성처방 관리
?>


<section class="readymadeupd">
    <div class="panel">
        <label class="title">처방명</label><input type="text" placeholder="처방명을 입력하세요" class="title" />

        <span>
            <button type="button" class="btn btn_whiteline"   onclick="location.href='./readymade.php'">목록</button>
            <button type="button" class="btn btn_red"  >처방 등록</button>
        </span>
    </div>
    <div class="box3">
        <div class="box_line2">
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
            <div class="table adm">
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
        <div class="box_line2">

    </div>
</section>


<!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>
