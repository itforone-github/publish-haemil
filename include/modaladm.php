

<!-- point -->
<div class="modal fade" id="pointmodal01" tabindex="-1" aria-labelledby="pointmodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pointmodal01Label">포인트 지급/차감</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>대상 ID</label><input type="text" placeholder="대상 ID을 입력해주세요"/>
                    <label>포인트 금액</label><input type="text" placeholder="포인트 금액을 입력해주세요"/>
                    <label>포인트 내용</label><input type="text" placeholder="포인트 내용을 입력해주세요"/>
                    <div class="flex jc-sb">
                        <div class="w50"><input type="radio" name="point"/><label>포인트 지급</label></div>
                        <div class="w50"><input type="radio" name="point/"><label>포인트 차감</label></div>
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
<!-- clinic.group -->
<div class="modal fade" id="groupmodal01" tabindex="-1" aria-labelledby="groupmodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="groupmodal01Label">한의원 그룹 등록</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>그룹명</label><input type="text" placeholder="그룹명을 입력해주세요"/>
                    <label>조제비</label><input type="text" placeholder="조제비를 입력해주세요"/>
                    <label>포장비</label><input type="text" placeholder="포장비를 입력해주세요"/>
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
<!-- patient -->
<div class="modal fade" id="patientmodal01" tabindex="-1" aria-labelledby="patientmodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="patientmodal01Label">환자 정보</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>차트번호</label><input type="text" value="00000001" readonly/>
                    <label>한의원명</label><input type="text" value="유신한의원" readonly/>
                    <label>성함</label><input type="text" value="김환자" readonly/>
                    <label>어플연동(ID)</label><input type="text" value="kim900101" readonly/>
                    <label>생년월일</label><input type="text" value="1990-01-01" readonly/>
                    <label>연락처</label><input type="text" value="010-0000-0000" readonly/>
                    <label>주소</label><input type="text" value="부산시 해운대구 센텀동로 7" readonly/>
                    <label>체질구분</label><input type="text" value="소양인" readonly/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
            </div>
        </div>
    </div>
</div>
<!-- 한의원 검색 -->
<div class="modal fade" id="productupmodal01" tabindex="-1" aria-labelledby="productupmodal01Label" aria-hidden="true" style="z-index:99999;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productupmodal01Label">개별 한의원 검색</h5>
            </div>
            <div class="modal-body">
                <input type="text"  placeholder="한의원명을 입력하세요"/>
                <div class="list">
                    <a><p>병원명 | 우상우한의원<br>담당자ID | premind00<br>담당자명 | 우상우</p></a>
                </div>
                <div class="list">
                    <a><p>병원명 | 우상우한의원<br>담당자ID | premind00<br>담당자명 | 우상우</p></a>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
            </div>
        </div>
    </div>
</div>

<!-- 한의원 검색 -->
<div class="modal fade" id="productupmodal02" tabindex="-1" aria-labelledby="productupmodal02Label" aria-hidden="true" style="z-index:99999;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productupmodal02Label">가격 적용 한의원 선택</h5>
            </div>
            <div class="modal-body">
                <p>1개는 필수로 적용해야합니다.</p><br/>
                <span class="select"><input type="checkbox" id="groups1" name="groupselect"/><label for="groups1">기본</label>
                                 <input type="checkbox" id="groups2" name="groupselect"/><label for="groups2">하늘체</label>
                                 <input type="checkbox" id="groups3" name="groupselect" disabled/><label for="groups4">하늘체</label>
                                 <input type="checkbox" id="groups4" name="groupselect"/><label for="groups4">하늘체</label>
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
                <button type="button" class="btn btn-primary">적용</button>
            </div>
        </div>
    </div>
</div>


<!-- medicine -->
<div class="modal fade" id="medicinemodal01" tabindex="-1" aria-labelledby="medicinemodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="medicinemodal01Label">약재 등록</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>약재명</label><input type="text" placeholder="약재명을 입력해주세요"/>
                    <label>원산지</label><input type="text" placeholder="원산지를 입력해주세요"/>
                    <label>1g당 가격</label><input type="text" placeholder="숫자만 입력"/>
                    <label>상태</label><select><option>처방가능</option><option>처방블가능</option></select>
                    <label>후하추천</label>
                    <div class="flex jc-sb ">
                        <div class="w50"><input type="radio" id="select1-1" name="select1"/><label for="select1-1">추천</label></div>
                        <div class="w50"><input type="radio" id="select1-2" name="select1"/><label for="select1-2">비추천</label></div>
                    </div>
                    <br/>
                    <label>후하여부</label>
                    <div class="flex jc-sb ">
                        <div class="w50"><input type="radio" id="select2-1" name="select2"/><label for="select2-1">후하가능</label></div>
                        <div class="w50"><input type="radio" id="select2-2" name="select2"/><label for="select2-2">후하불가</label></div>
                    </div>
                    <br/>
                    <label>상세설명</label><textarea placeholder="상세설명을 입력하세요"></textarea>
                    <label>검색 키워드</label><input type="text" placeholder="키워드를 입력하세요"/>
                    <p>※ 약재 검색에 필요한 키워드를 등록해주세요. ","콤마로 키워드 구분. 예)감초,염증제거,해독작용</p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary">등록</button>
            </div>
        </div>
    </div>
</div>

<!-- texture -->
<div class="modal fade" id="texturemodal01" tabindex="-1" aria-labelledby="texturemodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="texturemodal01Label">제형 등록</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>제형명</label><input type="text" placeholder="약재명을 입력해주세요"/>
                    <label>1g당 가격</label><input type="text" placeholder="숫자만 입력"/>
                    <label>순서</label><input type="text" placeholder="순서를 입력해주세요"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary">등록</button>
            </div>
        </div>
    </div>
</div>


<!-- plastic -->
<div class="modal fade" id="plasticmodal01" tabindex="-1" aria-labelledby="plasticmodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="plasticemodal01Label">비닐 포장 등록</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>대상</label><select><option>그룹</option><option>개별</option></select>
                    <!--개별 시 노출-->
                    <a  data-toggle="modal" data-target="#productupmodal01"><input type="text"  placeholder="한의원명을 입력하세요"/></a>
                    <!--그룹 시 노출-->
                    <p class=""><span class="select"><input type="checkbox" id="group2-1" name="group2"/><label for="group2-1">기본</label>
                                 <input type="checkbox" id="group2-2" name="group2"/><label for="group2-2">하늘체</label></span></p>
                    <!---->
                    <label>박스</label><select><option>진공팩</option><option>스탠드지퍼백</option><option>60팩</option><option>소박스</option></select>
                    <label>가격</label><input type="text" placeholder="숫자만 입력"/>
                    <label>사용여부</label>
                    <div class="flex jc-sb ">
                        <div class="w50"><input type="radio" id="select2-1" name="select2"/><label for="select2-1">사용</label></div>
                        <div class="w50"><input type="radio" id="select2-2" name="select2"/><label for="select2-2">사용안함</label></div>
                    </div>
                    <br/>
                    <label>노출 순서</label><input type="text" placeholder="숫자만 입력"/><label>이미지 업로드</label><br/>
                    <div class="newpic-upload w100">
                        <div class="newpic-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="newpic-preview">
                            <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn_gray2 w100">이미지 업로드</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary">등록</button>
            </div>
        </div>
    </div>
</div>

<!-- stick -->
<div class="modal fade" id="stickmodal01" tabindex="-1" aria-labelledby="stickmodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stickmodal01Label">스틱 포장 등록</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>대상</label><select><option>그룹</option><option>개별</option></select>
                    <!--개별 시 노출-->
                    <a  data-toggle="modal" data-target="#productupmodal01"><input type="text"  placeholder="한의원명을 입력하세요"/></a>
                    <!--그룹 시 노출-->
                    <p class=""><span class="select"><input type="checkbox" id="group2-1" name="group2"/><label for="group2-1">기본</label>
                                 <input type="checkbox" id="group2-2" name="group2"/><label for="group2-2">하늘체</label></span></p>
                    <!---->
                    <label>박스</label><select><option>인박스</option><option>아웃박스</option><option>인+아웃박스</option></select>
                    <label>포장명</label><input type="text" placeholder="포장명을 입력하세요"/>
                    <label>가격</label><input type="text" placeholder="숫자만 입력"/>
                    <label>사용여부</label>
                    <div class="flex jc-sb ">
                        <div class="w50"><input type="radio" id="select2-1" name="select2"/><label for="select2-1">사용</label></div>
                        <div class="w50"><input type="radio" id="select2-2" name="select2"/><label for="select2-2">사용안함</label></div>
                    </div>
                    <br/>
                    <label>노출 순서</label><input type="text" placeholder="숫자만 입력"/><label>이미지 업로드</label><br/>
                    <div class="newpic-upload w100">
                        <div class="newpic-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="newpic-preview">
                            <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn_gray2 w100">이미지 업로드</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary">등록</button>
            </div>
        </div>
    </div>
</div>
<!-- stickprt -->
<div class="modal fade" id="stickprtmodal01" tabindex="-1" aria-labelledby="stickprtmodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stickprtmodal01Label">스틱 인쇄 등록</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>대상</label><select><option>그룹</option><option>개별</option></select>
                    <!--개별 시 노출-->
                    <a  data-toggle="modal" data-target="#productupmodal01"><input type="text"  placeholder="한의원명을 입력하세요"/></a>
                    <!--그룹 시 노출-->
                    <p class=""><span class="select"><input type="checkbox" id="group2-1" name="group2"/><label for="group2-1">기본</label>
                                 <input type="checkbox" id="group2-2" name="group2"/><label for="group2-2">하늘체</label></span></p>
                    <!---->
                    <label>인쇄명</label><input type="text" placeholder="인쇄명을 입력하세요"/>
                    <label>가격</label><input type="text" placeholder="숫자만 입력"/>
                    <label>사용여부</label>
                    <div class="flex jc-sb ">
                        <div class="w50"><input type="radio" id="select2-1" name="select2"/><label for="select2-1">사용</label></div>
                        <div class="w50"><input type="radio" id="select2-2" name="select2"/><label for="select2-2">사용안함</label></div>
                    </div>
                    <br/>
                    <label>노출 순서</label><input type="text" placeholder="숫자만 입력"/><label>이미지 업로드</label><br/>
                    <div class="newpic-upload w100">
                        <div class="newpic-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="newpic-preview">
                            <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn_gray2 w100">이미지 업로드</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary">등록</button>
            </div>
        </div>
    </div>
</div>
<!-- stickdsg -->
<div class="modal fade" id="stickdsgmodal01" tabindex="-1" aria-labelledby="stickdsgmodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stickdsgmodal01Label">스틱 디자인 등록</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>대상</label><select><option>그룹</option><option>개별</option></select>
                    <!--개별 시 노출-->
                    <a  data-toggle="modal" data-target="#productupmodal01"><input type="text"  placeholder="한의원명을 입력하세요"/></a>
                    <!--그룹 시 노출-->
                    <p class=""><span class="select"><input type="checkbox" id="group2-1" name="group2"/><label for="group2-1">기본</label>
                                 <input type="checkbox" id="group2-2" name="group2"/><label for="group2-2">하늘체</label></span></p>
                    <!---->
                    <label>디자인명</label><input type="text" placeholder="디자인명을 입력하세요"/>
                    <label>가격</label><input type="text" placeholder="숫자만 입력"/>
                    <label>사용여부</label>
                    <div class="flex jc-sb ">
                        <div class="w50"><input type="radio" id="select2-1" name="select2"/><label for="select2-1">사용</label></div>
                        <div class="w50"><input type="radio" id="select2-2" name="select2"/><label for="select2-2">사용안함</label></div>
                    </div>
                    <br/>
                    <label>노출 순서</label><input type="text" placeholder="숫자만 입력"/> <label>이미지 업로드</label><br/>
                    <div class="newpic-upload w100">
                        <div class="newpic-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="newpic-preview">
                            <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn_gray2 w100">이미지 업로드</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary">등록</button>
            </div>
        </div>
    </div>
</div>
<!-- onetouch -->
<div class="modal fade" id="onetouchmodal01" tabindex="-1" aria-labelledby="onetouchmodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="onetouchmodal01Label">원터치통 등록</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>원터치통명</label><input type="text" placeholder="원터치통명을 입력하세요"/>
                    <label>가격</label><input type="text" placeholder="숫자만 입력"/>
                    <label>사용여부</label>
                    <div class="flex jc-sb ">
                        <div class="w50"><input type="radio" id="select2-1" name="select2"/><label for="select2-1">사용</label></div>
                        <div class="w50"><input type="radio" id="select2-2" name="select2"/><label for="select2-2">사용안함</label></div>
                    </div>
                    <br/>
                    <label>노출 순서</label><input type="text" placeholder="숫자만 입력"/><label>이미지 업로드</label><br/>
                    <div class="newpic-upload w100">
                        <div class="newpic-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="newpic-preview">
                            <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn_gray2 w100">이미지 업로드</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary">등록</button>
            </div>
        </div>
    </div>
</div>
<!-- box -->
<div class="modal fade" id="boxmodal01" tabindex="-1" aria-labelledby="boxmodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="boxmodal01Label">전용박스 등록</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>대상</label><select><option>그룹</option><option>개별</option></select>
                    <!--개별 시 노출-->
                    <a  data-toggle="modal" data-target="#productupmodal01"><input type="text"  placeholder="한의원명을 입력하세요"/></a>
                    <!--그룹 시 노출-->
                    <p class=""><span class="select"><input type="checkbox" id="group2-1" name="group2"/><label for="group2-1">기본</label>
                                 <input type="checkbox" id="group2-2" name="group2"/><label for="group2-2">하늘체</label></span></p>
                    <!---->
                    <label>구분</label><select><option>60팩</option><option>45팩</option></select>
                    <label>박스명</label><input type="text" placeholder="박스명을 입력하세요"/>
                    <label>가격</label><input type="text" placeholder="숫자만 입력"/>
                    <label>사용여부</label>
                    <div class="flex jc-sb ">
                        <div class="w50"><input type="radio" id="select2-1" name="select2"/><label for="select2-1">사용</label></div>
                        <div class="w50"><input type="radio" id="select2-2" name="select2"/><label for="select2-2">사용안함</label></div>
                    </div>
                    <br/>
                    <label>이미지 업로드</label><br/>
                    <div class="newpic-upload w100">
                        <div class="newpic-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="newpic-preview">
                            <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn_gray2 w100">이미지 업로드</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary">등록</button>
            </div>
        </div>
    </div>
</div>
<!-- pouch -->
<div class="modal fade" id="pouchmodal01" tabindex="-1" aria-labelledby="pouchmodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pouchmodal01Label">파우치 등록</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>대상</label><select><option>그룹</option><option>개별</option></select>
                    <!--개별 시 노출-->
                    <a  data-toggle="modal" data-target="#productupmodal01"><input type="text"  placeholder="한의원명을 입력하세요"/></a>
                    <!--그룹 시 노출-->
                    <p class=""><span class="select"><input type="checkbox" id="group2-1" name="group2"/><label for="group2-1">기본</label>
                                 <input type="checkbox" id="group2-2" name="group2"/><label for="group2-2">하늘체</label></span></p>
                    <!---->
                    <label>구분</label><select><option>스탠딩파우치</option><option>스파우트파우치(45팩1박스)</option></select>
                    <label>파우치명</label><input type="text" placeholder="파우치명을 입력하세요"/>
                    <label>가격</label><input type="text" placeholder="숫자만 입력"/>
                    <label>사용여부</label>
                    <div class="flex jc-sb ">
                        <div class="w50"><input type="radio" id="select2-1" name="select2"/><label for="select2-1">사용</label></div>
                        <div class="w50"><input type="radio" id="select2-2" name="select2"/><label for="select2-2">사용안함</label></div>
                    </div>
                    <br/>
                    <label>노출 순서</label><input type="text" placeholder="숫자만 입력"/><label>이미지 업로드</label><br/>
                    <div class="newpic-upload w100">
                        <div class="newpic-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="newpic-preview">
                            <div id="imagePreview" style="background-image: url('../img/common/noimg.png');">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn_gray2 w100">이미지 업로드</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary">등록</button>
            </div>
        </div>
    </div>
</div>