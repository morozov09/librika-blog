<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LibrikaPOST</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <header class="header">
        <div class="container d-flex a-items">
            <div class="header__burger">
                <span class="header__burger-line"></span>
                <span class="header__burger-line"></span>
                <span class="header__burger-line"></span>
            </div>
            <div class="header__logo">
                <a href="index.php">
                    <img src="img/main-logo.svg" alt="Логотип">
                </a>
            </div>
        </div>
   </header>

    <section class="promo">
            <div class="container">
                <h1 class="promo__head">От книги к книге: <br> истории вдохновения</h1>
                <h2 class="promo__title">Добро пожаловать в мир, где чтение <br> — это не только развлечение, но и <br> источник знаний, вдохновения и <br> понимания.</h2>
            </div>
    </section>

    <section class="readed">
        <div class="container">
            <h2 class="reader__head">Прочитанные книги:</h2>
            <div class="reader__cart-items d-flex f-wrap a-items">
                <?php
                for($i = 1; $i <= 6; $i++) {
                    echo '<div class="reader__cart-item">
                    <img class="reader__img" src="img/martin-iden.webp" alt="Изображение книги">
                    <div class="reader__author">Джек Лондон “Мартин Иден”</div>
                    <div class="reader__pages mb30">Кол-во страниц: 412</div>
                    <a href="#" class="reader__btn-link">ПОДРОБНЕЕ</a>
                </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
        <div class="header__logo">
                <a href="index.php">
                    <img src="img/main-logo.svg" alt="Логотип">
                </a>
            </div>
            <div class="footer__created">
            created by web-develover: <br>
            padushka XL
            </div>
            <div class="footer__created">
            Contact with me
            </div>
            <div class="footer__logos d-flex a-items">
                <a href="#"><img class="footer__logos-img" src="img/logos_telegram.svg" alt="telegram"></a>
                <a href="#"><img class="footer__logos-img" src="img/kwork-logos.svg" alt="kwork"></a>
            </div>
            <div class="footer__created mt110">
            all rights reserved  2023 ©️ 
            </div>
        </div>
    </footer>

</body>
</html>