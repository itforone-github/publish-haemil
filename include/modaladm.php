

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