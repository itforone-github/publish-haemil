<?php
$pid = "px_setting";
include_once("../include/header.php");
//3.11	처방기본설정
?>

    <section class="p_setting">
        <div class="box2 mb20">
            <div class="inr">
                <div class="list">
                    <div class="title">
                        <p><img src="../img/common/ic_px01.svg" class="ic" /> 기본처방 </p>
                        <p><a class="btn btn_mini btn_gray">저장하기</a></p>
                    </div>
                    <div class="form">
                        <h4>기본처방</h4>
                        <div class="form_wrap">
                            <p>첩수
                            <span class="number_controller">
                                <button><i class="fa-regular fa-minus"></i></button>
                                <input type="number" value="1"/>
                                <button><i class="fa-regular fa-plus"></i></button>
                            </span>
                            </p>
                            <p>
                            <select>
                                <option>압력</option>
                            </select>
                            </p>
                            <p>팩수
                            <span class="number_controller">
                                <button><i class="fa-regular fa-minus"></i></button>
                                <input type="number" value="1"/>
                                <button><i class="fa-regular fa-plus"></i></button>
                            </span>
                            </p>
                            <p>팩용량
                            <span class="number_controller">
                                <button><i class="fa-regular fa-minus"></i></button>
                                <input type="number" value="1"/>
                                <button><i class="fa-regular fa-plus"></i></button>
                            </span>
                            </p>
                        </div>
                        <h4>재탕 선택시</h4>
                        <div class="form_wrap">
                            <p>팩수
                            <span class="number_controller">
                                <button><i class="fa-regular fa-minus"></i></button>
                                <input type="number" value="1"/>
                                <button><i class="fa-regular fa-plus"></i></button>
                            </span>
                            </p>
                            <p>팩용량
                            <span class="number_controller">
                                <button><i class="fa-regular fa-minus"></i></button>
                                <input type="number" value="1"/>
                                <button><i class="fa-regular fa-plus"></i></button>
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box2 mb20">
            <div class="inr">
                <div class="list">
                    <div class="title">
                        <div class="flex">
                            <p class="flex"><img src="../img/common/ic_px01.svg" class="ic" /> 기본처방</p>
                            <div class="tagbox">
                                <div>
                                <p><a><span class="tag active">탕전처방</span></a></p>
                                <p><a><span class="tag">환제처방</span></a></p>
                                <p><a><span class="tag">산제처방</span></a></p>
                                </div>
                            </div>
                        </div>
                        <p><a class="btn btn_mini btn_gray">저장하기</a></p>
                    </div>
                    <div class="form">
                        <h4>기본 박스</h4>
                        <div class="form_wrap circle">
                            <p>
                                <label for="basic_box01">
                                    <img src="https://www.하니마을.com/data/box/f2f4df4870f8f2dbd7b2efe96d983483.jpg">
                                    <input type="radio" id="basic_box01" name="basic_box" checked />45팩 박스
                                </label>
                            </p>
                            <p>
                                <label for="basic_box02">
                                    <img src="https://www.하니마을.com/data/box/d90523dca29b64753a4e3091550b342e.jpg">
                                    <input type="radio" id="basic_box02" name="basic_box" />60팩 박스
                                </label>
                            </p>
                        </div>
                        <h4>기본 파우치</h4>
                        <div class="tagbox">
                            <div>
                                <p><a><span class="tag active">스탠딩 파우치</span></a></p>
                                <p><a><span class="tag">스파우트 파우치(45팩 1박스)</span></a></p>
                            </div>
                        </div>
                        <div class="form_wrap circle">
                            <p>
                                <label for="basic_box01">
                                    <img src="https://www.하니마을.com/data/delivery/d5ca4de27b1feb26e817ff3c584f2ece.png">
                                    <input type="radio" id="basic_box01" name="basic_box" checked />01. 무광핑크
                                </label>
                            </p>
                            <p>
                                <label for="basic_box02">
                                    <img src="https://www.하니마을.com/data/delivery/434e92d508ca0d72ddf8a373cf3be16f.png">
                                    <input type="radio" id="basic_box02" name="basic_box" />02 무광그린
                                </label>
                            </p>
                        </div>
                        <h4>기본 인쇄</h4>
                        <div class="form_wrap">
                            <input type="checkbox" id="basic_print01" name="basic_print" /><label for="basic_print01">없음</label>&nbsp;&nbsp;
                            <input type="checkbox" id="basic_print02" name="basic_print" checked /><label for="basic_print02">한의원명</label>&nbsp;&nbsp;
                            <input type="checkbox" id="basic_print03" name="basic_print" checked /><label for="basic_print03">환자명</label>&nbsp;&nbsp;
                            <input type="checkbox" id="basic_print04" name="basic_print" /><label for="basic_print04">조제일자</label>&nbsp;&nbsp;
                            <input type="checkbox" id="basic_print05" name="basic_print" /><label for="basic_print05">연락처</label>
                        </div>
                        <h4>기본 달이는 시간</h4>
                        <div class="form_wrap circle">
                            <input type="radio" id="basic_hour01" name="basic_hour" /><label for="basic_hour01">1시간 30분</label>&nbsp;&nbsp;
                            <input type="radio" id="basic_hour02" name="basic_hour" checked /><label for="basic_hour02">2시간</label>&nbsp;&nbsp;
                            <input type="radio" id="basic_hour03" name="basic_hour" checked /><label for="basic_hour03">2시간</label>&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>