<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Задайте настройки - LuxGram</title>
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

							<div class="flex flex-justi flex-align">
								<h2>Выберите тип</h2>
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

								<div class="account account-no-hover account-free">
									<form action="" target="post_form" class="form-validate">
										<div class="flex flex-nowrap">
											<div class="leftside">
												<div class="account__user flex flex-nowrap">
													<img src="assets/img/account_user1.png" alt=""/>
													<div class="user-name">
														<div class="nickname"><span>the_rostyslav</span></div>
														<div class="user-descr">Личный блог блогера</div>
													</div>
												</div>
												<div class="form-checkboxes">
													<div class="element">
														<label class='flex flex-valign'>
															<input type="checkbox" checked name="start"><i></i>
															<span>Плавный старт</span><i data-toggle="tooltip" title="title" class="fa fa-question-circle" aria-hidden="true"></i>
														</label>
													</div>
													<div class="element">
														<label class='flex flex-valign'>
															<input type="checkbox" name="list"><i></i>
															<span>Отписаться по окончанию</span><i data-toggle="tooltip" title="title" class="fa fa-question-circle" aria-hidden="true"></i>
														</label>
													</div>
													<div class="element">
														<label class='flex flex-valign'>
															<input type="checkbox" name="list"><i></i>
															<span>Подписываться на закрытые профили</span><i data-toggle="tooltip" title="title" class="fa fa-question-circle" aria-hidden="true"></i>
														</label>
													</div>
												</div>
											</div>
											<div class="rightside">
												<div class="form-block bordered">
													<div class="element">
														<p>Лимит подписок <i data-toggle="tooltip" title="title" class="fa fa-question-circle" aria-hidden="true"></i></p>
														<input type="text" class="required onlyNumber" name="limit_subscribes" placeholder="7500" data-msg-required="Заполните поле">
													</div>
													<div class="element">
														<p>Количество публикация для мониторинга <i data-toggle="tooltip" title="title" class="fa fa-question-circle" aria-hidden="true"></i></p>
														<input type="text" class="required onlyNumber" name="quatitat_publics" placeholder="9" data-msg-required="Заполните поле">
													</div>
													<div class="element">
														<p>Количество постов <i data-toggle="tooltip" title="title" class="fa fa-question-circle" aria-hidden="true"></i></p>
														<div class="flex flex-nowrap flex-cols">
															<div class="element">
																<input type="text" class="required onlyNumber" name="quatitat_posts" placeholder="3" data-msg-required="Заполните поле">
															</div>
															<div class="element">
																<input type="text" class="required onlyNumber" name="counts_publics" placeholder="99999" data-msg-required="Заполните поле">
															</div>
														</div>
													</div>
													<div class="element">
														<p>Количество подписчиков <i data-toggle="tooltip" title="title" class="fa fa-question-circle" aria-hidden="true"></i></p>
														<div class="flex flex-nowrap flex-cols">
															<div class="element">
																<input type="text" class="required onlyNumber" name="quatitat_subscribers1" placeholder="30" data-msg-required="Заполните поле">
															</div>
															<div class="element">
																<input type="text" class="required onlyNumber" name="quatitat_subscribers2" placeholder="99999" data-msg-required="Заполните поле">
															</div>
														</div>
													</div>
													<div class="element">
														<p>Количество подписок <i data-toggle="tooltip" title="title" class="fa fa-question-circle" aria-hidden="true"></i></p>
														<div class="flex flex-nowrap flex-cols">
															<div class="element">
																<input type="text" class="required onlyNumber" name="quatitat_subscribe1" placeholder="30" data-msg-required="Заполните поле">
															</div>
															<div class="element">
																<input type="text" class="required onlyNumber" name="quatitat_subscribe2" placeholder="99999" data-msg-required="Заполните поле">
															</div>
														</div>
													</div>
												</div>	
												<div class="form-buttons flex flex-align pl">
													<a href="#" class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;Вернуться</a>
													<button type="submit" class="blue-btn next-step-btn">Запустить</button>
												</div>
											</div>
										</div>
									</form>
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
				value: 5,
				create: function( event, ui ) {
					var q = $('#stepper').slider('value');
		          	stepperStartFunc(q);
		        },
				slide: function( event, ui ) {
		          	stepperFunc(ui);
		        },
			});

			function stepperStartFunc (q){
				var steps = $('.js-stepper-grid > span');

				steps.removeClass('selected');
				for(var i= 0; i < q; i++) {
					$(steps[i]).addClass('selected');
				}
			}
			function stepperFunc (ui, q){
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