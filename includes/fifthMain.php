<link rel="stylesheet" href="css/fifthMain.css">

<!-- fifthMain.php -->
<div class="fm-container">
    <h2>론톡 등록업체</h2>

    <div class="fm-cards-grid">
        <?php for ($i = 1; $i <= 15; $i++): ?>
            <div class="fm-card">
                <h4>업체최초 대출진행</h4>
                <p>무방문 OK 무서류OK<br>최장 48개월 OK 중도상환수수료X</p>
                <span class="fm-phone">010-1234-5678</span>
                <button class="fm-inquiry-btn">대출 문의하기</button>
            </div>
        <?php endfor; ?>
    </div>

    <div class="fm-more-wrap">
        <button class="fm-more-btn">더보기</button>
    </div>
</div>