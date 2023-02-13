<?php
$pid = "setting_appointment";
include_once("../include/header.php");
//5.3진료예약설정(준비중)
?>

    <section class="s_appointment">
        <div class="box2">
            <div class="inr">
                <div class="list">
                    <div class="title">
                        <p><img src="../img/common/ic_setting08.svg" /> 예약가능시간 </p>
                        <p><a class="btn btn_mini btn_gray">저장하기</a></p>
                    </div>
                    <div class="conts">
                        <dl>
                            <dt class="week">
                                <select>
                                    <option>월요일</option>
                                </select>
                                <a class="btn btn_gray week_add">요일추가</a>
                            </dt>
                            <dd class="time">
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <a class="time_add">추가</a>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="week">
                                <select>
                                    <option>화요일</option>
                                </select>
                                <a class="btn btn_gray week_add">요일추가</a>
                            </dt>
                            <dd class="time">
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <p><input type="time" /><a class="delete"><i class="fa-light fa-xmark"></i></a></p>
                                <a class="time_add">추가</a>
                            </dd>
                        </dl>
                    </div>
                    <div class="headcount">
                        <p>타임당 최대 예약가능 인원</p>
                        <div class="number_controller"><button>
                            <i class="fa-regular fa-minus"></i></button>
                            <input type="number" value="1"/><button>
                            <i class="fa-regular fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ready">
        <p><i class="fa-regular fa-hourglass"></i> 준비중입니다.</p>
    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>