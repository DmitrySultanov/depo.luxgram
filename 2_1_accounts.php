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

								<div class="account">
									<a href="#" class="js-account-overlay"></a>
									<button type="button" id="pover-card" data-toggle="popover-html" data-trigger="focus" data-placement="left" class="context-btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>

									<div class="account__user flex flex-nowrap flex-valign">
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

									<div class="account-action-buttons flex">
										<a href="#" class="action-btn btn send-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn subscribe-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn resubscribe-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn automessage-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn autocomment-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn hello-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn watch-stories-btn" data-toggle="tooltip" data-title="title"></a>
									</div>
								</div>

								<div class="account js-account">
									<a href="#" class="js-account-overlay"></a>
									<button type="button" id="pover-card" data-toggle="popover-html" data-trigger="focus" data-placement="left" class="context-btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>

									<div class="account__user flex flex-nowrap flex-valign">
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
									<div class="account-action-buttons flex">
										<a href="#" class="action-btn btn send-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn subscribe-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn resubscribe-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn automessage-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn autocomment-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn hello-btn" data-toggle="tooltip" data-title="title"></a>
										<a href="#" class="action-btn btn watch-stories-btn" data-toggle="tooltip" data-title="title"></a>
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