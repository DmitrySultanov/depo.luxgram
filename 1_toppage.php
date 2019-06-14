<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главная - LuxGram</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="wrapper">
		<section class="main-section">
			<header class="header child-full--height">
				<div class="flex child-full--height child-full--width">
					<div class="row align-items-center no-gutters">
						<div class="col-xl6 col-lg6 col-md6 col-sm-6 col-xs-12">
							<div class="header__start flex">
								<button class="menu-btn"><img src="assets/img/menu_icon.svg" alt=""></button>
								<a href="/" class="logo">lux<span>gram</span></a>
							</div>
						</div>
						<div class="col-xl6 col-lg6 col-md6 col-sm-6 col-xs-12">
							<div class="container">
								<div class="row justify-content-end">
									<div class="user flex flex-center nowrap">
										<div class="user__icon"><img src="assets/img/profile_ico.svg" alt=""/></div>
										<div class="user__name"><a href="#">Алексей Морсиенко</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="main-section-window flex flex-nowrap">
				<div class="sidebar">
					<ul>
						<li><a href="#" class="active">Instagram аккаунты</a></li>
						<li><a href="#">Direct</a></li>
						<li><a href="#">Подписки</a></li>
						<li><a href="#">Отписки</a></li>
						<li><a href="#">Автосообщения</a></li>
						<li><a href="#">Автокомментарии</a></li>
						<li><a href="#">Автоприветсвие</a></li>
						<li><a href="#">Просмотр Stories</a></li>
					</ul>
				</div>
				<div class="content">
					<div class="content-block">
						<h1>INSTAGRAM АККАУНТЫ</h1>
						<p>Здесь в нескольких предложениях описать положения по работе с инстаграм-аккаунтами. Здесь в нескольких предложениях описать положения по работе с инстаграм-аккаунтами. Здесь описать некие положения по работе. Смотреть <a href="#">инструкцию по работе с инстаграм-аккаунтами.</a></p>
						<div class="empty-accounts">
							<div class="empty-accounts__gray flex flex-center">
								<p>У вас еще нет добавленных аккаунтов</p>
							</div>
							<a href="#" class="add-account-btn"></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<footer></footer>
	
	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
</body>
</html>