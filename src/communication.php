<?php $the_title = "Контакты | ПрофАвто - спецавто, социальный транспорт"; ?>
<?php $the_description = "Контакты компании ПрофАвто - для связи по любым вопросам"; ?>

<?php include_once('template/header.php') ?>

<!-- Основной контент -->
<main id="communication">
  <section id="contact" class="section">
    <div class="container">
      <div class="contact">
        <div class="section__header">
          <h1 class="section__title page__title">
            Центр - <span>г. Нижний Новгород</span>
          </h1>
        </div>
        <!-- /.section__header -->

        <div class="row">
          <div class="col-3 mb-5">
            <div class="contact__item">
              <div class="contact__title">Адрес</div>
              <div class="contact__info">
                Росиия, г. Нижний Новгород,
                <br>
                ул. Ларина, 30
              </div>
            </div>
            <!-- /.contact__item -->
          </div>
          <!-- /.col-3 -->

          <div class="col-9 mb-5">
            <div class="contact__item">
              <div class="contact__title">Телефон для связи</div>
              <div class="contact__info"><a class="contact__link" href="tel:">+7 (888) 888-88-88</a></div>
            </div>
            <!-- /.contact__item -->
          </div>
          <!-- /.col-9 -->

          <div class="col-3">
            <div class="contact__item">
              <div class="contact__title">Режим работы</div>
              <div class="contact__info">
                Пн. - Пт.: с 8:00 до 17:00
                <br>
                Сб., Вс - выходной
              </div>
            </div>
            <!-- /.contact__item -->
          </div>
          <!-- /.col-3 -->

          <div class="col-9">
            <div class="contact__item">
              <div class="contact__title">E-mail</div>
              <div class="contact__info"><a class="contact__link" href="mailto:info@prof-automobile.ru">info@prof-automobile.ru</a></div>
            </div>
            <!-- /.contact__item -->
          </div>
          <!-- /.col-9 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.contact -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('template/callback.php') ?>
</main>

<?php include_once('template/footer.php') ?>