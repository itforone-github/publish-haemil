<?php
$pid = "setting_homepage";
include_once("../include/header.php");
//5.8	홈페이지 제작·관리
?>

    <section class="s_homepage">
        <div class="s_type mb20">
            <ul>
                <li onclick="location.href='../med/homepage.sample1.php'">
                    <img src="../img//med/homepage01.jpg" />
                    <p>홈페이지 제작 유형 01</p>
                    <span>템플릿 + 셀프 콘텐츠</span>
                </li>
                <li onclick="location.href='../med/homepage.sample2.php'">
                    <img src="../img//med/homepage02.jpg" />
                    <p>홈페이지 제작 유형 02</p>
                    <span>템플릿 + 콘텐츠 완성</span>
                </li>
                <li onclick="location.href='../med/homepage.sample3.php'">
                    <img src="../img//med/homepage03.jpg" />
                    <p>홈페이지 제작 유형 03</p>
                    <span>맞춤형 홈페이지</span>
                </li>
                <li onclick="location.href='../med/homepage.sample4.php'">
                    <img src="../img//med/homepage04.jpg" />
                    <p>홈페이지 제작 유형 04</p>
                    <span>맞춤형 어플리케이션</span>
                </li>
            </ul>
        </div>

        <div class="s_sample mb20">
        <div class="box2">
            <div class="inr flex js ac">
            <dl>
                <dt><span><img src="../img/common/ic_setting09.svg" /></span> 템플릿 + 셀프 콘텐츠</dt>
                <dd>여러가지 샘플 템플릿 중 마음에 드는 것을 선택해 셋팅 후 직접 홈페이지 내용을 작성할 수 있는 유형입니다.</dd>
            </dl>
            <button class="btn btn_redline2 btn_sdw"><img src="../img/common/homepage_btn.svg"/><p>샘플보기</p></button>
            </div>
        </div>
        </div>
        <div class="box2">
            <div class="box_title bg_red">
                <strong>제작 문의하기</strong>
                <a class="btn btn_line">문의하기</a>
            </div>
            <form>
                <div class="form">
                    <div class="form_wrap">
                        <div>
                            <p><label>담당자 성함</label><input type="text" placeholder="이름을 입력해주세요"/></p>
                        </div>
                        <div>
                            <p><label>연락처</label><input type="text" placeholder="연락처를 입력해주세요."/></p>
                        </div>
                        <textarea placeholder="참고 홈페이지 등, 제작 문의 내용을 작성해주세요."></textarea>
                    </div>
                </div>
            </form>

        </div>


    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>