<?php $the_title = "Лизинг - спецавтомобилей в ПрофАвто"; ?>
<?php $the_description = "Лизинг специального транспорта на выгодных условиях в компании ПрофАвто" ?>
<?php include_once('template/header.php') ?>

<!-- Основной контент -->
<main id="leasing">
  <section id="hero" class="section">
    <div class="container">
      <div class="hero">
        <h1 class="hero__title section__title page__title">
          <span>Лизинг</span>
        </h1>

        <div class="row">
          <div class="col-7 col-xxl-6">
            <ul class="list hero__description section__description">
              <li class="list__item mb-5">Значительная экономия по налогам: НДС, налог на прибыль и на имущество. В связи с применением ускоренной амортизацией</li>
              <li class="list__item mb-5">Индивидуальный график платежей</li>
              <li class="list__item">Не требуется доп. обеспечение</li>
            </ul>
          </div>
          <!-- /.col-6 -->

          <div class="col-4 col-xxl-6 offset-1 offset-xxl-0">
            <ul class="list hero__description section__description">
              <li class="list__item mb-5">Авансовый платёж - от 10%</li>
              <li class="list__item mb-5">Согласование от 1 дня</li>
              <li class="list__item">Балансодержатель: на усмотрение клиента</li>
            </ul>
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.hero -->
    </div>
    <!-- /.container -->
  </section>

  <section id="path" class="section">
    <div class="container">
      <div class="section__header">
        <h2 class="section__title">Путь лизинговой сделки</h2>
      </div>
      <!-- /.section__header -->

      <div class="path">
        <div class="path__row">
          <div class="path__card">
            <div class="path__num">1</div>
            <p class="path__text">
              Подача заявки и необходимого пакета документов лизингополучателем в лизинговую компанию
            </p>
          </div>
          <!-- /.path__card -->

          <div class="path__card">
            <div class="path__num">2</div>
            <p class="path__text">
              Заключение договора "лизинговая компания - лизингополучатель"
            </p>
          </div>
          <!-- /.path__card -->

          <div class="path__card">
            <div class="path__num">3</div>
            <p class="path__text">
              Внесение аванса лизингополучателем по договору лизинга на счет лизинговой компании
            </p>
          </div>
          <!-- /.path__card -->

          <div class="path__card">
            <div class="path__num">4</div>
            <p class="path__text">
              Заключение договора купли-продажи между лизинговой компанией и ООО "Луидор"
            </p>
          </div>
          <!-- /.path__card -->
        </div>
        <!-- /.path__row -->

        <img class="path__background" src="img/page/leasing/path/path.svg" alt="">

        <div class="path__row">
          <div class="path__card">
            <div class="path__num">5</div>
            <p class="path__text">
              Осуществление платежей в безналичной форме с рачетного счета лизингополучателя на счет лизинговой компании
            </p>
          </div>
          <!-- /.path__card -->

          <div class="path__card">
            <div class="path__num">6</div>
            <p class="path__text">
              Страхование лизинговой компанией приобретаемого имущества на весь срок лизинга (страховые платежи включаются в лизинговые платежи)
            </p>
          </div>
          <!-- /.path__card -->

          <div class="path__card">
            <div class="path__num">7</div>
            <p class="path__text">
              Передача приобретаемого имущества лизингополучателю
            </p>
          </div>
          <!-- /.path__card -->
        </div>
        <!-- /.path__row -->
      </div>
      <!-- /.path -->
    </div>
    <!-- /.container -->
  </section>

  <section id="requirement" class="section">
    <div class="container">
      <div class="section__header">
        <h2 class="section__title">Требуемые документы для оформления лизинговой сделки</h2>
      </div>
      <!-- /.section__header -->

      <ul class="list section__description">
        <li class="list__item mb-3">Копия паспорта руководителя</li>
        <li class="list__item mb-3">Бухгалтерская отчетность за 2 последних отчетных периода</li>
        <li class="list__item mb-3">Правоустанавливающие документы Организации</li>
        <li class="list__item">Протокол о назначении Руководителя на должность</li>
      </ul>

      <div class="requirement">
        <div class="requirement__action">
          <button data-micromodal-trigger="modal-callback" class="button button-outline">Оставить заявку на лизинг</button>
        </div>
        <!-- /.hero__action -->
      </div>
      <!-- /.requirement -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('template/callback.php') ?>
</main>

<?php include_once('template/footer.php') ?>