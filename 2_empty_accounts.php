<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Нет аккаунтов - LuxGram</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="wrapper">
		<section class="main-section">
			<? include('inc/header.php'); ?>
			
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
					<div class="in-container">
						<div class="content-top-sector">
							<div class="title-block">
								<h1>INSTAGRAM АККАУНТЫ</h1>
							</div>
							<p>Здесь в нескольких предложениях описать положения по работе с инстаграм-аккаунтами. Здесь описать некие положения по работе. Смотреть <a href="#">инструкцию по работе с инстаграм-аккаунтами.</a></p>
						</div>
						
						<div class="gray-container">
							<div class="gray-container__inner flex flex-center-center">
								<p>У вас еще нет добавленных аккаунтов</p>
							</div>
							<a href="#" class="blue-btn btn-large add-account-btn">Добавить аккаунт</a>
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