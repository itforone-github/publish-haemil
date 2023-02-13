<?php
$pid = "a_review";
include_once("../include/header.php");
//ADM 공지 관리
?>

    <section class="review">
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
                        <col width="120px"/>
                        <col width="120px"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th><input type="checkbox" name="chkall" value="1" id="chkall"/></th>
                        <th>No.</th>
                        <th>한의원명</th>
                        <th>구분</th>
                        <th>아이디</th>
                        <th>신고구분</th>
                        <th>내용</th>
                        <th>일자</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="chk[]" value="0" id="chk_0" /></td>
                        <td>1</td>
                        <td>유신한의원</td>
                        <td>예약인증</td>
                        <td>sonnim1</td>
                        <td>고객</td>
                        <td>예약했는데 1분이나 기다림 ㅡㅡ;</td>
                        <td>2022-10-31</td>
                        <td><button type="button" class="btn btn_whiteline" data-toggle="modal" data-target="#reviewmodal01">제재</button><button type="button" class="btn btn_redline">삭제</button></td>
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