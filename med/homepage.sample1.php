<?php
$pid = "homepage_sample";
include_once("../include/header.php");
//5.8.2	샘플보기
?>

    <section class="sample">

        <div class="type_title">

            <div class="type_name">
                <p>템플릿 + 셀프 콘텐츠</p>
                <span>여러가지 샘플 템플릿 중 마음에 드는 것을 선택해 셋팅 후 직접 홈페이지 내용을 작성할 수 있는 유형입니다.</span>
            </div>

            <div><img src="../img/med/homepage_sample01.png" /></div>

        </div>

        <div class="type_point">
            <div class="flex">
                <ul>
                    <li><img src="../img/med/homepage_sample01_01.png" /></li>
                    <li><img src="../img/med/homepage_sample01_02.png" /></li>
                    <li><img src="../img/med/homepage_sample01_03.png" /></li>
                    <li><img src="../img/med/homepage_sample01_04.png" /></li>
                </ul>

                <div class="point p_red">
                    <dl>
                        <dt>
                            <span>POINT</span>
                            <p>다양한 템플릿 보유</p>
                        </dt>
                        <dd>
                            여러가지 샘플 템플릿을 확인하고 마음에 드는 템플릿을 선택해보세요! <br><br>
                            각 유형에 맞는 다양한 템플릿을 보유하고 있어 취향에 맞는 선택이 가능합니다.
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="point flex">
                <dl>
                    <dt>
                        <span>POINT</span>
                        <p>반응형 홈페이지</p>
                    </dt>
                    <dd>
                        반응형 홈페이지 템플릿으로 PC, 모바일에 모두 최적화되어 콘텐츠를 확인할 수 있습니다.
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <span>POINT</span>
                        <p>셀프 콘텐츠</p>
                    </dt>
                    <dd>
                        한의원 소개, 의료진 소개 등 한의원마다의 콘텐츠를 직접 등록할 수 있습니다.
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <span>POINT</span>
                        <p>편리한 유지보수</p>
                    </dt>
                    <dd>
                        홈페이지 유지보수 문의를 남겨주시면 확인 후 해결해드립니다.
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <span>POINT</span>
                        <p>해밀원 연계</p>
                    </dt>
                    <dd>
                        해밀한의원 원외탕전실과 연계되어 콘텐츠와 환자 관리가 가능합니다.
                    </dd>
                </dl>
            </div>

        </div>



    </section>


    <section class="homepage_qna">

        <h3 class="color_red">제작 문의하기</h3>

        <div class="box2">

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

        <button class="btn btn_red">문의하기</button>

    </section>

    <!--푸터 인클루드-->
<?php include '../include/footer.php'; ?>