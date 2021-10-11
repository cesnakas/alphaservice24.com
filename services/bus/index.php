<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "1с битрикс управление сайтом, 1с БУС");
$APPLICATION->SetPageProperty("title", "Купить платформу \"1С Битрикс УС\". Лицензия от \"Альфа Сервис\"");
$APPLICATION->SetPageProperty("keywords", "1с битрикс управление сайтом, 1с БУС");
$APPLICATION->SetPageProperty("description", "Заказать редакцию \"1С Битрикс Управление сайтом\" с Настройкой и Доработкой под ваши бизнес-задачи от официального партнера \"Альфа Сервис\".");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Купить платформу \"1С Битрикс УС\". Лицензия от \"Альфа Сервис\"");
?>
  <section class="top-screen" style="background-image: url('/local/templates/alphaservice/images/icons/double-bg.svg');">
    <div class="container">
      <div class="top-screen__content">
        <div class="top-screen__box">
          <h1 class="top-screen__title">
            Редакции «1С-Битрикс: Управление сайтом»
          </h1>
          <div class="top-screen__text">
            <p>
              Начните с любой редакции и развивайте проект по мере роста. Платформа позволяет
              управлять сайтами и интернет-магазинами любого масштаба.
            </p>
          </div>
          <div class="top-screen__buttons">
            <a class="btn top-screen__btn href=" #" onclick="togglePopup('.js-order-bus')">
            Заказать
            </a>
          </div>
        </div>
        <div class="top-screen__image">
          <img class="top-screen__img" src="/local/templates/alphaservice/images/bus/bus_box_big_ru.png" alt="1C-Битрикс">
        </div>
      </div>
    </div>
  </section>

  <section class="our-services">
    <div class="container">
      <h2 class="title our-services__title">
        Что планируете создать?
      </h2>

      <div class="our-services__switch">
        <span>Сайт</span>
        <label class="switch">
          <input id="toggle-options" onclick="toggleOptions()" type="checkbox">
          <span class="slider round"></span>
        </label>
        <span>Интернет-магазин</span>
      </div>

      <!--    Таблица 1   -->
      <div id="price-table-1" class="price-table price-table_limited">
        <div class="price-table__outer">
          <div class="price-table__inner">
            <div class="price-table__row price-table__row_mobile-head">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__mobile-section">
                      <div class="price-table__product-title">
                        <div class="price-table__product-title-content">
                          <p class="price-table__product-title-link">Старт</p>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__price-content">
                        <div class="price-table__price-value price-table__price-value_general">
                          5 400 руб.
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__buy-content">
                        <a href="#"
                           class="btn product__btn product__btn--white"
                           onclick="togglePopup('.js-order-bus')">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__mobile-section">
                      <div class="price-table__product-title">
                        <div class="price-table__product-title-content">
                          <p class="price-table__product-title-link">Стандарт</p>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__price-content">
                        <div class="price-table__price-value price-table__price-value_general">
                          15 900 руб.
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__buy-content">
                        <a href="#"
                           class="btn product__btn product__btn--white"
                           onclick="togglePopup('.js-order-bus')">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__mobile-section">
                      <div class="price-table__product-title">
                        <div class="price-table__product-title-popular">Самая популярная
                        </div>
                        <div class="price-table__product-title-content">
                          <a href="#" class="price-table__product-title-link">Малый
                            бизнес</a>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__price-content">
                        <div class="price-table__price-value price-table__price-value_general">
                          35 900 руб.
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__buy-content">
                        <a href="#"
                           class="btn product__btn product__btn--white"
                           onclick="togglePopup('.js-order-bus')">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__mobile-section">
                      <div class="price-table__product-title">
                        <div class="price-table__product-title-content">
                          <p class="price-table__product-title-link">Бизнес</p>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__price-content">
                        <div class="price-table__price-value price-table__price-value_general">
                          72 900 руб.
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__buy-content">
                        <a href="#"
                           class="btn product__btn product__btn--white"
                           onclick="togglePopup('.js-order-bus')">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__mobile-section">
                      <div class="price-table__product-title">
                        <div class="price-table__product-title-content">
                          <p class="price-table__product-title-link">Энтерпрайз</p>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__price-content">
                        <div class="price-table__price-value price-table__price-value_general">
                          от 399 000 руб.
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__buy-content">
                        <a href="#"
                           class="btn product__btn product__btn--white"
                           onclick="togglePopup('.js-order-bus')">
                          Заказать
                        </a>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__order-content">
                        <a href="#" class="price-table__order-link">Заказать
                          разработку</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_head">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__product-title">
                      <div class="price-table__product-title-content">
                        <p class="price-table__product-title-link">Старт</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__product-title">
                      <div class="price-table__product-title-content">
                        <p class="price-table__product-title-link">Стандарт</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__product-title">
                      <div class="price-table__product-title-popular">Самая популярная</div>
                      <div class="price-table__product-title-content">
                        <p class="price-table__product-title-link">Малый
                          бизнес</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__product-title">
                      <div class="price-table__product-title-content">
                        <p class="price-table__product-title-link">Бизнес</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__product-title">
                      <div class="price-table__product-title-content">
                        <p class="price-table__product-title-link">Энтерпрайз</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_price">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">5
                        400 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        15 900 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        35 900 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        72 900 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        от 399 000 руб.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_buy">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table-wrap">
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideFirstTab(1)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">CMS</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-first-tab-1"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-first-tab-1">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Главный модуль
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Сайты24
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Число сайтов
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            2
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞*
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞*
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞*
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞*
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Число страниц
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Управление структурой
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Информационные блоки
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Highload-блоки
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Поиск
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Перевод
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Форумы и Блоги
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Фотогалерея 2.0
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Социальная сеть
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Обучение, тестирование
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Веб-мессенджер
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Бизнес-процессы
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Почта
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Техподдержка
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Календари
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Документооборот
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        AD/LDAP интеграция
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Универсальные списки
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        База знаний Wiki
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Сервис «Есть идея!»
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Контроллер сайтов
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideFirstTab(2)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Интернет-магазин</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-first-tab-2"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-first-tab-2">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Торговый каталог
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Интеграция с CRM
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Мастер управления магазином
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Складской учет
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            1
                            склад
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Валюты
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Конструктор отчетов
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Разделение заказов между филиалами компании
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideFirstTab(3)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Поддержка и консалтинг
                        1С-Битрикс
                      </div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-first-tab-3"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-first-tab-3">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Техподдержка
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        VIP-поддержка 24/7
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Аудит производительности от 1С-Битрикс
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Сопровождение проекта от 1С-Битрикс
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideFirstTab(4)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Маркетинг</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-first-tab-4"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-first-tab-4">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        SEO-модуль
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Социальные сервисы
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Интеграция с Битрикс24
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Веб-формы
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Опросы
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Подписка и рассылки
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        A/B тестирование
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        E-mail маркетинг
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Реклама
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Веб-аналитика
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideFirstTab(5)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Производительность</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-first-tab-5"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-first-tab-5">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Композитный сайт
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Компрессия
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Ежемесячный трафик CDN
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            5
                            Гб
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            10
                            Гб
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            20
                            Гб
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            40
                            Гб
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Допустимое число серверов
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            1
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            1
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            1
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            1
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            от
                            4
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Монитор производительности
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Визуальное масштабирование
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Пульс конверсии
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Веб-сервисы
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Модуль "Веб-кластер"
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Балансировка нагрузки между серверами
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Отказоустойчивость на уровне кластера серверов
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Географически распределенный кластер
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Автоматическое масштабирование
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideFirstTab(6)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Безопасность и мобильность</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-first-tab-6"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-first-tab-6">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Облачные хранилища
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Автоматический бекап в облако
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            2
                            Гб
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            2
                            Гб
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            4
                            Гб
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            10
                            Гб
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            ∞
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Маркетплейс
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Защита от DDOS
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Базы данных
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            MySQL
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            MySQL
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            MySQL
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            MySQL
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            MySQL
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Проактивная защита
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Мобильная платформа
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Мобильное приложение интернет-магазина
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        Технология Push &amp; Pull
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_price">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">5
                        400 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        15 900 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        35 900 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        72 900 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        от 399 000 руб.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_buy">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_order">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_more">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="paragraph-footer">*Все сайты, работающие на одной лицензии, должны
          размещаться на
          одном хостинге и использовать одну копию программного продукта «1С-Битрикс: Управления сайтом».
        </div>
      </div>

      <!--    Таблица 2  -->
      <div id="price-table-2" class="price-table price-table_limited hide">
        <div class="price-table__outer">
          <div class="price-table__inner">
            <div class="price-table__row price-table__row_mobile-head">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__mobile-section">
                      <div class="price-table__product-title">
                        <div class="price-table__product-title-popular">Самая популярная
                        </div>
                        <div class="price-table__product-title-content">
                          <a href="#" class="price-table__product-title-link">Малый
                            бизнес</a>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__price-content">
                        <div class="price-table__price-value price-table__price-value_general">
                          35 900 руб.
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__buy-content">
                        <a href="#"
                           class="btn product__btn product__btn--white"
                           onclick="togglePopup('.js-order-bus')">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__mobile-section">
                      <div class="price-table__product-title">
                        <div class="price-table__product-title-content">
                          <a href="#" class="price-table__product-title-link">Бизнес</a>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__price-content">
                        <div class="price-table__price-value price-table__price-value_general">
                          72 900 руб.
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__buy-content">
                        <a href="#"
                           class="btn product__btn product__btn--white"
                           onclick="togglePopup('.js-order-bus')">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__mobile-section">
                      <div class="price-table__product-title">
                        <div class="price-table__product-title-content">
                          <a href="#"
                             class="price-table__product-title-link">Энтерпрайз</a>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__price-content">
                        <div class="price-table__price-value price-table__price-value_general">
                          от 399 000 руб.
                        </div>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__buy-content">
                        <a href="#"
                           class="btn product__btn product__btn--white"
                           onclick="togglePopup('.js-order-bus')">
                          Заказать
                        </a>
                      </div>
                    </div>
                    <div class="price-table__mobile-section">
                      <div class="price-table__order-content">
                        <a href="#" class="price-table__order-link">Заказать
                          разработку</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_head">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__product-title">
                      <div class="price-table__product-title-popular">Самая популярная</div>
                      <div class="price-table__product-title-content">
                        <a href="#" class="price-table__product-title-link">Малый
                          бизнес</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__product-title">
                      <div class="price-table__product-title-content">
                        <a href="#" class="price-table__product-title-link">Бизнес</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__product-title">
                      <div class="price-table__product-title-content">
                        <a href="#" class="price-table__product-title-link">Энтерпрайз</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_price">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        35 900 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        72 900 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        от 399 000 руб.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_buy">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table-wrap">
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideSecondTab(1)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Каталог товаров и цены</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-second-tab-1"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-second-tab-1">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Каталог товаров</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">SKU (сложный товар)</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Цена на товар</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Многовалютная цена</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Несколько видов цен
                          (мультиколоночный прайс)
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Общий остаток товара</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Остатки по складам/магазинам
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Импорт каталога из «1С»
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Выгрузка в Яндекс.Маркет
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideSecondTab(2)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Скидки</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-second-tab-2"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-second-tab-2">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Скидки на товары</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Скидки по купонам</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Старая цена/Новая цена</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Количественная скидка на
                          товар
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Скидки на общую сумму заказа
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Наборы и комплекты</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Накопительные скидки и
                          программы
                          лояльности
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Аффилиатские программы</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideSecondTab(3)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Оформление заказа</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-second-tab-3"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-second-tab-3">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Отправка заказа на email
                          покупателю
                          и менеджеру
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Настраиваемая процедура
                          заказа
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Выбор типа плательщика</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Личный кабинет клиента</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Список брошенных корзин
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideSecondTab(4)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Оплата и доставка</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-second-tab-4"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-second-tab-4">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Оплата курьеру или оплата в
                          офисе
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Безналичная оплата с
                          генерацией
                          счета/квитанции
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Электронные платежи</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Оплата с внутреннего счета
                          покупателя
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Пополнение и управление
                          внутренним
                          счетом покупателя
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Автоматическое списание с
                          кредитных
                          карт
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Расчет стоимости доставки
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Продажа электронного
                          контента
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideSecondTab(5)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Обработка заказов</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-second-tab-5"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-second-tab-5">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Управление заказами
                          покупателей
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Статистика по товарам и
                          заказам
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Конструктор отчетов</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Интеграция заказов с «1С»
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Интеграция с CRM</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Коммуникации с покупателями
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Рассылки покупателям</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Опросы/анкетирование</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Блог компании</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Разделение доступа к заказам
                          разных
                          магазинов/филиалов в
                          холдинговой структуре
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideSecondTab(6)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Форумы</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-second-tab-6"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-second-tab-6">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Есть идея! (пожелания и
                          предложения)
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Поддержка покупателей
                          (Helpdesk)
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Социальная сеть</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideSecondTab(7)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Поддержка и консалтинг
                        1С-Битрикс
                      </div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-second-tab-7"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-second-tab-7">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Техподдержка</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">VIP-поддержка 24/7</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Аудит производительности от
                          1С-Битрикс
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Сопровождение проекта от
                          1С-Битрикс
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideSecondTab(8)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Масштабирование и
                        отказоустойчивость
                      </div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-second-tab-8"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-second-tab-8">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Допустимое число серверов
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            1
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            1
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_text">
                            от
                            4
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <a href="#"
                           class="price-table__sidebar-title price-table__sidebar-title_link">Модуль
                          "Веб-кластер"</a>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Балансировка нагрузки между
                          серверами
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Отказоустойчивость на уровне
                          кластера серверов
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Географически распределенный
                          кластер
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Автоматическое
                          масштабирование
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price-table__row price-table__row_feature">
                <div class="price-table__sidebar price-table__sidebar_section">
                  <div onclick="hideSecondTab(9)" class="price-table__sidebar-inner">
                    <div class="price-table__sidebar-content">
                      <div class="price-table__sidebar-title">Прочее</div>
                    </div>
                    <div class="price-table__sidebar-switch-inner">
                      <div id="arrow-switch-second-tab-9"
                           class="price-table__sidebar-switch"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hide-second-tab-9">
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Проактивная защита</div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Мобильная версия
                          интернет-магазина
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Веб-сервисы (интеграция
                          магазина)
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">Документооборот (утверждение
                          материалов)
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_none"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__row price-table__row_feature">
                  <div class="price-table__sidebar">
                    <div class="price-table__sidebar-inner">
                      <div class="price-table__sidebar-content">
                        <div class="price-table__sidebar-title">«1С-Битрикс: Marketplace»
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="price-table__body">
                    <div class="price-table__item price-table__item_popular">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                    <div class="price-table__item">
                      <div class="price-table__item-content">
                        <div class="price-table__feature-content">
                          <div class="price-table__feature-icon price-table__feature-icon_checked"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_price">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        35 900 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        72 900 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__price-content">
                      <div class="price-table__price-value price-table__price-value_general">
                        от 399 000 руб.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_buy">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
              <div class="price-table__body">
                <div class="price-table__item price-table__item_popular">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
                <div class="price-table__item">
                  <div class="price-table__item-content">
                    <div class="price-table__buy-content">
                      <a href="#"
                         class="btn product__btn product__btn--white"
                         onclick="togglePopup('.js-order-bus')">
                        Заказать
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_order">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
            </div>
            <div class="price-table__row price-table__row_more">
              <div class="price-table__sidebar">
                <div class="price-table__sidebar-inner">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="paragraph-footer">*Все сайты, работающие на одной лицензии, должны размещаться на
          одном хостинге и использовать одну копию программного продукта «1С-Битрикс: Управления сайтом».
        </div>
      </div>

      <style>
        /* Services Bus */
        .top-screen__text {
          color: #4F4F4F;
        }

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

        @media all and (max-width: 480px) {
          .our-services__switch > span {
            font-size: 14px;
          }
        }

        /* Checkbox*/
        .switch {
          position: relative;
          display: inline-block;
          width: 64px;
          height: 28px;
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
          -o-transition: .3s;
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
          -o-transition: .3s;
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

        /* Service Table */
        .price-table__sidebar-content {
          font-size: 14px;
        }

        .price-table_limited {
          max-width: 1360px;
          margin: 0 auto;
        }

        .price-table__row {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-align: stretch;
          -ms-flex-align: stretch;
          align-items: stretch;
          -webkit-box-flex: 1;
          -ms-flex: 1 0 100%;
          flex: 1 0 100%;
        }

        @media all and (max-width: 1200px) {
          .price-table-wrap .price-table__row:nth-child(2n) {
            background: rgba(36, 188, 237, .05);
          }
        }

        @media all and (min-width: 0px) {
          .price-table__row {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
          }
        }

        @media all and (min-width: 1200px) {
          .price-table__row {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
          }
        }

        .price-table__sidebar {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
        }

        @media all and (min-width: 0px) {
          .price-table__sidebar {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            margin-right: 0;
          }
        }

        @media all and (min-width: 1200px) {
          .price-table__sidebar {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 270px;
            flex: 1 0 270px;
            max-width: 270px;
            margin-right: 10px;
          }
        }

        @media all and (min-width: 0px) {
          .price-table__sidebar-inner {
            padding: 16px 10px;
          }
        }

        @media all and (min-width: 768px) {
          .price-table__sidebar-inner {
            padding: 16px 20px;
          }

          .form:not(.form.blog-page__form):not(.case-page__form) {
            margin: 0 10px;
          }
        }

        .price-table__body {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-orient: horizontal;
          -webkit-box-direction: normal;
          -ms-flex-direction: row;
          flex-direction: row;
        }

        @media all and (min-width: 0px) {
          .price-table__body {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
          }
        }

        @media all and (min-width: 1200px) {
          .price-table__body {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 calc(100% - 280px);
            flex: 1 0 calc(100% - 280px);
          }
        }

        .price-table__item {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          justify-content: center;
          -webkit-box-flex: 1;
          -ms-flex: 1;
          flex: 1;
          border-style: solid;
          border-color: transparent;
        }

        @media all and (min-width: 0px) {
          .price-table__item {
            margin-left: 0;
            margin-right: 0;
            border-width: 0;
          }
        }

        @media all and (min-width: 1200px) {
          .price-table__item {
            margin-left: 1px;
            margin-right: 1px;
            border-left-width: 1px;
            border-right-width: 1px;
          }
        }

        .price-table__item_popular {
          border-color: #24BCED;
        }

        .price-table__item-content {
          -webkit-box-flex: 1;
          -ms-flex: 1 0 auto;
          flex: 1 0 auto;
        }

        .price-table__product-title {
          position: relative;
          padding: 20px 0;
        }

        .price-table__product-title-popular {
          position: absolute;
          width: calc(100% + 2px);
          bottom: 100%;
          left: 50%;
          padding: 10px 5px;
          background-color: #24BCED;
          border-top-left-radius: 5px;
          border-top-right-radius: 5px;
          color: #fff;
          font-size: .875rem;
          font-weight: 400;
          line-height: 1;
          text-align: center;
          -webkit-transform: translateX(-50%);
          -ms-transform: translateX(-50%);
          transform: translateX(-50%);
        }

        .price-table__product-title-content {
          text-align: center;
        }

        .price-table__product-title-link {
          font-size: 18px;
          font-weight: bold;
        }

        .price-table__price-content {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          justify-content: center;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -ms-flex-direction: column;
          flex-direction: column;
          padding: 20px 0;
          text-align: center;
        }

        .price-table__price-value_general {
          font-size: 24px;
        }

        .price-table__item_popular .price-table__price-value_general {
          font-size: 24px;
          font-weight: bold;
        }


        .price-table__buy-content {
          text-align: center;
          text-transform: uppercase;
        }

        .price-table__order-content,
        .price-table__more-content {
          text-align: center;
        }

        @media all and (min-width: 0px) {
          .price-table__order-content,
          .price-table__more-content {
            padding: 10px 0 20px;
          }
        }

        @media all and (min-width: 768px) {
          .price-table__order-content,
          .price-table__more-content {
            padding: 10px 0 30px;
          }
        }

        .price-table__order-link,
        .price-table__more-link {
          font-size: 14px;
          color: #24BCED;
          text-decoration: none;
        }

        .price-table__order-link {
          font-weight: 600;
        }

        .price-table__more-link {
          font-size: 14px;
        }

        .price-table__sidebar_section {
          -webkit-box-flex: 1;
          -ms-flex: 1 0 auto;
          flex: 1 0 auto;
          max-width: none;
          margin: 0;
          background-color: #333333;
          cursor: pointer;
        }

        .price-table__sidebar_section .price-table__sidebar-inner {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          -webkit-box-pack: justify;
          -ms-flex-pack: justify;
          justify-content: space-between;
          -webkit-box-flex: 1;
          -ms-flex: 1 0 auto;
          flex: 1 0 auto;
          max-width: 100%;
        }

        .price-table__sidebar_section .price-table__sidebar-title {
          color: #fff;
        }

        @media all and (min-width: 0px) {
          .price-table__sidebar_section .price-table__sidebar-title {
            font-size: .875rem;
          }
        }

        @media all and (min-width: 1200px) {
          .price-table__sidebar_section .price-table__sidebar-title {
            font-size: 1rem;
          }
        }

        .price-table__sidebar_section .price-table__sidebar-title {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 270px;
          flex: 0 0 270px;
          font-weight: 600;
        }

        .price-table__sidebar-switch-inner {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
          flex: 0 0 auto;
        }

        .price-table__sidebar-switch {
          display: block;
          width: 18px;
          height: 18px;
          background-image: url('data:image/svg+xml,%0A%3Csvg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M2 11L10 3L18 11" stroke="%23FE0898" stroke-width="3"/%3E%3C/svg%3E');
          background-position: 50%;
          background-size: contain;
          background-repeat: no-repeat;
        }

        .price-table__row_feature.section-hidden .price-table__sidebar_section {
          border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .price-table__row_feature.section-hidden .price-table__sidebar-switch {
          -webkit-transform: rotate(180deg);
          -ms-transform: rotate(180deg);
          transform: rotate(180deg);
        }

        .price-table__feature-content {
          text-align: center;
        }

        @media all and (min-width: 0px) {
          .price-table__feature-content {
            padding: 10px 5px;
          }
        }

        @media all and (min-width: 1200px) {
          .price-table__feature-content {
            padding: 0;
          }
        }

        .price-table__feature-icon_text {
          font-weight: 400;
        }

        @media all and (min-width: 0px) {
          .price-table__feature-icon_text {
            font-size: 13px;
          }
        }

        @media all and (min-width: 1200px) {
          .price-table__feature-icon_text {
            font-size: 14px;
          }
        }

        .price-table__feature-icon_checked,
        .price-table__feature-icon_none {
          width: 16px;
          height: 16px;
          margin: auto;
          background-position: 50%;
          background-size: contain;
          background-repeat: no-repeat;
        }

        .price-table__feature-icon_checked {
          background-image: url("data:image/svg+xml,%3Csvg width='17' height='14' viewBox='0 0 17 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 6.77778L6.1029 11L15 1' stroke='%2333D360' stroke-width='3'/%3E%3C/svg%3E%0A");
        }

        @media all and (min-width: 0px) {
          .price-table__row_head,
          .price-table__row_price,
          .price-table__row_buy,
          .price-table__row_order,
          .price-table__row_more {
            display: none;
          }
        }

        @media all and (min-width: 768px) {
          .price-table__row_head,
          .price-table__row_price,
          .price-table__row_buy,
          .price-table__row_order,
          .price-table__row_more {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
          }
        }

        @media all and (min-width: 768px) {
          .price-table__row_mobile-head {
            display: none;
          }
        }

        .price-table__row_mobile-head .price-table__sidebar {
          display: none;
        }

        .price-table__row_mobile-head .price-table__body,
        .price-table__row_mobile-head .price-table__item {
          -webkit-box-flex: 1;
          -ms-flex: 1 0 auto;
          flex: 1 0 auto;
        }

        .price-table__row_mobile-head .price-table__body {
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -ms-flex-direction: column;
          flex-direction: column;
        }

        .price-table__row_mobile-head .price-table__item {
          margin-bottom: 30px;
        }

        .price-table__row_mobile-head .price-table__product-title-popular {
          position: relative;
          width: 100%;
          margin-bottom: 20px;
          left: auto;
          bottom: auto;
          -webkit-transform: none;
          -ms-transform: none;
          transform: none;
        }

        .price-table__row_mobile-head .price-table__product-title-content {
          font-size: 1.5rem;
        }

        .price-table__row_mobile-head .price-table__item_popular .price-table__product-title {
          padding-top: 0;
        }

        .price-table__row_more .price-table__sidebar,
        .price-table__row_more .price-table__item {
          background-color: transparent;
          border-color: transparent;
        }

        .paragraph-footer {
          font-size: 14px;
          text-align: center;
        }

        /* Hide Second Table*/
        .hide {
          display: none;
        }

        .top-screen__content {
          margin-bottom: 120px;
        }

        .top-screen__image img {
          max-height: 497px;
        }

        @media all and (max-width: 768px) {
          .top-screen__image img {
            padding-right: 25%;
          }
        }
      </style>

      <script type="text/javascript">
        function toggleOptions() {
          let toggle = document.getElementById("toggle-options"),
            table1 = document.getElementById("price-table-1"),
            table2 = document.getElementById("price-table-2");

          if (toggle.checked === true) {
            table1.style.display = "none";
            table2.style.display = "block";
          } else {
            table1.style.display = "block";
            table2.style.display = "none";
          }
        }

        function hideFirstTab(i) {
          let group = document.getElementById("hide-first-tab-" + i),
            arrow = document.getElementById("arrow-switch-first-tab-" + i);

          if (group.style.display === "none") {
            group.style.display = "block";
            arrow.style.transform = "rotate(0deg)"
          } else {
            group.style.display = "none";
            arrow.style.transform = "rotate(180deg)"
          }
        }

        function hideSecondTab(i) {
          let group = document.getElementById("hide-second-tab-" + i),
            arrow = document.getElementById("arrow-switch-second-tab-" + i);

          if (group.style.display === "none") {
            group.style.display = "block";
            arrow.style.transform = "rotate(0deg)"
          } else {
            group.style.display = "none";
            arrow.style.transform = "rotate(180deg)"
          }
        }
      </script>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>