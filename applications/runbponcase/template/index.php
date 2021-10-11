<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../local/templates/alphaservice/css/style.css">
  <title>Плагин "Альфа Сервис"</title>
</head>
<body>
<?php
/** @global CMain $APPLICATION */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->ShowHead();

$json_file = file_get_contents("./db/db.json");

if ($json_file === false) {
  echo nl2br("error: not founded json\n");
}

$data = json_decode($json_file);

if ($data === null) {
  echo "error: data is null";
}
?>
<div class="plugin-header-bg"></div>
<nav class="plugin-nav-wrap">
  <div class="container plugin-nav-inner">
    <div class="social-contacts-wrap">
      <a href="#">
        <img src="../../../local/templates/alphaservice/images/icons/icn_tel_32.png" alt="telegram">
      </a>
      <a href="#">
        <img src="../../../local/templates/alphaservice/images/icons/icn_watsp_32.png" alt="whatsapp">
      </a>
      <a href="#">
        <img src="../../../local/templates/alphaservice/images/icons/icn_viber_32.png" alt="viber">
      </a>
    </div>

    <div class="logo-wrap">
      <a href="/" class="logo">
        <img class="logo__img" src="../../../local/templates/alphaservice/images/logo_full.png"
             alt="АльфаСервис">
      </a>
    </div>
  </div>
</nav>

<header>
  <div class="container">
    <?
    if ($json_file === false) {
      echo nl2br("error: not founded json\n");
    } else if ($data === null) {
      echo "error: data is null\n";
    }
    ?>

    <h1 class="title">
      Контролируй свое расписание
    </h1>
    <p class="plugin-subtitle">
      Дела CRM: Настроить автозапуск бизнес-процессов
    </p>

    <form class="plugin-form" action="#">
      <ul class="plugin-form-titles">
        <li><label for="entity">Сущность</label></li>
        <li><label for="events">Событие</label></li>
        <li><label for="types">Тип дела</label></li>
        <li><label for="directions">Направление</label></li>
        <li><label for="status">Статус</label></li>
        <li><label for="process">Бизнес-процесс</label></li>
        <li></li>
      </ul>

      <ul id="plugins" class="plugin-form-items">
        <li id="plugin-1">
          <select name="entity" id="entity-1">
            <option value="lead1">Лид 1</option>
            <option value="lead2">Лид 2</option>
            <option value="lead3">Лид 3</option>
          </select>

          <select name="events" id="events-1" onchange="getAjaxTypesName('1', 'events', 'types')">
            <?
            $event_id = 0;

            foreach ($data->events as $events => $event) {
              $event_id++;
              echo "<option value='events" . $event_id . "'>" . $event->name . "</option>";
            }
            ?>
          </select>

          <select name="types" id="types-1" onchange="getAjaxDirectionsName('1', 'types', 'directions', '0')">
            <?
            $types_id = 0;

            foreach ($data->events[0]->types as $types => $type) {
              $types_id++;
              echo "<option value='types" . $types_id . "'>" . $type->name . "</option>";
            }
            ?>
          </select>

          <select name="directions" id="directions-1">
            <?
            $directions_id = 0;

            foreach ($data->events[0]->types[0]->directions as $dirs => $dir) {
              $directions_id++;
              echo "<option value='directions" . $directions_id . "'>" . $dir->name . "</option>";
            }
            ?>
          </select>

          <select name="status" id="status-1">
            <option value="status1">Ожидает от</option>
            <option value="status2">Ожидает от 1</option>
            <option value="status3">Ожидает от 2</option>
          </select>

          <select name="process" id="process-1">
            <option value="process1">Обработка</option>
            <option value="process2">Обработка 1</option>
            <option value="process3">Обработка 2</option>
          </select>

          <button id="btn-1" class="js-btn" type="button" onclick="removeItem('1')"></button>
        </li>
        <li id="plugin-2">
          <select name="entity" id="entity-2">
            <option value="lead1">Лид 1</option>
            <option value="lead2">Лид 2</option>
            <option value="lead3">Лид 3</option>
          </select>

          <select name="events" id="events-2" onchange="getAjaxTypesName('2', 'events', 'types')">
            <?
            $event_id = 0;

            foreach ($data->events as $events => $event) {
              $event_id++;
              echo "<option value='events" . $event_id . "'>" . $event->name . "</option>";
            }
            ?>
          </select>

          <select name="types" id="types-2" onchange="getAjaxDirectionsName('2', 'types', 'directions', '0')">
            <?
            $types_id = 0;

            foreach ($data->events[0]->types as $types => $type) {
              $types_id++;
              echo "<option value='types" . $types_id . "'>" . $type->name . "</option>";
            }
            ?>
          </select>

          <select name="directions" id="directions-2">
            <?
            $directions_id = 0;

            foreach ($data->events[0]->types[0]->directions as $dirs => $dir) {
              $directions_id++;
              echo "<option value='directions" . $directions_id . "'>" . $dir->name . "</option>";
            }
            ?>
          </select>

          <select name="status" id="status-2">
            <option value="status1">Ожидает от</option>
            <option value="status2">Ожидает от 1</option>
            <option value="status3">Ожидает от 2</option>
          </select>

          <select name="process" id="process-2">
            <option value="process1">Обработка</option>
            <option value="process2">Обработка 1</option>
            <option value="process3">Обработка 2</option>
          </select>

          <button id="btn-2" class="js-btn" type="button" onclick="removeItem('2')"></button>
        </li>
        <li id="plugin-3">
          <select name="entity" id="entity-3">
            <option value="lead1">Лид 1</option>
            <option value="lead2">Лид 2</option>
            <option value="lead3">Лид 3</option>
          </select>

          <select name="events" id="events-3" onchange="getAjaxTypesName('3', 'events', 'types')">
            <? //
            $event_id = 0;

            foreach ($data->events as $events => $event) {
              $event_id++;
              echo "<option value='events" . $event_id . "'>" . $event->name . "</option>";
            }
            ?>
          </select>

          <select name="types" id="types-3" onchange="getAjaxDirectionsName('3', 'types', 'directions', '0')">
            <? //
            $types_id = 0;

            foreach ($data->events[0]->types as $types => $type) {
              $types_id++;
              echo "<option value='types" . $types_id . "'>" . $type->name . "</option>";
            }
            ?>
          </select>

          <select name="directions" id="directions-3">
            <? //
            $directions_id = 0;

            foreach ($data->events[0]->types[0]->directions as $dirs => $dir) {
              $directions_id++;
              echo "<option value='directions" . $directions_id . "'>" . $dir->name . "</option>";
            }
            ?>
          </select>

          <select name="status" id="status-3">
            <option value="status1">Ожидает от</option>
            <option value="status2">Ожидает от 1</option>
            <option value="status3">Ожидает от 2</option>
          </select>

          <select name="process" id="process-3">
            <option value="process1">Обработка</option>
            <option value="process2">Обработка 1</option>
            <option value="process3">Обработка 2</option>
          </select>

          <button id="btn-3" class="js-btn" type="button" onclick="removeItem('3')"></button>
        </li>
      </ul>

      <div class="plugin-form-nav">
        <button type="button" class="plugin-form-add">
          Добавить <span></span>
        </button>
        <button type="submit" class="plugin-form-save btn">
          Сохранить
        </button>
        <button type="reset" class="plugin-form-cancel blog-page__btn--white">
          Отменить
        </button>
      </div>
    </form>
  </div>
</header>

<main>
  <section class="block-list">
    <article class="container block-list-wrap">
      <div class="block-list-item">
        <h3>
          Описание приложения
        </h3>

        <div class="list-text">
          <p>
            Приложение от Пинол "Запуск БП по делу" на платформе PINKIT может автоматически запускать один или несколько
            бизнес-процессов, как только в Лиде, Компании, Контакте или Сделке создается Дело (Встреча, Звонок, Задача,
            Письмо).
          </p>
          <p>
            Вы можете добавлять один или несколько бизнес-процессов на создание Дела в каждой сущности CRM: Лиде,
            Контакте, Компании, Сделке.
          </p>
          <p>
            Мы добавили возможность в данном приложении выбрать Направление у тех типов Дел, у которых оно есть
            (например, Звонок и Письмо), или оставить пустое поле Направление для тех типов Дел, у которых его нет
            (Задача и Встреча).
          </p>
          <p>
            При наступлении Дела, указанного в настройках, приложение запустит нужный бизнес-процесс. Настройки
            приложения выполняются через визуальный редактор, как показано на рисунке.
          </p>
        </div>
      </div>
      <div class="block-list-item">
        <img class="lazyload" data-src="../../../local/templates/alphaservice/images/applications/plug_content_1.jpg"
             alt="Приложение от Пинол 'Запуск БП по делу'">
      </div>
    </article>
  </section>

  <section class="block-list">
    <article class="container block-list-wrap">
      <div class="block-list-item">
        <h3>
          Установка приложения
        </h3>

        <div class="list-text">
          <p>
            Важно! Убедитесь, что ваш портал имеет возможность автоматизации бизнес-процессов (тарифный план: <b>«Команда»</b>,
            <b>«Компания»</b> или <b>«Корпоративный портал»</b>).
          </p>
        </div>
      </div>
      <div class="block-list-item">
        <img class="lazyload" data-src="../../../local/templates/alphaservice/images/applications/plug_content_2.jpg"
             alt="Установка приложения">
      </div>
    </article>
  </section>

  <section class="block-list">
    <article class="container block-list-wrap">
      <div class="block-list-item">
        <h3>
          Установка из Битрикс24
        </h3>

        <div class="list-text">
          <p>
            1) Чтобы установить приложение, перейдите в раздел <b>«Приложения»</b> вашего Битрикс24.
          </p>
          <p>
            2) В строке поиска введите Pinall и среди найденных приложений выберите нужное для установки на ваш портал
            (кнопка <b>«Посмотреть»</b>).
          </p>
          <p>
            3) В открывшемся окне нажмите кнопку <b>«Установить»</b> и отметьте галочками пункты «Я ознакомлен
            и согласен
            с лицензионным соглашением» и «Я ознакомлен и согласен с политикой конфиденциальности»
          </p>
        </div>
      </div>
      <div class="block-list-item">
        <img class="lazyload" data-src="../../../local/templates/alphaservice/images/applications/plug_content_3.jpg"
             alt="Установка из Битрикс24">
        <p class="list-info">
          Если хотите, чтобы аналитик Пинол связался с Вами и рассказал, как данное приложение можно применить конкретно
          в Вашем бизнесе, отправьте нам заявку
        </p>
      </div>
    </article>
  </section>

  <section class="plugin-consultation-order">
    <div class="container">
      <form class="form consultation-order__form">
        <h2 class="title form__title form__title--indent">
          Оставьте заявку для получения консультации
        </h2>

        <div class="form__text">
          <p>Мы свяжемся с Вами в течение 10 минут</p>
        </div>

        <div class="form__body">
          <label class="form__label" for="servname">
            Имя
          </label>
          <input class="form__input form__input--services" id="servname" type="text" required="" placeholder="Ваше имя"
                 name="servname">

          <label class="form__label" for="servphone">
            Телефон
          </label>
          <input class="form__input form__input--services" id="servphone" type="tel" required=""
                 placeholder="+7 905 ___ __ __" name="servtel">

          <label class="form__label" for="servemail">
            Электронный адрес
          </label>
          <input class="form__input form__input--services" id="servemail" type="email" required=""
                 placeholder="address@yandex.ru" name="servemail">

          <label class="form__label" for="servtextarea">
            Комментарий
          </label>
          <textarea class="form__textarea" id="servtextarea" cols="30" rows="10" required=""
                    placeholder="Оставьте Ваш комментарий здесь" name="servtextarea"></textarea>

          <button class="btn form__btn" type="submit">
            Отправить
          </button>

          <div class="form__checkbox">
            <input type="checkbox" required="">
            <label>Я согласен с обработкой персональных данных в соответствии с <a href="#">политикой
                конфиденциальности</a></label>
          </div>
        </div>

        <svg class="form__svg">
          <use xlink:href="/local/templates/alphaservice/images/sprite.svg#message"></use>
        </svg>
      </form>
    </div>
  </section>
</main>

<footer class="plugin-footer-wrap">
  <div class="container plugin-footer-inner">
    <div class="social-contacts-wrap">
      <a href="#">
        <img src="../../../local/templates/alphaservice/images/icons/icn_tel_32.png" alt="telegram">
      </a>
      <a href="#">
        <img src="../../../local/templates/alphaservice/images/icons/icn_watsp_32.png" alt="whatsapp">
      </a>
      <a href="#">
        <img src="../../../local/templates/alphaservice/images/icons/icn_viber_32.png" alt="viber">
      </a>
    </div>

    <div class="logo-wrap">
      <a href="/" class="logo">
        <img class="logo__img" src="../../../local/templates/alphaservice/images/logo_full.png"
             alt="АльфаСервис">
      </a>
    </div>
  </div>
</footer>

<div class="js-popup blackout js-blackout-campaign">
  <div class="thanks js-thanks-campaign popup-content">
    <span class="pop-up__span">Спасибо за Вашу заявку!</span>
    <p class="pop-up__text">В течение 10 минут с Вами свяжутся по номеру</p>
    <span class="pop-up__num">+7(927)708-68-68</span>
    <button class="btn pop-up__btn">Хорошо</button>
    <div class="close-thanks js-thanks-close"></div>
  </div>
</div>

<div class="container">
  <div class="cookies-popup">
    <img class="lazyload" data-src="../local/templates/alphaservice/images/cookies-icon.png" alt="">

    <p>
      Посещая наш сайт, вы соглашаетесь на использование cookie-файлов.<br/>Если вы продолжите использовать сайт,
      мы будем считать, что вас это устраивает.
    </p>

    <button class="btn">
      Хорошо
    </button>
  </div>
</div>

<div class="btn-page-up"></div>

<style>
  body {
    margin: 0;
  }

  body header {
    margin: 60px 0 0;
  }

  body footer {
    margin: 140px 0 0;
  }

  .plugin-header-bg {
    background: #24BCED;
    min-height: 96px;
    width: 100%;
  }

  .plugin-nav-wrap {
    width: 100%;
    padding: 0 15px;
  }

  .plugin-nav-wrap .plugin-nav-inner {
    position: relative;
  }

  .plugin-nav-wrap .social-contacts-wrap {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    position: absolute;
    right: 44px;
  }

  .plugin-nav-inner {
    border-radius: 8px;
    background: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-height: 100px;
    margin: -50px auto 0;
    -webkit-box-shadow: 0 8px 20px rgb(0 0 0 / 8%);
    box-shadow: 0 8px 20px rgb(0 0 0 / 8%);
  }

  .plugin-subtitle {
    font-size: 22px;
    font-weight: bold;
    margin: 80px 0 0;
    text-align: center;
  }

  /* Form */
  .plugin-form {
    border-radius: 8px;
    max-width: 960px;
    padding: 46px;
    margin: 40px auto 140px;
    -webkit-box-shadow: 0 32px 67px rgba(112, 159, 200, 0.2);
    box-shadow: 0 32px 67px rgba(112, 159, 200, 0.2);
  }

  .plugin-form,
  .plugin-form select {
    color: #828282;
  }

  .plugin-form-titles,
  .plugin-form-items li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }

  .plugin-form-items li {
    margin: 20px 0 0;
  }

  .plugin-form-items li select,
  .plugin-form-items li button,
  .plugin-form-titles li {
    font-size: 16px;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 200px;
    flex: 1 1 200px;
  }

  .plugin-form-items select {
    margin: 0 10px 0 0;
  }

  .plugin-form-items li button,
  .plugin-form-titles li:last-child {
    max-width: 42px;
    width: 100%;
  }

  .plugin-form-items li button {
    cursor: pointer;
    width: 100%;
  }

  .plugin-form-items li button {
    background: url("data:image/svg+xml,%3Csvg width='10' height='10' viewBox='0 0 10 10' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L8.52941 9M1 9L9 1' stroke='%23828282' stroke-linecap='round'/%3E%3C/svg%3E%0A") no-repeat center center;
    border-radius: 8px;
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
  }

  .plugin-form button {
    outline: none;
  }

  .plugin-form button:not(.plugin-form-add),
  .plugin-form select {
    border: 1px solid #828282;
  }

  .plugin-form select {
    background: url("data:image/svg+xml,%3Csvg width='10' height='6' viewBox='0 0 10 6' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 6L9.33013 0.75H0.669873L5 6Z' fill='%23828282'/%3E%3C/svg%3E%0A") no-repeat right 16px center;
    max-height: 40px;
    padding: 10px 32px 10px 10px;
    width: 100%;
  }

  .plugin-form select:focus,
  .plugin-form select:active {
    background: url("data:image/svg+xml,%3Csvg width='10' height='6' viewBox='0 0 10 6' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 0L9.33013 5.25H0.669873L5 0Z' fill='%23828282'/%3E%3C/svg%3E%0A") no-repeat right 16px center;
  }

  .plugin-form button:hover:not(.plugin-form-add),
  .plugin-form select:focus,
  .plugin-form select:active,
  .plugin-form select:hover {
    border: 1px solid #FE0898;
  }

  /* Form Buttons */
  .plugin-form-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    margin: 46px 0 0;
  }

  .plugin-form-nav button {
    padding: 14px 38px;
  }

  .plugin-form-nav button:not(:first-child) {
    margin-right: 10px;
  }

  .plugin-form-add {
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    color: #24BCED;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid #24BCED;
    border-radius: 8px;
    margin-right: auto;
    -webkit-transition: background 0.3s;
    transition: background 0.3s;
    outline: transparent;
    cursor: pointer;
    transition: background 0.3s;
  }

  .plugin-form-add:hover span {
    -webkit-transform: rotate(90deg) scale(.8);
    -ms-transform: rotate(90deg) scale(.8);
    transform: rotate(90deg) scale(.8);
  }

  .plugin-form-add span {
    background: url("data:image/svg+xml,%3Csvg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='6' width='2' height='14' fill='%2324BCED'/%3E%3Crect x='14' y='6' width='2' height='14' transform='rotate(90 14 6)' fill='%2324BCED'/%3E%3C/svg%3E%0A") no-repeat center center;
    display: inline-block;
    height: 14px;
    margin: 0 0 -2px 5px;
    width: 14px;
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
  }

  /* Main */
  .block-list:nth-child(2) {
    margin: 80px 0 0;
  }

  .block-list:first-child {
    background: #E3F1FD;
  }

  /* Callback */
  .plugin-consultation-order {
    margin: 55px 0 0;
  }

  /* Footer */
  .plugin-footer-wrap {
    background: #112931;
    width: 100%;
    padding: 0 15px;
  }

  .plugin-footer-wrap .plugin-footer-inner {
    position: relative;
  }

  .plugin-footer-wrap .social-contacts-wrap {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    position: absolute;
    right: 226px;
    -webkit-transform: scale(.7);
    -ms-transform: scale(.7);
    transform: scale(.7);
  }

  .plugin-footer-inner {
    border-radius: 8px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-height: 100px;
    margin: -50px auto 0;
    -webkit-box-shadow: 0 8px 20px rgb(0 0 0 / 8%);
    box-shadow: 0 8px 20px rgb(0 0 0 / 8%);
  }

  /* Adaptive */
  @media all and (max-width: 1200px) {
    .plugin-footer-wrap .social-contacts-wrap {
      right: 20px;
    }
  }
</style>

<script src="../../../local/templates/alphaservice/js/jquery-3.6.0.min.js"></script>
<script src="../../../local/templates/alphaservice/js/slick.min.js"></script>
<script src="../../../local/templates/alphaservice/js/script.js"></script>
<script src="../../../local/templates/alphaservice/js/lazysizes.min.js"></script>

<script type="text/javascript">
  //  Plugin Form
  let pluginForm = document.getElementById('plugins'),
    pluginFirstItem = pluginForm.querySelector('li'),
    pluginFormItemsLength = 0;

  if (pluginFirstItem !== null) {
    let pluginFormItems = pluginForm.querySelectorAll('.plugin-form-items li'),
      addBtn = document.querySelector('.plugin-form-add'),
      cloneElementList,
      cloneElementListIndex = 0,
      pluginCountId = 0;

    pluginFormItemsLength = pluginFormItems.length;

    let getNum = () => {
      cloneElementListIndex = cloneElementList.match(/\d+/g);
      pluginCountId = cloneElementListIndex;
    };

    // Check Last Element to Clone Template
    if (pluginForm.lastElementChild === null) {
      cloneElementList = pluginForm.firstElementChild.getAttribute('id');
      getNum();
    } else {
      cloneElementList = pluginForm.lastElementChild.getAttribute('id');
      getNum();
    }

    addBtn.addEventListener('click', () => {
      let cloneLast = pluginFirstItem.cloneNode(true);

      if (pluginFirstItem !== null) {
        pluginCountId++;
        cloneLast.id = 'plugin-' + pluginCountId;
        pluginForm.appendChild(cloneLast);

        // Set New id to <select>
        let newPluginFormItem = document.getElementById('plugin-' + pluginCountId),
          selectItems = newPluginFormItem.querySelectorAll('select');

        selectItems.forEach((item) => {
          if (item.getAttribute('name') === 'entity') {
            item.setAttribute('id', 'entity-' + pluginCountId);
          } else if (item.getAttribute('name') === 'events') {
            item.setAttribute('id', 'events-' + pluginCountId);
            item.setAttribute('onchange', 'getAjaxTypesName(\'' + pluginCountId + '\', \'events\', \'types\')');
          } else if (item.getAttribute('name') === 'types') {
            item.setAttribute('id', 'types-' + pluginCountId);
            item.setAttribute('onchange', 'getAjaxDirectionsName(\'' + pluginCountId + '\', \'types\', \'directions\', \'0\')');
          } else if (item.getAttribute('name') === 'directions') {
            item.setAttribute('id', 'directions-' + pluginCountId);
          } else if (item.getAttribute('name') === 'status') {
            item.setAttribute('id', 'status-' + pluginCountId);
          } else if (item.getAttribute('name') === 'process') {
            item.setAttribute('id', 'process-' + pluginCountId);
          }
        });

        //  Set Button Delete
        let getDeleteBtn = newPluginFormItem.querySelector('.js-btn');

        getDeleteBtn.setAttribute('id', 'btn-' + pluginCountId);
        getDeleteBtn.setAttribute('onclick', 'removeItem(\'' + pluginCountId + '\')');
        pluginFormItemsLength++;
      }
    });
  }

  let removeItem = (i) => {
    if (pluginFormItemsLength !== 1) {
      document.getElementById('plugin-' + i).remove();
      pluginFormItemsLength--;
    }
  };

  // Select Box (AJAX) - Get Array Types
  let getAjaxTypesName = (selectId, nameParentObj, nameChildObj) => {
    let targetSelectEvents = document.getElementById(nameParentObj + '-' + selectId),
      targetOptionEvents = targetSelectEvents.querySelectorAll('option'),
      targetSelectTypes = document.getElementById(nameChildObj + '-' + selectId),
      indexEvents = 0;

    BX.ajax({
      url: './db/db.json',
      method: 'GET',
      data: {},
      dataType: 'json',
      timeout: 30,
      async: true,
      processData: true,
      scriptsRunFirst: true,
      emulateOnload: true,
      start: true,
      cache: false,
      onsuccess: data => {
        let selectTypes = document.getElementById(nameChildObj + '-' + selectId),
          selectOptionTypes = selectTypes.querySelectorAll('option'),
          checkLength = 0;

        // Get Select
        for (let i = 0; i <= targetOptionEvents.length; i++) {
          if (nameParentObj + i === targetSelectEvents.value) {
            indexEvents = i - 1;
          }
        }

        checkLength = data.events[indexEvents][nameChildObj].length;

        // Reset Elements
        selectOptionTypes.forEach((item) => {
          item.remove();
        });

        let index = 0;

        // Create Elements
        while (index < checkLength) {
          index++;

          let newOption = document.createElement('option');

          newOption.innerText = data.events[indexEvents][nameChildObj][index - 1]['name'];
          selectTypes.appendChild(newOption);
        }

        if (selectOptionTypes !== null) {
          selectOptionTypes = selectTypes.querySelectorAll('option');

          selectOptionTypes.forEach((item, index) => {
            item.setAttribute('value', nameChildObj + (index + 1));
          });
        }

        // Update Types Options
        targetSelectTypes.setAttribute('onchange', 'getAjaxDirectionsName(\'' + selectId + '\', \'types\', \'directions\', \'' + indexEvents + '\')');

        // Update Events Options and Reset Directions
        getAjaxDirectionsName(selectId, 'types', 'directions', indexEvents);
      },
    });
  };

  // Select Box (AJAX) - Get Array Directions
  let getAjaxDirectionsName = (selectId, nameParentObj, nameChildObj, activeEvents) => {
    let targetSelectEvents = document.getElementById(nameParentObj + '-' + selectId),
      targetOptionEvents = targetSelectEvents.querySelectorAll('option'),
      indexEvents = 0;

    BX.ajax({
      url: './db/db.json',
      method: 'GET',
      data: {},
      dataType: 'json',
      timeout: 30,
      async: true,
      processData: true,
      scriptsRunFirst: true,
      emulateOnload: true,
      start: true,
      cache: false,
      onsuccess: data => {
        let selectTypes = document.getElementById(nameChildObj + '-' + selectId),
          selectOptionTypes = selectTypes.querySelectorAll('option'),
          checkLength = 0;

        // Get Select
        for (let i = 0; i <= targetOptionEvents.length; i++) {
          if (nameParentObj + i === targetSelectEvents.value) {
            indexEvents = i - 1;
          }
        }

        checkLength = data.events[activeEvents][nameParentObj][indexEvents][nameChildObj].length;

        // Reset Elements
        selectOptionTypes.forEach((item) => {
          item.remove();
        });

        let index = 0;

        // Create Elements
        while (index < checkLength) {
          index++;

          let newOption = document.createElement('option');

          newOption.innerText = data.events[activeEvents][nameParentObj][indexEvents][nameChildObj][index - 1]['name'];
          selectTypes.appendChild(newOption);
        }

        if (selectOptionTypes !== null) {
          selectOptionTypes = selectTypes.querySelectorAll('option');

          selectOptionTypes.forEach((item, index) => {
            item.setAttribute('value', nameChildObj + (index + 1));
          });
        }
      },
    });
  };
</script>
</body>
</html>