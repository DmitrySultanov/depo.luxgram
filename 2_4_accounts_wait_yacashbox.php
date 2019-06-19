<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Ожидание Яндекс кассы - LuxGram</title>
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
								<div class="waitbox">
									<h2>Пожалуйста, подождите!</h2>
									<div class="loader">Loading...</div>
									<p>Мы ждем ответа от Яндекс Кассы о подтверждении оплаты</p>
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
			<div class="account-action-buttons flex">
				<a href="#" class="action-btn send-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
				<a href="#" class="action-btn subscribe-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
				<a href="#" class="action-btn resubscribe-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
				<a href="#" class="action-btn automessage-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
				<a href="#" class="action-btn autocomment-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
				<a href="#" class="action-btn hello-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
				<a href="#" class="action-btn btn watch-stories-btn" data-toggle="tooltip" data-container="body" data-title="title"></a>
			</div>
		</div>
	</div>
	<footer></footer>
	
	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
</body>
</html>