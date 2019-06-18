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

	$(function () {
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
		})
	});

  	$(function (){
  		$('.js-account-overlay').on('click', function (e){
  			e.preventDefault();

  			$(this).parent().toggleClass('active');
  		});
  	});

  	function calcTariff (){
  		var basePrice = 500;
  		var	sale = 100;

		$(".js-range-slider").ionRangeSlider({
			min: 1,
	        max: 12,
	        grid: true,
	        step: 1,
	        grid_num: 6,
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


  	$(function (){
  		$('#stepper').slider({
  			min: 1,
  			max: 6,
  			step: 1
  		});
  	});
});