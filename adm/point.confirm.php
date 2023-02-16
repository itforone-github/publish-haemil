<?php
$pid = "a_pointcfm";
include_once("../include/header.php");
//ADM 포인트내역
?>


<section class="pointcfm">
    <div class="panel">
        <div>
            <select name="search">
            <option value="">선택</option>
            </select>
            <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

        </div>
    </div>
    <div class="box3">
        <div class="table adm">
            <table>

                <colgroup>
                    <col width="15px"/>
                    <col width="*"/>
                    <col width="*"/>
                    <col width="*"/>
                    <col width="*"/>
                    <col width="*"/>
                    <col width="120px"/>
                </colgroup>
                <thead>
                <tr>
                    <th>번호</th>
                    <th>요청일자</th>
                    <th>소속</th>
                    <th>아이디</th>
                    <th>선결제 상품</th>
                    <th>지급 예정 포인트</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2</td>
                    <td>2022-10-31</td>
                    <td>유신한의원</td>
                    <td>yooshin1</td>
                    <td>30,000,000</td>
                    <td>32,100,000</td>
                    <td>
                        <button type="button" class="btn btn_red" data-toggle="modal" data-target="#pointmodal02">입금 확인</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2022-10-31</td>
                    <td>유신한의원</td>
                    <td>yooshin1</td>
                    <td>30,000,000</td>
                    <td>32,100,000</td>
                    <td>
                        <button type="button" class="btn btn_gray" >지급 완료</button></td>
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