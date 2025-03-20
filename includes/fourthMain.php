<link rel="stylesheet" href="css/fourthMain.css">

<!-- fourthMain.php -->
<div class="fm4-container">
    <h2>스페셜 VVIP 업체</h2>

    <div class="fm4-layout">
        <!-- 왼쪽 큰 컨텐츠 -->
        <div class="fm4-big-left">
            <div class="fm4-hot-badge">HOT</div>
            <img src="images/sample1.jpg" alt="스페셜 VVIP 업체" class="fm4-big-img">

            <h3 class="fm4-big-title">지금 급하신 분 바로 해결</h3>
            <p class="fm4-big-desc">
                무방문 무서류 가능<br>
                최장 48개월 OK 중도상환수수료X
            </p>
            <span class="fm4-big-phone">010-1234-5678</span>
        </div>

        <!-- 오른쪽 카드들 (fifthMain 스타일 참고) -->
        <div class="fm4-right-grid">
            <?php for ($i = 1; $i <= 8; $i++): ?>
                <div class="fm4-card">
                    <h4>업체최초 대출진행</h4>
                    <p>무방문 OK 무서류OK<br>최장 48개월 OK 중도상환수수료X</p>
                    <span class="fm4-card-phone">010-1234-5678</span>
                    <button class="fm4-inquiry-btn">대출 문의하기</button>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>