$(document).ready(function(){

	$.validator.addMethod('phoneCheck', function(value, element, params){
	var length = $(element).inputmask('unmaskedvalue').length;
	return (length < 10 && length > 0) ? false : true;
	}, 'Введите полный номер');

	$.validator.addMethod("email", function(value, element) {
	  return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
	}, 'Введите корректную почту');

	jQuery.validator.setDefaults({
		errorLabelContainer: '<div>',
		highlight: function(element, errorClass, validClass){

			if(element.type === 'radio'){
				this.findByName(element.name)
				.addClass(errorClass)
				.removeClass(validClass);
			}

			else{
				$(element)
				.addClass(errorClass)
				.removeClass(validClass);
			}

			var elements = $(element).closest(['.element', '.input']);

			$.map(elements, function(element){
				$(element.elem).addClass(errorClass)
				.removeClass(validClass);
			});
		},

		unhighlight: function(element, errorClass, validClass){
			if (element.type === 'radio'){
				this.findByName(element.name)
				.removeClass(errorClass)
				.addClass(validClass);
			}

			else{
				$(element)
				.removeClass(errorClass)
				.addClass(validClass);
			}

			var elements = $(element).closest(['.element', '.input']);

			$.map(elements, function(element){
				$(element.elem).addClass(validClass)
				.removeClass(errorClass);
			});
		},

		invalidHandler: function(event, validator){
			$.map(validator.errorList, function(item){
				var $element = $(item.element);
				var placeholder = $element.attr('placeholder');

				$element.attr('placeholder', item.message);

				$element.one('focus', function(){
					$element.attr('placeholder', placeholder);
				});
			});
		}
	});

	// Валидация
	$('.form form').each(function(){
		var $this = $(this);
        var $thanks =  $this.parent().siblings('.thanks');

		// Валидация формы
		$this.validate({
			rules: {
				name: {
					required: true,
					minlength: 3
				},
				search: {
					required: true,
					minlength: 3
				},
				password: {
					required: true,
					minlength: 4
				},
				confirm_password: {
					required: true,
					minlength: 4,
					equalTo: "#password"
				},
			},
			messages: {
				name: {
					minlength: "Введите имя полностью"
				},
				password: {
					required: "Пожалуйста введите пароль",
					minlength: "Придумайте пароль длиннее 5 символов"
				},
				confirm_password: {
					required: "Пожалуйста повторите пароль",
					minlength: "Пароль не может содержать менее 5 символов",
					equalTo: "Введенные пароли не совпадают"
				},
			}
		});
				
		$.validator.addClassRules({
		  	phone: {
		    	required: true,
		    	phoneCheck: true
		  	}
		});

		$.validator.addClassRules({
		  	laxEmail: {
		    	required: true,
		  	}
		});

		$this.submit(function(){

			if($this.valid()){
				$this.parent('.form').hide();
				// // $thanks.css('display' ,'block');
				$('.overlay').fadeIn();
				$thanks.fadeIn();

				$('.close, .overlay, .ok').click(function(){
					$('.overlay').fadeOut();
					$('.thanks').fadeOut();
				});
			}
		});
	});
});




