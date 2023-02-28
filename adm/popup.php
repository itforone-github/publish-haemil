<?php
$pid = "a_popup";
include_once("../include/header.php");
//ADM 팝업 관리
?>

    <section class="popup">
        <div class="panel">
            <p>총 <span class="red">4</span>개 </p>
            <div>
                <select name="search">
                    <option value="">선택</option>
                </select>
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>
            </div>

            <span>
            <button type="button" class="btn btn_whiteline"  >선택 삭제</button>
            <button type="button" class="btn btn_red"  onclick="location.href='./popup.update.php'">팝업 등록</button>
            </span>
        </div>

        <div class="box3">
            <div  class="table adm">
                <table>
                    <colgroup>
                        <col width="15px"/>
                        <col width="15px"/>
                        <col width="*"/>
                        <col width="*"/>
                        <col width="*"/>
                        <col width="*"/>
                        <col width="*"/>
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
                        <th>No.</th>
                        <th>접속기기</th>
                        <th>분류</th>
                        <th>제목</th>
                        <th>시작일시</th>
                        <th>종료일시</th>
                        <th>팝업위치</th>
                        <th>시간</th>
                        <th>왼쪽 여백</th>
                        <th>위쪽 여백</th>
                        <th>너비</th>
                        <th>높이</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="chk[]" value="0" id="chk_0" /></td>
                        <td>1</td>
                        <td>모두</td>
                        <td>공지</td>
                        <td>메탈청병 변경</td>
                        <td>22-11-03 00:00</td>
                        <td>22-11-10 23:59</td>
                        <td>로그인후</td>
                        <td>48시간</td>
                        <td>600px</td>
                        <td>50px</td>
                        <td>500px</td>
                        <td>500px</td>
                        <td><button type="button" class="btn btn_whiteline" >수정</button><button type="button" class="btn btn_redline">삭제</button></td>
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