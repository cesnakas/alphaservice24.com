// jQuery
// noinspection JSAnnotator

$(document).ready(function () {
  $("form[name=request-consultation]").on('submit', function (e) {
    e.preventDefault();

    var form = this;
    postData = {
      'sessid': BX.bitrix_sessid(),
      'site_id': BX.message('SITE_ID'),
      'props': $(this).serialize(),
      'event': 'contactform',
    };

    BX.ajax({
      url: '/ajax/index.php',
      method: 'POST',
      data: postData,
      onsuccess: function (data) {
        $(form)[0].reset();
        $('.js-popup').removeClass('popup-active');
        $('.js-blackout-campaign').addClass('popup-active');
      },
    });
  });

  $("form[name=buy-license]").on('submit', function (e) {
    e.preventDefault();

    var form = this;
    postData = {
      'sessid': BX.bitrix_sessid(),
      'site_id': BX.message('SITE_ID'),
      'props': $(this).serialize(),
      'event': 'buyLicense',
    };

    BX.ajax({
      url: '/ajax/index.php',
      method: 'POST',
      data: postData,
      onsuccess: function (data) {
        $(form)[0].reset();
        $('.js-popup').removeClass('popup-active');
        $('.js-blackout-campaign').addClass('popup-active');
      },
    });
  });

  $("form[name=buy-license-bus]").on('submit', function (e) {
    e.preventDefault();

    var form = this;
    postData = {
      'sessid': BX.bitrix_sessid(),
      'site_id': BX.message('SITE_ID'),
      'props': $(this).serialize(),
      'event': 'buyLicense',
    };

    BX.ajax({
      url: '/ajax/index.php',
      method: 'POST',
      data: postData,
      onsuccess: function (data) {
        $(form)[0].reset();
        $('.js-popup').removeClass('popup-active');
        $('.js-blackout-campaign').addClass('popup-active');
      },
    });
  });

  $('.thanks .pop-up__btn').click(() => {
    $('.js-blackout-campaign').removeClass('popup-active');
  });

  // Slider
  let $slider = $('.top-slider__list');

  $slider.on('init reInit afterChange', function (event, slick, currentSlide) {
    let i = (currentSlide ? currentSlide : 0) + 1;

    // Get Slide Counts
    $(this).attr('style',
      '--slick-count: "0' + i + '";'
      + '--slick-length: "0' + slick.slideCount + '"'
    );
  });

  $slider.slick({
    dots: true
  });
});

// Javascript
BX.ready(() => {
  // Close Pop-up
  let popupElement = document.querySelectorAll('.js-popup'),
    btnClose = document.querySelectorAll('.js-popup .close-popup'),
    popupContent = document.querySelectorAll('.js-popup .popup-content');

  Array.from(popupElement).forEach((item, indexItem) => {
    Array.from(btnClose).forEach((itemBtn) => {
      itemBtn.addEventListener('click', () => {
          if (item.classList.contains('popup-active') === true) {
            item.classList.remove('popup-active');
          }
        }
      );
    });

    Array.from(popupContent).forEach((itemContent, indexContent) => {
      item.addEventListener('click', (event) => {
          let target = event.target;

          if (target === itemContent || itemContent.contains(target)) {
            return;
          } else if (indexItem === indexContent) {
            item.classList.remove('popup-active');
          }
        }
      );
    });
  });

  // Search
  const mainContent = document.querySelector('main');

  let searchForm = document.querySelector('.topbar-search');

  if (searchForm !== null) {
    let searchBtn = searchForm.querySelector('button');

    searchBtn.addEventListener('click', () => {
      if (searchForm.classList.contains('active-search') !== true) {
        searchForm.disabled = true;
        searchForm.classList.add('active-search');
        event.preventDefault();
      } else {
        searchForm.disabled = false;
        searchForm.classList.remove('active-search');
      }
    });

    mainContent.addEventListener('click', () => {
      if (searchForm.classList.contains('active-search') === true) {
        searchForm.disabled = false;
        searchForm.classList.remove('active-search');
      }
    });
  }

  // Menu Scroll Fixed
  let menu_wrap_center = document.querySelector('.menu-wrap-center'),
    menu_bg = document.querySelector('.menu-bg'),
    menu_wrap = document.querySelector('.menu-wrap');

  window.addEventListener('scroll', () => {
    let offsetTop = document.documentElement.scrollTop,
      offsetWidth = document.documentElement.offsetWidth,
      offsetTopBar = document.querySelector('.topbar'),
      offsetAdminPanel = document.querySelector('.bx-panel-folded'),
      idMenu = document.getElementById('mob-menu'),
      offsetAdminPanelHeight = 0;

    if (offsetAdminPanel !== null) {
      offsetAdminPanelHeight = offsetAdminPanel.offsetHeight;
    }

    if (offsetTopBar !== null) {
      let offsetTopBarHeight = offsetTopBar.offsetHeight;

      if (offsetTop > (offsetTopBarHeight + offsetAdminPanelHeight)) {
        menu_wrap_center.style.display = 'flex';
        menu_wrap_center.style.justifyContent = 'center';
        menu_bg.style.position = 'fixed';
        menu_bg.style.top = '0';
        menu_bg.style.height = '50px';
        menu_wrap.style.position = 'fixed';

        if (offsetWidth <= 992) {
          menu_wrap.style.top = '42px';
        } else {
          menu_wrap.style.top = '50px';
        }

        // Remove Break - on
        document.body.style.paddingTop = `${offsetTopBarHeight + offsetAdminPanelHeight}px`;
        offsetTopBar.style.opacity = '0';

        // Fix Mobile Menu
        idMenu.style.marginTop = `-${offsetTopBarHeight + offsetAdminPanelHeight * 2}px`;
      } else {
        menu_wrap_center.style.display = 'block';
        menu_bg.style.position = 'relative';
        menu_bg.style.top = 'auto';
        menu_bg.style.height = '42px';
        menu_wrap.style.position = 'relative';
        menu_wrap.style.top = 'auto';

        document.body.style.paddingTop = '0';
        offsetTopBar.style.opacity = '1';

        // Fix Mobile Menu
        idMenu.style.marginTop = '0px';
      }
    }
  });

  // Search
  let pageSearchInput = document.getElementById('pageSearchInput'),
    pageSearchResult = document.querySelector('.search-count-result'),
    searchValue = getUrlParameter('search');

  if (pageSearchInput !== null) {
    window.addEventListener('load', () => {
      if (searchValue !== null && searchValue !== false) {
        pageSearchInput.value = searchValue;
      }

      if (pageSearchInput.value === '' || pageSearchInput === true) {
        pageSearchResult.innerHTML = '';
      }
    });

    pageSearchInput.oninput = () => {
      if (pageSearchInput.value === '' || pageSearchInput === true) {
        pageSearchResult.innerHTML = '';
      }
    }
  }

  // Cookies Popup
  let cookiesPopup = document.querySelector('.cookies-popup'),
    cookiesBtn = cookiesPopup.querySelector('.btn');

  window.addEventListener('load', () => {
    setTimeout(() => {
      if (localStorage.getItem('alphacookies') !== 'true') {
        cookiesPopup.classList.add('cookies-popup-show');
      }
    }, 600);
  });

  cookiesBtn.addEventListener('click', () => {
    if (localStorage.getItem('alphacookies') !== 'true') {
      localStorage.setItem('alphacookies', 'true');
      cookiesPopup.classList.remove('cookies-popup-show');
    }
  });

  // Page Up Button
  let btnUp = document.querySelector('.btn-page-up');

  window.addEventListener('scroll', () => {
    let webkitOffset = document.body.scrollTop,
      browserOffset = document.documentElement.scrollTop;

    if (webkitOffset > 60 || browserOffset > 60) {
      btnUp.style.visibility = 'visible';
      btnUp.style.opacity = '1';
    } else {
      btnUp.style.visibility = 'hidden';
      btnUp.style.opacity = '0';
    }
  });

  btnUp.addEventListener('click', () => {
    window.scrollTo({top: 0, behavior: 'smooth'});
  });

  // Mobile Sub Menu
  let toggleMenuMb = () => {
    let subMenuMb = document.querySelectorAll('.js-menu-sub-mb');

    if (subMenuMb !== null) {
      subMenuMb.forEach((item, index) => {
        let submenuItemMb = item.querySelector('.menu-sub-items');

        item.addEventListener('click', () => {
          if (submenuItemMb.style.maxHeight !== '100%') {
            submenuItemMb.style.maxHeight = '100%';
            submenuItemMb.style.opacity = '1';
          } else {
            submenuItemMb.style.maxHeight = '0';
            submenuItemMb.style.opacity = '0';
          }
        });
      });
    }
  };

  toggleMenuMb();
});


//  Pop-up
// Request (button): onclick="togglePopup('.name-class')"
// Pop-up element: <div class="js-popup name-class">...<div class="popup-content">...
let togglePopup = (n) => {
  let namePopup = document.querySelector(n);

  if (namePopup.classList.contains('popup-active') === false) {
    namePopup.classList.add('popup-active');
  } else {
    namePopup.classList.remove('popup-active');
  }

  // Prevent to Start Position Page
  event.preventDefault();
};


// Menu
let toggleMenu = () => {
  let idMenu = document.getElementById('mob-menu'),
    idMenuBtn = document.getElementById('mob-menu-btn');

  if (idMenu.style.maxWidth !== '100%') {
    idMenu.style.maxWidth = '100%';
    idMenu.style.opacity = '1';
    idMenu.style.overflow = 'auto';
    idMenuBtn.style.display = 'block';
  } else {
    idMenu.style.maxWidth = '0';
    idMenu.style.opacity = '0';
    idMenu.style.overflow = 'hidden';
    idMenuBtn.style.display = 'none';
  }
};

// Get Jquery Variables from URL 'getUrlParameter('variable')'
let getUrlParameter = function getUrlParameter(sParam) {
  let sPageURL = window.location.search.substring(1),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split('=');

    if (sParameterName[0] === sParam) {
      return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
    }
  }
  return false;
};

jQuery.event.special.touchstart = {
  setup: function (_, ns, handle) {
    this.addEventListener("touchstart", handle, {passive: !ns.includes("noPreventDefault")});
  }
};
jQuery.event.special.touchmove = {
  setup: function (_, ns, handle) {
    this.addEventListener("touchmove", handle, {passive: !ns.includes("noPreventDefault")});
  }
};
jQuery.event.special.wheel = {
  setup: function (_, ns, handle) {
    this.addEventListener("wheel", handle, {passive: true});
  }
};
jQuery.event.special.mousewheel = {
  setup: function (_, ns, handle) {
    this.addEventListener("mousewheel", handle, {passive: true});
  }
};