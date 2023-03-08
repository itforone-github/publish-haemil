<?php
$pid = "a_onetouch";
include_once("../include/header.php");
//ADM 원터치통 관리
?>

    <section class="onetouch">
        <div class="panel">
            <p>총 <span class="red">4</span>개 </p>
            <div>
                <select name="search">
                    <option value="">품명</option>
                </select>
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

            </div>
            <span>
            <button type="button" class="btn btn_whiteline" >선택 삭제</button>
            <button type="button" class="btn btn_red" data-toggle="modal" data-target="#onetouchmodal01">원터치통 등록</button>
            </span>
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
                        <col width="100px"/>
                        <col width="40px"/>
                        <col width="120px"/>
                        <col width="120px"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th><input type="checkbox" name="chkall" value="1" id="chkall"/></th>
                        <th>번호</th>
                        <th>이미지</th>
                        <th>품명</th>
                        <th>금액</th>
                        <th>사용</th>
                        <th>순서</th>
                        <th>등록일</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="chk[]" value="0" id="chk_0" /></td>
                        <td>1</td>
                        <td><div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div></td>
                        <td>1500cc(약1100g)</td>
                        <td>0원</td>
                        <td>사용</td>
                        <td>1</td>
                        <td>22.10.31</td>
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