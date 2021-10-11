<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

?>
</main>
<footer class="footer" style="background: #112931">
  <div class="container">
    <div class="footer__wrap">
      <div class="footer__item footer__item--order1">
        <a class="logo footer__logo" href="/">
          <img class="logo__img footer__img" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Логотип"
               width="213px" height="31px">
          <span class="visually-hidden">Логотип, ссылка на главную страницу</span>
        </a>
        <!--        <a class="footer__policy" href="#">-->
        <!--          Политика конфеденциальности-->
        <!--        </a>-->
        <!--        <a class="footer__policy" href="#">-->
        <!--          Правила обработки персональной информации-->
        <!--        </a>-->
      </div>
      <div class="footer__item footer__item--order3">
        <h4 class="footer__title">
          Услуги
        </h4>
        <a class="footer__link" href="/services/">
          Внедрение
        </a>
        <a class="footer__link" href="/services/development/">
          Разработка сайтов
        </a>
        <a class="footer__link" href="/services/self-hosted/">
          Коробочная версия
        </a>
        <a class="footer__link" href="/services/cloud/">
          Облачная версия
        </a>
      </div>
      <div class="footer__item footer__item--order4">
        <h4 class="footer__title">
          Компания
        </h4>
        <a class="footer__link" href="/case/">
          Портфолио
        </a>
        <a class="footer__link" href="/about/">
          О компании
        </a>
        <a class="footer__link" href="/contacts/">
          Контакты
        </a>
        <a class="footer__link" href="/articles/">
          Блог
        </a>
      </div>
      <div class="footer__item footer__item--indent footer__item--order2">
        <a class="footer__tel" href="tel:+79277086868">+7(927)708-68-68
        </a>
        <a class="footer__mail" href="mailto:info@alphaservice24.com">
          info@alphaservice24.com
        </a>
        <a href="https://alphaservice24.com/" style="padding-top: 25px;">Работает на «1С-Битрикс: Управление
          сайтом»</a>
      </div>
    </div>
  </div>
  <address class="footer__copyright">
    2021 © ALPHASERVICE24.COM
  </address>
</footer>

<div class="js-popup js-callback custom-modal">
  <div class="custom-modal-wrapper">
    <div class="popup-content custom-modal-content">
      <form class="form form-popup form--submit" name="request-consultation">
        <div class="custom-modal-close close-popup"></div>
        <h2 class="title contacts__title title--submit">
          Оставьте заявку для получения консультации
        </h2>

        <div class="form__text form__text--submit">
          <p>Мы свяжемся с Вами в течение 10 минут</p>
        </div>

        <div class="form__body">
          <label class="form__label form__label--submit" for="username">
            Имя
          </label>
          <input class="form__input form__input--submit" id="callback-username" type="text" required
                 placeholder="Ваше имя" name="username">

          <label class="form__label form__label--submit" for="callback-userphone">
            Телефон
          </label>
          <input class="form__input form__input--submit" id="callback-userphone" type="tel" required
                 placeholder="+7 905 ___ __ __" name="userphone">

          <label class="form__label form__label--submit" for="email">
            Электронный адрес
          </label>
          <input class="form__input form__input--submit" id="callback-email" type="email" required
                 placeholder="address@yandex.ru" name="useremail">

          <label class="form__label form__label--submit" for="textarea">
            Комментарий
          </label>
          <textarea class="form__textarea form__textarea--submit" id="callback-textarea" cols="30" rows="3"
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

<div class="js-popup js-order custom-order">
  <div class="custom-order-wrapper">
    <div class="popup-content custom-order-content">
      <form class="form form-popup form--order" name="buy-license">
        <div class="custom-order-close close-popup"></div>
        <h2 class="title contacts__title title--order">
          Оставьте заявку для получения консультации
        </h2>

        <div class="form__text form__text--order">
          <p>Мы свяжемся с Вами в течение 10 минут</p>
        </div>

        <div class="form__body">
          <label class="form__label form__label--order" for="usname">
            Имя
          </label>
          <input class="form__input form__input--order" id="cloud-usname-2" type="text" required
                 placeholder="Ваше имя" name="username">

          <label class="form__label form__label--order" for="usphone">
            Телефон
          </label>
          <input class="form__input form__input--order" id="cloud-usphone-2" type="tel" required
                 placeholder="+7 905 ___ __ __" name="userphone">

          <label class="form__label form__label--order" for="usemail">
            Электронный адрес
          </label>
          <input class="form__input form__input--order" id="cloud-usemail-2" type="email" required
                 placeholder="address@yandex.ru" name="useremail">

          <label class="form__label form__label--order" for="select">
            Выберите тарифный план
          </label>
          <select name="userselect" id="cloud-select">
            <option value="49">Бесплатный</option>
            <option value="50">Базовый</option>
            <option value="51">Стандартный</option>
            <option value="52">Профессиональный</option>
          </select>

          <label class="form__label form__label--order" for="ustextarea">
            Комментарий
          </label>
          <textarea class="form__textarea form__textarea--order" id="cloud-ustextarea" cols="30" rows="2"
                    placeholder="Оставьте Ваш комментарий здесь" name="usertextarea"></textarea>

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

<div class="js-popup js-order-self-hosted custom-order-self-hosted">
  <div class="custom-order-wrapper">
    <div class="popup-content custom-order-content">
      <form class="form form-popup form--order" name="buy-license">
        <div class="custom-order-close-self-hosted close-popup"></div>
        <h2 class="title contacts__title title--order">
          Оставьте заявку для получения консультации
        </h2>

        <div class="form__text form__text--order">
          <p>Мы свяжемся с Вами в течение 10 минут</p>
        </div>

        <div class="form__body">
          <label class="form__label form__label--order" for="usname">
            Имя
          </label>
          <input class="form__input form__input--order" id="self-hosted-usname" type="text" required
                 placeholder="Ваше имя" name="username">

          <label class="form__label form__label--order" for="usphone">
            Телефон
          </label>
          <input class="form__input form__input--order" id="self-hosted-usphone" type="tel" required
                 placeholder="+7 905 ___ __ __" name="userphone">

          <label class="form__label form__label--order" for="usemail">
            Электронный адрес
          </label>
          <input class="form__input form__input--order" id="self-hosted-usemail" type="email" required
                 placeholder="address@yandex.ru" name="useremail">

          <label class="form__label form__label--order" for="select">
            Выберите тарифный план
          </label>

          <select name="userselect" id="self-hosted-select">
            <option value="37">CRM</option>
            <option value="38">Интернет-магазин + CRM</option>
            <option value="39">Корпоративный портал 50</option>
            <option value="40">Корпоративный портал 100</option>
            <option value="41">Корпоративный портал 250</option>
            <option value="42">Корпоративный портал 500</option>
            <option value="43">Энтерпрайз</option>
          </select>

          <label class="form__label form__label--order" for="ustextarea">
            Комментарий
          </label>
          <textarea class="form__textarea form__textarea--order" id="self-hosted-ustextarea" cols="30" rows="2"
                    placeholder="Оставьте Ваш комментарий здесь" name="usertextarea"></textarea>

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

<div class="js-popup js-order-bus custom-order-bus">
  <div class="custom-order-wrapper">
    <div class="popup-content custom-order-content">
      <form class="form form-popup form--order" name="buy-license-bus">
        <div class="custom-order-close-bus close-popup"></div>
        <h2 class="title contacts__title title--order">
          Оставьте заявку для получения консультации
        </h2>

        <div class="form__text form__text--order">
          <p>Мы свяжемся с Вами в течение 10 минут</p>
        </div>

        <div class="form__body">
          <label class="form__label form__label--order" for="usname">
            Имя
          </label>
          <input class="form__input form__input--order" id="bus-usname" type="text" required
                 placeholder="Ваше имя" name="username">

          <label class="form__label form__label--order" for="usphone">
            Телефон
          </label>
          <input class="form__input form__input--order" id="bus-usphone" type="tel" required
                 placeholder="+7 905 ___ __ __" name="userphone">

          <label class="form__label form__label--order" for="usemail">
            Электронный адрес
          </label>
          <input class="form__input form__input--order" id="bus-usemail" type="email" required
                 placeholder="address@yandex.ru" name="useremail">

          <label class="form__label form__label--order" for="select">
            Выберите тарифный план
          </label>

          <select name="userselect" id="bus-select">
            <option value="44">Старт</option>
            <option value="45">Стандарт</option>
            <option value="46">Малый бизнес</option>
            <option value="47">Бизнес</option>
            <option value="48">Энтерпрайз</option>
          </select>

          <label class="form__label form__label--order" for="ustextarea">
            Комментарий
          </label>
          <textarea class="form__textarea form__textarea--order" id="bus-ustextarea" cols="30" rows="2"
                    placeholder="Оставьте Ваш комментарий здесь" name="usertextarea"></textarea>

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
    <img src="<?=SITE_TEMPLATE_PATH?>/images/cookies-icon.png" alt="Cookie" width="46px" height="46px">
    <p>
      Посещая наш сайт, вы соглашаетесь на использование cookie-файлов.<br/>Если вы продолжите использовать сайт, мы будем считать, что вас это устраивает.
    </p>

    <button class="btn">
      Хорошо
    </button>
  </div>
</div>

<div class="btn-page-up"></div>

<?php global $USER; ?>
<?php CJSCore::Init(array('jquery2')); ?>
<?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/slick.min.js"); ?>
<?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/script.min.js"); ?>
<?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/lazysizes.min.js"); ?>
<script>
  (function (w, d, u) {
    var s = d.createElement('script');
    s.async = true;
    s.src = u + '?' + (Date.now() / 60000 | 0);
    var h = d.getElementsByTagName('script')[0];
    h.parentNode.insertBefore(s, h);
  })(window, document, 'https://cdn-ru.bitrix24.ru/b17948298/crm/tag/call.tracker.js');
</script>
</body>
</html>