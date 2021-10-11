<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<form class="form case-page__form">
  <h2 class="title form__title">
    Оставьте заявку для получения консультации
  </h2>

  <div class="form-text form__text--indent form__text--case">
    <p>Мы свяжемся с Вами в течение 10 минут</p>
  </div>

  <div class="form__body form__body--display">
    <label class="form__label form__label--top" for="casephone">
      Телефон
    </label>
    <input class="form__input form__input--size" id="casephone" type="tel" required placeholder="+7 905 ___ __ __" name="casephone">

    <label class="form__label form__label--top form__label--right" for="casename">
      Имя
    </label>
    <input class="form__input form__input--size" id="casename" type="text" required placeholder="Ваше имя" name="casename">

    <button class="btn case-page__btn" type="submit">
      Отправить
    </button>

      <div class="form__checkbox privacy-policy">
          <p>
              Нажимая кнокпку «Отправить» вы соглашаетесь с обработкой персональных данных в соответствии с <a href="#">политикой конфиденциальности</a>
          </p>
      </div>
  </div>

  <svg class="form__svg">
    <use xlink:href="/local/templates/alphaservice/images/sprite.svg#message"></use>
  </svg>
</form>
