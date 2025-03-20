<link rel="stylesheet" href="css/login.css"> <!-- 헤더 및 상단 배너 스타일 -->


<!-- login.php -->
<div class="ln-overlay" id="loginOverlay">
    <div class="ln-modal">
        <!-- 로고 -->
        <img src="images/logo.png" alt="론톡 로고" class="ln-modal-logo">

        <h2 class="ln-modal-title">로그인</h2>
        <p class="ln-modal-sub">업체 로그인을 위한 과정입니다.</p>

        <!-- 로그인 폼 -->
        <form class="ln-form" id="lnLoginForm" novalidate>
            <!-- 이메일 입력 -->
            <div class="ln-form-group">
                <label for="lnEmail" class="ln-label">이메일</label>
                <input
                    type="email"
                    id="lnEmail"
                    class="ln-input"
                    placeholder="올바른 이메일을 입력해주세요."
                    required>
                <span class="ln-error" id="lnEmailError">올바른 이메일 형식이 아닙니다.</span>
            </div>

            <!-- 비밀번호 입력 -->
            <div class="ln-form-group">
                <label for="lnPassword" class="ln-label">비밀번호</label>
                <input
                    type="password"
                    id="lnPassword"
                    class="ln-input"
                    placeholder="비밀번호를 입력해주세요."
                    required>
                <span class="ln-error" id="lnPasswordError">비밀번호를 입력해주세요.</span>
            </div>

            <!-- 로그인 버튼 -->
            <button type="submit" class="ln-submit-btn">로그인</button>
        </form>

        <!-- 추가 링크 (비밀번호 찾기, 회원가입) -->
        <div class="ln-links">
            <a href="#">비밀번호 찾기</a> | <a href="#">회원가입</a>
        </div>

        <!-- 닫기 버튼 -->
        <button class="ln-close-btn" id="loginCloseBtn">닫기</button>
    </div>
</div>

<!-- (선택사항) 간단한 JS 검증 예시 -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const lnLoginForm = document.getElementById("lnLoginForm");
        const lnEmail = document.getElementById("lnEmail");
        const lnEmailError = document.getElementById("lnEmailError");
        const lnPassword = document.getElementById("lnPassword");
        const lnPasswordError = document.getElementById("lnPasswordError");

        lnLoginForm.addEventListener("submit", function(e) {
            let valid = true;

            // 이메일 검증
            if (!lnEmail.value || !lnEmail.value.includes("@")) {
                lnEmailError.style.display = "block";
                valid = false;
            } else {
                lnEmailError.style.display = "none";
            }

            // 비밀번호 검증
            if (!lnPassword.value) {
                lnPasswordError.style.display = "block";
                valid = false;
            } else {
                lnPasswordError.style.display = "none";
            }

            if (!valid) {
                e.preventDefault(); // 폼 전송 막음
            }
        });
    });
</script>