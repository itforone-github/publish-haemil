

<!-- 직원계정관리 계정생성 -->
<div class="modal fade" id="memberupmodal" tabindex="-1" aria-labelledby="memberupmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="memberupmodalLabel">직원계정 관리</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>담당자 성함</label><input type="text" placeholder="담당자 성함을 입력해주세요"/>
                    <label>연락처</label><input type="text" placeholder="연락처를 입력해주세요"/>
                    <label>아이디</label><input type="text" placeholder="아이디를 입력해주세요"/>
                    <label>비밀번호</label><input type="text" placeholder="아이디를 입력해주세요"/>
                    <label>권한</label><select><option>권한을 선택하세요</option></select>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
                <button type="button" class="btn btn-primary">등록</button>
            </div>
        </div>
    </div>
</div>

<!-- 서술식 결제 -->
<div class="modal fade" id="pxpr5modal" tabindex="-1" aria-labelledby="pxpr5modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-narrow">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pxpr5modalLabel">서술식 주문건 최종 결제</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>최종 금액</label><input type="text" class="txt_bold txt_red" value="000원" readonly/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
                <button type="button" class="btn btn-primary">결제</button>
            </div>
        </div>
    </div>
</div>

<!-- 처방하기 -->
<!-- 환자 목록-->
<div class="modal fade" id="pxmembermodal" tabindex="-1" aria-labelledby="pxmemberLabel" aria-hidden="true">
    <div class="modal-dialog modal-wide">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pxmembermodalLabel">환자 목록</h5>
            </div>
            <div class="modal-body">
                <div class="search">
                    <input class="search-bar" type="search" placeholder="환자 성함을 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>
                </div>
                    <div class="modal-box1">
                    <div class="table">
                        <table>
                            <thead>
                            <tr>
                                <th>차트번호</th>
                                <th>성함</th>
                                <th>생년월일</th>
                                <th>연락처</th>
                                <th>주소지</th>
                                <th>체질구분</th>
                                <th>처방기록</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="past_btn">
                                <td>00000001</td>
                                <td>김환자</td>
                                <td>1990-01-01</td>
                                <td>010-0000-0000</td>
                                <td>부산시 해운대구 센텀동로</td>
                                <td>소양인</td>
                                <td>1건</td>
                                <td>
                                    <button type="button" class="btn btn_mini btn_red2" >수정</button>
                                </td>
                            </tr>

                            <tr class="past_list">
                                <td colspan="9">
                                    <!--과거처방내역-->
                                    <table class="">

                                        <thead>
                                        <tr>
                                            <th class="" rowspan="2">번호</th>
                                            <th class="" rowspan="2">주문일</th>
                                            <th class="" rowspan="1">주문상태</th>
                                            <th class="" rowspan="1">주문번호</th>

                                            <th class="" rowspan="2">수량</th>
                                            <th class="" rowspan="2">주문금액</th>
                                        </tr>
                                        <tr>
                                            <th class="" rowspan="1">처방방식</th>
                                            <th class="" colspan="1">상품/처방명</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="" rowspan="2">8862</td>
                                            <td class="" rowspan="2">23-02-08</td>

                                            <td class="" rowspan="1">
                                                <span class="state">주문접수</span>
                                            </td>
                                            <td class="" colspan="1"><span class="txt_blue txt_under"><a href="../med/px.prescribe1.done.php">202302081123-1</a></span></td>

                                            <td scope="col" rowspan="2" class="">1</td>
                                            <td class="" rowspan="2">119,400원</td>
                                        </tr>
                                        <tr>
                                            <td class="" rowspan="1">탕전처방</td>
                                            <td class="" rowspan="1">맞춤처방</td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" rowspan="2">8862</td>
                                            <td class="" rowspan="2">23-02-08</td>

                                            <td class="" rowspan="1">
                                                <span class="state">주문접수</span>
                                            </td>
                                            <td class="" colspan="1"><span class="txt_blue txt_under"><a href="../med/px.prescribe1.done.php">202302081123-1</a></span></td>

                                            <td scope="col" rowspan="2" class="">1</td>
                                            <td class="" rowspan="2">119,400원</td>
                                        </tr>
                                        <tr>
                                            <td class="" rowspan="1">탕전처방</td>
                                            <td class="" rowspan="1">맞춤처방</td>
                                            </td>
                                        </tr>                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr class="past_btn">
                                <td>00000001</td>
                                <td>김환자</td>
                                <td>1990-01-01</td>
                                <td>010-0000-0000</td>
                                <td>부산시 해운대구 센텀동로</td>
                                <td>소양인</td>
                                <td>1건</td>
                                <td>
                                    <button type="button" class="btn btn_mini btn_red2" >수정</button>
                                </td>
                            </tr>

                            <tr class="past_list">
                                <td colspan="9">
                                    <div class="empty">과거처방내역이 없습니다.</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="b-pagination-outer">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
            </div>
        </div>
    </div>
</div>

<!-- 처방 목록 -->
<div class="modal fade" id="pxlistmodal" tabindex="-1" aria-labelledby="pxlistmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-wide">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="tabs modal-title">
                    <li class="tab-link current" data-tab="tab-1">기성 처방</li>
                    <li class="tab-link" data-tab="tab-2">나의 처방</li>
                    <li class="tab-link" data-tab="tab-3">과거 처방</li>
                </ul>
            </div>
            <div class="modal-body">
                <div class="panel">
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
                </div>
                <!--기성 처방-->
                <div  id="tab-1" class="tab-content current modal-box1">
                    <div class="flex jc-sb tabletit">
                        <p>기성 처방 리스트</p>
                        <span>
                            <input type="checkbox" id="type1" name="type" /> <label for="type1"> 탕전처방</label>
                            <input type="checkbox" id="type2" name="type" /> <label for="type2"> 환제처방</label>
                            <input type="checkbox" id="type3" name="type" /> <label for="type3"> 산제처방</label>
                        </span>
                    </div>
                    <div class="table">
                        <table>
                            <thead>
                            <tr>
                                <th>처방집명</th>
                                <th>처방전명</th>
                                <th>산출물</th>
                                <th>참고사항</th>
                                <th>약재수</th>
                                <th>누락수</th>
                                <th>처방 선택</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>동의보감</td>
                                <td>쌍기탕가녹용</td>
                                <td>탕전처방</td>
                                <td>잉부의 감한에 한열이 학질과 같은 증을 다스린다.</td>
                                <td class="txt_red txt_bold txt_under" data-toggle="collapse" data-target="#list1-1" aria-expanded="false" aria-controls="list1-1">1 <i class="fa-solid fa-square-chevron-down"></i></td>
                                <td>1</td>
                                <td><button type="button" class="btn btn_gray2">선택</button></td>
                            </tr>
                            <tr class="collapse" id="list1-1">
                                <td  colspan="7">
                                    <div class="card card-body table table2">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>약재명</th>
                                                <th>첩량(g)</th>
                                                <th>약재명</th>
                                                <th>첩량(g)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>건율</td>
                                                <td>1,000g</td>
                                                <td>건율</td>
                                                <td>1,000g</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>동의보감</td>
                                <td>쌍기탕가녹용</td>
                                <td>탕전처방</td>
                                <td>잉부의 감한에 한열이 학질과 같은 증을 다스린다.</td>
                                <td class="txt_red txt_bold txt_under" data-toggle="collapse" data-target="#list1-2" aria-expanded="false" aria-controls="list1-2">1 <i class="fa-solid fa-square-chevron-down"></i></td>
                                <td>1</td>
                                <td><button type="button" class="btn btn_redline2">선택됨</button></td>
                            </tr>
                            <tr class="collapse" id="list1-2">
                                <td  colspan="7">
                                    <div class="card card-body table table2">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>약재명</th>
                                                <th>첩량(g)</th>
                                                <th>약재명</th>
                                                <th>첩량(g)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>건율</td>
                                                <td>1,000g</td>
                                                <td>건율</td>
                                                <td>1,000g</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
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
                <!--기성 처방-->
                <!--나의 처방-->
                <div id="tab-2" class="tab-content modal-box1">
                    <div class="flex jc-sb tabletit">
                        <p>나의 처방 리스트</p>
                        <span>
                            <input type="checkbox" id="type1" name="type" /> <label for="type1"> 탕전처방</label>
                            <input type="checkbox" id="type2" name="type" /> <label for="type2"> 환제처방</label>
                            <input type="checkbox" id="type3" name="type" /> <label for="type3"> 산제처방</label>
                        </span>
                    </div>
                    <div class="table">
                        <table>
                            <thead>
                            <tr>
                                <th>등록일</th>
                                <th>구분</th>
                                <th>처방명</th>
                                <th>약재수</th>
                                <th>처방 선택</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>23-01-23</td>
                                <td>탕전처방</td>
                                <td>처방명</td>
                                <td class="txt_red txt_bold txt_under" data-toggle="collapse" data-target="#list2-1" aria-expanded="false" aria-controls="list2-1">1 <i class="fa-solid fa-square-chevron-down"></i></td>
                                <td><button type="button" class="btn btn_gray2">선택</button></td>
                            </tr>
                            <tr class="collapse" id="list2-1">
                                <td  colspan="7">
                                    <div class="card card-body table table2">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>약재명</th>
                                                <th>첩량(g)</th>
                                                <th>약재명</th>
                                                <th>첩량(g)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>건율</td>
                                                <td>1,000g</td>
                                                <td>건율</td>
                                                <td>1,000g</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
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
                <!--나의 처방-->
                <!--과거 처방-->
                <div id="tab-3" class="tab-content modal-box1">
                    <div class="flex jc-sb tabletit">
                        <p>과거 처방 리스트</p>
                        <span>
                            <input type="checkbox" id="type1" name="type" /> <label for="type1"> 탕전처방</label>
                            <input type="checkbox" id="type2" name="type" /> <label for="type2"> 환제처방</label>
                            <input type="checkbox" id="type3" name="type" /> <label for="type3"> 산제처방</label>
                        </span>
                    </div>
                    <div class="table">
                        <table>
                            <thead>
                            <tr>
                                <th>처방일</th>
                                <th>구분</th>
                                <th>환자명</th>
                                <th>처방명</th>
                                <th>약재수</th>
                                <th>처방 선택</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>23-01-23</td>
                                <td>탕전처방</td>
                                <td>환자명</td>
                                <td>처방명</td>
                                <td class="txt_red txt_bold txt_under" data-toggle="collapse" data-target="#list3-1" aria-expanded="false" aria-controls="list3-1">1 <i class="fa-solid fa-square-chevron-down"></i></td>
                                <td><button type="button" class="btn btn_gray2">선택</button></td>
                            </tr>
                            <tr class="collapse" id="list3-1">
                                <td  colspan="7">
                                    <div class="card card-body table table2">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>약재명</th>
                                                <th>첩량(g)</th>
                                                <th>약재명</th>
                                                <th>첩량(g)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>건율</td>
                                                <td>1,000g</td>
                                                <td>건율</td>
                                                <td>1,000g</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
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
                <!--과거 처방-->
            </div>
            <div  class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
                <button type="button" class="btn btn-primary">선택 처방 적용</button>
            </div>
        </div>
    </div>
</div>

<!-- 약재 목록 -->
<div class="modal fade" id="pxmedimodal" tabindex="-1" aria-labelledby="pxmedimodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-wide">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="pxmedimodalLabel">약재 목록</h5>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <div class="max-none" style="flex-wrap: wrap">
                        <span class="select"><input type="radio" id="medi1" name="medi" class="red" checked/><label for="medi1">전체</label>
                        <input type="radio" id="medi2" name="medi" class="red"/><label for="medi2">ㄱ</label>
                        <input type="radio" id="medi3" name="medi" class="red"/><label for="medi3">ㄴ</label>
                        <input type="radio" id="medi4" name="medi" class="red"/><label for="medi4">ㄷ</label>
                        <input type="radio" id="medi5" name="medi" class="red"/><label for="medi5">ㄹ</label>
                        <input type="radio" id="medi6" name="medi" class="red"/><label for="medi6">ㅁ</label>
                        <input type="radio" id="medi7" name="medi" class="red"/><label for="medi7">ㅂ</label>
                        <input type="radio" id="medi8" name="medi" class="red"/><label for="medi8">ㅅ</label>
                        <input type="radio" id="medi9" name="medi" class="red"/><label for="medi9">ㅇ</label>
                        <input type="radio" id="medi10" name="medi" class="red"/><label for="medi10">ㅈ</label>
                        <input type="radio" id="medi11" name="medi" class="red"/><label for="medi11">ㅊ</label>
                        <input type="radio" id="medi12" name="medi" class="red"/><label for="medi12">ㅋ</label>
                        <input type="radio" id="medi13" name="medi" class="red"/><label for="medi13">ㅌ</label>
                        <input type="radio" id="medi14" name="medi" class="red"/><label for="medi14">ㅍ</label>
                        <input type="radio" id="medi15" name="medi" class="red"/><label for="medi15">ㅎ</label></span>
                    </div>
                    <div>
                        <select name="search">
                            <option value="">선택</option>
                        </select>
                        <input class="search-bar" type="search" placeholder="검색어를 입력하세요" /><button type="button" class="btn_search"><i class="fa-light fa-magnifying-glass"></i></button>

                    </div>
                </div>
                <div class="modal-box1">
                    <div class="flex jc-sb tabletit">
                        <p>약재 리스트</p>
                    </div>
                    <div class="table">
                        <table>
                            <colgroup>
                                <col width="15px"/>
                                <col width="40px"/>
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
                                <th>약재명</th>
                                <th>후하가능</th>
                                <th>후하추천</th>
                                <th>1g 당 가격</th>
                                <th>원산지</th>
                                <th>상태</th>
                                <th>약재 선택</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>운모</td>
                                <td>O</td>
                                <td>추천</td>
                                <td>100</td>
                                <td>중국</td>
                                <td>처방가능</td>
                                <td><button type="button" class="btn btn_gray2">선택</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>운모</td>
                                <td>O</td>
                                <td>추천</td>
                                <td>100</td>
                                <td>중국</td>
                                <td>처방가능</td>
                                <td><button type="button" class="btn btn_redline2">선택됨</button></td>
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
            </div>
            <div  class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
                <button type="button" class="btn btn-primary">선택 처방 적용</button>
            </div>
        </div>
    </div>
</div>


<!-- 복용법 목록 -->
<div class="modal fade" id="pxtakemodal" tabindex="-1" aria-labelledby="pxtakemodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-wide">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="pxtakemodalLabel">복용법 목록</h5>
            </div>
            <div class="modal-body">
                <div class="modal-box1">
                    <div class="table">
                        <table>
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>복용시기</th>
                                <th>복용시간</th>
                                <th>복용횟수</th>
                                <th>제목</th>
                                <th>내용</th>
                                <th>첨부파일</th>
                                <th>등록일</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>식전</td>
                                <td>30분</td>
                                <td>5회</td>
                                <td>복용법1</td>
                                <td>복용안내 : 최대한 시간에 맞춰 드셔야 효능이 좃습니다. 약을 몰아서 드시지...</td>
                                <td><span class="txt_under"><a>사진.png</a></span></td>
                                <td>2022-01-01</td>
                                <td><button type="button" class="btn btn_gray2">선택</button></td>
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
            </div>
            <div  class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $(".past_list").css("display","none");
        $(".past_list:first").addClass("selected")
        $(".past_btn").click(function(){
            if($("+.past_list", this).css("display")=="none"){
                $(".past_list").slideUp(0);
                $("+.past_list", this).slideDown(0);
                $(".past_btn").removeClass("selected");
                $(this).addClass("selected");
            }
        }).mouseover(function(){
            $(this).addClass("over")
        }).mouseout(function(){
            $(this).removeClass("over")
        })
        //$("dt").click().mouseover().mouseout()
    })
</script>