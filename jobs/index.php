<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/** @global CMain $APPLICATION */

$APPLICATION->SetTitle("Вакансии");
?>
  <section class="jobs-page">
    <div class="container">
      <div class="breadcrumbs breadcrumbs--blog" itemprop="http://schema.org/breadcrumb" itemscope=""
           itemtype="http://schema.org/BreadcrumbList">
        <ul class="breadcrumbs__list">
          <li class="breadcrumbs__item" id="bx_breadcrumb_0" itemprop="itemListElement" itemscope=""
              itemtype="http://schema.org/ListItem">

            <a href="#" title="О компании" itemprop="item" class="breadcrumbs__link">
              <span itemprop="name">О компании</span>
            </a>
            <meta itemprop="position" content="1">
          </li>
          <li class="breadcrumbs__item">
            <i class="fa fa-angle-right"></i>
            <span>Вакансии</span>
          </li>
        </ul>
      </div>

      <div class="jobs-page__wrap">
        <div class="jobs-page__inner">
          <h1 class="title jobs-page__title">Вакансии</h1>

          <div class="jobs-list-wrap">
            <div class="jobs-list-inner">
              <h4 class="jobs-list-title">
                Разработка и верстка
              </h4>
              <ul>
                <li>
                  <p>
                    <span>Верстальщик</span>
                    <span>Опыт от 2-х лет</span>
                  </p>
                  <p>
                    Полный рабочий день, в офисе. Зарплата 60 000₽.
                  </p>
                </li>
                <li>
                  <p>
                    <span>Разработчик на Битрикс</span>
                    <span>Опыт от 3-х лет</span>
                  </p>
                  <p>
                    Полный рабочий день, в офисе. Зарплата 75 000₽.
                  </p>
                </li>
                <li>
                  <p>
                    <span>Разработчик на Битрикс</span>
                    <span>Опыт от 3-х лет</span>
                  </p>
                  <p>
                    Полный рабочий день, в офисе. Зарплата 75 000₽.
                  </p>
                </li>
                <li>
                  <p>
                    <span>Разработчик на Битрикс</span>
                    <span>Опыт от 3-х лет</span>
                  </p>
                  <p>
                    Полный рабочий день, в офисе. Зарплата 75 000₽.
                  </p>
                </li>
              </ul>
            </div>
          </div>

          <form class="form consultation-order__form">
            <h4 class="title form__title form__title--indent">
              Оставить заявку
            </h4>

            <div class="form__body">
              <label class="form__label" for="abname">
                Имя
              </label>
              <input class="form__input form__input--about" id="abname" type="text" required=""
                     placeholder="Ваше имя" name="abname">

              <label class="form__label" for="abphone">
                Телефон
              </label>
              <input class="form__input form__input--about" id="abphone" type="tel" required=""
                     placeholder="+7 905 ___ __ __" name="abphone" inputmode="text">

              <label class="form__label" for="abemail">
                Электронный адрес
              </label>
              <input class="form__input form__input--about" id="abemail" type="email" required=""
                     placeholder="address@yandex.ru" name="abemail">

              <label class="form__label" for="abtextarea">
                Комментарий
              </label>
              <textarea class="form__textarea" id="abtextarea" cols="30" rows="10" required=""
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
              <use xlink:href="/local/templates/alphaservice/images/sprite.svg#message"></use>
            </svg>
          </form>

          <div class="blog-page__but">
            <a class="btn blog-page__btn--white" href="#">
              <svg class="case-page__arrow">
                <use xlink:href="/local/templates/alphaservice/images/sprite.svg#arrow-btn"></use>
              </svg>
              Назад </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    .jobs-page h4 {
      font-size: 22px;
      font-weight: normal;
    }

    .jobs-page__title {
      margin: 0 auto 40px;
    }

    .jobs-list-wrap {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .jobs-list-title::before {
      background: url("/local/templates/alphaservice/images/icons/job_icon_title.svg") no-repeat center center;
      height: 35px;
      display: inline-block;
      content: "";
      margin: 0 5px -10px 0;
      width: 35px;
    }

    .jobs-list-inner {
      max-width: 500px;
    }

    /* Jobs List Item */
    .jobs-list-inner li {
      padding: 20px 0;
    }

    .jobs-list-inner li p {
      color: #828282;
    }

    /*  Jobs List Caption    */
    .jobs-list-inner li p span:nth-child(1) {
      font-size: 22px;
      color: #333333;
    }

    .jobs-list-inner li p span:nth-child(1)::after {
      background: #828282;
      height: 22px;
      display: inline-block;
      content: "";
      margin: 0 5px -2px 10px;
      width: 2px;
    }

    /*  Jobs List Description    */
    .jobs-list-inner li p:nth-child(2) {
      max-width: 300px;
      margin: 10px 0 0;
    }

    /*  Form     */
    .jobs-page__inner form {
      color: #333333;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    .jobs-page__inner form label {
      padding: 0 0 0 5px;
    }

    .jobs-page__inner form input,
    .jobs-page__inner form textarea {
      border: 2px solid #BDBDBD;
    }

    .jobs-page__inner form input:hover,
    .jobs-page__inner form input:focus,
    .jobs-page__inner form textarea:hover,
    .jobs-page__inner form textarea:focus {
      border: 2px solid #FE0898;
    }

    /* Adaptive */
    @media all and (min-width: 768px) {
      .jobs-list-title::before {
        margin: 0 24px -10px -65px;
      }
    }
  </style>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>