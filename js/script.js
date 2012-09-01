jQuery('ready',function() {
  window.mySwipe = new Swipe(
    jQuery('.swipe-slider .view-content .item-list')[0], {
      speed: 600,
      auto: 3000
    }
  );
});
