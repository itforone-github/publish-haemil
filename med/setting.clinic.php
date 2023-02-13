<?php
$pid = "setting_clinic";
include_once("../include/header.php");
//5.2한의원 정보
?>

    <section class="s_clinic">
        <div class="s_info mb20">
            <div class="box2">
                <div class="box_title bg_red">
                    <strong>유신한의원 기본정보</strong>
                    <a class="btn btn_line">저장하기</a>
                </div>
                <form>
                    <div class="form">
                        <div class="form_wrap">
                            <div>
                                <p><label>한의원명</label><input type="text" placeholder="한의원명"/></p>
                                <p><label>대표자</label><input type="text" placeholder="대표자"/></p>
                                <p><label>사업자등록번호</label><input type="text" placeholder="사업자등록번호"/></p>
                            </div>
                            <div>
                                <p><label>기본주소</label><input type="text" placeholder="기본주소"/></p>
                                <p><label>상세주소</label><input type="text" placeholder="상세주소"/></p>
                                <p><label>대표전화</label><input type="text" placeholder="대표전화"/></p>
                            </div>
                            <div>
                                <p><label>팩스번호</label><input type="text" placeholder="팩스번호"/></p>
                                <p><label>이메일</label><input type="text" placeholder="이메일"/></p>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="box2 mb20">
            <div class="inr">
                <div class="list">
                    <div class="title">
                        <p><img src="../img/common/ic_setting07.svg" /> 진료시간 <span class="txt_red">※ 18:00 시 이후 진료는 야간 진료로 분류됩니다.</span> </p>
                        <p><a class="btn btn_mini btn_gray">저장하기</a></p>
                    </div>
                    <div class="form">
                        <div class="form_wrap">
                            <div>
                                <dl>
                                    <dt>월요일</dt>
                                    <dd>
                                        <p><input type="checkbox" id="time" name="time" /> <label for="time">휴진</label></p>
                                        <input type="time" /> ~ <input type="time" />
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>화요일</dt>
                                    <dd>
                                        <p><input type="checkbox" id="time" name="time" /> <label for="time">휴진</label></p>
                                        <input type="time" /> ~ <input type="time" />
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>수요일</dt>
                                    <dd>
                                        <p><input type="checkbox" id="time" name="time" /> <label for="time">휴진</label></p>
                                        <input type="time" /> ~ <input type="time" />
                                    </dd>
                                </dl>
                            </div>
                            <div>
                                <dl>
                                    <dt>목요일</dt>
                                    <dd>
                                        <p><input type="checkbox" id="time" name="time" /> <label for="time">휴진</label></p>
                                        <input type="time" /> ~ <input type="time" />
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>금요일</dt>
                                    <dd>
                                        <p><input type="checkbox" id="time" name="time" /> <label for="time">휴진</label></p>
                                        <input type="time" /> ~ <input type="time" />
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>토요일</dt>
                                    <dd>
                                        <p><input type="checkbox" id="time" name="time" /> <label for="time">휴진</label></p>
                                        <input type="time" /> ~ <input type="time" />
                                    </dd>
                                </dl>
                            </div>
                            <div>
                                <dl>
                                    <dt>일요일</dt>
                                    <dd>
                                        <p><input type="checkbox" id="time" name="time" /> <label for="time">휴진</label></p>
                                        <input type="time" /> ~ <input type="time" />
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>공휴일</dt>
                                    <dd>
                                        <p><input type="checkbox" id="time" name="time" /> <label for="time">휴진</label></p>
                                        <input type="time" /> ~ <input type="time" />
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box2">
            <div class="inr">
                <div class="list">
                    <div class="title">
                        <p>추가정보</p>
                        <p><a class="btn btn_mini btn_gray">저장하기</a></p>
                    </div>
                    <div class="form">
                        <div class="form_wrap">
                            <div>
                                <p><label>진료과목</label><input type="text" placeholder="진료과목"/></p>
                                <p><label>편의정보</label><input type="text" placeholder="편의정보"/></p>
                                <p><label>업태</label><input type="text" placeholder="업태"/></p>
                            </div>
                            <div>
                                <p><label>홈페이지</label><input type="text" placeholder="링크주소를 입력하세요"/></p>
                                <p><label>블로그</label><input type="text" placeholder="링크주소를 입력하세요"/></p>
                                <p><label>유튜브</label><input type="text" placeholder="링크주소를 입력하세요"/></p>
                            </div>
                            <div>
                                <p><label>인스타그램</label><input type="text" placeholder="링크주소를 입력하세요"/></p>
                                <p><label>페이스북</label><input type="text" placeholder="링크주소를 입력하세요"/></p>
                                <p><label>기타 URL</label><input type="text" placeholder="링크주소를 입력하세요"/></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>