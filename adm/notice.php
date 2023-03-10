<?php
$pid = "a_notice";
include_once("../include/header.php");
//ADM 공지 관리
?>

    <section class="notice">
        <div class="panel">
            <p>총 <span class="red">4</span>개 </p>
            <div>
                <span class="select"><input type="radio" id="select1" name="select" class="red" checked/><label for="select1">전체</label>
                <input type="radio" id="select2" name="select" class="red"/><label for="select2">한의원</label>
                <input type="radio" id="select3" name="select" class="red"/><label for="select3">APP</label>
            </div>
            <div>

                <select name="search">
                    <option value="">선택</option>
                </select>
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

            </div>
            <span>
            <button type="button" class="btn btn_whiteline"  >선택 삭제</button>
            <button type="button" class="btn btn_red"  onclick="location.href='./notice.update.php'">공지 등록</button>
            </span>
        </div>

        <div class="box3">
            <div  class="table adm">
                <table>
                    <colgroup>
                        <col width="15px"/>
                        <col width="15px"/>
                        <col width="40px"/>
                        <col width="*"/>
                        <col width="*"/>
                        <col width="120px"/>
                        <col width="120px"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th><input type="checkbox" name="chkall" value="1" id="chkall"/></th>
                        <th>No.</th>
                        <th>노출</th>
                        <th>제목</th>
                        <th>내용</th>
                        <th>일자</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="chk[]" value="0" id="chk_0" /></td>
                        <td>1</td>
                        <td>모두</td>
                        <td><a href="../adm/notice.view.php">메탈청병 변경</a></td>
                        <td><a href="../adm/notice.view.php">공지사항 내용입니다</a></td>
                        <td>2022-10-31</td>
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