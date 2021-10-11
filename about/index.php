<?php
/** @global CMain $APPLICATION */

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "о компании альфа сервис, альфа сервис битрикс, битрикс ".getCityName(false));
$APPLICATION->SetPageProperty("title", "О компании \"Альфа Сервис\" - Интегратор Битрикс 24 в ".getCityName());
$APPLICATION->SetPageProperty("keywords", "о компании альфа сервис, альфа сервис битрикс, битрикс ".getCityName(false));
$APPLICATION->SetPageProperty("description", "Альфа Сервис - Сертифицированный \"золотой\" партнер компании 1С Битрикс. Разрабатываем веб-сайты на базе 1С, Настраиваем и Внедряем Битрикс.");
/** @global CMain $APPLICATION */

$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("О компании \"Альфа Сервис\" - Интегратор Битрикс 24 в ".getCityName());
?>
  <div class="bg-triangle"></div>

  <section class="top-screen top-screen--about">
    <div class="container">
      <div class="top-screen__content">
        <div class="top-screen__box">
          <h1 class="top-screen__title">
            Альфа Сервис - Бизнес партнер 1С-Битрикс
          </h1>
          <div class="top-screen__text">
            <p>
              Внедрение, настройка, доработка и сопровождение Битрикс24 под ваш бизнес
            </p>
          </div>
          <div class="top-screen__buttons">
            <a class="btn top-screen__btn" href="#" onclick="togglePopup('.js-callback')">
              Заказать
            </a>
          </div>
        </div>
        <div class="top-screen__image">
          <img class="top-screen__img" src="<?=SITE_TEMPLATE_PATH?>/images/about/top-about.png"
               alt="Грузовик и человек">
        </div>
      </div>
    </div>
  </section>

  <section class="about">
    <div class="container">
      <div class="about__inner">
        <div class="about__image">
          <img class="about__img" src="<?=SITE_TEMPLATE_PATH?>/images/about/about.png"
               alt="Презентация проекта">
        </div>

        <div class="about__text">
          <h2 class="about__title">
            О нас
          </h2>

          <div class="about__descr">
            <p>
              <span class="about__span">Альфа Сервис - Бизнес партнер 1С-Битрикс.</span> Уже более 6 лет
              мы занимаемся разработкой и внедрением продуктов компании 1С Битрикс. За это время у нас
              сформировался большой опыт работы с различными редакциями Битрикса, в частности с коробочной
              и облачной версией CRM Битрикс24.
            </p>

            <P>
              Нами были успешно реализованы проекты для государственных структур и больших компаний, таких
              как “Газпром газомоторное топливо”, Министерство энергетики Российской Федерации, а так же
              для Республики Татарстан.
            </P>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="solutions">
    <div class="container">
      <h2 class="title solutions__title">
        Нами были реализованы следующие сложные технические решения
      </h2>

      <div class="solutions__inner">
        <div class="solutions__text">
          <ul class="solutions__list">
            <li class="solutions__item">
              <div class="solutions__circle">
                <svg class="solutions__svg solutions__svg--size">
                  <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#cloud24"></use>
                </svg>
              </div>
              <div class="solutions__descr">
                <p>Цифровой документооборот между облачными и коробочными решениями Битрикс 24</p>
              </div>
            </li>

            <li class="solutions__item">
              <div class="solutions__circle">
                <svg class="solutions__svg">
                  <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#storage"></use>
                </svg>
              </div>
              <div class="solutions__descr">
                <p>Сервис цифровой электронной подписи</p>
              </div>
            </li>

            <li class="solutions__item">
              <div class="solutions__circle">
                <svg class="solutions__svg">
                  <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#microscope"></use>
                </svg>
              </div>
              <div class="solutions__descr">
                <p>Интеграции с различными государственными учреждениями, в частности с испытательными
                  лабораториями государственного Росреестра</p>
              </div>
            </li>
          </ul>
        </div>

        <div class="solutions__image">
          <img class="solutions__img" src="<?=SITE_TEMPLATE_PATH?>/images/about/man.png"
               alt="Мужчина и иконки">
        </div>
      </div>
    </div>
  </section>

  <section class="stages">
    <div class="container">
      <h2 class="title stages__title">
        Этапы сотрудничества
      </h2>

      <ul class="stages__list">
        <li class="stages__item">
          <div class="stages__inner">
              <span class="stages__number">
                01
              </span>
            <svg class="stages__svg">
              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#arrow-right"></use>
            </svg>
          </div>

          <span class="stages__subtitle">
              Постановка задач и выявление проблемы
            </span>

          <div class="stages__text">
            <p>
              Для начала мы выявляем проблемы, с которой столкнулся ваш бизнес. После этого ставятся
              задачи, которые Вы и Ваш бизнес хотят достичь. Уже после этого происходит работа по
              внедрению системы в Ваш бизнес.
            </p>
          </div>
        </li>

        <li class="stages__item">
          <div class="stages__inner">
              <span class="stages__number">
                02
              </span>
            <svg class="stages__svg">
              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#arrow-right"></use>
            </svg>
          </div>

          <span class="stages__subtitle">
              Работа по внедрению программного обеспечения
            </span>

          <div class="stages__text">
            <p>
              Работа по внедрению делится на несколько этапов. Для начала необходимо выявить слабые места
            </p>
          </div>
        </li>

        <li class="stages__item">
          <div class="stages__inner">
              <span class="stages__number">
                03
              </span>
            <svg class="stages__svg">
              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#arrow-right"></use>
            </svg>
          </div>

          <span class="stages__subtitle">
              Составление плана работ и обучение
            </span>

          <div class="stages__text">
            <p>
              При составлении плана работ необходимо учесть все нюансы бизнеса. Для хорошоего обучения
              сотрудников понадобится около 2-х недель.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="service">
    <div class="container">
      <h2 class="title service__title">
        Наши услуги
      </h2>

      <ul class="service__list">
        <li class="service__item">
          <article class="our-service">
            <svg class="our-service__svg">
              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#bitrix-24-1"></use>
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
              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#rocket"></use>
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
              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#agent"></use>
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
              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#graduated"></use>
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

  <section class="team">
    <div class="container">
      <div class="team__wrap">
        <h2 class="title team__title">
          Наша команда
        </h2>
        <ul class="team__list">
          <li class="team__item">
            <article class="teammate">
              <div class="teammate__image">
                <img class="teammate__img" src="<?=SITE_TEMPLATE_PATH?>/images/subbotin.png"
                     alt="Николай Субботин Разработка Битрикс, Битрикс24 коробочные версии">
              </div>
              <span class="teammate__name">
                  Николай Субботин
                </span>
              <span class="teammate__specialty">
                  Разработка решений на базе БУС, Битрикс24
                </span>
            </article>
          </li>

          <li class="team__item">
            <article class="teammate">
              <div class="teammate__image">
                <img class="teammate__img" src="<?=SITE_TEMPLATE_PATH?>/images/zacepin.png"
                     alt="Дмитрий Зацепин Битрикс24 облачные решения">
              </div>
              <span class="teammate__name">
                  Дмитрий Зацепин
                </span>
              <span class="teammate__specialty">
                  Битрикс24 облачные решения, бизнес процессы
                </span>
            </article>
          </li>

          <li class="team__item">
            <article class="teammate">
              <div class="teammate__image">
                <img class="teammate__img" src="<?=SITE_TEMPLATE_PATH?>/images/pavel.png"
                     alt="Павел Федоров Ведущий специалист">
              </div>
              <span class="teammate__name">
                  Павел Федоров
                </span>
              <span class="teammate__specialty">
                  Специалист по работе с клиентами
                </span>
            </article>
          </li>
        </ul>

      </div>
    </div>
  </section>

  <section class="consultation-order--about">
    <div class="container">
      <form class="form consultation-order__form">
        <h2 class="title form__title form__title--indent">
          Оставьте заявку для получения консультации
        </h2>

        <div class="form__text">
          <p>Мы свяжемся с Вами в течение 10 минут</p>
        </div>

        <div class="form__body">
          <label class="form__label" for="abname">
            Имя
          </label>
          <input class="form__input form__input--about" id="abname" type="text" required
                 placeholder="Ваше имя" name="abname">

          <label class="form__label" for="abphone">
            Телефон
          </label>
          <input class="form__input form__input--about" id="abphone" type="tel" required
                 placeholder="+7 905 ___ __ __" name="abphone">

          <label class="form__label" for="abemail">
            Электронный адрес
          </label>
          <input class="form__input form__input--about" id="abemail" type="email" required
                 placeholder="address@yandex.ru" name="abemail">

          <label class="form__label" for="abtextarea">
            Комментарий
          </label>
          <textarea class="form__textarea" id="abtextarea" cols="30" rows="10" required
                    placeholder="Оставьте Ваш комментарий здесь" name="abtextarea"></textarea>

          <button class="btn form__btn" type="submit">
            Отправить
          </button>

          <div class="form__checkbox">
            <input type="checkbox" required/>
            <label>Я согласен с обработкой персональных данных в соответствии с <a href="#">политикой
                конфиденциальности</a></label>
          </div>
        </div>

        <svg class="form__svg">
          <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#message"></use>
        </svg>
      </form>
    </div>
  </section>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>