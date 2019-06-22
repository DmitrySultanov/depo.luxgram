$(document).ready(function(){

  	$('input.phone').inputmask({
	    mask: "+79999999999",
	    showMaskOnHover: false
	});

	$('input.phone').on('blur', function(){
	    if($(this).hasClass('error') && $(this).val().indexOf('_') != -1 || $(this).hasClass('valid')){
	      $(this).parent().addClass('is-dirty');
	    } else{
	      $(this).parent().removeClass('is-dirty');
	    }
	});

  	$('[data-toggle="tooltip"]').tooltip();

  	$('[data-toggle="popover-html"]').popover({
	    container: 'body',
	    html: true,
		content: function() {
		    var id = $(this).attr('id');
		    return $('#po' + id).html();
		}
  	});

  	$('[data-toggle="popover-html"]').on('inserted.bs.popover', function () {
	  $('[data-toggle="tooltip"]').tooltip();
	});

	$('.js-account-overlay').on('click', function (e){
		e.preventDefault();
		$(this).parent().toggleClass('active');
	});

	$('.account .nickname').dotdotdot({
		height: 60,
	});

	$('.account .user-descr').dotdotdot({
		height: 40,
	});

  	function calcTariff (){
  		var basePrice = 500;
  		var	sale = 100;

		$(".js-range-slider").ionRangeSlider({
			min: 1,
	        max: 12,
	        grid: true,
	        step: 1,
	        grid_num: 2,
		}).on("change", function () {
	        var $inp = $(this);
	        var month = $inp.prop("value");
	    	calcTariffPrice (month);
	    });
	    

  		function calcTariffPrice (month){
  			$('.js-choose-tariff .js-monthCount span').text(month);
  		}
  	};
  	calcTariff();


	// $('#stepper').slider({
	// 	min: 1,
	// 	max: 5,
	// 	range: "min",
	// 	step: 1,
	// 	create: function( event, ui ) {
	// 		var q = $('#stepper').slider('value');
	//       	stepperStartFunc(q);
	//     },
	// 	slide: function( event, ui ) {
	//       	stepperFunc(ui);
	//     },
	// });

	// function stepperStartFunc (q){
	// 	var steps = $('.js-stepper-grid > span');

	// 	steps.removeClass('selected');
	// 	for(var i= 0; i < q; i++) {
	// 		$(steps[i]).addClass('selected');
	// 	}
	// }
	// function stepperFunc (ui, q){
	// 	var steps = $('.js-stepper-grid > span');

	// 	console.log(q)

	// 	steps.removeClass('selected');
	// 	for(var i= 0; i < ui.value; i++) {
	// 		$(steps[i]).addClass('selected');
	// 	}
	// }

	$('#password + .fa').on('click', function() {
	   $(this).toggleClass('fa-eye').toggleClass('fa-eye-slash'); 
	   $('#password').togglePassword(); 
	});

	$('.js-proxy-link').on('click', function() {
		$(this).toggleClass('active');
		$('.js-proxy-hidden').slideToggle();

		return false
	});

	$('.popup-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});

	$('input.onlyNumber').keypress(function(e) {
	    e = e || event;
	    if (e.ctrlKey || e.altKey || e.metaKey) return;
	    var chr = getChar(e);
	    if (chr == null) return;
	    if (chr < '0' || chr > '9') {
	      return false;
	    }
	});
	function getChar(event) {
	    if (event.which == null) {
	      if (event.keyCode < 32) return null;
	      return String.fromCharCode(event.keyCode) // IE
	    }

	    if (event.which != 0 && event.charCode != 0) {
	      if (event.which < 32) return null;
	      return String.fromCharCode(event.which) // остальные
	    }
	    return null; // специальная клавиша
	}

	$('.select-single').select2({
	    minimumResultsForSearch: -1,
	});
	$('.select-single').on('select2:select', function (e) {
	    console.log(e.target.selectedIndex) //индекс выбранного
	    $(this).select2("close");
	});
});