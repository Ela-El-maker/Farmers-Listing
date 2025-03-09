<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Onest || Dashboard</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="512x512" href="../src/images/favicon_io/android-chrome-512x512.png" />
    <link rel="apple-touch-icon" sizes="192x192" href="../src/images/favicon_io/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../src/images/favicon_io/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../src/images/favicon_io/favicon-16x16.png" />
    <link rel="manifest" href="../src/images/favicon_io/site.webmanifest" />
    <link rel="stylesheet" href="../src/plugins/css/slick.css">
    <link rel="stylesheet" href="../src/plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/main.css">
    <link rel="stylesheet" href="../src/css/extra.css">
</head>

<body>
    <div class="loader">
        <div class="loader-icon">
            <img src="../src/images/loader.gif" alt="loader" />
        </div>
    </div>

    <!-- header section start  -->
    <header class="header header--three">
        <div class="container navigation-bar">
            <div class="navigation-bar__left">
                <div class="d-flex align-items-center ">
                    <button class="toggle-icon  ">
                        <span class="toggle-icon__bar"></span>
                        <span class="toggle-icon__bar"></span>
                        <span class="toggle-icon__bar"></span>
                    </button>
                    <!-- Brand Logo -->
                    <a href="index.html" class="navigation-bar__logo">
                        <img src="../src/images/svg/logo-dark.svg" alt="brand-logo" class="logo-white text-white" />
                        <img src="../src/images/svg/logo-dark.svg" alt="brand-logo" class="logo-dark">
                    </a>
                </div>
                <!-- Menu -->
                <ul class="menu">
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            Home
                            <span class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 6L8 11L13 6" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>
                        <ul class="menu-dropdown">
                            <li class="menu-dropdown__item">
                                <a href="index.html" class="menu-dropdown__link">Homepage 01</a>
                            </li>
                            <li class="menu-dropdown__item">
                                <a href="home-02.html" class="menu-dropdown__link">Homepage 02</a>
                            </li>
                            <li class="menu-dropdown__item">
                                <a href="home-03.html" class="menu-dropdown__link">Homepage 03</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__item">
                        <a href="ad-list.html" class="menu__link active">Listing</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            Pages
                            <span class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 6L8 11L13 6" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>
                        <ul class="menu-dropdown">
                            <li class="menu-dropdown__item">
                                <a href="blog-list.html" class="menu-dropdown__link">Blog List</a>
                            </li>
                            <li class="menu-dropdown__item">
                                <a href="blog-details.html" class="menu-dropdown__link">Single Blogs</a>
                            </li>
                            <li class="menu-dropdown__item">
                                <a href="about.html" class="menu-dropdown__link">About</a>
                            </li>
                            <li class="menu-dropdown__item">
                                <a href="price-plan.html" class="menu-dropdown__link">Pricing Plans</a>
                            </li>
                            <li class="menu-dropdown__item">
                                <a href="signin.html" class="menu-dropdown__link">Sign In</a>
                            </li>
                            <li class="menu-dropdown__item">
                                <a href="signup.html" class="menu-dropdown__link">Sign Up</a>
                            </li>
                            <li class="menu-dropdown__item">
                                <a href="dashboard.html" class="menu-dropdown__link">user Dashboard</a>
                            </li>
                            <li class="menu-dropdown__item">
                                <a href="faq.html" class="menu-dropdown__link">Faqs</a>
                            </li>
                            <li class="menu-dropdown__item">
                                <a href="404-error.html" class="menu-dropdown__link">404 Error Pages</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__item">
                        <a href="get-membership.html" class="menu__link">Get Membership</a>
                    </li>
                    <li class="menu__item">
                        <a href="contact.html" class="menu__link">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="navigation-bar__right">
                <!-- Action Buttons -->
                <div class="navigation-bar__buttons">
                    <a href="message-board.html" class="message">
                        <span class="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.25895 16.5939C3.14076 14.7089 2.74916 12.4805 3.15768 10.3272C3.56621 8.1739 4.74675 6.2438 6.47764 4.89933C8.20853 3.55486 10.3707 2.8885 12.5581 3.02539C14.7455 3.16227 16.8078 4.09298 18.3575 5.64274C19.9073 7.19251 20.838 9.25472 20.9749 11.4421C21.1118 13.6296 20.4455 15.7917 19.101 17.5226C17.7565 19.2535 15.8264 20.4341 13.6732 20.8426C11.5199 21.2511 9.29149 20.8596 7.40649 19.7414L7.40651 19.7413L4.29808 20.6294C4.16947 20.6662 4.03338 20.6678 3.90391 20.6343C3.77443 20.6007 3.65628 20.5332 3.5617 20.4386C3.46713 20.344 3.39956 20.2259 3.36601 20.0964C3.33246 19.9669 3.33415 19.8308 3.37089 19.7022L4.25901 16.5938L4.25895 16.5939Z"
                                    stroke="#767E94" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M12 13.125C12.6213 13.125 13.125 12.6213 13.125 12C13.125 11.3787 12.6213 10.875 12 10.875C11.3787 10.875 10.875 11.3787 10.875 12C10.875 12.6213 11.3787 13.125 12 13.125Z"
                                    fill="#767E94" />
                                <path
                                    d="M7.5 13.125C8.12132 13.125 8.625 12.6213 8.625 12C8.625 11.3787 8.12132 10.875 7.5 10.875C6.87868 10.875 6.375 11.3787 6.375 12C6.375 12.6213 6.87868 13.125 7.5 13.125Z"
                                    fill="#767E94" />
                                <path
                                    d="M16.5 13.125C17.1213 13.125 17.625 12.6213 17.625 12C17.625 11.3787 17.1213 10.875 16.5 10.875C15.8787 10.875 15.375 11.3787 15.375 12C15.375 12.6213 15.8787 13.125 16.5 13.125Z"
                                    fill="#767E94" />
                            </svg>
                        </span>
                    </a>
                    <a href="dashboard.html" class="user">
                        <div class="user__img-wrapper">
                            <img src="../src/images/users/img-01.png" alt="user-img" />
                        </div>
                    </a>
                    <a href="#" class="btn">
                        <span class="icon--left">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                    stroke="currentColor" stroke-width="1.6" stroke-miterlimit="10"></path>
                                <path d="M8.25 12H15.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M12 8.25V15.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        Post Ads
                    </a>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div class="menu--sm mobile-menu">
                <!-- head -->
                <div class="mobile-menu__header">
                    <!-- brand -->
                    <div class="mobile-menu__brand">
                        <a href="index.html">
                            <img src="../src/images/svg/logo-dark.svg" alt="logo">
                        </a>
                        <div class="close">
                            <span>
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 5.08325L15.6066 15.6899" stroke="#191F33" stroke-width="1.9375"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.99999 15.9167L15.6066 5.31015" stroke="#191F33" stroke-width="1.9375"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="mobile-menu__search">
                        <form action="#">
                            <div class="input-field">
                                <input type="text" placeholder="Ads, Title, keyword..." class="">
                                <button class="icon icon-search">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                            stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M21.0004 21.0004L16.6504 16.6504" stroke="#00AAFF" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="mobile-menu__body">
                        <ul>
                            <li class="menu--sm__item">
                                <a href="#" class="menu--sm__link active">
                                    Home
                                    <span class="icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 6L8 11L13 6" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                                <ul class="menu--sm-dropdown">
                                    <li class="menu--sm-dropdown__item">
                                        <a href="index.html" class="menu--sm-dropdown__link active">Homepage 01</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="home-02.html" class="menu--sm-dropdown__link">Homepage 02</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="home-03.html" class="menu--sm-dropdown__link">Homepage 03</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu--sm__item">
                                <a href="#" class="menu--sm__link">
                                    All Category
                                    <span class="icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 6L8 11L13 6" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                                <ul class="menu--sm-dropdown">
                                    <li class="menu--sm-dropdown__item">
                                        <a href="#" class="menu--sm-dropdown__link">Mobile</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="#" class="menu--sm-dropdown__link">Electronics</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="#" class="menu--sm-dropdown__link">Vehicles</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="#" class="menu--sm-dropdown__link">Property</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="#" class="menu--sm-dropdown__link">Essentials</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="#" class="menu--sm-dropdown__link">Home &amp; Living</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="#" class="menu--sm-dropdown__link">Business Industry</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="#" class="menu--sm-dropdown__link">Education</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu--sm__item">
                                <a href="ad-list.html" class="menu--sm__link">Ads Listing</a>
                            </li>
                            <li class="menu--sm__item">
                                <a href="#" class="menu--sm__link">
                                    Pages
                                    <span class="icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 6L8 11L13 6" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                                <ul class="menu--sm-dropdown">
                                    <li class="menu--sm-dropdown__item">
                                        <a href="blog-list.html" class="menu--sm-dropdown__link">Blog List</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="blog-details.html" class="menu--sm-dropdown__link">Single Blogs</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="about.html" class="menu--sm-dropdown__link">About</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="price-plan.html" class="menu--sm-dropdown__link">Pricing Plans</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="signin.html" class="menu--sm-dropdown__link">Sign In</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="signup.html" class="menu--sm-dropdown__link">Sign Up</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="dashboard.html" class="menu--sm-dropdown__link">user Dashboard</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="faq.html" class="menu--sm-dropdown__link">Faqs</a>
                                    </li>
                                    <li class="menu--sm-dropdown__item">
                                        <a href="404-error.html" class="menu--sm-dropdown__link">404 Error Pages</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu--sm__item">
                                <a href="get-membership.html" class="menu--sm__link">Get Membership</a>
                            </li>
                            <li class="menu--sm__item">
                                <a href="contact.html" class="menu--sm__link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="mobile-menu__language">
                        <h2>Languages</h2>
                        <div class="language-picker js-language-picker mobile-show">
                            <form action="" class="language-picker__form">
                                <label for="language-picker-select"></label>
                                <select name="language-picker-select" id="language-picker-select">
                                    <option lang="en" value="english" selected>En</option>
                                    <option lang="de" value="deutsch">De</option>
                                    <option lang="fr" value="francais">Fr</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- footer  -->
                <div class="mobile-menu__footer ">
                    <div class="mobile-menu-user-wrap">
                        <div class="mobile-menu-user-left">
                            <div class="mobile-menu-user">
                                <img src="../src/images/users/img-06.png" alt="">
                            </div>
                            <div class="mobile-menu-user-data">
                                <h5>Jenny Wilson</h5>
                                <p>Member</p>
                            </div>
                        </div>
                        <div class="mobile-menu-user-right">
                            <a class="sign-out" href="signin.html"><img src="./src/images/svg/SignOut.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end   -->