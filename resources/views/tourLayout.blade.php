<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield("Title")</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset("css/normalize.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/common.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/tour.css")}}" />
    <link rel="stylesheet" href="{{asset("css/hamburgers.min.css")}}"/>


    <style>
        .header {
            background-image: url(@yield("Tour image"));
        }

        @media screen and (max-width: 750px) {
            .header {
                background-image: url(@yield("Tour mobile image"));
            }
        }
    </style>

</head>
<body>
<header class="header">
    <nav class="navigation container">
        <button
            class="hamburger hamburger--collapse sidebar-handler mobile-visible"
            type="button"
        >
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>

        <div class="logo">
            <a href="/">
                <img src="{{asset("assets/logo.png")}}" alt="logo" class="logo__image" />
            </a>
        </div>

        <a href="/" class="navigation-list__link mobile-hidden">Главная</a>

        <a href="/search" class="navigation-list__link mobile-hidden">Поиск тура</a>

        <a href="/about" class="navigation-list__link mobile-hidden">О нас</a>

        <a href="/#order" class="order-button mobile-hidden">Оставить заявку</a>
        <a href="/#order" class="order-button mobile mobile-visible">
            <img src="{{asset("assets/phone-call.png")}}" alt="order" />
        </a>
    </nav>

    <div class="header__content container">
        <div class="tour-card">
            <h1 class="tour-card__title">@yield("Country")</h1>
            <p class="tour-card__name">@yield("City")</p>
            <p class="tour-card__description">
                @yield("Short description")
            </p>

            <button class="tour-card__button">Офорить тур</button>
        </div>
    </div>
</header>

<!-- TODO: rewrite this block bcs it's not a sidebar -->
<aside class="sidebar mobile-visible">
    <ul class="sidebar__list">
        <li class="sidebar__item">
            <a href="/" class="sidebar__link active">Главная</a>
        </li>
        <li class="sidebar__item">
            <a href="/search" class="sidebar__link">Поиск тура</a>
        </li>
        <li class="sidebar__item">
            <a href="/about" class="sidebar__link">О нас</a>
        </li>
    </ul>
</aside>

<section class="about-tour container">
    <h2 class="about-tour__title">Почему именно @yield("City")?</h2>

    <div class="about-tour__content">
        <div class="about-tour__card">
            <h3 class="about-tour__question">@yield("Name description 1")</h3>
            <p class="about-tour__answer">
                @yield("Description 1")
            </p>
        </div>

        <div class="about-tour__card">
            <h3 class="about-tour__question">@yield("Name description 2")</h3>
            <p class="about-tour__answer">
                @yield("Description 2")
            </p>
        </div>

        <div class="about-tour__card">
            <h3 class="about-tour__question">@yield("Name description 3")</h3>
            <p class="about-tour__answer">
                @yield("Description 3")
            </p>
        </div>

        <form
            class="buy-tour-card"
            style="background-image: url('https://i.ibb.co/XyXJ3jL/glodi-miessi-MUYe-ZCo4-BB0-unsplash.jpg')"
        >
            <h3 class="buy-tour-card__title">@yield("City") уже ждет тебя</h3>
            <p class="buy-tour-card__dates">@yield("Dates")</p>

            <p class="buy-tour-card__price">@yield("Price")$ на двоих</p>
            <button class="buy-tour-card__button">Добавить в корзину</button>
        </form>
    </div>
</section>

<footer class="footer">
    <div class="container footer__wrapper">
        <div class="footer__addresses">
            Наши адреса: <br />
            ул. Киевская 365/4,<br />ул. Московская 228
        </div>

        <div>© Time to travel 2021-2021</div>

        <div class="footer__contacts">
            Наши контакты:<br />
            +8800-555-3535 - Лёшик<br />
            +3535-555-8800 - Митя<br />
            +4444-444-4444 - Степан
        </div>
    </div>
</footer>

<script src="./js/sidebar.js"></script>
<script src="{{asset("js/sidebar.js")}}"></script>
</body>
</html>
