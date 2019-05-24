jQuery(function(){var e=window.location.href;/submit\/open-ended-stakeholder-network/.test(e)&&(jQuery(".tab-row .tab-col-one a").addClass("is-active"),jQuery(".tab-row .tab-col-two a").remove("is-active")),/submit\/organization-signup/.test(e)&&(jQuery(".tab-row .tab-col-two a").addClass("is-active"),jQuery(".tab-row .tab-col-one a").remove("is-active"))}),jQuery(function(){var e=window.location.href;/onet\/organisation-members/.test(e)&&jQuery(".menu.nav .menu-link-members a").addClass("active"),/onet\/organisation-members/.test(e)&&jQuery(".menu.nav .menu-link-members a").addClass("active")}),jQuery(function(){var e=jQuery(".header-main");jQuery(window).scroll(function(){jQuery(window).scrollTop()>=5?e.addClass("header-alt"):e.removeClass("header-alt")})});

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