<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="">
<meta name="robots" CONTENT="noindex" />
<!--link rel="stylesheet" href="/css/normalize.css" type="text/css" /-->
<link rel="stylesheet" href="/css/style.css" type="text/css" />
<script src="/js/jquery-min.js"></script>
<script src="/js/jquery.modal.window.js"></script>
<title>WSEngine 2.0 тест</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                      <span></span>
                </label>
                <ul class="menu__box">
                    <li><a class="menu__item" href="#">Главная</a></li>
                    <li><a class="menu__item" href="#">Услуги</a></li>
                    <li><a class="menu__item" href="#">О нас</a></li>
                    <li><a class="menu__item" href="#">Блог</a></li>
                    <li><a class="menu__item" href="#">Контакты</a></li>
                </ul>
            </div>
            <a href="#" class="link">Открыть окно</a>
        </header>
        <section class="fullscreen-bg">
            <video autoplay muted loop class="fullscreen-bg__video">
                <source src="/upload/video.mp4" type="video/mp4">
            </video>
        </section>
        <section class="first-screen">
            <!--div class="logo"></div-->
        </section>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('.link').wseModalWindow({
            'id'        : 'confirm',
            'width'     : '640px',
            'height'    : '480px'
        });
    })
</script>
</html>
