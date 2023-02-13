

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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary">등록</button>
            </div>
        </div>
    </div>
</div>