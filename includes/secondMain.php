<link rel="stylesheet" href="css/secondMain.css">

<!-- 전체 배경색을 위한 래퍼 -->
<div class="second-main-wrapper">
    <!-- 실제 콘텐츠 영역 -->
    <div class="second-main-container">
        <h2 class="section-title">
            <span class="highlight">론톡 PICK</span> <br>
            꾸준히 사랑받는 상품입니다.
        </h2>

        <div class="product-list">
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <div class="product-card">
                    <div class="hot-badge">HOT</div>
                    <div class="product-header">대한대출컨설팅대부</div>
                    <div class="product-body">
                        <p class="product-subtitle">대한대출상담센터</p>
                        <h3 class="product-title">지금 급하신 분 바로 해결</h3>
                        <p class="product-description">
                            무방문 무서류 가능<br>
                            여러 군데 조회 후 한 곳에서 상담하세요
                        </p>
                        <p class="product-footer">✔ 전국</p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>