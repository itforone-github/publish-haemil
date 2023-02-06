<?php
$pid = "a_clinicgrp";
include_once("../include/header.php");
//ADM 한의원 그룹관리
?>

<section class="clinic">
    <div class="panel">
        <p>총 <span class="red">4</span>개 </p>
        <div>
            <select name="search">
                <option value="">선택</option>
            </select>
            <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

        </div>
        <button type="button" class="btn btn_red" data-toggle="modal" data-target="#groupmodal01">등록하기</button>
    </div>
    <div class="box3">
        <div class="table adm">
            <table>
                <colgroup>
                    <col width="5%">
                    <col width="*">
                    <col width="10%">
                    <col width="10%">
                    <col width="15%">
                    <col width="10%">
                    <col width="15%">
                </colgroup>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>그룹명</th>
                    <th>조제비</th>
                    <th>포장비</th>
                    <th>마감시간</th>
                    <th>등록일</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>기본</td>
                    <td>5,000</td>
                    <td>5,000</td>
                    <td>05:50~18:00</td>
                    <td>23-01-16</td>
                    <td><button type="button" class="btn btn_whiteline">수정</button><button type="button" class="btn btn_redline">삭제</button></td>
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

    <!-- Modal -->
    <div class="modal fade" id="groupmodal01" tabindex="-1" aria-labelledby="groupmodal01Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="groupmodal01Label">한의원 그룹 등록</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <label>그룹명</label><input type="text" placeholder="그룹명을 입력해주세요">
                        <label>조제비</label><input type="text" placeholder="조제비를 입력해주세요">
                        <label>포장비</label><input type="text" placeholder="포장비를 입력해주세요">
                        <label>마감시간</label>
                        <div class="flex jc-sb">
                            <div class="w50"><input type="time" name=""></div>
                            <div class="w50"><input type="time" name=""></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                    <button type="button" class="btn btn-primary">등록</button>
                </div>
            </div>
        </div>
    </div>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>