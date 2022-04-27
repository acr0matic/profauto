<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=1220" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Базовые мета-теги для поисковиков -->
  <title><?php echo $the_title; ?></title>

  <!-- Иконки для страницы -->
  <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">

  <!-- Метатеги которые выводят информацию о странице в поисковой запрос -->
  <meta name="description" content="<?php echo $the_description; ?>" />
  <meta name="keywords" content="мета-теги, шаблон, html, css, acr0matic" />

  <!-- Метатеги для ссылок в социальных сетях -->
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:title" content="<?php echo $the_title; ?>">
  <meta property="og:description" content="<?php echo $the_description; ?>" />
  <meta property="og:image" content="">

  <!-- Контролирует поведение поисковых систем при индексации страницы -->
  <meta name="robots" content="index,follow" />

  <!-- Покраска адресной строки в мобильных Chrome, Firefox OS и Opera -->
  <meta name="theme-color" content="#ffffff" />

  <!-- Покраска для iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">

  <!-- Место для счетков и аналитики -->

  <!-- Место для счетков и аналитики -->

  <!-- Стили -->
  <!-- build:css css/style.min.css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- endbuild -->
</head>

<body>
  <!-- Шапка -->
  <header id="header">
    <div class="container">
      <div class="header">
        <div class="header__logo">
          <a href="/">
            <img src="img/logo.svg" alt="" class="logo logo--header">
          </a>
        </div>
        <!-- /.header__logo -->

        <div class="header__wrapper">
          <div class="header__nav">
            <nav class="nav nav--header">
              <ul class="nav__list">
                <li class="nav__item">
                  <a class="nav__link" href="about.php">О компании</a>
                </li>

                <li class="nav__item">
                  <a class="nav__link" href="/">Спец. авто</a>
                </li>

                <li class="nav__item">
                  <div class="dropdown">
                    <div class="dropdown__header">
                      <span class="dropdown__title nav__link">Услуги</span>
                      <span class="dropdown__icon"></span>
                    </div>
                    <div class="dropdown__content">
                      <div class="dropdown__item">
                        <a href="leasing.php" class="nav__link">Лизинг</a>
                      </div>
                      <!-- /.dropdown__item -->

                      <div class="dropdown__item">
                        <a href="branding.php" class="nav__link">Брендирование транспорта</a>
                      </div>
                      <!-- /.dropdown__item -->
                    </div>
                    <!-- /.dropdown__content -->
                  </div>
                  <!-- /.dropdown -->
                </li>

                <li class="nav__item">
                  <a class="nav__link" href="communication.php">Контакты</a>
                </li>
              </ul>
            </nav>
            <!-- /.nav -->
          </div>
          <!-- /.header__nav -->

          <div class="header__action">
            <button data-micromodal-trigger="modal-callback" class="header__button button button-outline">Оставить заявку</button>
          </div>
          <!-- /.header__action -->
        </div>
        <!-- /.header__wrapper -->
      </div>
      <!-- /.header -->
    </div>
    <!-- /.container -->
  </header>