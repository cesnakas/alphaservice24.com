<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Композиционный сайт Битрикс24");
$APPLICATION->SetPageProperty("title", "Композиционный сайт Битрикс24. \"Альфа Сервис\"");
$APPLICATION->SetPageProperty("keywords", "Композиционный сайт Битрикс24");
$APPLICATION->SetPageProperty("description", "Композиционный сайт Битрикс24. \"Альфа Сервис\".");

$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Композиционный сайт Битрикс24. \"Альфа Сервис\"");
?>

<div class="composite">
  <section>
    <div class="container">
      <div class="top-screen__content">
        <div class="top-screen__box">
          <h1 class="top-screen__title">
            Композитный сайт
          </h1>
          <div class="top-screen__text">
            <p>
              Уникальная технология производства сайтов.
            </p>
            <p class="blue whatis__span">
              Ускорение Х100!
            </p>
          </div>
          <div class="top-screen__buttons">
            <a class="btn top-screen__btn" href="#" onclick="togglePopup('.js-callback')">
              Заказать разработку
            </a>
          </div>
        </div>
        <div class="top-screen__image">
          <img class="top-screen__img" src="<?= SITE_TEMPLATE_PATH ?>/images/services/composite/comp_1.png"
               alt="Люди обсуждают бизнес">
        </div>
      </div>
    </div>
  </section>

  <section>
    <article class="container composite-media-wrap">
      <h2 class="title h2-margin-70">Большая скорость — большие возможности</h2>

      <div class="whatis__items">
        <div class="whatis__box">
          <iframe src="https://www.youtube-nocookie.com/embed/jo4A4Wqlksc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <img class="whatis__img" src="<?= SITE_TEMPLATE_PATH ?>/images/services/composite/comp_2.png"
               alt="Большая скорость сайтов Битрикс24">
        </div>

        <div class="whatis__box">
          <div class="whatis__text whatis__text--indent">
            <p>
              Уникальная технология производства сайтов объединяет в себе высокую скорость загрузки статического сайта
              и все возможности динамического сайта.
            </p>
          </div>

          <div class="whatis__text">
            <p>
              Пользователь мгновенно получает контент страницы.
            </p>
          </div>

          <div class="composite-btn">
            <a class="btn services-cart__btn" href="#" onclick="togglePopup('.js-callback')">
              Заказать разработку
            </a>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section>
    <div class="container">
      <h2 class="title h2-margin-60">Почему это выгодно?</h2>

      <div class="triple-panel-info">
        <article>
          <img class="lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/images/services/composite/comp_block_1.png" alt="Будильник">
          <h3>Отклик сайта в 100 раз быстрее</h3>
        </article>

        <article>
          <img class="lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/images/services/composite/comp_block_2.png" alt="График">
          <h3>Лучшее ранжирование сайтов в Google и Яндекс</h3>
        </article>

        <article>
          <img class="lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/images/services/composite/comp_block_3.png" alt="Диаграмма">
          <h3>Значительный рост конверсии интернет-магазина</h3>
        </article>
      </div>
    </div>
  </section>

  <section class="announcement-card">
    <article class="container">
      <h2 class="title h2-margin-40">Дайте своему сайту преимущество перед конкурентами</h2>
      <p>Любой сайт на платформе «1C-Битрикс» может быть разработан по композитной технологии</p>
      <a class="btn services-cart__btn" href="#" onclick="togglePopup('.js-callback')">
        Заказать разработку
      </a>
    </article>
  </section>
</div>

<div class="composite">
  <section>
    <article class="container ">
      <div class="block-title-center">
        <h2 class="title title-dynamic-form h2-margin-24">Динамика загрузки страницы</h2>
        <p>Людям важно, чтобы страница мгновенно отображалась в браузере</p>
      </div>

      <div class="view-dynamic-wrap">
        <div class="our-services__switch">
          <span>Обычный</span>
          <label class="switch">
            <input id="toggle-options" type="checkbox" checked="false">
            <span class="slider round"></span>
          </label>
          <span class="toggle-color">Композитный</span>
        </div>

        <div class="view-dynamic-form">
          <span>HTML</span>
          <span>Динамические данные</span>
          <span class="pos-step-1">CSS</span>
          <span class="pos-step-1">JavaScript</span>
          <span class="pos-step-1">Изображения</span>
          <div>
            <p class="pos-step-1">
              <span>0.2-0.6 сек.</span>
            </p>
            <p class="pos-step-1">
              <span>2.5-4.5 сек.</span>
              <span class="blue">Отображение у пользователя</span>
            </p>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section>
    <article class="container comp-block-5-wrap">
      <h2 class="title h2-margin-24">Как это работает?</h2>
      <p>
        Вы не заметите технических сложностей, вы просто будете знать, что ваш сайт быстрее других!
      </p>

      <ul>
        <li>
          <div>
            <img class="lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/images/services/composite/comp_info_1.png" alt="Список">
          </div>
          <div>
            <p>Страница разделяется на 2 соcтавляющие: статическую и динамическую</p>
            <span>Совершенно новый цикл загрузки страниц</span>
          </div>
        </li>
        <li>
          <div>
            <img class="lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/images/services/composite/comp_info_2.png" alt="Часы">
          </div>
          <div>
            <p>Статическая часть кешируется и отображается мгновенно</p>
            <span>Пользователь сразу видит содержимое и может работать с ним</span>
          </div>
        </li>
        <li>
          <div>
            <img class="lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/images/services/composite/comp_info_3.png" alt="Прогресс">
          </div>
          <div>
            <p>Динамическая часть подгружается в фоновом режиме и кешируется в браузере посетителя</p>
          </div>
        </li>
      </ul>
    </article>
  </section>

  <section>
    <article class="container comp-block-6-wrap">
      <h2 class="title h2-margin-24">1С-Битрикс: Управление сайтом</h2>
      <p>По композитной технологии могут работать все сайты, разработанные на платформе «1С-Битрикс: Управление сайтом»</p>

      <ul class="block-col-2">
        <li>
          <p>
            «1С-Битрикс: Управление сайтом» - профессиональная система управления веб-проектами, универсальный инструмент для создания и управления современным интернет-проектом: корпоративных сайтов, интернет-магазинов, информационных порталов, сайтов сообществ, социальных сетей и других веб-проектов.
          </p>

          <div class="composite-btn">
            <a class="btn top-screen__btn" href="#" onclick="togglePopup('.js-callback')">
              Заказать разработку
            </a>
          </div>
        </li>
        <li>
          <img class="top-screen__img lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/images/services/composite/comp_3.png" alt="1С-Битрикс: Управление сайтом">
        </li>
      </ul>

      <div class="comp-info">
        <p>Если сайт работает в композитном режиме, вы увидите кнопку:</p>
        <img class="top-screen__img lazyload" data-src="<?= SITE_TEMPLATE_PATH ?>/images/services/composite/comp_4.png" alt="1С-Битрикс">
      </div>

    </article>
  </section>
</div>

<style>
  /* Page Composite */
  :root {
    --before-view-dynamic-yellow: 100%;
  }

  section:not(:last-child) {
    margin: 0 0 120px;
  }

  .composite {
    background: url('<?= SITE_TEMPLATE_PATH ?>/images/icons/double-bg.svg') no-repeat;
  }

  .composite-media-wrap .whatis__box {
    position: relative;
  }

  .composite-media-wrap iframe {
    max-height: 326px;
    max-width: 572px;
    height: 100%;
    padding: 12px 11% 5%;
    position: absolute;
    width: 100%;
  }

  .composite .top-screen__image img {
    max-width: 598px;
    max-height: 540px;
    width: 100%;
  }

  .composite:nth-child(2) {
    margin: 120px 0 0;
  }

  .composite .whatis__box .whatis__text {
    font-size: 22px;
  }

  .whatis__box .btn {
    margin-top: 30px;
  }

  .triple-panel-info {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .triple-panel-info article {
    border-radius: 10px;
    background: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    max-width: 392px;
    padding: 60px 26px;
    margin: 0 10px;
    width: 100%;
    -webkit-box-shadow: 0 32px 67px rgba(86, 87, 88, 0.11);
    box-shadow: 0 32px 67px rgba(86, 87, 88, 0.11);
  }

  .triple-panel-info article img {
    margin: 0 0 26px;
  }

  .triple-panel-info article h3 {
    max-width: 320px;
    text-align: center;
  }

  .announcement-card {
    background: linear-gradient(286.96deg, #24BCED -13.24%, #61D0F4 104.52%);
    color: #fff;
    padding: 80px 15px;
  }

  .announcement-card article {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    max-width: 712px;
  }

  .announcement-card article h2,
  .announcement-card article p {
    text-align: center;
  }

  .announcement-card article p {
    margin: 0 0 60px;
  }

  /* Toggle - Dynamic Load Page Form */
  .our-services__switch {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin: 0 0 78px;
  }

  .our-services__switch > span {
    margin: 0 16px;
  }

  .switch {
    position: relative;
    display: inline-block;
    width: 64px;
    height: 28px;
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
  }

  .switch input {
    display: none;
  }

  .slider {
    border: 1px solid #99D3FF;
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    -webkit-transition: .3s;
    transition: .3s;
  }

  .slider:before {
    background: #24BCED;
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    left: 4px;
    bottom: 3px;
    -webkit-transition: .3s;
    transition: .3s;
  }

  input:focus + .slider {
    -webkit-box-shadow: 0 0 1px #2196F3;
    box-shadow: 0 0 1px #2196F3;
  }

  input:checked + .slider:before {
    -webkit-transform: translateX(34px);
    -ms-transform: translateX(34px);
    transform: translateX(34px);
  }

  .slider.round {
    border-radius: 34px;
  }

  .slider.round:before {
    border-radius: 50%;
  }

  .toggle-color {
    border-bottom: 1px solid #24BCED;
    color: #24BCED;
  }

  @media all and (max-width: 480px) {
    .our-services__switch > span {
      font-size: 14px;
    }
  }

  /* Form - Dynamic Load Page Form */
  .view-dynamic-form {
    background: #F8FAFD;
    padding: 42px 0 4px;
  }

  .view-dynamic-form > div {
    position: relative;
  }

  .view-dynamic-wrap .our-services__switch span {
    cursor: pointer;
  }

  .view-dynamic-form span {
    border-radius: 20px;
    display: block;
  }

  .view-dynamic-form > span:nth-child(2)::before,
  .view-dynamic-form span,
  .view-dynamic-form p {
    -webkit-transition: .3s ease;
    transition: .3s ease;
  }

  .view-dynamic-form > span:not(p span) {
    font-size: 16px;
    color: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 28px;
    margin: 0 0 23px;
  }

  .view-dynamic-form > span:first-child {
    background: #86AE3B;
    max-width: 512px;
  }

  .view-dynamic-form > span:nth-child(2) {
    background: #f7ab11;
    max-width: 352px;
    margin-left: 33px;
    position: relative;
  }

  .view-dynamic-form > span:nth-child(2)::before {
    background: #F8FAFD;
    height: 100%;
    content: '';
    position: absolute;
    width: var(--before-view-dynamic-yellow);
    left: 0;
  }

  .view-dynamic-form > span:nth-child(3) {
    background: #2195B2;
    max-width: 352px;
  }

  .view-dynamic-form > span:nth-child(4) {
    background: #B82521;
    max-width: 416px;
  }

  .view-dynamic-form > span:nth-child(5) {
    background: #F88F42;
    max-width: 512px;
  }

  .view-dynamic-form p:last-child {
    margin-top: -164px;
    margin-left: 928px;
  }

  .view-dynamic-form p span {
    font-size: 16px;
    max-width: 220px;
    text-align: center;
    margin-left: -110px;
  }

  .view-dynamic-form p span:first-child {
    margin-top: 143px;
    -webkit-transition: 0s;
    transition: 0s;
  }

  .view-dynamic-form p::before {
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='2.82mm' height='0.35mm' viewBox='0 0 7.99 1'%3E%3Cdefs%3E%3Cstyle%3E.a%7Bfill:none;stroke:%2324bced;stroke-dasharray:6 2;%7D%3C/style%3E%3C/defs%3E%3Cpath class='a' d='M.17.68h8' transform='translate(-0.17 -0.18)'/%3E%3C/svg%3E") repeat-x 0 0;
    max-width: 401px;
    height: 1px;
    content: '';
    margin: -213px 0 0 -200px;
    position: absolute;
    width: 100%;
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
  }

  .view-dynamic-form .pos-step-1:not(p:last-child) {
    margin-left: 512px;
  }

  .view-dynamic-form .pos-step-2:not(p:last-child) {
    margin-left: 33px;
  }

  /* Composite Information Block 5 */
  .comp-block-5-wrap > p {
    text-align: center;
  }

  .comp-block-5-wrap ul {
    max-width: 954px;
    margin: 0 auto;
  }

  .comp-block-5-wrap ul li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding: 40px 76px;
  }

  .comp-block-5-wrap li div:last-child {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .comp-block-5-wrap li img {
    border-radius: 100%;
    background: #fff;
    max-width: 130px;
    padding: 46px;
    -webkit-box-shadow: 0 32px 67px rgba(112, 159, 200, .2);
    box-shadow: 0 32px 67px rgba(112, 159, 200, .2);
  }

  .comp-block-5-wrap li p {
    font-size: 24px;
    margin: 20px 0 4px;
  }

  .comp-block-5-wrap li span {
    color: #828282;
  }

  /* Composite Information Block 6 */
  .comp-block-6-wrap > p {
    max-width: 804px;
    text-align: center;
    margin: 0 auto 60px;
  }

  .comp-block-6-wrap .comp-info {
    font-size: 16px;
    color: #4F4F4F;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .comp-block-6-wrap .comp-info img {
    max-width: 186px;
  }

  .comp-block-6-wrap .block-col-2 {
    margin: 0 0 60px;
  }

  .block-col-2 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .block-col-2 li {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 50%;
    flex: 1 1 50%;
  }

  .block-col-2 li:first-child > p {
    margin: 0 0 60px;
  }

  .block-col-2 li:last-child {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  /* Adaptive */
  @media all and (min-width: 768px){
    .comp-block-5-wrap li > div:first-child {
      margin-right: 40px;
    }

    .comp-block-6-wrap .comp-info img {
      margin-left: 15px;
    }
  }

  @media all and (max-width: 1200px){
    /* Form - Dynamic Load Page Form */
    .view-dynamic-wrap {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .view-dynamic-form > span:nth-child(5),
    .view-dynamic-form > span:first-child {
      max-width: 352px;
    }

    .view-dynamic-form > span:nth-child(3),
    .view-dynamic-form > span:nth-child(2) {
      max-width: 192px;
    }

    .view-dynamic-form > span:nth-child(4) {
      max-width: 256px;
    }

    .view-dynamic-form .pos-step-1:not(p:last-child) {
      margin-left: 352px;
    }

    /* Line 2 */
    .view-dynamic-form p:last-child {
      margin-left: 608px;
    }

    .view-dynamic-form .pos-step-1:not(p:last-child) {
      margin-left: 352px;
    }
  }

  @media all and (max-width: 992px) {
    .composite-btn {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }
  }

  @media all and (max-width: 768px) {
    .composite {
      background: none;
    }

    .top-screen__box {
      margin: 0 0 40px;
    }

    h2.title {
      font-size: 30px;
    }

    .triple-panel-info {
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
    }

    .triple-panel-info article {
      margin: 0 0 20px;
    }

    .comp-block-5-wrap ul li {
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      padding: 24px 0 60px;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      text-align: center;
    }

    .block-col-2 {
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
    }

    .block-col-2 li {
      -webkit-box-flex: 1;
      -ms-flex: 1 1 100%;
      flex: 1 1 100%;
    }

    .comp-block-6-wrap .composite-btn {
      margin: 50px 0 72px;
    }

    .composite .comp-info {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      text-align: center;
    }

    .comp-block-6-wrap .comp-info img {
      margin: 20px 0 0;
    }

    /* 768p - Form - Dynamic Load Page Form */
    .view-dynamic-form {
      width: 100%;
      max-width: 320px;
    }

    .view-dynamic-form > span:first-child {
      max-width: 92px;
    }

    .view-dynamic-form > span:nth-child(3),
    .view-dynamic-form > span:nth-child(2) {
      max-width: 157px;
    }

    .view-dynamic-form > span:nth-child(2) {
      font-size: 14px;
      white-space: nowrap;
    }

    .view-dynamic-form > span:nth-child(4) {
      max-width: 161px;
    }

    .view-dynamic-form > span:nth-child(5) {
      max-width: 190px;
    }

    .view-dynamic-form p::before {
      width: 290px;
    }

    .view-dynamic-form .pos-step-1:not(p:last-child) {
      margin-left: 92px;
    }

    .view-dynamic-form > div {
      margin: -116px 0 0;
    }

    /* 1 Line */
    .view-dynamic-form p::before {
      margin: -156px 0 0 -145px;
    }

    /* 2 Line */
    .view-dynamic-form p:last-child {
      margin-left: 253px;
    }

    .view-dynamic-form p span {
      font-size: 14px;
    }

    .comp-block-5-wrap > p {
      margin: 0 0 60px;
    }
  }
</style>

<script>
  // Form - Dynamic Load Page Form
  let toggleBtn = document.getElementById('toggle-options'),
    toggleBtnLeft = document.querySelector('.our-services__switch > span:first-child'),
    toggleBtnRight = document.querySelector('.our-services__switch > span:last-child'),
    toggleFormSpanItems = document.querySelectorAll('.view-dynamic-form span:not(p span)'),
    toggleFormPItems = document.querySelectorAll('.view-dynamic-form p');

  let dynamicOffsetWidth = document.documentElement.offsetWidth;

  window.addEventListener('resize', () => {
    dynamicOffsetWidth = document.documentElement.offsetWidth;
  });

  let toggleDynamicForm = () => {
    if (toggleBtn !== null || toggleFormSpanItems !== null) {
      if (toggleBtn.checked === false) {
        // Condition 1
        toggleBtnRight.classList.remove('toggle-color');
        toggleBtnLeft.classList.add('toggle-color');

        toggleFormSpanItems.forEach((item, index) => {
          // HTML
          if (index === 0) {
            item.style.maxWidth = '33px';
            item.style.color = 'transparent';
          }

          // Dynamic Data
          if (index === 1) {
            item.setAttribute('style', '--before-view-dynamic-yellow: 0');
          }

          // ALL
          if (item.classList.contains('pos-step-1')) {
            item.classList.remove('pos-step-1');
            item.classList.add('pos-step-2');
          }
        });

        toggleFormPItems.forEach((item, index) => {
          if (item.classList.contains('pos-step-1')) {

            if (index === 0) {
              item.style.color = 'transparent';
              item.style.marginLeft = '33px';
            } else if (index === 1) {
              if (dynamicOffsetWidth <= 1200 && dynamicOffsetWidth >= 768) {
                item.style.marginLeft = '385px';
              } else if (dynamicOffsetWidth <= 768) {
                item.style.marginLeft = '224px';
              } else {
                item.style.marginLeft = '545px';
              }

              item.querySelector('span:first-child').innerHTML = '0.2-0.4 сек.';
            }
          }
        });
      } else {
        // Condition 2
        toggleBtnLeft.classList.remove('toggle-color');
        toggleBtnRight.classList.add('toggle-color');

        toggleFormSpanItems.forEach((item, index) => {
          if (dynamicOffsetWidth <= 1200 && dynamicOffsetWidth >= 768) {
            // HTML 1200p
            if (index === 0) {
              item.style.maxWidth = '352px';
            } else if (index === 3) {
              item.style.maxWidth = '256px';
            } else if (index === 4) {
              item.style.maxWidth = '352px';
            }
          } else if (dynamicOffsetWidth <= 768) {
            // HTML 768p
            if (index === 0) {
              item.style.maxWidth = '92px';
            } else if (index === 1) {
              item.style.maxWidth = '157px';
            } else if (index === 2) {
              item.style.maxWidth = '157px';
            } else if (index === 3) {
              item.style.maxWidth = '161px';
            } else if (index === 4) {
              item.style.maxWidth = '190px';
            }
          } else {
            // HTML
            if (index === 0) {
              item.style.maxWidth = '512px';
            }
          }

          // HTML
          if (index === 0) {
            item.style.color = '#fff';
          }

          // Dynamic Data
          if (index === 1) {
            item.setAttribute('style', '--before-view-dynamic-yellow: 100%');
          }

          // ALL
          if (item.classList.contains('pos-step-2')) {
            item.classList.remove('pos-step-2');
            item.classList.add('pos-step-1');
          }
        });

        toggleFormPItems.forEach((item, index) => {
          if (item.classList.contains('pos-step-1')) {

            if (dynamicOffsetWidth <= 1200 && dynamicOffsetWidth >= 768) {
              if (index === 0) {
                item.style.marginLeft = '352px';
              } else if (index === 1) {
                item.style.marginLeft = '608px';
              }
            } else if (dynamicOffsetWidth <= 768) {
              if (index === 0) {
                item.style.marginLeft = '92px';
              } else if (index === 1) {
                item.style.marginLeft = '253px';
              }
            } else {
              if (index === 0) {
                item.style.marginLeft = '512px';
              } else if (index === 1) {
                item.style.marginLeft = '928px';
              }
            }

            if (index === 0) {
              item.style.color = '#333';
            } else if (index === 1) {
              item.querySelector('span:first-child').innerHTML = '2.5-4.5 сек.';
            }
          }
        });
      }
    }
  };

  let checkBtnLeftRight = () => {
    toggleBtn.checked = toggleBtn.checked === false;
  };

  toggleBtn.addEventListener('click', () => {
    toggleDynamicForm();
  });

  toggleBtnLeft.addEventListener('click', () => {
    checkBtnLeftRight();
    toggleDynamicForm();
  });

  toggleBtnRight.addEventListener('click', () => {
    checkBtnLeftRight();
    toggleDynamicForm();
  });
</script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
