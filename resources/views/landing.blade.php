<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Time To Travel</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset("css/normalize.css")}}" />
    <link rel="stylesheet" href="{{asset("css/common.css")}}" />
    <link rel="stylesheet" href="{{asset('css/landing.css')}}" />
    <link rel="stylesheet" href="{{asset("css/hamburgers.min.css")}}" />

    <link rel="stylesheet" href="./styles/hamburgers.min.css" />

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

</head>

<body>
    <header class="header">
        <nav class="navigation container">
            <button class="hamburger hamburger--collapse sidebar-handler mobile-visible" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <div class="logo">
                <a href="/">
                    <img src="./assets/logo.png" alt="logo" class="logo__image" />
                </a>
                <span class="logo__label mobile-hidden">Онлайн-сервис для поиска туров</span>
                <a class="basket__icon navigation-list__link mobile-hidden"><img style="width: 30px" src="{{ asset('/assets/basket.png') }}"></a>
            </div>
            <a href="#order" class="order-button mobile-hidden">Оставить заявку</a>
            <a href="/#order" class="order-button mobile mobile-visible">
                <img src="{{asset("assets/phone-call.png")}}" alt="order" />
            </a>
        </nav>

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

        @include('parts.basket',$tours)

        <div class="header__content container">
            <div class="header__text-wrapper">
                <h1 class="header__title">Путешествуйте</h1>
                <h2 class="header__description">Вы точно не будете жалеть про это</h2>
            </div>

            <a class="header__button" href="/search">Посмотреть туры</a>
        </div>
    </header>

    <div class="services container">
        <h2 class="services__heading">Что мы предоставляем?</h2>

        <div class="services__content">
            <div class="service">
                <img class="service__image" src="./assets/landing/plane-icon.png" alt="plane" />
                <span class="service__description">
                    Удобное бронирование билетов и комфортный авиаперелет
                </span>
            </div>

            <div class="service">
                <img class="service__image" src="./assets/landing/car-icon.png" alt="plane" />
                <span class="service__description">
                    Удобный трансфер от аэропорта до отеля
                </span>
            </div>

            <div class="service">
                <img class="service__image" src="./assets/landing/file-icon.png" alt="plane" />
                <span class="service__description">
                    Помощь с оформлением документов
                </span>
            </div>

            <div class="service">
                <img class="service__image" src="./assets/landing/world-icon.png" alt="plane" />
                <span class="service__description">
                    Широкий выбор экскурсий для настоящих любителей путешествий
                </span>
            </div>

            <div class="service">
                <img class="service__image" src="./assets/landing/first-aid-icon.png" alt="plane" />
                <span class="service__description">
                    Заботимся о вашем здоровье, обеспечивая медицинскую страховку
                </span>
            </div>

            <div class="service">
                <img class="service__image" src="./assets/landing/phone-icon.png" alt="plane" />
                <span class="service__description">
                    Круглосуточная горячая линия для ваших обращений
                </span>
            </div>
        </div>
    </div>

    <div class="tours">
        <div class="tour" style="background-image: url('./assets/landing/bali.png')">
            <a href="/search?country=Филиппины" class="tour__content tablet-hidden">
                <h3 class="tour__title">Филиппины</h3>
            </a>

            <div class="tour__content tablet-visible">
                <h3 class="tour__title">Филиппины</h3>
                <a href="/search?country=Филиппины" class="tour__details">Подробнее</a>
            </div>
        </div>
        <div class="tour" style="background-image: url('./assets/landing/greece.png')">
            <a href="/search?country=Греция" class="tour__content tablet-hidden">
                <h3 class="tour__title">Греция</h3>
            </a>

            <div href="/search?country=Греция" class="tour__content tablet-visible">
                <h3 class="tour__title">Греция</h3>
                <a href="/search?country=Греция" class="tour__details">Подробнее</a>
            </div>
        </div>
        <div class="tour" style="background-image: url('./assets/landing/egypt.png')">
            <a href="/search?country=Египет" class="tour__content tablet-hidden">
                <h3 class="tour__title">Египет</h3>
            </a>

            <div href="/search?country=Египет" class="tour__content tablet-visible">
                <h3 class="tour__title">Египет</h3>
                <a href="/search?country=Египет" class="tour__details">Подробнее</a>
            </div>
        </div>
    </div>

    <form action="/" id="order" class="ordering container">
        <div class="ordering__controls">
            <h3 class="ordering__title mobile-visible">
                Оформить заявку на консультацию
            </h3>
            <input type="text" name="name" placeholder="Ваше имя" required class="ordering__input" />
            <input type="tel" name="phone" required value="+380" placeholder="+380" class="ordering__input" />
            <input type="submit" value="Оставить заявку" class="ordering__submit" />
        </div>
        <h3 class="ordering__title mobile-hidden">
            Оформить заявку на консультацию
        </h3>
    </form>

    <div class="reviews">
        <div class="container">
            <h2 class="reviews__title">Отзывы</h2>

            <div class="reviews__content">
                <div class="review">
                    <img src="./assets/landing/review-avatar1.png" alt="avatar" class="review__avatar" />
                    <span class="review__name">Алексей</span>
                    <span class="review__text">Удобный и надежный сайт. Всем рекомендую!</span>
                </div>

                <div class="review">
                    <img src="./assets/landing/review-avatar1.png" alt="avatar" class="review__avatar" />
                    <span class="review__name">Алексей</span>
                    <span class="review__text">Удобный и надежный сайт. Всем рекомендую!</span>
                </div>

                <div class="review">
                    <img src="./assets/landing/review-avatar1.png" alt="avatar" class="review__avatar" />
                    <span class="review__name">Алексей</span>
                    <span class="review__text">Удобный и надежный сайт. Всем рекомендую!</span>
                </div>

                <div class="review">
                    <img src="./assets/landing/review-avatar1.png" alt="avatar" class="review__avatar" />
                    <span class="review__name">Алексей</span>
                    <span class="review__text">Удобный и надежный сайт. Всем рекомендую!</span>
                </div>

                <div class="review">
                    <img src="./assets/landing/review-avatar1.png" alt="avatar" class="review__avatar" />
                    <span class="review__name">Алексей</span>
                    <span class="review__text">Удобный и надежный сайт. Всем рекомендую!</span>
                </div>

                <div class="review">
                    <img src="./assets/landing/review-avatar1.png" alt="avatar" class="review__avatar" />
                    <span class="review__name">Алексей</span>
                    <span class="review__text">Удобный и надежный сайт. Всем рекомендую!</span>
                </div>

                <div class="review">
                    <img src="./assets/landing/review-avatar1.png" alt="avatar" class="review__avatar" />
                    <span class="review__name">Алексей</span>
                    <span class="review__text">Удобный и надежный сайт. Всем рекомендую!</span>
                </div>

                <div class="review">
                    <img src="./assets/landing/review-avatar1.png" alt="avatar" class="review__avatar" />
                    <span class="review__name">Алексей</span>
                    <span class="review__text">Удобный и надежный сайт. Всем рекомендую!</span>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer landing__footer">
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
    <script src="{{ asset('/js/sidebar.js') }}"></script>
    <script src="{{ asset('/js/common.js') }}"></script>
</body>

</html>