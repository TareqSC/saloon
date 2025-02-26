<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="The Best Booking System For Salons & Spas. 
            Sign Up Free. Grow Your Salon And Save Time "
        />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

        <link
            rel="preload"
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap"
            as="style"
            onload="this.onload=null;this.rel='stylesheet'"
        />
        <noscript>
            <link
                href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap"
                rel="stylesheet"
            />
        </noscript>

        <!-- Swiper css -->

        <!-- Swiper js -->

        <!-- My javascript file -->

        <script defer src="{{ asset('js/index.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('styles/styles.css') }}" />
        <title>Meetendo</title>
    </head>
    <body>
        <header class="salon__header">
            <img
                src="{{ asset('assests/salon/salon-left.svg') }}"
                class="salon__header--left"
                alt="salon-left"
            />
            <nav class="nav container">
                <div class="hidden overlay"></div>
                <div class="nav__logo">
                    <img
                        src="{{ asset('assests/shared/logo.webp') }}"
                        alt="Meetendo logo"
                        class="nav__logo__img"
                    />
                    <h2 class="nav__logo__title">Meetendo</h2>
                </div>
                <ul class="nav__list">
                    <a href="../html/index.html">
                        <li class="nav__list__item">Home</li></a
                    >
                    <a href=""> <li class="nav__list__item">Pricing</li></a>
                    <a href=""> <li class="nav__list__item">Support</li></a>
                </ul>

                <div class="nav__login">
                    <a class="nav__login__link" href="">Log in</a>
                    <button class="nav__login__button">
                        <a href="../html/subscription.html">Subscribe Now</a>
                    </button>
                </div>
                <img
                    class="nav__menu"
                    src="{{ asset('assests/shared/menu.svg') }}"
                    alt=""
                />
                <div class="hidden mobile-menu">
                    <ul>
                        <a href="../html/index.html">
                            <li class="mobile-menu--item">Home</li></a
                        >
                        <a href="">
                            <li class="mobile-menu--item">Pricing</li></a
                        >
                        <a href="">
                            <li class="mobile-menu--item">Support</li></a
                        >
                    </ul>
                    <div class="mobile-menu__login">
                        <a class="nav__login__link" href="">Log in</a>
                        <button class="nav__login__button">
                            <a href="../html/subscription.html"
                                >Subscribe Now</a
                            >
                        </button>
                    </div>
                </div>
            </nav>

            <div class="form__container--salon">
                <h1 class="form__container--salon__title">
                    All Available Saloons
                </h1>
                <form class="header--home__form header--salon__form" action="">
                    <div class="form__container">
                        <div class="form__input__container">
                            <label class="form__input__search__label"></label>
                            <input
                                class="header--home__input"
                                placeholder="What are you looking for ?"
                                type="text"
                            />
                        </div>
                        <div class="form__input__container">
                            <label class="form__input__pin__label"></label>
                            <input
                                class="header--home__input"
                                placeholder="Where to look ?"
                                type="text"
                            />
                        </div>
                        <div
                            class="form__input__container form__input__container--open"
                        >
                            <input
                                class="header--home__input"
                                placeholder="Open Now"
                                type="text"
                            />
                        </div>
                        <input
                            class="header--home__input header--home__input--submit header--salon__input--submit"
                            type="submit"
                            value="Search"
                        />
                    </div>
                </form>
            </div>
            <img
                src="{{ asset('assests/salon/salon-right.svg') }}"
                class="salon__header--right"
                alt="meetendo logo"
            />
        </header>

        <section class="salon__selection__section">
            <div class="salon__select">
                <label
                    class="appointment__form__label--category"
                    for=""
                ></label>

                <input type="text" placeholder="Salon Type" />
            </div>
            <div class="salon__select">
                <label
                    class="appointment__form__label--category"
                    for=""
                ></label>

                <input type="text" placeholder="Service Place" />
            </div>
            <div class="salon__select">
                <label
                    class="appointment__form__label--category rating__label"
                    for=""
                ></label>

                <input type="text" placeholder="Rating" />
            </div>

            <div
                onclick="window.location.href = '../html/single-salon.html'"
                class="salon__selection__section--card"
            >
                <img src="{{ asset('assests/salon/image 5.jpg') }}" alt="Salon" />
                <div class="salon__selection__section--card--content">
                    <span class="salon__card--title">Salons</span>
                    <h3 class="salon__card--name">
                        Mashe Saloon<span>3</span>
                    </h3>
                    <p class="salon__card--text">
                        Speciality in hair body nails facial operations.
                    </p>
                    <div class="salon__card--features">
                        <span>Both</span>
                        <span>Unisex</span>
                    </div>
                    <p class="salon__card--location">
                        Abu Dhabi, United Arab Emarates
                    </p>
                </div>
            </div>
            <div
                onclick="window.location.href = '../html/single-salon.html'"
                class="salon__selection__section--card"
            >
                <img src="{{ asset('assests/salon/image 5-1.jpg') }}" alt="Salon" />
                <div class="salon__selection__section--card--content">
                    <span class="salon__card--title">Salons</span>
                    <h3 class="salon__card--name">
                        Mashe Saloon<span>3</span>
                    </h3>
                    <p class="salon__card--text">
                        Speciality in hair body nails facial operations.
                    </p>
                    <div class="salon__card--features">
                        <span>Both</span>
                        <span>Unisex</span>
                    </div>
                    <p class="salon__card--location">
                        Abu Dhabi, United Arab Emarates
                    </p>
                </div>
            </div>
            <div
                onclick="window.location.href = '../html/single-salon.html'"
                class="salon__selection__section--card"
            >
                <img src="{{ asset('assests/salon/image 5-2.jpg') }}" alt="Salon" />
                <div class="salon__selection__section--card--content">
                    <span class="salon__card--title">Salons</span>
                    <h3 class="salon__card--name">
                        Mashe Saloon<span>3</span>
                    </h3>
                    <p class="salon__card--text">
                        Speciality in hair body nails facial operations.
                    </p>
                    <div class="salon__card--features">
                        <span>Both</span>
                        <span>Unisex</span>
                    </div>
                    <p class="salon__card--location">
                        Abu Dhabi, United Arab Emarates
                    </p>
                </div>
            </div>
            <div
                onclick="window.location.href = '../html/single-salon.html'"
                class="salon__selection__section--card"
            >
                <img src="{{ asset('assests/salon/image 5-3.jpg') }}" alt="Salon" />
                <div class="salon__selection__section--card--content">
                    <span class="salon__card--title">Salons</span>
                    <h3 class="salon__card--name">
                        Mashe Saloon<span>3</span>
                    </h3>
                    <p class="salon__card--text">
                        Speciality in hair body nails facial operations.
                    </p>
                    <div class="salon__card--features">
                        <span>Both</span>
                        <span>Unisex</span>
                    </div>
                    <p class="salon__card--location">
                        Abu Dhabi, United Arab Emarates
                    </p>
                </div>
            </div>
            <div
                onclick="window.location.href = '../html/single-salon.html'"
                class="salon__selection__section--card"
            >
                <img src="{{ asset('assests/salon/image 5-4.jpg') }}" alt="Salon" />
                <div class="salon__selection__section--card--content">
                    <span class="salon__card--title">Salons</span>
                    <h3 class="salon__card--name">
                        Mashe Saloon<span>3</span>
                    </h3>
                    <p class="salon__card--text">
                        Speciality in hair body nails facial operations.
                    </p>
                    <div class="salon__card--features">
                        <span>Both</span>
                        <span>Unisex</span>
                    </div>
                    <p class="salon__card--location">
                        Abu Dhabi, United Arab Emarates
                    </p>
                </div>
            </div>
            <div
                onclick="window.location.href = '../html/single-salon.html'"
                class="salon__selection__section--card"
            >
                <img src="{{ asset('assests/salon/image 5-5.jpg') }}" alt="Salon" />
                <div class="salon__selection__section--card--content">
                    <span class="salon__card--title">Salons</span>
                    <h3 class="salon__card--name">
                        Mashe Saloon<span>3</span>
                    </h3>
                    <p class="salon__card--text">
                        Speciality in hair body nails facial operations.
                    </p>
                    <div class="salon__card--features">
                        <span>Both</span>
                        <span>Unisex</span>
                    </div>
                    <p class="salon__card--location">
                        Abu Dhabi, United Arab Emarates
                    </p>
                </div>
            </div>
            <div
                onclick="window.location.href = '../html/single-salon.html'"
                class="salon__selection__section--card"
            >
                <img src="{{ asset('assests/salon/image 5-6.jpg') }}" alt="Salon" />
                <div class="salon__selection__section--card--content">
                    <span class="salon__card--title">Salons</span>
                    <h3 class="salon__card--name">
                        Mashe Saloon<span>3</span>
                    </h3>
                    <p class="salon__card--text">
                        Speciality in hair body nails facial operations.
                    </p>
                    <div class="salon__card--features">
                        <span>Both</span>
                        <span>Unisex</span>
                    </div>
                    <p class="salon__card--location">
                        Abu Dhabi, United Arab Emarates
                    </p>
                </div>
            </div>
            <div
                onclick="window.location.href = '../html/single-salon.html'"
                class="salon__selection__section--card"
            >
                <img src="{{ asset('assests/salon/image 5-7.jpg') }}" alt="Salon" />
                <div class="salon__selection__section--card--content">
                    <span class="salon__card--title">Salons</span>
                    <h3 class="salon__card--name">
                        Mashe Saloon<span>3</span>
                    </h3>
                    <p class="salon__card--text">
                        Speciality in hair body nails facial operations.
                    </p>
                    <div class="salon__card--features">
                        <span>Both</span>
                        <span>Unisex</span>
                    </div>
                    <p class="salon__card--location">
                        Abu Dhabi, United Arab Emarates
                    </p>
                </div>
            </div>
            <div
                onclick="window.location.href = '../html/single-salon.html'"
                class="salon__selection__section--card"
            >
                <img src="{{ asset('assests/salon/image 5-8.jpg') }}" alt="Salon" />
                <div class="salon__selection__section--card--content">
                    <span class="salon__card--title">Salons</span>
                    <h3 class="salon__card--name">
                        Mashe Saloon<span>3</span>
                    </h3>
                    <p class="salon__card--text">
                        Speciality in hair body nails facial operations.
                    </p>
                    <div class="salon__card--features">
                        <span>Both</span>
                        <span>Unisex</span>
                    </div>
                    <p class="salon__card--location">
                        Abu Dhabi, United Arab Emarates
                    </p>
                </div>
            </div>
            <div class="salon__section-button--container">
                <button class="salon__section-button">Load More</button>
            </div>
        </section>

        <section class="join__section">
            <h2 class="join__section-title">
                You have a Business and want to join Meetendo ?
            </h2>

            <form class="join__section-form" action="">
                <label class="join__section-label"></label>

                <input
                    class="join__section-input"
                    type="text"
                    placeholder="Enter Your Email"
                />
                <input class="join__section-button" type="submit" />
            </form>
            <div class="join__section-overlay"></div>
        </section>
        <footer class="footer">
            <header class="footer__header">
                <h3 class="footer__header-title">Download our App now !</h3>
                <div class="footer__header-store">
                    <a href="">
                        <img
                            src="{{ asset('assests/shared/app-store.webp') }}"
                            alt="app-store"
                        />
                    </a>
                    <a href="">
                        <img
                            src="{{ asset('assests/shared/google-play.webp') }}"
                            alt="google-play"
                        />
                    </a>
                </div>
            </header>

            <div class="footer__pages">
                <div class="footer__page">
                    <span class="footer__list-title">Product</span>
                    <ul>
                        <li>Overview</li>
                        <li>Features</li>
                        <li>Solutions</li>
                        <li>Tutorials</li>
                        <li>Pricing</li>
                        <li>Releases</li>
                    </ul>
                </div>
                <div class="footer__page">
                    <span class="footer__list-title">Company</span>
                    <ul>
                        <li>About us</li>
                        <li>Careers</li>
                        <li>Press</li>
                        <li>News</li>
                        <li>Media kit</li>
                        <li>Contact</li>
                    </ul>
                </div>
                <div class="footer__page">
                    <span class="footer__list-title">Resources</span>
                    <ul>
                        <li>Blog</li>
                        <li>Newsletter</li>
                        <li>Events</li>
                        <li>Help centre</li>
                        <li>Tutorials</li>
                        <li>Support</li>
                    </ul>
                </div>
                <div class="footer__page">
                    <span class="footer__list-title">Use cases</span>
                    <ul>
                        <li>Startups</li>
                        <li>Enterprise</li>
                        <li>Government</li>
                        <li>SaaS</li>
                        <li>Marketplaces</li>
                        <li>Ecommerce</li>
                    </ul>
                </div>
                <div class="footer__page">
                    <span class="footer__list-title">Social</span>
                    <ul>
                        <li>Twitter</li>
                        <li>LinkedIn</li>
                        <li>Facebook</li>
                        <li>GitHub</li>
                        <li>AngelList</li>
                        <li>Dribbble</li>
                    </ul>
                </div>
                <div class="footer__page">
                    <span class="footer__list-title">Legal</span>
                    <ul>
                        <li>Terms</li>
                        <li>Privacy</li>
                        <li>Cookies</li>
                        <li>Licenses</li>
                        <li>Settings</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
            <div class="footer__end">
                <div class="footer__end-logo">
                    <img
                        class="footer__end-logo__img"
                        src="{{ asset('assests/shared/logo.webp') }}"
                        alt="logo"
                    />
                    <span class="footer__end-logo">Meetendo</span>
                </div>
                <h4 class="copyright">© 2023 All rights reserved.</h4>
            </div>
        </footer>
    </body>
</html>
