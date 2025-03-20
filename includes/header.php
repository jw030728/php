<link rel="stylesheet" href="css/header.css"> <!-- 헤더 및 상단 배너 스타일 -->
<link rel="stylesheet" href="css/login.css"> <!--  스타일 -->

<?php include __DIR__ . '/../login/login.php'; ?>


<!-- 상단 안내 배너 -->
<div id="topBanner" class="top-banner">
    <div class="banner-container">
        <!-- 첫째 줄: 텍스트 -->
        <div class="banner-row banner-row-text">
            주식회사 제이원 위버즈 대부
        </div>
        <!-- 둘째 줄: 버튼 -->
        <div class="banner-row banner-row-btn">
            <button class="banner-btn">무서류, 무방문 한도조회 가능</button>
        </div>
    </div>
    <button id="hideBanner" class="hide-banner">오늘 하루 보지 않기</button>
</div>

<!-- Sticky Header -->
<header class="sticky-header">
    <div class="container">
        <!-- 첫 번째 줄 -->
        <div class="top-row d-flex justify-content-between align-items-center">
            <span class="company-info">론톡대부중개 대부중개 2024-서울강서-0001</span>
            <div class="top-buttons">
                <button class="btn btn-link" id="adInquiryBtn">광고문의</button>
                <button class="btn btn-link" id="loginOpenBtn">업체 로그인/회원가입</button>
            </div>
        </div>

        <!-- 두 번째 줄 -->
        <div class="middle-row d-flex justify-content-between align-items-center position-relative">
            <!-- 로고 -->
            <a href="index.php" class="logo">
                <img src="images/logo.png" alt="로고">
            </a>

            <!-- 중앙 검색창을 절대 배치로 감싸는 래퍼 -->
            <div class="search-wrapper">
                <form class="search-form">
                    <input class="search-input" type="search" placeholder="어떤 대출이 필요하신가요?" aria-label="Search">
                    <button class="search-button" type="submit">🔍</button>
                </form>
            </div>

            <!-- 오른쪽: 광고 이미지 -->
            <div class="ad-banner">
                <img src="images/sample1.jpg" alt="광고 이미지">
            </div>
        </div>

        <!-- 세 번째 줄 -->
        <div class="bottom-row d-flex justify-content-between align-items-center">
            <!-- 네비게이션 -->
            <nav class="nav">
                <a href="#" class="nav-link">전체 메뉴</a>
                <a href="#" class="nav-link">지역별</a>
                <a href="#" class="nav-link">상품별</a>
                <a href="#" class="nav-link">실시간 대출문의</a>
                <a href="#" class="nav-link">커뮤니티</a>
                <a href="#" class="nav-link">고객지원</a>
                <a href="#" class="nav-link">회사소개</a>
            </nav>

            <!-- 대출 문의하기 버튼 -->
            <button class="btn btn-primary loan-btn">대출 문의하기</button>
        </div>
    </div>
</header>

<script>
    // 상단 안내 배너 숨기기 (필요 시 주석 해제)
    // document.addEventListener("DOMContentLoaded", function () {
    //   const banner = document.getElementById("topBanner");
    //   const hideButton = document.getElementById("hideBanner");
    //   
    //   if (localStorage.getItem("hideBanner") === "true") {
    //       banner.style.display = "none";
    //   }
    //   
    //   hideButton.addEventListener("click", function () {
    //       banner.style.display = "none";
    //       localStorage.setItem("hideBanner", "true");
    //   });
    // });

    //로그인 팝업창
    document.addEventListener("DOMContentLoaded", function() {
        const loginOpenBtn = document.getElementById("loginOpenBtn");
        const loginOverlay = document.getElementById("loginOverlay"); // login.php에 포함된 팝업 요소
        const loginCloseBtn = document.getElementById("loginCloseBtn");

        // 로그인 팝업 열기
        loginOpenBtn.addEventListener("click", function() {
            loginOverlay.style.display = "block";
        });

        // 로그인 팝업 닫기
        loginCloseBtn.addEventListener("click", function() {
            loginOverlay.style.display = "none";
        });
    });
</script>