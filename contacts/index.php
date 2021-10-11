<?php
/** @global CMain $APPLICATION */

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "контакты, альфа сервис, alphaservice, альфа сервис битрикс, битрикс ".getCityName(false));
$APPLICATION->SetPageProperty("title", "Контакты \"Альфа Сервис\" - Офис продаж Битрикс 24 в ".getCityName());
$APPLICATION->SetPageProperty("keywords", "контакты, альфа сервис, alphaservice, альфа сервис битрикс, битрикс ".getCityName(false));
$APPLICATION->SetPageProperty("description", "Офис компании \"Альфа Сервис\" в ".getCityName()." (Южное шоссе 161 к2/1). Телефон: +7(927)708-68-68. Email: info@alphaservice24.com");

$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Контакты \"Альфа Сервис\" - Офис продаж Битрикс 24 в ".getCityName());
?>
  <section class="contacts">
    <div class="container">
      <div class="contacts__inner">
        <div class="contacts__text">
          <div class="contacts__subtitle">
            <span class="contacts__span">
              Расскажите нам о своем проекте
            </span>
          </div>
          <div class="contacts__call">
            <p>Позвоните нам или оставьте заявку</p>
          </div>
          <div class="contacts__item">
            <a class="contacts__tel" href="tel:+79277086868">+7(927)708-68-68
            </a>
            <a class="contacts__mail" href="mailto:info@alphaservice24.com">
              info@alphaservice24.com
            </a>
            <div class="social-contacts-wrap">
              <a href="#">
                <img src="../local/templates/alphaservice/images/icons/icn_tel_32.png" alt="telegram">
              </a>
              <a href="#">
                <img src="../local/templates/alphaservice/images/icons/icn_watsp_32.png" alt="whatsapp">
              </a>
              <a href="#">
                <img src="../local/templates/alphaservice/images/icons/icn_viber_32.png" alt="viber">
              </a>
            </div>
          </div>
          <div class="contacts__image">
            <img class="contacts__img" src="<?=SITE_TEMPLATE_PATH?>/images/contacts.png"
                 alt="Люди пожимают руки">
          </div>
        </div>
        <div class="contacts__box">
          <form class="form form-popup contacts__form" name="request-consultation">
            <h2 class="title contacts__title">
              Оставьте заявку для получения консультации
            </h2>
            <div class="form__text">
              <p>Мы свяжемся с Вами в течение 10 минут</p>
            </div>
            <div class="form__body">
              <label class="form__label" for="conname">
                Имя
              </label>
              <input class="form__input form__input--contacts" id="conname" type="text" required
                     placeholder="Ваше имя" name="username">

              <label class="form__label" for="conphone">
                Телефон
              </label>
              <input class="form__input form__input--contacts" id="conphone" type="tel" required
                     placeholder="+7 905 ___ __ __" name="userphone">

              <label class="form__label" for="conemail">
                Электронный адрес
              </label>
              <input class="form__input form__input--contacts" id="conemail" type="email" required
                     placeholder="address@yandex.ru" name="useremail">

              <label class="form__label" for="contextarea">
                Комментарий
              </label>
              <textarea class="form__textarea" id="contextarea" cols="30" rows="10" required
                        placeholder="Оставьте Ваш комментарий здесь" name="comment"></textarea>

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
      </div>
    </div>
  </section>

  <section class="about-loc-wrap">
    <div class="container">
      <div class="about-loc-item">
        <img src="../local/templates/alphaservice/images/about/contacts_map.jpg"
             alt="Наш адрес в городе Тольятти">
      </div>
      <div class="about-loc-item">
        <h2>
          Наш адрес в городе Тольятти
        </h2>
        <p>
          Можете приехать и пообщаться лично
        </p>
        <p class="about-loc-address">
          Тольятти, Южное шоссе 161-2/1
        </p>

        <img src="../local/templates/alphaservice/images/about/contacts_loc_icn_big.svg"
             alt="Тольятти, Южное шоссе 161-2/1">
      </div>
    </div>
  </section>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>