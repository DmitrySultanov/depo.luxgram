<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>История заданий - LuxGram</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="wrapper">
		<section class="main-section">
			<? include('inc/header.php'); ?>
			
			<div class="main-section-window flex flex-nowrap">
				<? include('inc/sidebar.php'); ?>
				
				<div class="content gray--background">

					<div class="content-top-sector">
						<div class="in-container">
							<div class="title-block">
								<h1>ПОДПИСКИ</h1>
							</div>
							<p>Система будет подписываться на пользователей по заданным настройкам. Система будет подписываться на пользователей по заданным настройкам. Система будет подписываться на пользователей по заданным настройкам.</p>

							<ul class="tabs flex">
								<li><a href="#">СОЗДАТЬ ЗАДАНИЕ</a></li>
								<li class="active"><a href="#">ИСТОРИЯ ЗАДАНИЙ</a></li>
								<li><a href="#">ЛОГИ</a></li>
							</ul>
						</div>	
					</div>

					<div class="accounts-wrapper">
						<div class="in-container">

							<div class="form-settings form-checkboxes">
								<form action="">
									<div class="flex">
										<div class="leftside">
											<div class="element flex-cols flex flex-align flex-nowrap">
												<div>Выберите аккаунт:</div>
												<select name="choose_account" class="select-single" style="width: 100%">
													<option value="all">Все</option>
													<option value="all">Не все</option>
													<option value="all">Эти</option>
													<option value="all">Те</option>
												</select>
											</div>
										</div>
										<div class="rightside pl">
											<div class="element flex-cols flex flex-align">
												<div>Выберите тип:</div>
												<div>
													<label class="flex">
														<input type="radio" name="choose" checked><i></i>
														<span>По списку</span>
													</label>
												</div>
											</div>
											<div class="element flex-cols flex flex-align">
												<div></div>
												<div>
													<label class="flex">
														<input type="radio" name="choose"><i></i>
														<span>По активной аудитории конкурентов</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>

							<div class="accounts-list subs-list">

								<div class="account account-no-hover account-free">
									<form action="" target="post_form" class="form-validate">
										<div class="flex flex-nowrap">
											<div class="leftside">
												<div class="account__user flex flex-nowrap">
													<img src="assets/img/account_user1.png" alt=""/>
													<div class="user-name">
														<div class="nickname"><span>the_rostyslav</span></div>
													</div>
												</div>
											</div>
											<div class="rightside flex flex-align flex-justi">
												<div class="account-info bordered pl">
													<div class="account-info__row row-id">
														<!-- можно вместо стронг юзать <div class="row-title"> -->
														<strong>ID:</strong><span>5ce1b34d4d3e4o9d4d</span>
													</div>
													<div class="account-info__row row-start-date">
														<strong>Запущено:</strong><span>19-05-2019 23:10</span>
													</div>
													<div class="account-info__row row-mode">
														<strong>Режим:</strong><span>Агрессивный</span>
													</div>
												</div>
												<div class="account-manage-button bordered">
													<button class="manage-button pause-btn"></button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="account account-no-hover account-free">
									<form action="" target="post_form" class="form-validate">
										<div class="flex flex-nowrap">
											<div class="leftside">
												<div class="account__user flex flex-nowrap">
													<img src="assets/img/account_user2.png" alt=""/>
													<div class="user-name">
														<div class="nickname"><span>frank_bovalev</span></div>
													</div>
												</div>
											</div>
											<div class="rightside flex flex-align flex-justi">
												<div class="account-info bordered pl">
													<div class="account-info__row row-id">
														<!-- можно вместо стронг юзать <div class="row-title"> -->
														<strong>ID:</strong><span>5ce1b34d4d3e4o9d4d</span>
													</div>
													<div class="account-info__row row-start-date">
														<strong>Запущено:</strong><span>18-05-2019 20:40</span>
													</div>
													<div class="account-info__row row-mode">
														<strong>Режим:</strong><span>Безопасный</span>
													</div>
												</div>
												<div class="account-manage-button bordered">
													<button class="manage-button pause-btn"></button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="account account-no-hover account-free">
									<form action="" target="post_form" class="form-validate">
										<div class="flex flex-nowrap">
											<div class="leftside">
												<div class="account__user flex flex-nowrap">
													<img src="assets/img/account_user1.png" alt=""/>
													<div class="user-name">
														<div class="nickname"><span>the_rostyslav</span></div>
													</div>
												</div>
											</div>
											<div class="rightside flex flex-align flex-justi">
												<div class="account-info bordered pl">
													<div class="account-info__row row-id">
														<!-- можно вместо стронг юзать <div class="row-title"> -->
														<strong>ID:</strong><span>5ce1b34d4d3e4o9d4d</span>
													</div>
													<div class="account-info__row row-start-date">
														<strong>Запущено:</strong><span>19-05-2019 23:10</span>
													</div>
													<div class="account-info__row row-mode">
														<strong>Режим:</strong><span>Агрессивный</span>
													</div>
												</div>
												<div class="account-manage-button bordered">
													<button class="manage-button trash-btn"></button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="account account-no-hover account-free">
									<form action="" target="post_form" class="form-validate">
										<div class="flex flex-nowrap">
											<div class="leftside">
												<div class="account__user flex flex-nowrap">
													<img src="assets/img/account_user2.png" alt=""/>
													<div class="user-name">
														<div class="nickname"><span>frank_bovalev</span></div>
													</div>
												</div>
											</div>
											<div class="rightside flex flex-align flex-justi">
												<div class="account-info bordered pl">
													<div class="account-info__row row-id">
														<!-- можно вместо стронг юзать <div class="row-title"> -->
														<strong>ID:</strong><span>5ce1b34d4d3e4o9d4d</span>
													</div>
													<div class="account-info__row row-start-date">
														<strong>Запущено:</strong><span>18-05-2019 20:40</span>
													</div>
													<div class="account-info__row row-mode">
														<strong>Режим:</strong><span>Безопасный</span>
													</div>
												</div>
												<div class="account-manage-button bordered">
													<button class="manage-button pause-btn"></button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="account account-no-hover account-free">
									<form action="" target="post_form" class="form-validate">
										<div class="flex flex-nowrap">
											<div class="leftside">
												<div class="account__user flex flex-nowrap">
													<img src="assets/img/account_user1.png" alt=""/>
													<div class="user-name">
														<div class="nickname"><span>the_rostyslav</span></div>
													</div>
												</div>
											</div>
											<div class="rightside flex flex-align flex-justi">
												<div class="account-info bordered pl">
													<div class="account-info__row row-id">
														<!-- можно вместо стронг юзать <div class="row-title"> -->
														<strong>ID:</strong><span>5ce1b34d4d3e4o9d4d</span>
													</div>
													<div class="account-info__row row-start-date">
														<strong>Запущено:</strong><span>19-05-2019 23:10</span>
													</div>
													<div class="account-info__row row-mode">
														<strong>Режим:</strong><span>Агрессивный</span>
													</div>
												</div>
												<div class="account-manage-button bordered">
													<button class="manage-button pause-btn"></button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="account account-no-hover account-free">
									<form action="" target="post_form" class="form-validate">
										<div class="flex flex-nowrap">
											<div class="leftside">
												<div class="account__user flex flex-nowrap">
													<img src="assets/img/account_user2.png" alt=""/>
													<div class="user-name">
														<div class="nickname"><span>frank_bovalev</span></div>
													</div>
												</div>
											</div>
											<div class="rightside flex flex-align flex-justi">
												<div class="account-info bordered pl">
													<div class="account-info__row row-id">
														<!-- можно вместо стронг юзать <div class="row-title"> -->
														<strong>ID:</strong><span>5ce1b34d4d3e4o9d4d</span>
													</div>
													<div class="account-info__row row-start-date">
														<strong>Запущено:</strong><span>18-05-2019 20:40</span>
													</div>
													<div class="account-info__row row-mode">
														<strong>Режим:</strong><span>Безопасный</span>
													</div>
												</div>
												<div class="account-manage-button bordered">
													<button class="manage-button trash-btn"></button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="account account-no-hover account-free">
									<form action="" target="post_form" class="form-validate">
										<div class="flex flex-nowrap">
											<div class="leftside">
												<div class="account__user flex flex-nowrap">
													<img src="assets/img/account_user1.png" alt=""/>
													<div class="user-name">
														<div class="nickname"><span>the_rostyslav</span></div>
													</div>
												</div>
											</div>
											<div class="rightside flex flex-align flex-justi">
												<div class="account-info bordered pl">
													<div class="account-info__row row-id">
														<!-- можно вместо стронг юзать <div class="row-title"> -->
														<strong>ID:</strong><span>5ce1b34d4d3e4o9d4d</span>
													</div>
													<div class="account-info__row row-start-date">
														<strong>Запущено:</strong><span>19-05-2019 23:10</span>
													</div>
													<div class="account-info__row row-mode">
														<strong>Режим:</strong><span>Агрессивный</span>
													</div>
												</div>
												<div class="account-manage-button bordered">
													<button class="manage-button pause-btn"></button>
												</div>
											</div>
										</div>
									</form>
								</div>

								<div class="flex flex-center button-wrap">
									<a href="#" class="load-more-btn">Загрузить еще...</a>
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