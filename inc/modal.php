<div id="verify-modal" class="mfp-hide white-popup-block verify-modal modal-sm">
	<a class="popup-modal-dismiss close-btn" href="#"></a>
	<div class="subtitle">Подтвердите аккаунт</div>
	<p>Выберите способ подтверждения</p>
	<div class="buttons flex flex-center">
		<a href="#check-account-modal" class="blue-btn sms-btn popup-modal">По SMS</a>
		<a href="#" class="blue-btn mail-btn">По Email</a>
	</div>	
</div>

<div id="check-account-modal" class="mfp-hide white-popup-block check-account-modal modal-sm">
	<a class="popup-modal-dismiss close-btn" href="#"></a>
	<div class="subtitle">Подтвердите аккаунт</div>
	<p>Вам был выслан код подтверждения.</p>
	<form action="" target="post_form" class="form-validate">
		<div class="element">
			<input type="text" name="sms_code" class="required" placeholder="Введите код" data-msg-required="Введите код">
		</div>
		<div class="buttons flex flex-valign flex-justi">
			<button type="submit" class="blue-btn confirm-btn">Подтвердить</button>
			<a href="#" class="request-again-link">Запросить заново <i class="fa fa-angle-right"></i></a>
		</div>
	</form>
</div>

<iframe frameborder="0" id="post_form" name="post_form"></iframe>

<div class="pushy pushy-left">
	<ul>
	    <li class="pushy-link"><a href="#">Instagram аккаунты</a></li>
	    <li class="pushy-link"><a href="#">Direct</a></li>
	</ul>
</div>
<div class="site-overlay"></div>
