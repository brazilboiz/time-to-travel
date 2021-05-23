<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Time To Travel</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset("css/normalize.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/common.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/tour.css")}}" />
    <link rel="stylesheet" href="{{asset("css/hamburgers.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/search-tour.css")}}"/>
</head>
<body>
<header class="header search-header">
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

        <a href="/search" class="navigation-list__link mobile-hidden active"
        >Поиск тура</a
        >

        <a href="/about" class="navigation-list__link mobile-hidden">О нас</a>

        <a href="/#order" class="order-button mobile-hidden">Оставить заявку</a>

        <a href="/#order" class="order-button mobile mobile-visible">
            <img src="./assets/phone-call.png" alt="order" />
        </a>
    </nav>

    <div class="header__content container">
        <div class="tour-card">
            <h1 class="tour-card__title">Поиск тура</h1>
            <p class="tour-card__name">
                Для начала мы предлагаем определиться со страной
            </p>

            <button class="tour-card__button">Страны</button>
        </div>
    </div>
</header>

<!-- TODO: rewrite this block bcs it's not a sidebar -->
<aside class="sidebar mobile-visible">
    <ul class="sidebar__list">
        <li class="sidebar__item">
            <a href="/" class="sidebar__link">Главная</a>
        </li>
        <li class="sidebar__item">
            <a href="/search" class="sidebar__link">Поиск тура</a>
        </li>
        <li class="sidebar__item">
            <a href="/about" class="sidebar__link">О нас</a>
        </li>
    </ul>
</aside>

<section class="tour-filters container">
    <div>
        <form action="" method="get" class="country-filter">
            <button class="country-filter__item" name="country" value="Канада">
                <img
                    src="./assets/flags/canada.png"
                    alt="canada"
                    class="country-filter__image"
                />
            </button>
            <button class="country-filter__item" name="country" value="Испания">
                <img
                    src="./assets/flags/spain.png"
                    alt="spain"
                    class="country-filter__image"
                />
            </button>
            <button class="country-filter__item" name="country" value="Египет">
                <img
                    src="./assets/flags/egypt.png"
                    alt="egypt"
                    class="country-filter__image"
                />
            </button>
            <button class="country-filter__item" name="country" value="Филиппины">
                <img
                    src="./assets/flags/philippines.png"
                    alt="philippines"
                    class="country-filter__image"
                />
            </button>
            <button class="country-filter__item" name="country" value="Турция">
                <img
                    src="./assets/flags/turkey.png"
                    alt="turkey"
                    class="country-filter__image"
                />
            </button>
            <button class="country-filter__item" name="country" value="Арабские Эмираты">
                <img
                    src="./assets/flags/united-arab-emirates.png"
                    alt="united-arab-emirates"
                    class="country-filter__image"
                />
            </button>
            <button class="country-filter__item" name="country" value="Кипр">
                <img
                    src="./assets/flags/cyprus.png"
                    alt="cyprus"
                    class="country-filter__image"
                />
            </button>
            <button class="country-filter__item" name="country" value="Греция">
                <img
                    src="./assets/flags/greece.png"
                    alt="greece"
                    class="country-filter__image"
                />
            </button>
        </form>
    </div>
</section>

<section class="search-results container">

    <?php
    use Illuminate\Support\Facades\DB;

    if (isset($_GET['country'])):
        $tour = DB::table('tours')->where('country', '=', $_GET['country'] )->get();

        foreach ($tour as $data): ?>
            <div
                class="search-result"
                style="background-image: url('{{$data->image_preview}}')"
            >
                <div class="search-result__content black">
                    <h3 class="search-result__name">{{$data->country}}</h3>
                    <p class="search-result__city">{{$data->city}}</p>
                    <p class="search-result__description">
                        {{$data->short_description}}
                    </p>
                </div>
                <a class="search-result__button" href="/tour/{{$data->city}}" style="text-decoration: none">Подробнее</a>
            </div>
<?php endforeach;?>
<?php endif;?>
</section>

<!--  -->

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
<script src="./js/tour-filters.js"></script>
</body>
</html>
