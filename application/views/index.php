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

	<link rel="stylesheet" href="<?php echo base_url('/assets/styles/css/index.css'); ?>
    <link rel=" stylesheet
	" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!--	font awesome-->
	<link rel="stylesheet"
		  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<!-- 1. owl carousel Min.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
		  integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>


	<!-- 2. Owl Carousel Theme.css   -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
		  integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>


	<link rel="stylesheet" href="./application/assets/styles/css/index.css">

	<link type="image/x-icon" href="./application/assets/img/favicon.ico" rel="shortcut icon">
	<title>Rudz park</title>
</head>

<body>


<div class="header">
	<div class="container">
		<div class="right_btn_group">
			<a href="">О компании</a>
			<a href="">Вопрос-ответ</a>
			<a href="">Новости</a>
		</div>
		<div class="light_btn_group">
			<a href="">Войти</a>
			<a href="">Регистрация</a>
			<a href="/admin"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Пока это /admin">
				<img src="./application/assets/img/user_icon.png" alt="user"></a>
		</div>
	</div>
</div>

<div class="container">
	<div class="after_header">
		<div class="logo">
			<img src="./application/assets/img/main_logo.svg" alt="logo">
		</div>
		<div class="search">
			<input type="text" placeholder="Поиск по каталогу">
		</div>
		<div class="rating">
			<a href="#"><img src="./application/assets/img/rating.png" alt="raiting"></a>
		</div>
		<div class="like">
			<a href="#"><img src="./application/assets/img/like.png" alt=""></a>
		</div>
		<div class="card">
			<a href="#"><img src="./application/assets/img/card.svg" alt=""></a>
			<h6>$ 0.00</h6>
		</div>
	</div>
	<div class="banner">
		<div class="category">

			<section class="product_owl_carousel " style="">
				<div class="row">
					<div class="owl-carousel owl-theme col-12" id="categoryCarousel"
						 style="color: white; display:flex;">
						<div class="item ">
							<a href="/laptops/">Ноутбуки</a>
						</div>
						<div class="item ">
							<a href="/tablets/">Планшеты</a>
						</div>
						<div class="item ">
							<a href="/products/">Смартфоны</a>
						</div>
						<div class="item ">
							<a href="/earphones/">Наушники</a>
						</div>
						<div class="item ">
							<a href="/tv/">Телевизоры</a>
						</div>
						<div class="item ">
							<a href="#">Аксессуары</a>
						</div>
					</div>
				</div>

			</section>
		</div>

		<div class="banner_img">
			<div class="banner_text">
				<h2>Добро пожаловать на наш сайт!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sollicitudin elementum neque
					id pharetra. Etiam ultricies neque et diam dignissim placerat.</p>
				<button><a href="#">Перейти в каталог</a></button>
			</div>
		</div>
	</div>
</div>

<section class="features ">
	<div class="container row">
		<div class="col-12 col-md-3 col-sm-12">
            <span>
                <img src="./application/assets/img/icon_done.png" alt="">
            </span>
			<span>
                <h6>Лучшие в своем деле</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, assumenda?</p>
            </span>
		</div>

		<div class="col-12 col-md-3 col-sm-12">
            <span>
                <img src="./application/assets/img/icon_done.png" alt="">
            </span>
			<span>
                <h6>Поддержка 24/7</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, assumenda?</p>
            </span>
		</div>

		<div class="col-12 col-md-3 col-sm-12">
            <span>
                <img src="./application/assets/img/icon_done.png" alt="">
            </span>
			<span>
                <h6>Гарантия качества</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, assumenda?</p>
            </span>
		</div>

		<div class="col-12 col-md-3 col-sm-12">
            <span>
                <img src="./application/assets/img/icon_done.png" alt="">
            </span>
			<span>
                <h6>Быстрая доставка</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, assumenda?</p>
            </span>
		</div>
	</div>
</section>

<div class="container">

	<section class="product_owl_carousel " style="margin: 50px 0;">
		<div class="row">
			<div class="owl-carousel owl-theme" id="carousel1">
				<div class="item ">
					<div class="card" style="width: 30rem; border:0;">
						<img src="./application/assets/img/laptop_categ.jpg" class="card-img-top" alt="product">
						<div class="content">
							<h3>Ноутбуки</h3>
							<p>краткое описание категории</p>
							<button><a href="/laptops/" style="color: white; text-decoration: none;">Перейти в каталог</a></button>
						</div>
					</div>
				</div>

				<div class="item ">
					<div class="card" style="width: 30rem; border:0;">
						<img src="./application/assets/img/tablet_categ.jpg" class="card-img-top" alt="product">
						<div class="content">
							<h3>Планшеты</h3>
							<p>краткое описание категории</p>
							<button><a href="/tablets/" style="color: white; text-decoration: none;">Перейти в каталог</a></button>
						</div>
					</div>
				</div>

				<div class="item ">
					<div class="card" style="width: 30rem; border:0;">
						<img src="./application/assets/img/category_earphone.jpg" class="card-img-top" alt="product">
						<div class="content">
							<h3>Наушники</h3>
							<p>краткое описание категории</p>
							<a href="/earphones/"><button>Перейти в каталог</button></a>
						</div>
					</div>
				</div>

				<div class="item ">
					<div class="card" style="width: 30rem; border:0;">
						<img src="./application/assets/img/category_smartphone.jpg" class="card-img-top" alt="product">
						<div class="content">
							<h3>Смартфоны</h3>
							<p>краткое описание категории</p>
							<a href="/products/"><button>Перейти в каталог</button></a>
						</div>
					</div>
				</div>

				<div class="item ">
					<div class="card" style="width: 30rem; border:0;">
						<img src="./application/assets/img/category_tv.jpg" class="card-img-top" alt="product">
						<div class="content">
							<h3>Телевизоры</h3>
							<p>краткое описание категории</p>
							<a href="/tv/"><button>Перейти в каталог</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>


	<section class="product_owl_carousel " style="margin: 50px 0;">
		<h5 class="text-center mb-3 mt-5">Популярные товары</h5>
		<div class="row">
			<div class="owl-carousel owl-theme" id="carousel2">
				<?php foreach ($smartphones as $row) :
					if ($row->rating > 8) {
						?>
						<div class="item">
							<div class="row img-prod">
								<div class="col-12  ">
									<img src="<?php echo "/my_uploads/".$row->image_name ?>" alt="product image">
								</div>
							</div>
							<div class="row rating">
								<div class="col-6 rating-item">

									<span> <i class="fa-solid fa-star"></i><?= $row->rating; ?></span>
									<span><i class="fa-sharp fa-regular fa-comment fa-flip-horizontal"></i> 30</span>
								</div>
								<div class="col-6 rating-item"
									 style="display: flex; flex-direction: row; justify-content: center; align-items: center ">
									<img src="/application/assets/img/green_btn_done.png" alt="">
									<h6>в наличии</h6>


								</div>
							</div>
							<div class="row product-title">
<!--								Смартфон Apple iPhone 15 Pro Max 256GB Blue Titanium (MU6T3J/A)-->
								<div class="col-10">
									<h4><?= $row->manufacturer." ".$row->model." ".$row->memory."/".$row->internal_memory." " ?></h4>
								</div>
							</div>
							<div class="row price">
								<div class="col-12">
									<?= $row->price ?> byn
								</div>
							</div>
							<div class="row buttons">
								<div class="col-5">
									<button>Купить</button>
								</div>
								<div class="col-3"></div>

								<div class="col-2 me-1">
									<a href="#">
										<img src="/application/assets/img/rating.png" alt="">
									</a>
								</div>
								<div class="col-2 me-2">
									<a href="#">
										<img src="/application/assets/img/like.png" alt="">
									</a>
								</div>
								<div class="col-2"></div>
							</div>
						</div>
						<?php
					}
				endforeach; ?>
			</div>
		</div>
	</section>


</div>


<div class="pre-footer">
	<div class="container row">
		<div class="">Подписаться на рассылку новостей</div>
		<div class="">
			<form action="#">
				<input type="text" placeholder="Ваш e-mail">
				<button>Отправить</button>
			</form>
		</div>
	</div>
</div>

<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="logo">
				<a href="/">
					<img src="/application/assets/img/logo_footer.svg" alt="">
				</a>
			</div>
			<div class="catalog">
				<ul>
					<li>
						<a href="/laptops">Ноутбуки</a>
					</li>
					<li>
						<a href="/tablets">Планшеты</a>
					</li>
					<li>
						<a href="/products/">Смартфоны</a>
					</li>
					<li>
						<a href="/earphones">Наушники</a>
					</li>
					<li>
						<a href="/tv">Телевизоры</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="about">
				<ul>
					<li>
						<a href="#"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="В разработке">Политика конфиденциальности </a>
					</li>
					<li>
						<a href="#"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="В разработке">О компании </a>
					</li>
					<li>
						<a href="#"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="В разработке">Новости </a>
					</li>
					<li>
						<a href="#"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="В разработке">Контакты </a>
					</li>
				</ul>
			</div>
			<div class="copyright">
				<span>Copyright © 2001-2023 RudzPark. All rights reserved</span>
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
		loop: false,
		margin: 10,
		nav: false,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1.5
			},
			1000: {
				items: 2
			}
		}
	})

	$('#categoryCarousel').owlCarousel({
		loop: false,
		margin: 0,
		dots: false,
		nav: false,
		responsive: {
			0: {
				items: 3
			},
			600: {
				items: 4
			},
			1000: {
				items: 5
			}
		}
	})

	$('#carousel2').owlCarousel({
		loop: false,
		margin: 0,
		nav: false,
		dots: false,
		responsive: {
			0: {
				items: 1.5
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	})
</script>
</body>

</html>
