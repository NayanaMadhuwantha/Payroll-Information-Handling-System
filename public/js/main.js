// JavaScript Document
/*--------------------------------------
		CUSTOM FUNCTION WRITE HERE		
--------------------------------------*/
"use strict";
jQuery(document).on('ready', function() {
	/*--------------------------------------
			MOBILE MENU						
	--------------------------------------*/
	function collapseMenu(){
		jQuery('.tg-navigation ul li.menu-item-has-children, .tg-navdashboard ul li.menu-item-has-children, .tg-navigation ul li.menu-item-has-mega-menu').prepend('<span class="tg-dropdowarrow"><i class="fa fa-angle-down"></i></span>');
		jQuery('.tg-navigation ul li.menu-item-has-children span, .tg-navdashboard ul li.menu-item-has-children span, .tg-navigation ul li.menu-item-has-mega-menu span').on('click', function() {
			jQuery(this).parent('li').toggleClass('tg-open');
			jQuery(this).next().next().slideToggle(300);
		});
	}
	collapseMenu();
	/*--------------------------------------
			POST SLIDER						
	--------------------------------------*/
	if(jQuery('#tg-categoriesslider').length > 0){
		var _tg_postsslider = jQuery('#tg-categoriesslider');
		_tg_postsslider.owlCarousel({
			items : 5,
			nav: true,
			loop: true,
			dots: false,
			center: true,
			autoplay: false,
			dotsClass: 'tg-sliderdots',
			navClass: ['tg-prev', 'tg-next'],
			navContainerClass: 'tg-slidernav',
			navText: ['<span class="icon-chevron-left"></span>', '<span class="icon-chevron-right"></span>'],
			responsive:{
				0:{ items:1, center:false},
				480:{ items:2, center:false},
				568:{ items:3, center:false},
				768:{ items:5, },
			}
		});
	}
	/*--------------------------------------
			SHOW NUMBER						
	--------------------------------------*/
	var _clickelement = jQuery('.tg-btnphone');
	_clickelement.on('click', 'span', function() {
		jQuery(this).find('em').text(jQuery(this).data('last') );
	});
	
	
	/*--------------------------------------
			COUNTERS						
	--------------------------------------*/
	if(jQuery('#tg-counters').length > 0){
		var _tg_counters = jQuery('#tg-counters');
		_tg_counters.appear(function () {
			jQuery('.tg-timer').countTo()
		});
	}
	
	/*--------------------------------------
			COUNTER							
	--------------------------------------*/
	if(jQuery('.tg-statistics').length > 0){
		jQuery('.tg-statistics').appear(function () {
			jQuery('.tg-statistics > li > h3').countTo();
		});
	}
	/*--------------------------------------
			THEME COLLAPSE					
	--------------------------------------*/
	if(jQuery('#tg-narrowsearchcollapse').length > 0){
		var _openFirst = jQuery('#tg-narrowsearchcollapse');
		_openFirst.collapse({
			open: function() {this.slideDown(300);},
			close: function() {this.slideUp(300);},
		});
		_openFirst.trigger('open');
	}
	
});

/*--------------------------------------
			functions for caclulators							
	--------------------------------------*/

const digitsRE = /(\d{3})(?=\d)/g

Vue.filter('currency', function (value, currency, decimals) {
    value = parseFloat(value)
  if (!isFinite(value) || (!value && value !== 0)) return ''
  currency = currency != null ? currency : 'Rs. '
  decimals = decimals != null ? decimals : 2
  var stringified = Math.abs(value).toFixed(decimals)
  var _int = decimals
    ? stringified.slice(0, -1 - decimals)
    : stringified
  var i = _int.length % 3
  var head = i > 0
    ? (_int.slice(0, i) + (_int.length > 3 ? ',' : ''))
    : ''
  var _float = decimals
    ? stringified.slice(-1 - decimals)
    : ''
  var sign = value < 0 ? '-' : ''
  return sign + currency + head +
    _int.slice(i).replace(digitsRE, '$1,') +
    _float
  })

  function pmt (ir, np, pv, fv, type) {
    /*
     * ir   - interest rate per month
     * np   - number of periods (months)
     * pv   - present value
     * fv   - future value
     * type - when the payments are due:
     *        0: end of the period, e.g. end of month (default)
     *        1: beginning of period
     */
    var pmt, pvif;

    fv || (fv = 0);
    type || (type = 0);

    if (ir === 0)
        return -(pv + fv)/np;

    pvif = Math.pow(1 + ir, np);
    pmt = - ir * pv * (pvif + fv) / (pvif - 1);

    if (type === 1)
        pmt /= (1 + ir);

    return pmt;
}

function round(value, decimals) {
    return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);
}