<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Аккаунты - LuxGram</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="wrapper">
		<section class="main-section">
			<header class="header child-full--height">
				<div class="container child-full--height child-full--width">
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
									<div class="user flex flex-center-center nowrap">
										<div class="user__icon"><img src="assets/img/profile_ico.svg" alt=""/></div>
										<div class="user__name"><a href="#">Алексей Морсиенко</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			
			<div class="container">
				<div class="row">
					<div class="main-section-window flex flex-nowrap">
						<div class="sidebar child-full--height">
							<div class="flex flex-column flex-justi">
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
								<div class="flex flex-center">
									<button class="blue-btn question-btn">Задать вопрос</button>
								</div>
							</div>
						</div>
						<div class="content">
							<div class="content-block">
								<div class="title-block">
									<h1>INSTAGRAM АККАУНТЫ</h1>
									<a href="#" class="blue-btn btn-md add-account-btn">Добавить аккаунт</a>
								</div>
								<p>Здесь в нескольких предложениях описать положения по работе с инстаграм-аккаунтами. Здесь в нескольких предложениях описать положения по работе с инстаграм-аккаунтами. Здесь описать некие положения по работе. Смотреть <a href="#">инструкцию по работе с инстаграм-аккаунтами.</a></p>
								<div class="accounts-wrapper">
									<h2>Выберите аккаунт</h2>
									<div class="accounts-list">

										<div class="account">
											<button type="button" id="pover-card" data-toggle="popover-html" data-trigger="focus" data-placement="left" class="context-btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
											<div class="account__user flex flex-valign">
												<img src="assets/img/account_user1.png" alt=""/>
												<div class="user-name">
													<div class="nickname"><span>the_rostyslav</span><span class="badge">3</span></div>
													<div class="user-descr">Личный блог блогера</div>
												</div>
											</div>
											<div class="account__info flex flex-nowrap flex-valign">
												<div class="ai-block">
													<div class="ai-block__counts">1017</div>
													<div class="ai-block__txt">Публикаций</div>
												</div>
												<div class="ai-block">
													<div class="ai-block__counts">25318</div>
													<div class="ai-block__txt">Подписчиков</div>
												</div>
												<div class="ai-block">
													<div class="ai-block__counts">2017</div>
													<div class="ai-block__txt">Подписки</div>
												</div>
											</div>
										</div>

										<div class="account">
											<button type="button" id="pover-card" data-toggle="popover-html" data-trigger="focus" data-placement="left" class="context-btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
											<div class="account__user flex flex-valign">
												<img src="assets/img/account_user2.png" alt=""/>
												<div class="user-name">
													<div class="nickname"><span>frank_bovalev</span><span class="badge">11</span></div>
													<div class="user-descr">Личный блог блогера</div>
												</div>
											</div>
											<div class="account__info flex flex-nowrap flex-valign">
												<div class="ai-block">
													<div class="ai-block__counts">2713</div>
													<div class="ai-block__txt">Публикаций</div>
												</div>
												<div class="ai-block">
													<div class="ai-block__counts">12453</div>
													<div class="ai-block__txt">Подписчиков</div>
												</div>
												<div class="ai-block">
													<div class="ai-block__counts">117</div>
													<div class="ai-block__txt">Подписки</div>
												</div>
											</div>
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
	<div class="popover-content"> 
		<div id="popover-card">
			<div class="card text-center">
				<div class="card-header bg-warning text-white h3">
					Popover Card
				</div>
				<div class="card-body">
					<h4 class="card-title">Special title treatment</h4>
					<p class="card-text">Using data-trigger="focus" causes the popover to close when you click away. Options are hover|focus|click</p>
					<a href="#" class="btn btn-secondary">Go somewhere</a>
				</div>
				<div class="card-footer text-muted bg-warning text-right">
					<small class="text-white">
						2 days ago
					</small>
				</div>
			</div>	
		</div>
	</div>
	<footer></footer>
	
	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
</body>
</html>