<?php include_once('template/header.php') ?>

<!-- Основной контент -->
<main id="about">
  <section id="hero" class="section">
    <div class="container">
      <div class="hero">
        <div class="hero__content">
          <h1 class="hero__title section__title page__title">
            Производственно-коммерческая
            <br>
            компания <span>ПРОФАВТО</span>
          </h1>

          <p class="hero__description section__description">
            Наша компания основана в 2019 году, на данный момент мы - крупный дистрибьютер спец. техники для Российских компаний, явлеямся центром компетенций в данном направлении. ПРОФАВТО работает с крупнейшими заводами по доработке коммерческого транспорта а так же являемся партнером дистрибьютеров автомобильных марок ГАЗ, Mersedes-Bens, Volkswagen, Lada и другие. </p>

          <div class="hero__action">
            <button data-micromodal-trigger="modal-callback" class="hero__button button button-outline">Оставить заявку</button>
          </div>
          <!-- /.hero__action -->
        </div>
        <!-- /.hero__content -->

        <div class="hero__picture">
          <img class="hero__image image image--contain" src="img/page/about/hero/picture.png" alt="">
        </div>
        <!-- /.hero__picture -->
      </div>
      <!-- /.hero -->
    </div>
    <!-- /.container -->
  </section>

  <section id="geo" class="section">
    <div class="container">
      <div class="geo">
        <div class="row">
          <div class="col-6">
            <div class="section__header">
              <h2 class="section__title">География работы компании</h2>
            </div>
            <!-- /.section__header -->

            <p class="section__text">
              Компания ПРОФАВТО находится по адресу г. Нижний Новгород,
              <br>
              ул. Ларина, 30.
              <br>
              Компания ПРОФАВТО имеет возможность осуществляться
              <br>
              гарантийные и технические работы на производственных
              <br>
              площадках ключевых партнеров.
              <br><br>
              Города присутствия компании:
              <br>
              - Нижний Новгород
              <br>
              - Москва и Московская обл.
              <br>
              - Казань
              <br>
              - Уфа
              <br>
              - Челябинск
              <br>
              - Чебоксары
              <br>
              - Саранск
              <br>
              - Владимир
              <br>
              - Тамбов
            </p>
          </div>
          <!-- /.col-6 -->

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
      <!-- /.geo -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('template/client.php') ?>

  <?php include_once('template/partner.php') ?>

  <?php include_once('template/advantage.php') ?>

  <?php include_once('template/callback.php') ?>
</main>

<?php include_once('template/footer.php') ?>