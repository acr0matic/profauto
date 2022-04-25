<section id="callback" class="section">
  <div class="container">
    <div class="callback">
      <img src="img/section/callback/background.svg" alt="" class="callback__background">
      <div class="row justify-content-between align-items-center position-relative">
        <div class="col-4 col-xxl-3 pe-5 pe-xxl-0">
          <div class="section__header section__header--small">
            <h2 class="section__title">Перезвоним вам</h2>
            <p class="section__text">и подберем оптимальное предложение</p>
          </div>
          <!-- /.section__header -->

          <form action="" class="callback__form form form-callback mb-4">
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

          <a class="callback__phone" href="tel:">+ 7 (888) 888-88-88</a>
        </div>
        <!-- /.col-3 -->

        <div class="col-6">
          <div class="callback__map map">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2ee8c0203e8011213a31527b420f11402ed2094b98b1d44e5451baad578b10f3&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
          </div>
          <!-- /.callback__map -->
        </div>
        <!-- /.col-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.callback -->
  </div>
  <!-- /.container -->
</section>