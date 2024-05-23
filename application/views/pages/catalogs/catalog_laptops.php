<!doctype html>
<html lang="en">

<head>
	<base href="http:/localhost">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<!-- 1. owl carousel Min.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
		  integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<!-- 2. Owl Carousel Theme.css   -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
		  integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>


	<link rel="stylesheet" href="./application/assets/styles/css/index.css">
	<link rel="stylesheet" href="./application/assets/styles/css/products.css">

	<link type="image/x-icon" href="./application/assets/img/favicon.ico" rel="shortcut icon">
	<title>Rudz park</title>
</head>

<body class="productBody">


<div class="header">
	<div class="container">
		<div class="right_btn_group">
			<a href="/">
				<img src="/application/assets/img/logo_footer.svg" alt="">
			</a>
			<a href="">Вопрос-ответ</a>
			<a href="">Новости</a>
		</div>
		<div class="light_btn_group">
			<a href="">Войти</a>
			<a href="">Регистрация</a>
			<a href=""><img src="./application/assets/img/user_icon.png" alt="user"></a>
		</div>
	</div>
</div>


<main>
	<div class="container ">
		<div>
			<?php foreach ($laptops as $row) : ?>
				<a href="<?= base_url('ProductsController/laptops'.$row->id) ?>">
					<div class="item">
						<div class="img">
							<img src="<?= "/my_uploads/" . $row->image_name; ?>" alt="">
						</div>
						<div class="price_name_raiting">
							<!--XIAOMI REDMI 10 2022 6GB/128GB (СЕРЫЙ)-->
							<h4><?= $row->manufacturer . " " . $row->model . " " . $row->memory . "/" . $row->internal_memory . " (" . $row->color . ")" ?></h4>
							<div class="rainting">
					<span>
						<img src="/application/assets/img/star.png" alt="">
						<img src="/application/assets/img/star.png" alt="">
						<img src="/application/assets/img/star.png" alt="">
						<img src="/application/assets/img/star.png" alt="">
						<img src="/application/assets/img/star.png" alt="">
					</span>
								<span>10/10</span>
							</div>
							<div class="price">
								<?php if ($row->discount){?>
									<span style=" font-weight: bold;"><?= $row->discount ? ceil($row->price - $row->price * ($row->discount / 100)) : '' ?> руб. 00 коп.	</span>
								<?php } ?>
								<span style="font-weight: bold; <?= $row->discount ? ' color:red; text-decoration: line-through; text-decoration-color: red;' : '' ?>"><?= $row->price; ?> руб. 00 коп.</span>
							</div>
						</div>

						<div class="options">
							<table class="table">
								<tbody>
								<tr>
									<th scope="row">Оперативная память:</th>
									<td><?= $row->memory; ?> ГБ</td>
								</tr>
								<tr>
									<th scope="row">Встроенная память:</th>
									<td><?= $row->internal_memory; ?> ГБ</td>
								</tr>
								<tr>
									<th scope="row">Тип экраана:</th>
									<td><?= $row->screen_tech; ?></td>
								</tr>
								<tr>
									<th scope="row">Основная камера:</th>
									<td><?= $row->camera . "Мп" ?></td>
								</tr>
								<tr>
									<th scope="row">Емкость аккумулятора:</th>
									<td><?= $row->accumulator; ?> мАч</td>
								</tr>
								<tr>
									<th scope="row">Цвет:</th>
									<td><?= $row->color; ?></td>
								</tr>

								</tbody>
							</table>
						</div>

					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>


<!--0. Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- 1. Owl Carousel min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
		integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!--Owl Carousel Init-->
<script>
	$('#carousel1').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 2
			}
		}
	})

	$('#carousel2').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 3
			}
		}
	})
</script>
</body>

</html>
