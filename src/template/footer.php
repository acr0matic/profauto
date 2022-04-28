<!-- Подвал -->
<footer id="footer">
  <div class="container">
    <div class="footer">
      <div class="footer__row">
        <div class="footer__logo">
          <a href="/">
            <img class="logo logo--footer" src="img/logo.svg" alt="">
          </a>
        </div>
        <!-- /.footer__logo -->

        <div class="footer__wrapper">
          <div class="footer__info">
            <span class="mb-3">
              Продажа и обслуживание
              <br>
              специального транспорта
            </span>

            <a href="tel:+79300565363" class="link link--bold mb-1">+7 (930) 056-53-63</a>
            <a href="mailto:info@prof-automobile.ru" class="link link--bold">Info@prof-automobile.ru</a>
          </div>
          <!-- /.footer__info -->

          <div class="footer__nav">
            <nav class="nav nav--footer">
              <ul class="nav__list">
                <li class="nav__item">
                  <a class="nav__link" href="about.php">О компании</a>
                </li>

                <li class="nav__item">
                  <a class="nav__link" href="/">Спец. авто</a>
                </li>

                <li class="nav__item">
                  <a class="nav__link" href="leasing.php">Лизинг</a>
                </li>

                <li class="nav__item">
                  <a class="nav__link" href="branding.php">Брендирование транспорта</a>
                </li>

                <li class="nav__item">
                  <a class="nav__link" href="communication.php">Контакты</a>
                </li>
              </ul>
            </nav>
            <!-- /.nav -->
          </div>
          <!-- /.footer__nav -->

          <div class="footer__address">
            <span class="footer__title mb-4">Адрес</span>
            <a class="link">
              Россия, г. Нижний <br> Новгород, ул. Ларина, 30
            </a>
          </div>
          <!-- /.footer__address -->
        </div>
        <!-- /.footer__wrapper -->
      </div>
      <!-- /.footer__row -->

      <div class="footer__row">
        <div class="footer__copyright">
          2010-2022 - ООО “ПРОФАВТО”
        </div>
        <!-- /.footer__copyright -->
      </div>
      <!-- /.footer__row -->
    </div>
    <!-- /.footer -->
  </div>
  <!-- /.container -->
</footer>

<div class="modal modal-callback micromodal-slide" id="modal-callback" aria-hidden="true">
  <div class="modal__overlay" data-micromodal-close>
    <div class="container" data-micromodal-close>
      <div class="modal__container" role="dialog">
        <div class="modal__wrapper">
          <header class="modal__header">
            <h2 class="modal__title">
              Перезвоним вам
            </h2>

            <p class="modal__text">
              и подберем оптимальное предложение
            </p>

            <svg data-micromodal-close class="modal__close" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="16" cy="16" r="15.5" stroke="white" />
              <path d="M10 11L21.5 21.5M21.5 11L10 21.5" stroke="white" />
            </svg>
          </header>

          <main class="modal__content">
            <form action="php/mail.php" data-target="callback" class="callback__form form form-callback mb-4">
              <label class="input mb-3">
                <span class="input__label">Имя</span>
                <div class="input__wrapper">
                  <input autocomplete="off" type="text" name="user__name" class="input__field">
                  <img data-tippy-content="Имя указано с ошибкой" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                </div>
                <!-- /.input__wrapper -->
              </label>
              <!-- /.input -->

              <label class="input mb-3">
                <span class="input__label">Телефон</span>
                <div class="input__wrapper">
                  <input data-required autocomplete="off" type="tel" name="user__phone" class="input__field">
                  <img data-tippy-content="Номер телефона не указан или указан с ошибкой" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                </div>
                <!-- /.input__wrapper -->
              </label>
              <!-- /.input -->

              <label class="input mb-3">
                <span class="input__label">E-mail</span>
                <div class="input__wrapper">
                  <input autocomplete="off" type="email" name="user__email" class="input__field">
                  <img data-tippy-content="Почта указана с ошибкой" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                </div>
                <!-- /.input__wrapper -->
              </label>
              <!-- /.input -->

              <label class="input mb-4">
                <span class="input__label">Задача</span>
                <div class="input__wrapper">
                  <input autocomplete="off" type="text" name="user__task" class="input__field">
                  <img data-tippy-content="" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                </div>
                <!-- /.input__wrapper -->
              </label>
              <!-- /.input -->

              <button class="button button-outline button-outline--dark form__button" type="submit" data-sending="Отправка...">Отправить форму</button>
            </form>
            <!-- /.callback__form -->
          </main>
        </div>
        <!-- /.modal__wrapper -->

        <div class="modal__action">
          <a class="modal__link" href="tel:">+ 7 (888) 888-88-88</a>
        </div>
        <!-- /.modal__action -->
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.modal__overlay -->
</div>
<!-- /.modal -->

<div class="modal modal-success micromodal-slide" id="modal-success" aria-hidden="true">
  <div class="modal__overlay" data-micromodal-close>
    <div class="container" data-micromodal-close>
      <div class="modal__container" role="dialog">
        <header class="modal__header">
          <h2 class="modal__title">
            Спасибо
          </h2>
        </header>

        <main class="modal__content">
          <p class="modal__text">
            Мы свяжемся с вами <br> в течении 15 минут
          </p>
        </main>
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.modal__overlay -->
</div>
<!-- /.modal -->

<!-- Скрипты -->
<!-- build:js js/script.min.js -->
<script src="scripts/libraries/lazyload.js"></script>
<script src="scripts/libraries/swiper.js"></script>
<script src="scripts/libraries/popper.js"></script>
<script src="scripts/libraries/tippy.js"></script>
<script src="scripts/libraries/imask.js"></script>
<script src="scripts/libraries/forms.js"></script>
<script src="scripts/libraries/micromodal.js"></script>
<script src="scripts/libraries/fslightbox.js"></script>

<script src="scripts/base.js"></script>
<script src="scripts/init.js"></script>
<script src="scripts/header.js"></script>
<script src="scripts/hero.js"></script>
<!-- endbuild -->
</body>

</html>