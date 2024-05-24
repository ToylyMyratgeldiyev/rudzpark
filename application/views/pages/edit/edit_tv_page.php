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
						<form action="<?php echo base_url('UpdateController/updateTv/'.$tv->id) ?>" method="POST">

							<!-- Производитель -->
							<label for="manufacturer">Производитель</label>
							<input type="text" value="<?php echo $tv->manufacturer ?>" name="manufacturer"
								   class="form-control" id="manufacturer">
							<hr>

							<!-- Модель -->
							<label for="model">Модель</label>
							<input type="text" value="<?php echo $tv->model ?>" name="model"
								   class="form-control" id="model">
							<hr>
							<!-- Операционная система -->
							<label for="OS">Операционная система</label>
							<input type="text" value="<?php echo $tv->OS ?>" name="OS" class="form-control"
								   id="OS">
							<hr>
							<label for="color">Цвет</label>
							<input type="text" value="<?php echo $tv->color ?>" name="color"
								   class="form-control" id="color">
							<hr>
							<label for="diagonal">Диоганаль экрана</label>
							<input type="number" value="<?php echo $tv->diagonal ?>" name="diagonal"
								   class="form-control" id="diagonal">
							<hr>
							<label for="memory">RAM</label>
							<input type="number" value="<?php echo $tv->memory ?>" name="memory"
								   class="form-control" id="memory">
							<hr>
							<label for="internal_memory">Встроенная Память</label>
							<input type="number" value="<?php echo $tv->internal_memory ?>"
								   name="internal_memory" class="form-control" id="internal_memory">
							<hr>
							<label for="camera">Камера</label>
							<input type="text" value="<?php echo $tv->camera ?>" name="camera"
								   class="form-control" id="camera">
							<hr>
							<label for="accumulator">Аккумулятор</label>
							<input type="number" value="<?php echo $tv->accumulator ?>" name="accumulator"
								   class="form-control" id="accumulator">
							<hr>
							<label for="height">Высота</label>
							<input type="number" value="<?php echo $tv->height ?>" name="height"
								   class="form-control" id="height">
							<hr>
							<label for="width">Ширина</label>
							<input type="number" value="<?php echo $tv->width ?>" name="width"
								   class="form-control" id="width">
							<hr>
							<label for="weight">Вес</label>
							<input type="number" value="<?php echo $tv->weight ?>" name="weight"
								   class="form-control" id="weight">
							<hr>
							<label for="warranty">Гарантия</label>
							<input type="number" value="<?php echo $tv->warranty ?>" name="warranty"
								   class="form-control" id="warranty">
							<hr>
							<label for="screen_tech">Техналогия экрана</label>
							<input type="text" value="<?php echo $tv->screen_tech ?>" name="screen_tech"
								   class="form-control" id="screen_tech">
							<hr>
							<label for="price">Цена</label>
							<input type="number" value="<?php echo $tv->price ?>" name="price"
								   class="form-control" id="price">
							<hr>

							<label for="image">Фото товара</label> <br>
							<input type="file" accept=".jpg, .jpeg, .png" name="image" id="image" value="<?= $tv->image_name ?>">
							<hr>

							<button type="submit" class="btn btn-primary mt-5">Обновить</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
