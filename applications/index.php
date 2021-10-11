<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */

$APPLICATION->SetTitle("Плагин \"Альфа Сервис\"");
?>
<svg class="top-screen__bg plugin-page-bg" width="1920" height="730" viewBox="0 0 1920 730" fill="none"
     xmlns="http://www.w3.org/2000/svg">
  <path d="M0 685.951L1.0752e-06 730L1920 452.104L1920 0L0 685.951Z" fill="#E3F1FD"/>
</svg>

<section class="top-screen top-screen--services plugin-page">
  <div class="container">
    <div class="top-screen__content">
      <div class="top-screen__box">
        <h1 class="top-screen__title">
          Контролируй свое расписание без усилий
        </h1>
        <div class="top-screen__text">
          <p>
            Запуск бизнес-процесса по делу. Приложение автоматически запускает БП в Битрикс24
          </p>
        </div>
        <div class="top-screen__buttons">
          <a class="btn top-slider__btn--white" href="#" onclick="togglePopup('.js-callback')">
            Подробнее
          </a>
        </div>
      </div>
      <div class="top-screen__image">
        <img class="top-screen__img" src="../local/templates/alphaservice/images/applications/plug_title.jpg"
             alt="Плагин">
      </div>
    </div>
  </div>
</section>

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
        <a class="btn services-cart__btn" href="#">
          Установить
        </a>
      </div>
    </div>
    <div class="block-list-item">
      <img class="lazyload" data-src="../../../local/templates/alphaservice/images/applications/plug_content_1.jpg"
           alt="Приложение от Пинол 'Запуск БП по делу'">
    </div>
  </article>
</section>

<section class="block-list plug-info-2">
  <article class="container block-list-wrap">
    <div class="block-list-item">
      <h3>
        Установка приложения
      </h3>

      <div class="list-text">
        <p>
          Важно! Убедитесь, что ваш портал имеет возможность автоматизации бизнес-процессов (тарифный план:
          <b>«Команда»</b>,
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

<section class="block-list plug-info-3">
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

<section class="service">
  <div class="container">
    <h2 class="title service__title">
      Техподдержка
    </h2>
    <ul class="service__list">
      <li class="service__item">
        <article class="our-service">
          <svg class="our-service__svg">
            <use xlink:href="/local/templates/alphaservice/images/sprite.svg#bitrix-24-1"></use>
          </svg>

          <span class="our-service__subtitle">
                Интеграция Битрикс24
              </span>
          <div class="our-service__text">
            <p>Произведем типовое внедрение или согласно вашим задачам</p>
          </div>
        </article>
      </li>

      <li class="service__item">
        <article class="our-service">
          <svg class="our-service__svg">
            <use xlink:href="/local/templates/alphaservice/images/sprite.svg#rocket"></use>
          </svg>

          <span class="our-service__subtitle">
                Доработка проекта
              </span>
          <div class="our-service__text">
            <p>Разработаем с нуля или возьмем в доработку существующий проект</p>
          </div>
        </article>
      </li>

      <li class="service__item">
        <article class="our-service">
          <svg class="our-service__svg">
            <use xlink:href="/local/templates/alphaservice/images/sprite.svg#agent"></use>
          </svg>

          <span class="our-service__subtitle">
                Техподдержка
              </span>
          <div class="our-service__text">
            <p>Круглосуточная поддежка, быстрая обратная связь</p>
          </div>
        </article>
      </li>

      <li class="service__item">
        <article class="our-service">
          <svg class="our-service__svg">
            <use xlink:href="/local/templates/alphaservice/images/sprite.svg#graduated"></use>
          </svg>

          <span class="our-service__subtitle">
                Обучение
              </span>
          <div class="our-service__text">
            <p>Объясним, расскажем и покажем как работать в Битрикс24</p>
          </div>
        </article>
      </li>
    </ul>
  </div>
</section>

<section class="consultation-order plugin-consultation-order">
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

<style>
  .main .consultation-order {
    margin-bottom: 0;
  }

  .plugin-page.top-screen--services {
    margin: 0 0 105px;
  }

  .plugin-page .top-screen__image {
    border-radius: 6px;
    margin: auto 0;
    -webkit-box-shadow: 0 18px 40px rgba(112, 159, 200, 0.2);
    box-shadow: 0 18px 40px rgba(112, 159, 200, 0.2);
  }

  .plugin-page-bg {
    margin: -76px 0 0;
    position: absolute;
    width: 100%;
    z-index: -1;
  }

  .plug-info-2,
  .plug-info-3 {
    background: #E3F1FD;
  }

  .plug-info-2 {
    padding: 40px 15px 0;
  }

  .plug-info-3 {
    margin: 0 0 150px;
  }

  @media all and (max-width: 992px) {
    .block-list-item img {
      margin: 30px auto 0;
    }
  }

  @media all and (max-width: 768px) {
    .plugin-page.top-screen--services {
      margin: 0 0 85px;
    }

    .plugin-consultation-order {
      margin: 0 -15px;
    }

    .plug-info-3 {
      margin: 0 0 60px;
    }
  }
</style>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
