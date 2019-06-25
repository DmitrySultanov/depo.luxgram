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

<div id="edit-account-modal" class="mfp-hide white-popup-block edit-account-modal modal-sm">
	<a class="popup-modal-dismiss close-btn" href="#"></a>
	<div class="subtitle">Редактирование аккаунта</div>
	<form action="" target="post_form" class="form-validate">
		<div class="flex flex-align edit-form-wrapper">
			<div class="image-box leftside">
				<img src="../assets/img/account_user1.png" alt=""/>
				<div>
					<a href="#">Изменить фото</a>
				</div>
			</div>
			<div class="edit-form-box rightside">
				<fieldset>
					<div class="element mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input type="text" autocomplete="off" name="name" class="required mdl-textfield__input" data-msg-required="Заполните поле">
						<label class="mdl-textfield__label" for="name">Имя</label>
					</div>
					<div class="element mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input type="text" name="user_name" class="required mdl-textfield__input" data-msg-required="Заполните поле">
						<label class="mdl-textfield__label" for="user_name">Имя пользователя</label>
					</div>
					<div class="element mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input type="text" name="site" class="required mdl-textfield__input" data-msg-required="Заполните поле">
						<label class="mdl-textfield__label" for="site">Сайт</label>
					</div>
					<div class="element mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input type="text" name="about" class="required mdl-textfield__input" data-msg-required="Заполните поле">
						<label class="mdl-textfield__label" for="about">О себе</label>
					</div>
					<div class="switchbox flex flex-justi flex-align">
						<span>Закрытый профиль</span>
						<div class="tumbler">
							<span class="toggle-bg">
							    <input type="radio" name="closed_profile" checked="" value="off">
							    <input type="radio" name="closed_profile" value="on">
							    <span class="switch"></span>
							    <span class="tumbler-bg"></span>
							</span>
						</div>
					</div>
				</fieldset>
				<input type="hidden" name="hidden" value="edit luxgram">
			</div>
		</div>
		<div class="buttons flex flex-align">
			<div class="leftside"></div>
			<div class="rightside">
				<button type="submit" class="blue-btn confirm-btn">Изменить</button>
				<a href="#">Отменить <i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</form>
</div>

<div class="popover-content"> 
	<div id="box-popover-card">
		<div class="account-action-buttons flex flex-align">
			<a href="#edit-account-modal" class="action-btn redact-btn js-redact-btn popup-modal"></a>
			<a href="#" class="action-btn refresh-btn"></a>
			<a href="#" class="action-btn delete-btn"></a>
		</div>
	</div>
</div>

<div class="popover-content"> 
	<div id="box-direct-card">
		<ul class="choose-account-list">
			<li>
				<a href="#"></a>
				<img src="assets/img/account_user1.png" alt=""/>
				<div class="account-name">frank_bovalev</div>
			</li>
			<li>
				<a href="#"></a>
				<img src="assets/img/account_user2.png" alt=""/>
				<div class="account-name">Irina_furya</div>
				<span class="badge">2</span>
			</li>
			<li>
				<a href="#"></a>
				<img src="assets/img/account_user3.png" alt=""/>
				<div class="account-name">the_rostislav</div>
				<span class="badge">3</span>
			</li>
		</ul>
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
