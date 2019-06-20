<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Выбор тарифа - LuxGram</title>
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
							<div class="gray-container__inner flex flex-center">
								<div class="choose-tariff js-choose-tariff">
									<h3 class="choose-tariff__title">Выберите тариф</h3>
									<p>Выберите количество месяцев, в течение которых вы хотите использовать Luxgram</p>
									<input type="text" class="js-range-slider" name="my_range" value="" />
									<div class="calc-table flex flex-nowrap">
										<div class="column">
											<div class="column__head">
												<p>Кол-во мес.:</p>
											</div>
											<div class="column__count js-monthCount">
												<span>1</span>
											</div>
										</div>
										<div class="column">
											<div class="column__head flex flex-center">
												<p>Стоимость:</p>
												<p class="base-price">2650₽</p>
											</div>
											<div class="column__count">
												<span>2000</span>₽
											</div>
										</div>
										<div class="column">
											<div class="column__head">
												<p>Выгода:</p>
											</div>
											<div class="column__count">
												<span>650</span>₽
											</div>
										</div>
									</div>
									<p>После нажатия кнопки «Выбрать тариф» вы будете перенаправлены на страницу оплаты Яндекс Кассы</p>
								</div>
							</div>
							<a href="#" class="blue-btn btn-md add-account-btn">Выбрать тариф</a>
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