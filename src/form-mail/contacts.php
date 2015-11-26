<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Vine / Контакты</title>
	<?php include "html/title.html";?>
</head>

<body class="margin contacts">
	<?php include "html/menu.html";?>


	<div class="container">
		<div class="col-md-6 col-sm-6">
			<h1>Напишите нам</h1>
		</div>
		<div class="col-md-6 col-sm-6 form">
			<div class="form-container">
				<div id="note"></div>
				<div id="fields">
					<form id="ajax-contact-form" action="">
						<div class="row">
						<div class="col-md-4 col-sm-4"><input type="text" name="name" placeholder="Имя" value="" class="form-control" /></div>
							<div class="col-md-4 col-sm-4"><input type="text" name="email" placeholder="E-mail" value="" class="form-control" /></div>
							<div class="col-md-4 col-sm-4"><input type="text" name="tel" placeholder="Телефон" value="" class="form-control" /></div>
						</div>
						<div class="row">
							<textarea type="text" name="mes" placeholder="Сообщение" value="" class="form-control" ></textarea>
							<input class="btn" type="submit" name="submit" value="Отправить" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="container contacts">
		<div class="col-md-6 col-sm-6">
			<h1>Адрес</h1>
		</div>
		<div class="col-md-6 col-sm-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1999.0610099989424!2d30.314970000000006!3d59.9311298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963104a6eb0465%3A0x75cc2c7fdf51c2fe!2z0L3QsNCxLiDRgNC10LrQuCDQnNC-0LnQutC4LCA2MCwg0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsIDE5MDAwMA!5e0!3m2!1sru!2sru!4v1418226767179" width="100%" height="300" frameborder="0" style="border:0"></iframe>
		</div>
	</div>

	<?php include "html/footer.html";?>

</body>
</html>
