<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Логин - LuxGram</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="wrapper">
		<section class="login-system">
			<header class="header child-full--height">
				<div class="container child-full--height child-full--width">
					<div class="row align-items-center no-gutters">
						<div class="col-xl6 col-lg6 col-md6 col-sm-6 col-xs-12">
							<div class="header__start flex">
								<a href="/" class="logo">lux<span>gram</span></a>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="login-container flex flex-center">
				<div class="login-form">
					<h1>ВХОД В ЛИЧНЫЙ КАБИНЕТ</h1>
					<form action="" target="post_form" class="form-validate">
						<fieldset>
							<div class="element mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input type="text" autocomplete="off" name="E-mail" class="required email mdl-textfield__input" data-msg-required="Заполните поле">
								<label class="mdl-textfield__label" for="E-mail">E-mail</label>
							</div>
							<div class="flex flex-nowrap flex-valign flex-justi">
								<div class="password-elem element mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input type="password" id="password" name="password" class="required mdl-textfield__input" data-msg-required="Заполните поле">
									<i class="fa fa-eye-slash"></i>
									<label class="mdl-textfield__label" for="password">Пароль</label>
								</div>
								<a href="#" class="forgot-password">Забыли пароль?</a>
							</div>
						</fieldset>
						<input type="hidden" name="hidden" value="Форма luxgram">
						<div class="buttons flex flex-justi">
							<button type="submit" class="blue-btn btn-md add-account-btn">Войти в кабинет</button>
							<div>
								<a href="#" class="fb"></a>
								<a href="#" class="vk"></a>
							</div>
						</div>
					</form>
					<p>Вы еще не зарегистрировались? <a href="#" class="reg-link">Регистрация</a></p>
				</div>
			</div>
		</section>
	</div>
	
	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
</body>
</html>