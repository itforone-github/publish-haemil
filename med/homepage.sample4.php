<?php
$pid = "homepage_sample";
include_once("../include/header.php");
//5.8.2	샘플보기
?>

    <section class="sample">

        <div class="type_title">

            <div class="type_name">
                <p>맞춤형 어플리케이션</p>
                <span>여러가지 샘플 템플릿 중 마음에 드는 것을 선택해 전문 디자이너가 콘텐츠를 완성해드립니다.</span>
            </div>

            <div><img src="../img/med/homepage_sample04.png" /></div>

        </div>

        <div class="type_point">
            <div class="flex">
                <div class="img">
                    <img src="../img/med/homepage_sample04_01.png" />
                </div>

                <div class="point p_red">
                    <dl>
                        <dt>
                            <span>POINT</span>
                            <p>기획부터 제작까지</p>
                        </dt>
                        <dd>
                            단순한 어플리케이션 개발에서 벗어나 고객의 요구를 뛰어넘는 스토리텔링 디자인 전략과 안정화된 개발 시스템으로 제작해드립니다.
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="portfolio app">
                <h3>PORTFOLIO</h3>
                <ul>
                    <li><img src="../img/med/homepage_sample04_02.png" /></li>
                    <li><img src="../img/med/homepage_sample04_03.png" /></li>
                    <li><img src="../img/med/homepage_sample04_04.png" /></li>
                    <li><img src="../img/med/homepage_sample04_05.png" /></li>
                </ul>
            </div>
            <div class="point flex">
                <dl>
                    <dt>
                        <span>POINT</span>
                        <p>스토어 등록</p>
                    </dt>
                    <dd>
                        애플 앱스토어(iOS) 구글 플레이스토어(AOS) 등록이 가능합니다..
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <span>POINT</span>
                        <p>전문 앱 개발</p>
                    </dt>
                    <dd>
                        각 한의원에 최적화된 어플을 숙련된 전문 디자이너와 개발자가 제작해드립니다.
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <span>POINT</span>
                        <p>편리한 유지보수</p>
                    </dt>
                    <dd>
                        어플리케이션 유지보수 문의를 남겨주시면 확인 후 해결해드립니다.
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