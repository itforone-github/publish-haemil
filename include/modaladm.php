

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
<!-- patient -->
<div class="modal fade" id="productupmodal01" tabindex="-1" aria-labelledby="productupmodal01Label" aria-hidden="true">
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


<!-- medicine -->
<div class="modal fade" id="medicinemodal01" tabindex="-1" aria-labelledby="medicinemodal01Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="medicinemodal01Label">약재 등록</h5>
            </div>
            <div class="modal-body">
                <form>
                    <label>약재 이미지 업로드</label><br/>
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
                    <button type="button" class="btn btn_gray2 w100">이미지 업로드</button><br/><br/>
                    <label>약재명</label><input type="text" placeholder="약재명을 입력해주세요"/>
                    <label>원산지</label><input type="text" placeholder="원산지를 입력해주세요"/>
                    <label>1g당 가격</label><input type="text" placeholder="숫자만 입력"/>
                    <label>상태</label><select><option>처방가능</option><option>처방블가능</option></select>
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