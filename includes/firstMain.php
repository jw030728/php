<link rel="stylesheet" href="css/firstMain.css"> <!-- firstMain 스타일 -->

<!-- firstMain.php -->
<div class="first-main-container">

    <!-- 첫 번째 줄: 광고 슬라이더 & 상담 정보 -->
    <div class="top-section">

        <!-- 광고 슬라이더 -->
        <div class="ad-slider-container">
            <div class="ad-slider">
                <div class="ad-slide">
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <div class="ad-card">
                            <img src="images/sample<?= $i ?>.jpg" alt="광고<?= $i ?>">
                            <div class="ad-overlay">
                                <h4>프리랜서 전용 대출 상품</h4>
                                <p>무방문 무서류 가능</p>
                                <span>대한대출상담센터 010-1234-5678</span>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- 네비게이션 버튼 -->
            <button class="prev-btn">‹</button>
            <button class="next-btn">›</button>

            <!-- 하단 스크롤바 -->
            <div class="slider-scroll">
                <div class="scroll-track"></div>
            </div>

            <!-- 페이지 표시 -->
            <div class="slider-pagination">1 / 4</div>
        </div>

        <!-- 대출 상담 정보 박스 -->
        <div class="loan-info-box">
            <h3 class="loan-title">신규/인기 등록업체</h3>

            <!-- 등록업체 목록 -->
            <div class="loan-company">
                <p><strong>놀푸른 희망대부</strong> <span>소득만 있으면 누구나 가능</span></p>
                <p><strong>놀푸른 희망대부</strong> <span>소득만 있으면 누구나 가능</span></p>
            </div>

            <!-- 정보 버튼 컨테이너 -->
            <div class="loan-options">
                <div class="loan-box">
                    <div class="icon"></div>
                    <p>대출상환 이자계산기</p>
                </div>
                <div class="loan-box">
                    <div class="icon"></div>
                    <p>등록업체 통합검색</p>
                </div>
            </div>

            <!-- 대출 상담 버튼 -->
            <button class="consult-btn">대출 상담받기</button>

            <!-- 하단 누적 문의 -->
            <p class="total-views">12월 누적 문의 <strong>3,606건</strong></p>
        </div>
    </div>

    <!-- 두 번째 줄: 6개의 버튼 이미지 -->
    <div class="bottom-section">
        <a href="#"><img src="images/coin.jpeg" alt="금융위원회"></a>
        <a href="#"><img src="images/coin.jpeg" alt="금융위원회"></a>
        <a href="#"><img src="images/coin.jpeg" alt="금융위원회"></a>
        <a href="#"><img src="images/coin.jpeg" alt="금융위원회"></a>
        <a href="#"><img src="images/coin.jpeg" alt="금융위원회"></a>
        <a href="#"><img src="images/coin.jpeg" alt="금융위원회"></a>
    </div>

</div>



<!-- 슬라이더 기능을 위한 JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slider = document.querySelector(".ad-slider");
        const scrollTrack = document.querySelector(".scroll-track");
        const prevBtn = document.querySelector(".prev-btn");
        const nextBtn = document.querySelector(".next-btn");
        const slides = document.querySelectorAll(".ad-card");
        const totalSlides = slides.length;
        let currentSlide = 0;
        const slideWidth = slides[0].clientWidth + 15; // 이미지 너비 + 간격

        // 슬라이드 이동 함수
        function moveSlider(index) {
            slider.scrollTo({
                left: index * slideWidth,
                behavior: "smooth"
            });
            currentSlide = index;
            updateScrollTrack();
            updatePagination();
        }

        // 스크롤바 업데이트
        function updateScrollTrack() {
            const scrollPosition = (currentSlide / (totalSlides - 1)) * 100;
            scrollTrack.style.width = scrollPosition + "%";
        }

        // 페이지 표시 업데이트
        function updatePagination() {
            document.querySelector(".slider-pagination").innerText = `${currentSlide + 1} / ${totalSlides}`;
        }

        // 버튼 이벤트 추가
        nextBtn.addEventListener("click", function() {
            if (currentSlide < totalSlides - 1) {
                moveSlider(currentSlide + 1);
            }
        });

        prevBtn.addEventListener("click", function() {
            if (currentSlide > 0) {
                moveSlider(currentSlide - 1);
            }
        });

        // 초기 설정
        updatePagination();
        updateScrollTrack();
    });
</script>