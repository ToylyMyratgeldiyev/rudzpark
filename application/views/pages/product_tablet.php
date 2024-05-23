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
			<img src="<?= "/my_uploads/".$tablet->image_name; ?>" alt="image_product">
		</div>



		<div>
			<div class="title_prod">
				<h3><?= $tablet->manufacturer." ".$tablet->model." ".$tablet->memory."/".$tablet->internal_memory." " ?></h3>
			</div>
			<div class="discount">
				<?= $tablet->discount ? ceil($tablet->price - $tablet->price * ($tablet->discount / 100)) : '' ?> руб.
			</div>
			<div class="price" style="<?= $tablet->discount ? ' color:red; text-decoration: line-through; text-decoration-color: red;' : '' ?>">
				<?= $tablet->price; ?> руб.
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
				<td><?= $tablet->OS; ?></td>
			</tr>
			<tr>
				<th scope="row">Цвет: </th>
				<td><?= $tablet->color; ?></td>
			</tr>
			<tr>
				<th scope="row">Комплектация: </th>
				<td>USB кабель,
					чехол,
					адаптер питания</td>
			</tr>
			<tr>
				<th scope="row">Диагональ экрана: </th>
				<td><?= $tablet->diagonal; ?>"</td>
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
				<td><?= $tablet->memory; ?> ГБ</td>
			</tr>
			<tr>
				<th scope="row">Встроенная память: </th>
				<td><?= $tablet->internal_memory; ?> ГБ</td>
			</tr>
			<tr>
				<th scope="row">Основная камера: </th>
				<td><?= $tablet->camera; ?> Мп</td>
			</tr>
			<tr>
				<th scope="row">Емкость аккумулятора:</th>
				<td><?= $tablet->accumulator; ?> мАч</td>
			</tr>
			<tr>
				<th scope="row">Тип аккумулятора:</th>
				<td>Li-ion</td>
			</tr>

			<tr>
				<th scope="row">Высота:  </th>
				<td><?= $tablet->height; ?> мм</td>
			</tr>
			<tr>
				<th scope="row">Ширина: </th>
				<td><?= $tablet->width; ?> мм</td>
			</tr>
			<tr>
				<th scope="row">Вес: </th>
				<td><?= $tablet->weight; ?> гр</td>
			</tr>
			<tr>
				<th scope="row">Гарантия: </th>
				<td><?= $tablet->warranty; ?> мес</td>
			</tr>

			</tbody>
		</table>
	</div>
</div>
</body>
</html>
