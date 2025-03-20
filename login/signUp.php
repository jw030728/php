<!-- signup.php -->


<link rel="stylesheet" href="css/signUp.css">


<div class="sign-container">

    <!-- 1단계: 동의 화면 -->
    <div class="sign-step1" id="signStep1">
        <h2 class="sign-title">개인정보 동의</h2>

        <!-- 첫 번째 동의 내용 -->
        <div class="sign-agree-box">
            <h3>개인정보 수집 및 이용 동의</h3>
            <div class="sign-agree-content">
                <!-- 실제 긴 내용이 들어갈 수 있음 -->
                여기에 개인정보 수집 및 이용 동의에 대한 상세 내용을 작성하세요. <br>
                스크롤 가능하도록 overflow 설정.
            </div>
            <label class="sign-agree-check">
                <input type="checkbox" name="agree1" id="agree1">
                위 내용을 확인하고 동의합니다.
            </label>
        </div>

        <!-- 두 번째 동의 내용 -->
        <div class="sign-agree-box">
            <h3>개인정보 처리 위탁 동의</h3>
            <div class="sign-agree-content">
                여기에 개인정보 처리 위탁 동의에 대한 상세 내용을 작성하세요. <br>
                스크롤 가능하도록 overflow 설정.
            </div>
            <label class="sign-agree-check">
                <input type="checkbox" name="agree2" id="agree2">
                위 내용을 확인하고 동의합니다.
            </label>
        </div>

        <!-- 세 번째 동의 내용 -->
        <div class="sign-agree-box">
            <h3>개인정보 제3자 제공 동의</h3>
            <div class="sign-agree-content">
                여기에 개인정보 제3자 제공 동의에 대한 상세 내용을 작성하세요. <br>
                스크롤 가능하도록 overflow 설정.
            </div>
            <label class="sign-agree-check">
                <input type="checkbox" name="agree3" id="agree3">
                위 내용을 확인하고 동의합니다.
            </label>
        </div>

        <!-- 다음 버튼 -->
        <button class="sign-next-btn" id="signNextBtn">다음</button>
    </div>

    <!-- 2단계: 회원가입 폼 -->
    <div class="sign-step2" id="signStep2" style="display: none;">
        <h2 class="sign-title">회원가입</h2>

        <form class="sign-form">
            <!-- 아이디 -->
            <div class="sign-form-group">
                <label for="userid">아이디</label>
                <input type="text" id="userid" placeholder="아이디를 입력해주세요.">
            </div>

            <!-- 비밀번호 -->
            <div class="sign-form-group">
                <label for="userpw">비밀번호</label>
                <input type="password" id="userpw" placeholder="비밀번호를 입력해주세요.">
            </div>

            <!-- 비밀번호 확인 -->
            <div class="sign-form-group">
                <label for="userpw2">비밀번호 확인</label>
                <input type="password" id="userpw2" placeholder="비밀번호를 다시 입력해주세요.">
            </div>

            <!-- 이름 -->
            <div class="sign-form-group">
                <label for="username">이름</label>
                <input type="text" id="username" placeholder="이름을 입력해주세요.">
            </div>

            <!-- 생년월일 -->
            <div class="sign-form-group">
                <label for="birth">생년월일</label>
                <input type="text" id="birth" placeholder="YYYYMMDD">
            </div>

            <!-- 성별 -->
            <div class="sign-form-group sign-inline">
                <label for="gender">성별</label>
                <select id="gender">
                    <option value="M">남</option>
                    <option value="F">여</option>
                </select>
            </div>

            <!-- 연락처 -->
            <div class="sign-form-group">
                <label for="phone">연락처</label>
                <input type="text" id="phone" placeholder="휴대전화번호를 입력해주세요.">
            </div>

            <!-- 인증번호/캡차 (예시) -->
            <div class="sign-form-group sign-inline">
                <label for="captcha">인증번호</label>
                <input type="text" id="captcha" placeholder="이미지 속 숫자">
                <span class="sign-captcha-img">7215</span>
            </div>

            <!-- 회원가입 버튼 -->
            <button type="submit" class="sign-submit-btn">회원가입</button>
        </form>

        <p class="sign-info-text">
            회원가입을 통해 더욱 편리한 서비스를 이용하실 수 있습니다.
        </p>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const signNextBtn = document.getElementById("signNextBtn");
        const signStep1 = document.getElementById("signStep1");
        const signStep2 = document.getElementById("signStep2");

        signNextBtn.addEventListener("click", function() {
            // TODO: 동의 체크 검증 (예: agree1, agree2, agree3)
            // 간단히 넘어가려면 아래만
            signStep1.style.display = "none";
            signStep2.style.display = "block";
        });
    });
</script>
</body>