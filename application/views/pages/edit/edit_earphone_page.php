<div style="background: linear-gradient(90deg, #faf0cd, #fab397); ">
	<div class="container ">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="card-header">
						<h3 class="text-center">Edit page</h3>
						<a href="/admin" class="btn btn-danger float-right">BACK</a>
					</div>
					<div class="card-body">
						<!--	Здесь base_url('form/save_data') указывает на контроллер Form и метод save_data	-->
						<form action="<?php echo base_url('UpdateController/updateEarphone/'.$earphones->id) ?>" enctype="multipart/form-data" method="POST">

							<!-- Производитель -->
							<label for="manufacturer">Производитель</label>
							<input type="text" value="<?php echo $earphones->manufacturer ?>" name="manufacturer"
								   class="form-control" id="manufacturer">
							<hr>

							<!-- Модель -->
							<label for="model">Модель</label>
							<input type="text" value="<?php echo $earphones->model ?>" name="model"
								   class="form-control" id="model">
							<hr>

							<label for="color">Цвет</label>
							<input type="text" value="<?php echo $earphones->color ?>" name="color" class="form-control"
								   id="color">
							<hr>
							<label for="type">Тип</label>
							<input type="text" value="<?php echo $earphones->type ?>" name="type"
								   class="form-control" id="type">
							<hr>
							<label for="connect">Тип подключение</label>
							<input type="text" value="<?php echo $earphones->connect ?>" name="connect"
								   class="form-control" id="connect">
							<hr>
							<label for="design">Конструкция</label>
							<input type="text" value="<?php echo $earphones->design ?>" name="design"
								   class="form-control" id="design">
							<hr>
							<label for="made_in">Страна производителя</label>
							<input type="text" value="<?php echo $earphones->made_in ?>"
								   name="made_in" class="form-control" id="made_in">

							<hr>
							<label for="warranty">Гарантия</label>
							<input type="number" value="<?php echo $earphones->warranty ?>" name="warranty"
								   class="form-control" id="warranty">
							<hr>

							<label for="price">Цена</label>
							<input type="number" value="<?php echo $earphones->price ?>" name="price"
								   class="form-control" id="price">
							<hr>

							<label for="discount">Скидка %</label>
							<input type="number" value="<?php echo $earphones->discount ?>" name="discount"
								   class="form-control" id="discount">
							<hr>
							<label for="availble">В наличии</label>
							<input type="number" value="<?php echo $earphones->availble ?>" name="availble"
								   class="form-control" id="availble">
							<hr>
							<label for="">Фото товара</label> <br>
							<input type="file"  name="image" id="" >
							<hr>

							<button type="submit" class="btn btn-primary mt-5">Обновить</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
