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

	<link rel="stylesheet"  href="<?php echo base_url('/assets/styles/css/index.css');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<!-- 1. owl carousel Min.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
		  integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
		  crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- 2. Owl Carousel Theme.css   -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
		  integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
		  crossorigin="anonymous" referrerpolicy="no-referrer" />


	<link rel="stylesheet" href="./application/assets/styles/css/index.css">

	<link type="image/x-icon" href="./application/assets/img/favicon.ico" rel="shortcut icon">
	<title>Rudz park</title>
</head>

<body style="justify-content: start;">


<div class="header">
	<div class="container">
		<div class="right_btn_group">
			<a href="/"><img src="/application/assets/img/logo_footer.svg" alt=""></a>
		</div>
		<div class="light_btn_group">
			<a href="">Войти</a>
			<a href="">Регистрация</a>
			<a href=""><img src="./application/assets/img/user_icon.png" alt="user"></a>
		</div>
	</div>
</div>

<div class="container">
	<div class="row" style="margin: 0 auto;">
		<div class="col-md-12 mt-4">
			<div class="card">
				<div class="card-header">
					<h4 class="text-center m-3">Добавить в БД: <i>Смартфон, Планшет, Телевизор, Ноутбук</i>.</h4>
					<div class="btn-group d-flex justify-content-around m-5">
						<a href="<?php echo base_url('/admin/add'); ?>" style="color:white; text-decoration:none;">
							<button class="btn btn-primary">
								Add product
							</button>
						</a>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<h4 class="text-center m-3">Добавить в БД: <i>Наушники</i>.</h4>
					<div class="btn-group d-flex justify-content-around m-5">
						<a href="<?php echo base_url('/admin/add_airphone'); ?>" style="color:white; text-decoration:none;">
							<button class="btn btn-primary">
								Add product
							</button>
						</a>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h4 class="text-center m-3">Редактирование продуктов.</h4>
					<div class="btn-group d-flex  flex-wrap justify-content-around m-5">
						<a href="<?php echo base_url('/admin/tv'); ?>" style="color:white; text-decoration:none; ">
							<button class="btn btn-primary">
								TV
								<img src="/application/assets/img/icons/smart-tv.png" alt="" style="width: 20px">
							</button>
						</a>

						<a href="<?php echo base_url('admin/smartphones'); ?>" style="color:white; text-decoration:none;">
							<button class="btn btn-primary">
								Smartphones
								<img src="/application/assets/img/icons/smartphone.png" alt="" style="width: 20px">
							</button>
						</a>

						<a href="<?php echo base_url('admin/laptop'); ?>" style="color:white; text-decoration:none;">
							<button class="btn btn-primary">
								Laptops
								<img src="/application/assets/img/icons/laptop.png" alt="" style="width: 20px">
							</button>
						</a>

						<a href="<?php echo base_url('admin/tablet'); ?>" style="color:white; text-decoration:none;">
							<button class="btn btn-primary">
								Tablet
								<img src="/application/assets/img/icons/ipad.png" alt="" style="width: 20px">
							</button>
						</a>

						<a href="<?php echo base_url('admin/earphones'); ?>" style="color:white; text-decoration:none;">
							<button class="btn btn-primary" value="earphones">
								Earphones
								<img src="/application/assets/img/icons/headphones.png" alt="" style="width: 20px">
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>


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

