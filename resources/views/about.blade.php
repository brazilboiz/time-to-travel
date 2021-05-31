<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>О нас</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset("css/normalize.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/common.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/tour.css")}}" />
    <link rel="stylesheet" href="{{asset("css/hamburgers.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/about.css")}}"/>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>
<body>
<header class="header about-header">
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
                <img src="./assets/logo.png" alt="logo" class="logo__image" />
            </a>
        </div>

        <a href="/" class="navigation-list__link mobile-hidden"
        >Главная</a
        >

        <a href="/search" class="navigation-list__link mobile-hidden">Поиск тура</a>

        <a href="/about" class="navigation-list__link active mobile-hidden">О нас</a>

        <a class="basket__icon navigation-list__link mobile-hidden"><img style="width: 30px" src="{{ asset('/assets/basket.png') }}"></a>

        <a href="/#order" class="order-button mobile-hidden">Оставить заявку</a>
        <a href="/#order" class="order-button mobile mobile-visible">
            <img src="./assets/phone-call.png" alt="order" />
        </a>
    </nav>

    @include('parts.basket',$tours)

    <div class="header__content container">
        <div class="tour-card">
            <h1 class="tour-card__title">О нас</h1>
            <p class="tour-card__name">Пора отдыхать</p>
            <p class="tour-card__description">Онлайн-сервис для поиска туров</p>

            <button class="tour-card__button">Подробнее</button>
        </div>
    </div>
</header>

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
        <li class="sidebar__item">
            <a class="basket__icon"><img style="width: 30px" src="{{ asset('/assets/basket.png') }}"></a>
        </li>
    </ul>
</aside>

<main class="about-content container">
    <div class="briefly-desc">
        <h2 class="briefly-desc__title">Кто мы и чем занимаемся?</h2>

        <div class="briefly-desc__content">
            <img
                class="briefly-desc__image"
                src="./assets/landing/world-icon.png"
                alt="travel"
            />
            <p class="briefly-desc__text">
                Мы - одна из ведущих туристических компаний Украины. Обладая более
                чем 25-летним профессиональным опытом в сфере выездного туризма, мы
                предлагаем на украинском туристическом рынке только
                высококачественный турпродукт.
            </p>
        </div>
    </div>

    <div class="about-points">
        <div class="about-mission">
            <h3 class="about-mission__title">Наша миссия</h3>
            <div class="about-mission__row">
                <img
                    class="about-mission__image"
                    src="./assets/about/smile.png"
                    alt="наша миссия"
                />
                <p class="about-mission__text">
                    Мы создаем отдых, который делает людей счастливее
                </p>
            </div>
        </div>

        <div class="about-values">
            <h3 class="about-values__title">Наши ценности</h3>
            <ul class="about-values__list">
                <li class="about-values__item">Клиентоориентированность</li>
                <li class="about-values__item">Командная работа</li>
                <li class="about-values__item">Уважение к людям</li>
                <li class="about-values__item">Эффективность и результативность</li>
                <li class="about-values__item">Постоянное совершенствование</li>
            </ul>
        </div>
    </div>
</main>

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
<script src="{{ asset('/js/common.js') }}"></script>
<script src="{{ asset('/js/sidebar.js') }}"></script>
<script src="{{ asset('/js/about.js') }}"></script>
</body>
</html>
