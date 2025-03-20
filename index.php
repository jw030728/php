<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>갱</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- 전체 스타일 -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <div class="container mt-5">
        <!-- Hero Section (필요시 추가) -->

        <!-- 첫번째 메인 컨텐츠 -->
        <?php include 'includes/firstMain.php'; ?>

        <!-- 추천 상품 섹션 -->
        <?php include 'includes/secondMain.php'; ?>

        <!-- 상품 카테고리 섹션 -->
        <?php include 'includes/thirdMain.php'; ?>

        <!-- VVIP 섹션  fourth -->
        <?php include 'includes/fourthMain.php'; ?>


        <!-- 론톡등롭업체 -->
        <?php include 'includes/fifthMain.php'; ?>


        <!-- 셀프광고창 -->
        <?php include 'includes/loantalkAd.php'; ?>


        <!-- 실시간 상담 문의 섹션 -->
        <?php include 'includes/serviceMain.php'; ?>



    </div>

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS (옵션) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>