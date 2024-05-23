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
			<img src="<?= "/my_uploads/".$laptop->image_name; ?>" alt="image_product">
		</div>



		<div>
			<div class="title_prod">
				<h3><?= $laptop->manufacturer." ".$laptop->model." ".$laptop->memory."/".$laptop->internal_memory." " ?></h3>
			</div>
			<div class="discount">
				<?= $laptop->discount ? ceil($laptop->price - $laptop->price * ($laptop->discount / 100)) : '' ?> руб.
			</div>
			<div class="price" style="<?= $laptop->discount ? ' color:red; text-decoration: line-through; text-decoration-color: red;' : '' ?>">
				<?= $laptop->price; ?> руб.
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
				<td><?= $laptop->OS; ?></td>
			</tr>
			<tr>
				<th scope="row">Цвет: </th>
				<td><?= $laptop->color; ?></td>
			</tr>
			<tr>
				<th scope="row">Комплектация: </th>
				<td>USB кабель,
					чехол,
					адаптер питания</td>
			</tr>
			<tr>
				<th scope="row">Диагональ экрана: </th>
				<td><?= $laptop->diagonal; ?>"</td>
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
				<th scope="row">Соотношение сторон экрана: </th>
				<td>16:9</td>
			</tr>
			<tr>
				<th scope="row">Оперативная память: </th>
				<td><?= $laptop->memory; ?> ГБ</td>
			</tr>
			<tr>
				<th scope="row">Встроенная память: </th>
				<td><?= $laptop->internal_memory; ?> ГБ</td>
			</tr>
			<tr>
				<th scope="row">Основная камера: </th>
				<td><?= $laptop->camera; ?> Мп</td>
			</tr>
			<tr>
				<th scope="row">Емкость аккумулятора:</th>
				<td><?= $laptop->accumulator; ?> Вт·ч</td>
			</tr>
			<tr>
				<th scope="row">Тип аккумулятора:</th>
				<td>Li-ion</td>
			</tr>

			<tr>
				<th scope="row">Высота:  </th>
				<td><?= $laptop->height; ?> мм</td>
			</tr>
			<tr>
				<th scope="row">Ширина: </th>
				<td><?= $laptop->width; ?> мм</td>
			</tr>
			<tr>
				<th scope="row">Вес: </th>
				<td><?= $laptop->weight; ?> гр</td>
			</tr>
			<tr>
				<th scope="row">Гарантия: </th>
				<td><?= $laptop->warranty; ?> мес</td>
			</tr>

			</tbody>
		</table>
	</div>
</div>
</body>
</html>
