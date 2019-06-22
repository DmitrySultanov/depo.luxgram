<div id="verify-modal" class="mfp-hide white-popup-block verify-modal modal-sm">
	<a class="popup-modal-dismiss close-btn" href="#"></a>
	<div class="subtitle">Подтвердите аккаунт</div>
	<p>Выберите способ подтверждения</p>
	<div class="buttons flex flex-center">
		<a href="#check-account-modal" class="blue-btn narrow-btn sms-btn popup-modal">По SMS</a>
		<a href="#" class="blue-btn narrow-btn mail-btn">По Email</a>
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

<div class="popover-content"> 
	<div id="popover-card">
		<div class="account-action-buttons flex">
			<a href="#" class="action-btn send-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
			<a href="#" class="action-btn subscribe-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
			<a href="#" class="action-btn resubscribe-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
			<a href="#" class="action-btn automessage-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
			<a href="#" class="action-btn autocomment-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
			<a href="#" class="action-btn hello-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
			<a href="#" class="action-btn btn watch-stories-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
		</div>
	</div>
</div>

<iframe frameborder="0" id="post_form" name="post_form"></iframe>

<div class="pushy pushy-left">
	<a href="/" class="logo">lux<span>gram</span></a>
	<ul>
	    <li class="pushy-link active"><a href="#">Instagram аккаунты</a></li>
		<li class="pushy-link"><a href="#">Direct</a></li>
		<li class="pushy-link"><a href="#">Подписки</a></li>
		<li class="pushy-link"><a href="#">Отписки</a></li>
		<li class="pushy-link"><a href="#">Автосообщения</a></li>
		<li class="pushy-link"><a href="#">Автокомментарии</a></li>
		<li class="pushy-link"><a href="#">Автоприветсвие</a></li>
		<li class="pushy-link"><a href="#">Просмотр Stories</a></li>
	</ul>
</div>
<div class="site-overlay"></div>
