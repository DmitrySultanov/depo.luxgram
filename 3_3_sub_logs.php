<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Логи - LuxGram</title>
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
								<li><a href="#">ИСТОРИЯ ЗАДАНИЙ</a></li>
								<li class="active"><a href="#">ЛОГИ</a></li>
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
													<option value="all">the_rostyslav</option>
													<option value="all">frank_bovalev</option>
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

											<div class="top-right-buttons flex flex-align">
												<a href="#" class="clear-btn">Очистить логи</a>
												<a href="#" class="blue-btn btn-large-size download-btn">Скачать</a>
											</div>
										</div>
									</div>
								</form>
							</div>

							<div class="pagination flex flex-center">
								<a href="#" class="back-btn">Назад</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#" class="active">3</a>
								<a href="#">4</a>
								<a href="#">5</a>
								<a href="#" class="next-btn">Вперед</a>
							</div>

							<ul class="logs-list">
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Задание завершено</div>
								</li>
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Задание завершено</div>
								</li>
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Задание готовится к завершению...</div>
								</li>
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Пауза 5 мин. перед проверкой новых подписчиков</div>
								</li>
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Задание завершено</div>
								</li>
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Задание завершено</div>
								</li>
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Задание завершено</div>
								</li>
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Задание завершено</div>
								</li>
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Задание готовится к завершению...</div>
								</li>
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Пауза 5 мин. перед проверкой новых подписчиков</div>
								</li>
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Задание завершено</div>
								</li>
								<li>
									<div class="date">[19.06.2019 21:12:15]</div>:
									<div class="status">Задание завершено</div>
								</li>
							</ul>
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