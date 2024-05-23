<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="/application/assets/styles/css/product.css">

	<title>Product</title>
</head>
<body class="product_body" style="justify-content: start;">
<div class="container">
	<div class="product_first_side">
		<div class="img">
			<img src="<?= "/my_uploads/".$tv->image_name; ?>" alt="image_product">
		</div>



		<div>
			<div class="title_prod">
				<h3><?= $tv->manufacturer." ".$tv->model." ".$tv->memory."/".$tv->internal_memory." " ?></h3>
			</div>
			<div class="discount">
				<?= $tv->discount ? ceil($tv->price - $tv->price * ($tv->discount / 100)) : '' ?> руб.
			</div>
			<div class="price" style="<?= $tv->discount ? ' color:red; text-decoration: line-through; text-decoration-color: red;' : '' ?>">
				<?= $tv->price; ?> руб.
			</div>
			<button>В КОРЗИНУ!</button>
		</div>
	</div>
	<div class="options">
		<table class="table">
			<tbody>
			<tr>
				<th scope="row">Состояние: </th>
				<td>Новое</td>
			</tr>
			<tr>
				<th scope="row">ОС: </th>
				<td><?= $tv->OS; ?></td>
			</tr>
			<tr>
				<th scope="row">Цвет: </th>
				<td><?= $tv->color; ?></td>
			</tr>
			<tr>
				<th scope="row">Комплектация: </th>
				<td>USB кабель,
					чехол,
					адаптер питания</td>
			</tr>
			<tr>
				<th scope="row">Диагональ экрана: </th>
				<td><?= $tv->diagonal; ?>"</td>
			</tr>
			<tr>
				<th scope="row">Разрешение экрана: </th>
				<td>Full HD+</td>
			</tr>
			<tr>
				<th scope="row">Разрешение экрана: </th>
				<td>1080x2400 px</td>
			</tr>
			<tr>
				<th scope="row">Оперативная память: </th>
				<td><?= $tv->memory; ?> ГБ</td>
			</tr>
			<tr>
				<th scope="row">Встроенная память: </th>
				<td><?= $tv->internal_memory; ?> ГБ</td>
			</tr>
			<tr>
				<th scope="row">Основная камера: </th>
				<td><?= $tv->camera; ?> Мп</td>
			</tr>
			<tr>
				<th scope="row">Емкость аккумулятора:</th>
				<td><?= $tv->accumulator; ?> мАч</td>
			</tr>
			<tr>
				<th scope="row">Тип аккумулятора:</th>
				<td>Li-ion</td>
			</tr>

			<tr>
				<th scope="row">Высота:  </th>
				<td><?= $tv->height; ?> мм</td>
			</tr>
			<tr>
				<th scope="row">Ширина: </th>
				<td><?= $tv->width; ?> мм</td>
			</tr>
			<tr>
				<th scope="row">Вес: </th>
				<td><?= $tv->weight; ?> гр</td>
			</tr>
			<tr>
				<th scope="row">Гарантия: </th>
				<td><?= $tv->warranty; ?> мес</td>
			</tr>

			</tbody>
		</table>
	</div>
</div>
</body>
</html>
