<?php
$pid = "a_point";
include_once("../include/header.php");
//ADM 포인트내역
?>


<section class="point">
    <div class="panel">
        <div>
            <select name="search">
            <option value="">선택</option>
            </select>
            <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

        </div>
        <button type="button" class="btn btn_red" data-toggle="modal" data-target="#pointmodal01">지급/차감</button>
    </div>
    <div class="box3">
        <div class="table adm">
            <table>
                <thead>
                <tr>
                    <th>번호</th>
                    <th>일자</th>
                    <th>소속</th>
                    <th>아이디</th>
                    <th>내용</th>
                    <th>사용 포인트</th>
                    <th>지급 포인트</th>
                    <th>잔여 포인트</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>2022-10-31</td>
                    <td>유신한의원</td>
                    <td>yooshin1</td>
                    <td>상품 결제후 포인트 차감</td>
                    <td class="red">-10,000</td>
                    <td class="blue">+</td>
                    <td>10,000</td>
                    <td>
                        <button type="button" class="btn btn_white">상세</button></td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="pointmodal01" tabindex="-1" aria-labelledby="pointmodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="epointmodal01Label">포인트 지급/차감</h5>
            </div>
            <div class="modal-body">
                <form>
                <label>대상 ID</label><input type="text" placeholder="대상 ID을 입력해주세요">
                <label>포인트 금액</label><input type="text" placeholder="포인트 금액을 입력해주세요">
                <label>포인트 내용</label><input type="text" placeholder="포인트 내용을 입력해주세요">
                <div class="flex jc-sb">
                    <div class="w50"><input type="radio" name="point"><label>포인트 지급</label></div>
                    <div class="w50"><input type="radio" name="point"><label>포인트 차감</label></div>
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
