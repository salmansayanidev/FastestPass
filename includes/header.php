<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/FastPass-fevicon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/layout.css">
    <link rel="stylesheet" href="./assets/css/global.css">
    <title>Fastest Pass</title>
</head>

<body>

    <!-- header start -->
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-7 col-lg-2">
                    <a href="." class="logo">
                        <img class="img-fluid" src="./assets/images/fastest-pass-logo.svg" alt="logo">
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-5 d-none d-lg-block">
                    <nav class="navigation">
                        <ul class="nav-list">
                            <li class="nav-item">
                                <a href="how-it-works.php" class="nav-link">How it works</a>
                            </li>
                            <li class="nav-item">
                                <a href="features.php" class="nav-link">Features</a>
                            </li>
                            <li class="nav-item">
                                <a href="pricing.php" class="nav-link">Pricing</a>
                            </li>
                            <li class="nav-item position-relative">
                                <a href="apps-downloads.php" class="nav-link">Apps</a>
                                <ul class="sub-menu-list">
                                    <li class="sub-menu-item">
                                        <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-1.svg" alt="">
                                        <a href="apps-windows.php" class="sub-menu-link">Windows</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-2.svg" alt="">
                                        <a href="apps-mac.php" class="sub-menu-link">macOS</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-3.svg" alt="">
                                        <a href="apps-ios.php" class="sub-menu-link">iOS</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-4.svg" alt="">
                                        <a href="apps-android.php" class="sub-menu-link">Android</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-5.svg" alt="">
                                        <a href="apps-chrome.php" class="sub-menu-link">Chrome Extension</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-6.svg" alt="">
                                        <a href="apps-firefox.php" class="sub-menu-link">Firefox Extension</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-7.svg" alt="">
                                        <a href="apps-safari.php" class="sub-menu-link">Safari Extension</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-8.svg" alt="">
                                        <a href="apps-edge.php" class="sub-menu-link">Edge Extension</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-9.svg" alt="">
                                        <a href="apps-opera.php" class="sub-menu-link">Opera Extension</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="blogs.php" class="nav-link">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-6 col-md-4 col-lg-5 d-none d-lg-block">
                    <div class="header-right">
                        <div class="header-right-inner">
                            <a class="" href="help-support.php">
                                <div class="header-right-buttons">
                                    <img class="img-fluid" src="./assets/images/help-icon.png" alt="">
                                    <span class="nav-link">Help</span>
                                </div>
                            </a>
                            <a class="" href="login.php">
                                <div class="header-right-buttons">
                                    <img class="img-fluid" src="./assets/images/profile-tick.png" alt="">
                                    <span class="nav-link">login</span>
                                </div>
                            </a>
                        </div>
                        <div class="">
                            <a class="primary-btn" href="#">
                                Get Free Lockmypass
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-5 d-block d-lg-none">
                    <div class="mb-menu-btn-area d-flex justify-content-end">
                        <button class="mb-menu-btn" type="button">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--  header end -->

    <!-- mobile menu start -->
    <div class="col-12 d-block d-lg-none">
        <nav class="mobile-menu">
            <button class="mb-menu-cls-btn" type="button">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <ul class="mobile-menu-list">
                <li class="nav-item">
                    <a href="how-it-works.php" class="nav-link">How it works</a>
                </li>
                <li class="nav-item">
                    <a href="features.php" class="nav-link">Features</a>
                </li>
                <li class="nav-item">
                    <a href="pricing.php" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item position-relative">
                    <div class="position-relative">
                        <a href="apps-downloads.php" class="nav-link">Apps</a>
                        <button class="mb-sb-menu-btn" type="button">
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                    </div>
                    <ul class="sub-menu-list">
                        <li class="sub-menu-item">
                            <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-1.svg" alt="">
                            <a href="apps-windows.php" class="sub-menu-link">Windows</a>
                        </li>
                        <li class="sub-menu-item">
                            <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-2.svg" alt="">
                            <a href="apps-mac.php" class="sub-menu-link">macOS</a>
                        </li>
                        <li class="sub-menu-item">
                            <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-3.svg" alt="">
                            <a href="apps-ios.php" class="sub-menu-link">iOS</a>
                        </li>
                        <li class="sub-menu-item">
                            <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-4.svg" alt="">
                            <a href="apps-android.php" class="sub-menu-link">Android</a>
                        </li>
                        <li class="sub-menu-item">
                            <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-5.svg" alt="">
                            <a href="apps-chrome.php" class="sub-menu-link">Chrome Extension</a>
                        </li>
                        <li class="sub-menu-item">
                            <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-6.svg" alt="">
                            <a href="apps-firefox.php" class="sub-menu-link">Firefox Extension</a>
                        </li>
                        <li class="sub-menu-item">
                            <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-7.svg" alt="">
                            <a href="apps-safari.php" class="sub-menu-link">Safari Extension</a>
                        </li>
                        <li class="sub-menu-item">
                            <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-8.svg" alt="">
                            <a href="apps-edge.php" class="sub-menu-link">Edge Extension</a>
                        </li>
                        <li class="sub-menu-item">
                            <img class="sub-menu-icon" src="./assets/images/sub-menu-icon-9.svg" alt="">
                            <a href="apps-opera.php" class="sub-menu-link">Opera Extension</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="blogs.php" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="help-support.php" class="nav-link">Help</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">login</a>
                </li>
                <li>
                    <a class="primary-btn" href="#">
                        Get Free Lockmypass
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- mobile menu end -->