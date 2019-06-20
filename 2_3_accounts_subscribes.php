<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Подписки - LuxGram</title>
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
								<li class="active"><a href="#">СОЗДАТЬ ЗАДАНИЕ</a></li>
								<li><a href="#">ИСТОРИЯ ЗАДАНИЙ</a></li>
								<li><a href="#">ЛОГИ</a></li>
							</ul>
						</div>	
					</div>

					<div class="accounts-wrapper">
						<div class="in-container">

							<div class="flex flex-justi flex-valign">
								<h2>Выберите аккаунт</h2>
								<div class="stepper-wrap">
									<div class="stepper-grid js-stepper-grid">
										<span >1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
									<div id="stepper"></div>
								</div>
							</div>

							<div class="accounts-list">

								<div class="account">
									<a href="#"></a>

									<div class="account__user flex flex-nowrap flex-valign">
										<img src="assets/img/account_user1.png" alt=""/>
										<div class="user-name">
											<div class="nickname"><span>the_rostyslav</span></div>
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
									<a href="#"></a>

									<div class="account__user flex flex-nowrap flex-valign">
										<img src="assets/img/account_user2.png" alt=""/>
										<div class="user-name">
											<div class="nickname"><span>frank_bovalev</span></div>
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
		</section>
	</div>
	
	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
	<script>
		$(function (){
			$('#stepper').slider({
				min: 1,
				max: 5,
				range: "min",
				step: 1,
				create: function( event, ui ) {
		          	stepperFunc(ui);
		        },
				slide: function( event, ui ) {
		          	stepperFunc(ui);
		        },
			});

			function stepperFunc (ui){
				var steps = $('.js-stepper-grid > span');

				steps.removeClass('selected');
				for(var i= 0; i < ui.value; i++) {
					$(steps[i]).addClass('selected');
				}
			}
		});
	</script>
</body>
</html>