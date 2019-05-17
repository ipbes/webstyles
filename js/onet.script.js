jQuery(function() {
  var loc = window.location.href; // returns the full URL
  if(/submit\/open-ended-stakeholder-network/.test(loc)) {
    jQuery('.tab-row .tab-col-one a').addClass('is-active');
    jQuery('.tab-row .tab-col-two a').remove('is-active');
  }
  if(/submit\/organization-signup/.test(loc)) {
    jQuery('.tab-row .tab-col-two a').addClass('is-active');
    jQuery('.tab-row .tab-col-one a').remove('is-active');
  }
});

jQuery(function() {
  var loc = window.location.href; // returns the full URL
  if(/onet\/organisation-members/.test(loc)) {
    jQuery('.menu.nav .menu-link-members a').addClass('active');
  }
  if(/onet\/organisation-members/.test(loc)) {
    jQuery('.menu.nav .menu-link-members a').addClass('active');
  }
});

jQuery(function() {
    var header = jQuery(".header-main");
    jQuery(window).scroll(function() {    
        var scroll = jQuery(window).scrollTop();
    
        if (scroll >= 5) {
            header.addClass("header-alt");
        } else {
            header.removeClass("header-alt");
        }
    });
});