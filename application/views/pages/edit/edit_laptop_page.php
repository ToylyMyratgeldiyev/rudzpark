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
						<form action="<?php echo base_url('UpdateController/updateLaptop/'.$laptops->id) ?>" method="POST">

							<!-- Производитель -->
							<label for="exampleInputEmail1">Производитель</label>
							<input type="text" value="<?php echo $laptops->manufacturer ?>" name="manufacturer"
								   class="form-control" id="exampleInputEmail1">
							<hr>

							<!-- Модель -->
							<label for="exampleInputEmail1">Модель</label>
							<input type="text" value="<?php echo $laptops->model ?>" name="model"
								   class="form-control" id="exampleInputEmail1">
							<hr>
							<!-- Операционная система -->
							<label for="exampleInputEmail1">Операционная система</label>
							<input type="text" value="<?php echo $laptops->OS ?>" name="OS" class="form-control"
								   id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">Цвет</label>
							<input type="text" value="<?php echo $laptops->color ?>" name="color"
								   class="form-control" id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">Диоганаль экрана</label>
							<input type="number" value="<?php echo $laptops->diagonal ?>" name="diagonal"
								   class="form-control" id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">RAM</label>
							<input type="number" value="<?php echo $laptops->memory ?>" name="memory"
								   class="form-control" id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">Встроенная Память</label>
							<input type="number" value="<?php echo $laptops->internal_memory ?>"
								   name="internal_memory" class="form-control" id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">Камера</label>
							<input type="text" value="<?php echo $laptops->camera ?>" name="camera"
								   class="form-control" id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">Аккумулятор</label>
							<input type="number" value="<?php echo $laptops->accumulator ?>" name="accumulator"
								   class="form-control" id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">Высота</label>
							<input type="number" value="<?php echo $laptops->height ?>" name="height"
								   class="form-control" id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">Ширина</label>
							<input type="number" value="<?php echo $laptops->width ?>" name="width"
								   class="form-control" id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">Вес</label>
							<input type="number" value="<?php echo $laptops->weight ?>" name="weight"
								   class="form-control" id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">Гарантия</label>
							<input type="number" value="<?php echo $laptops->warranty ?>" name="warranty"
								   class="form-control" id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">Техналогия экрана</label>
							<input type="text" value="<?php echo $laptops->screen_tech ?>" name="screen_tech"
								   class="form-control" id="exampleInputEmail1">
							<hr>
							<label for="exampleInputEmail1">Цена</label>
							<input type="number" value="<?php echo $laptops->price ?>" name="price"
								   class="form-control" id="exampleInputEmail1">
							<hr>

							<label for="">Фото товара</label> <br>
							<input type="file" accept=".jpg, .jpeg, .png" name="image" id="" value="<?= $laptops->image_name ?>">
							<hr>

							<button type="submit" class="btn btn-primary mt-5">Обновить</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
