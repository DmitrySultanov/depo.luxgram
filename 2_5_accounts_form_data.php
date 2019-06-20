<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Данные аккаунта - LuxGram</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="wrapper">
		<section class="main-section">
			<? include('inc/header.php'); ?>
			
			<div class="main-section-window flex flex-nowrap">
				<? include('inc/sidebar.php'); ?>

				<div class="content">
					<div class="in-container">
						<div class="content-top-sector">
							<div class="title-block">
								<h1>INSTAGRAM АККАУНТЫ</h1>
							</div>
							<p>Здесь в нескольких предложениях описать положения по работе с инстаграм-аккаунтами. Здесь описать некие положения по работе. Смотреть <a href="#">инструкцию по работе с инстаграм-аккаунтами.</a></p>
						</div>

						<div class="gray-container">
							<div class="gray-container__inner flex flex-center-center">
								<div class="form-data">
									<h2>Введите данные аккаунта</h2>
									<form action="" target="post_form" class="form-validate">
										<div class="element">
											<input type="text" name="login" placeholder="Логин" class="required" data-msg-required="Введите логин">
										</div>
										<div class="element">
											<input type="text" id="password" name="password" class="required" placeholder="Пароль">
										</div>
										<div class="proxy-wrap">
											<a href="#" class="proxy-link js-proxy-link"><i class="fa fa-caret-right" aria-hidden="true"></i><span>Использовать свои прокси (IPv4)</span></a>
											<i class="fa fa-question-circle" data-toggle="tooltip" title="Здесь небольшой текст с описанием использваония своего прокси. Здесь небольшой текст с описанием использваония своего прокси."></i>
										</div>

										<div class="proxy-block-hidden js-proxy-hidden">
											<div class="flex flex-nowrap flex-cols">
												<div class="element">
													<input type="text" name="ip" placeholder="IP" class="required" data-msg-required="Введите IP">
												</div>
												<div class="element">
													<input type="text" name="port" placeholder="Порт" class="required" data-msg-required="Введите порт">
												</div>
											</div>
											<div class="element">
												<input type="text" name="proxy_login" placeholder="Логин" class="required" data-msg-required="Введите логин">
											</div>
											<div class="element">
												<input type="text" id="proxy_password" name="proxy_password" class="required" placeholder="Пароль">
											</div>
										</div>

										<button type="submit" class="blue-btn btn-md add-account-btn">Добавить аккаунт</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	
	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
</body>
</html>