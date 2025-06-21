<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To’y Hodisasi – Oilaviy Yordamchi Platforma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">To’y Hodisasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#marketplace">Marketplace</a></li>
                    <li class="nav-item"><a class="nav-link" href="#books">Kitoblar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#advice">Tafsiyalar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        <section class="text-center mb-5">
            <h1 class="display-4 fw-bold mb-3 text-primary">To’y “hodisasi” bo’yicha to’liq yordamchi</h1>
            <p class="lead">
                Bu platforma oilaga va oilaviy hayotga bog’liq, unga tayyorgarlik, to’y va to’yga bog’liq barcha marosimlar haqida, narxlari haqida to’liq ma’lumot va qo’llanma beradi. Shu bilan birga barcha xizmat turlari uchun marketplace (bozor) vazifasini ham o’taydi!
            </p>
        </section>

        <section class="row g-4 mb-5" id="marketplace">
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">To‘y xizmatlari marketplace</h5>
                        <p class="card-text">
                            Karnay-surnay, bezatish, artistlar, choyxona, to‘yxona va boshqa xizmatlar bir joyda!
                        </p>
                        <a href="#" class="btn btn-primary">Barcha xizmatlar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="books">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kitoblar & Kurslar</h5>
                        <p class="card-text">
                            Oila, to’y va hayot haqidagi foydali kitoblar, kurslar, ustozlar ro‘yxati.
                        </p>
                        <a href="#" class="btn btn-primary">Ko‘proq o‘rganish</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="advice">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tafsiyalar va maslahatlar</h5>
                        <p class="card-text">
                            Oilaviy hayotga, marosimlarga tayyorgarlik bo‘yicha ekspert maslahatlar va tavsiyalar.
                        </p>
                        <a href="#" class="btn btn-primary">Barchasi</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white p-5 rounded shadow mb-5">
            <h3 class="mb-3 fw-bold text-primary">Platforma imkoniyatlari</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Yoshlarni oila haqidagi tushunchalar bilan tanishtirish</li>
                <li class="list-group-item">Kitoblar, ustozlar, kurslar va boshqa materiallar</li>
                <li class="list-group-item">To’y marosimi haqida batafsil ma’lumotlar</li>
                <li class="list-group-item">Xizmatlar va narxlar bo‘yicha to‘liq qo‘llanma</li>
                <li class="list-group-item">Marketplace orqali to’y xizmatlari ko‘rsatuvchilar bilan bog‘lanish</li>
            </ul>
        </section>

        <section class="text-center mt-5">
            <a href="#" class="btn btn-lg btn-outline-primary">Xizmat qo‘shish yoki maslahat olish</a>
        </section>
    </main>

    <footer class="bg-white border-top mt-5 py-3">
        <div class="container text-center text-muted small">
            © {{ date('Y') }} To’y Hodisasi. Barcha huquqlar himoyalangan.
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>