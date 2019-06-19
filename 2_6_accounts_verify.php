<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верификация аккаунта - LuxGram</title>
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
								<a href="#" class="blue-btn btn-md add-account-btn">Добавить аккаунт</a>
							</div>
							<p>Здесь в нескольких предложениях описать положения по работе с инстаграм-аккаунтами. Здесь описать некие положения по работе. Смотреть <a href="#">инструкцию по работе с инстаграм-аккаунтами.</a></p>
						</div>	

						<div class="accounts-wrapper">
							<h2>Выберите аккаунт</h2>

							<div class="accounts-list">

								<div class="account account-no-hover">
									<button class="close-btn"></button>

									<div class="account__user flex flex-nowrap flex-valign">
										<img src="assets/img/user_default_ico.png" alt=""/>
										<div class="user-name">
											<div class="nickname"><span>frank_bovalev</span></div>
											<div class="user-descr">Личный блог блогера</div>
											<button type="button" class="verify-btn js-verify-btn popup-modal" href="#verify-modal">Подтвердите аккаунт</button>
										</div>
									</div>
									<div class="account__info flex flex-nowrap flex-valign">
										<div class="ai-block">
											<div class="ai-block__counts">-</div>
											<div class="ai-block__txt">Публикаций</div>
										</div>
										<div class="ai-block">
											<div class="ai-block__counts">-</div>
											<div class="ai-block__txt">Подписчиков</div>
										</div>
										<div class="ai-block">
											<div class="ai-block__counts">-</div>
											<div class="ai-block__txt">Подписки</div>
										</div>
									</div>

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