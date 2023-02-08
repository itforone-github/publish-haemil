<?php
$pid = "a_medicine";
include_once("../include/header.php");
//ADM 약재관리
?>

    <section class="medicine">
        <div class="panel">
            <p>총 <span class="red">4</span>개 </p>
            <div class="max-none" style="flex-wrap: wrap">
                <span class="select"><input type="radio" id="select1" name="select" class="red" checked/><label for="select1">전체</label>
                <input type="radio" id="select2" name="select" class="red"/><label for="select2">ㄱ</label>
                <input type="radio" id="select3" name="select" class="red"/><label for="select3">ㄴ</label>
                <input type="radio" id="select4" name="select" class="red"/><label for="select4">ㄷ</label>
                <input type="radio" id="select5" name="select" class="red"/><label for="select5">ㄹ</label>
                <input type="radio" id="select6" name="select" class="red"/><label for="select6">ㅁ</label>
                <input type="radio" id="select7" name="select" class="red"/><label for="select7">ㅂ</label>
                <input type="radio" id="select8" name="select" class="red"/><label for="select8">ㅅ</label>
                <input type="radio" id="select9" name="select" class="red"/><label for="select9">ㅇ</label>
                <input type="radio" id="select10" name="select" class="red"/><label for="select10">ㅈ</label>
                <input type="radio" id="select11" name="select" class="red"/><label for="select11">ㅊ</label>
                <input type="radio" id="select12" name="select" class="red"/><label for="select12">ㅋ</label>
                <input type="radio" id="select13" name="select" class="red"/><label for="select13">ㅌ</label>
                <input type="radio" id="select14" name="select" class="red"/><label for="select14">ㅍ</label>
                <input type="radio" id="select15" name="select" class="red"/><label for="select15">ㅎ</label></span>
            </div>
            <div>

                <select name="search">
                    <option value="">선택</option>
                </select>
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

            </div>
            <span>
            <button type="button" class="btn btn_blue btn_sdw"  >엑셀 업로드</button>
            <button type="button" class="btn btn_gray2 btn_sdw"  >엑셀 다운</button>
            <button type="button" class="btn btn_whiteline" >선택 삭제</button>
            <button type="button" class="btn btn_red" data-toggle="modal" data-target="#medicinemodal01">약재 등록</button>
            </span>
        </div>
        <div class="tagbox">
            <div>
                <p><strong>처방 분류</strong></p>
            </div>
            <div>
                <p><a><span class="tag active">전체</span></a></p>
                <p><a><span class="tag">처방가능</span></a></p>
                <p><a><span class="tag">처방불가능</span></a></p>
            </div>
        </div>
        <div class="box3">
            <div class="table adm">
                <table>
                    <colgroup>
                        <col width="15px"/>
                        <col width="40px"/>
                        <col width="*"/>
                        <col width="*"/>
                        <col width="*"/>
                        <col width="*"/>
                        <col width="*"/>
                        <col width="*"/>
                        <col width="120px"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th><input type="checkbox" name="chkall" value="1" id="chkall"/></th>
                        <th>번호</th>
                        <th>이미지</th>
                        <th>약재명</th>
                        <th>1g 당 가격</th>
                        <th>원산지</th>
                        <th>상태</th>
                        <th>등록일</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="chk[]" value="0" id="chk_0" /></td>
                        <td>1</td>
                        <td><div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div> </td>
                        <td>운모</td>
                        <td>100</td>
                        <td>중국</td>
                        <td>처방가능</td>
                        <td>2022-10-31</td>
                        <td>
                            <button type="button" class="btn btn_whiteline">수정</button><button type="button" class="btn btn_redline">삭제</button></td>
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