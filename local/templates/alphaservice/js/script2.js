(function (window)
{
  console.log(BX.findChild(item, { className: "js-button-campaign" }, false, false));

  
  // $(".js-button-campaign").click(function () {
  //   $(".custom-modal").toggleClass("custom-modal-active"), $("body").toggleClass("overflow-hidden")
  // })
  // $("form[name=request-consultation]").on('submit', function (e) {
  //   e.preventDefault();
  //
  //   var form = this;
  //   postData = {
  //     'sessid': BX.bitrix_sessid(),
  //     'site_id': BX.message('SITE_ID'),
  //     'props': $(this).serialize(),
  //     'event':'contactform',
  //   };
  //
  //   BX.ajax({
  //     url: '/ajax/index.php',
  //     method: 'POST',
  //     data: postData,
  //     onsuccess: function (data) {
  //       $(form)[0].reset();
  //       $('body').toggleClass('overflow-hidden');
  //       $('.js-blackout-campaign').fadeIn();
  //     },
  //   });
  // });
  //
  // $("form[name=buy-license]").on('submit', function (e) {
  //   e.preventDefault();
  //
  //   var form = this;
  //   postData = {
  //     'sessid': BX.bitrix_sessid(),
  //     'site_id': BX.message('SITE_ID'),
  //     'props': $(this).serialize(),
  //     'event':'buyLicense',
  //   };
  //
  //   BX.ajax({
  //     url: '/ajax/index.php',
  //     method: 'POST',
  //     data: postData,
  //     onsuccess: function (data) {
  //       $(form)[0].reset();
  //       $('.custom-order-self-hosted').toggleClass('custom-order-active');
  //       $('.js-blackout-campaign').fadeIn();
  //     },
  //   });
  // });
})(window);;