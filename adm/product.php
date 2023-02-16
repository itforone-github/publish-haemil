<?php
$pid = "a_product";
include_once("../include/header.php");
//ADM 상품 관리
?>

    <section class="product">
        <div class="panel">
            <p>총 <span class="red">4</span>개 </p>
            <div>
                <select name="search">
                    <option value="">선택</option>
                </select>
                <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

            </div>
            <span>
                <button type="button" class="btn btn_blue"  data-toggle="modal" data-target="#productmodal03">기본 배송비 설정</button>
                <button type="button" class="btn btn_red"  onclick="location.href='./product.update.php'">등록하기</button>
            </span>
        </div>
        <div class="tagbox">
            <div>
                <p><strong>카테고리</strong></p>
            </div>
            <div>
                <p><a><span class="tag active">전체</span></a></p>
                <p><a><span class="tag">기획전</span></a></p>
                <p><a><span class="tag">빈용방</span></a></p>
                <p><a><span class="tag">경옥고</span></a></p>
                <p><a><span class="tag">공진단</span></a></p>
                <p><a><span class="tag">근골격</span></a></p>
                <p><a><span class="tag">대사질환</span></a></p>
                <p><a><span class="tag">부인과</span></a></p>
                <p><a><span class="tag">보허약</span></a></p>
                <p><a><span class="tag">소화기</span></a></p>
                <p><a><span class="tag">순환기</span></a></p>
                <p><a><span class="tag">신경과</span></a></p>
                <p><a><span class="tag">피부과</span></a></p>
                <p><a><span class="tag">해독약</span></a></p>
                <p><a><span class="tag">호흡기</span></a></p>
                <p><a><span class="tag">외용재</span></a></p>
                <p><a><span class="tag">부자재</span></a></p>
                <p><a><span class="tag">다이어트</span></a></p>
                <p><a><span class="tag">그외처방</span></a></p>
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
                        <col width="*"/>
                        <col width="40px"/>
                        <col width="120px"/>
                        <col width="120px"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th>번호</th>
                        <th>카테고리</th>
                        <th>이미지</th>
                        <th>상품명</th>
                        <th>대상</th>
                        <th>그룹</th>
                        <th>배송비</th>
                        <th>처방상태</th>
                        <th>노출상태</th>
                        <!--th>결제수단</th-->
                        <th>순서</th>
                        <th>등록일</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>기획전</td>
                        <td><div class="thumb_img" style="background-image: url(../img/common/noimg.png)"></div></td>
                        <td>상품</td>
                        <td>그룹</td>
                        <td>15개 그룹</td>
                        <td>0원</td>
                        <td>처방불가</td>
                        <td>노출</td>
                        <!--td>카드, 현금</td-->
                        <td>1</td>
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