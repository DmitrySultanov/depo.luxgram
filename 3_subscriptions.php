<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Выберите тип - LuxGram</title>
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
											</div>
											<div class="rightside">
												<div class="form-checkboxes bordered pl">
													<div class="element">
														<label class='flex flex-valign'>
															<input type="radio" checked name="list"><i></i>
															<span>По списку</span><i data-toggle="tooltip" title="title" class="fa fa-question-circle" aria-hidden="true"></i>
														</label>
													</div>
													<div class="element">
														<label class='flex flex-valign'>
															<input type="radio" name="list"><i></i>
															<span>По активной аудитории конкурентов</span><i data-toggle="tooltip" title="title" class="fa fa-question-circle" aria-hidden="true"></i>
														</label>
													</div>
												</div>	
												<div class="form-buttons flex flex-align pl">
													<a href="#" class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;Вернуться</a>
													<button type="submit" class="blue-btn next-step-btn">Следующий шаг</button>
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
				value: 2,
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