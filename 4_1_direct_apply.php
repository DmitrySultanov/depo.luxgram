<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Директ подтвердить - LuxGram</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="wrapper">
		<section class="main-section">
			<? include('inc/header.php'); ?>
			
			<div class="main-section-window flex flex-nowrap">
				<? include('inc/sidebar.php'); ?>
				
				<div class="content gray--background">

					<div class="content-top-sector pb box-shadow">
						<div class="in-container">
							<div class="title-block">
								<h1>Директ</h1>
							</div>
							<p>Система будет подписываться на пользователей по заданным настройкам. Система будет подписываться на пользователей по заданным настройкам. Система будет подписываться на пользователей по заданным настройкам.</p>
						</div>	
					</div>

					<div class="accounts-wrapper">
						<div class="in-container">

							<div class="flex flex-justi flex-valign">
								<h2>Список бесед</h2>
							</div>

							<div class="chats-wrapper">
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-12">

										<div class="chats-list">
											<div class="account__user-wrap flex flex-nowrap flex-align flex-justi">
												<div class="account__user flex-align flex flex-nowrap">
													<img src="assets/img/account_user1.png" alt="">
													<div class="user-name">
														<div class="nickname"><span>the_rostyslav</span></div>
														<div class="user-descr">Личный блог блогера</div>
														<a href="#" class="requests">2 запроса</a>
													</div>
												</div>
												<div class="account-manage-button bordered">
													<button class="manage-button down-circle-btn" data-trigger="focus" data-template='<div class="popover direct-popover" role="tooltip"><div class="arrow"></div><div class="popover-body"></div></div>' id="direct-card" data-toggle="popover-html" data-placement="bottom"></button>
													<span class="badge">2</span>
												</div>
											</div>
											<ul class="interlocutors-list">
												<li class="flex flex-align">
													<a href="#"></a>
													<img src="assets/img/account_user2.png" alt=""/>
													<div class="user-info">
														<div class="user-info__name">frank_bovalev</div>
														<div class="user-info__activity"><p>Последнее действие <span>2</span> ч. назад</p></div>
													</div>
												</li>
												<li class="flex flex-align active">
													<a href="#"></a>
													<img src="assets/img/account_user3.png" alt=""/>
													<div class="user-info">
														<div class="user-info__name">Irina_furya</div>
														<div class="user-info__activity"><p>Последнее действие <span>2</span> ч. назад</p></div>
													</div>
												</li>
											</ul>
											<div class="buttons-wrap flex flex-center">
												<a href="#" class="bordered-btn"><i class="fa fa-angle-left"></i> Вернуться назад</a>
											</div>
										</div>

									</div>
									<div class="col-xl-6 col-lg-6 col-md-12">

										<div class="broadcast align-bottom">
											<ul class="js-broadcast-messages-inbox">
												<li class="in-mess">
													<div class="mess-ico">
														<img src="assets/img/account_user3.png" alt=""/>
													</div>
													<div class="mess-body">
														<div class="user-name">Irina_furya</div>
														<div class="mess-txt">Привет! Как дела?</div>
													</div>
													<div class="mess-time">12:00</div>
												</li>
												<li class="confirm-broadcast-box-wrap pnone">
													<div class="confirm-broadcast-box">
														<button class="blue-btn confirm-btn">Подтвердить</button>
														<button class="cancel-btn"><i class="fa fa-times"></i> Отменить</button>
													</div>
												</li>
											</ul>

											<div class="broadcast-box">
												<form action="">
													<div class="input-box">
														<input type="text" placeholder="Отправить сообщение...">
														<a href="#" class="add-pic-btn"></a>
														<a href="#" class="add-smile-btn"></a>
													</div>
													<button type="submit"></button>
												</form>
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
	
	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
	
</body>
</html>