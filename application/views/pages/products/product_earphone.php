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
			<img src="<?= "/my_uploads/".$earphone->image_name; ?>" alt="image_product">
		</div>



		<div>
			<div class="title_prod">
				<h3><?= $earphone->manufacturer." ".$earphone->model." ".$earphone->memory."/".$earphone->internal_memory." " ?></h3>
			</div>
			<div class="discount">
				<?= $earphone->discount ? ceil($earphone->price - $earphone->price * ($earphone->discount / 100)) : '' ?> руб.
			</div>
			<div class="price" style="<?= $earphone->discount ? ' color:red; text-decoration: line-through; text-decoration-color: red;' : '' ?>">
				<?= $earphone->price; ?> руб.
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
				<th scope="row">Производитель: </th>
				<td><?= $earphone->manufacturer ?></td>
				<th scope="row">Модель: </th>
				<td><?= $earphone->model ?></td>
				<th scope="row">Цвет: </th>
				<td><?= $earphone->color ?></td>
				<th scope="row">Тип: </th>
				<td><?= $earphone->type ?></td>
				<th scope="row">Тип подключение: </th>
				<td><?= $earphone->connect ?></td>
				<th scope="row">Конструкция: </th>
				<td><?= $earphone->design ?></td>
				<th scope="row">Страна производителя: </th>
				<td><?= $earphone->made_in ?></td>
				<th scope="row">Цена: </th>
				<td><?= $earphone->price ?></td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
