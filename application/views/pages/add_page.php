<div style=" padding: 50px 0; background: linear-gradient(90deg, #faf0cd, #fab397); ">
	<div class="container ">
		<!--	Здесь base_url('form/save_data') указывает на контроллер Form и метод save_data	-->
		<form action="<?php echo base_url('InsertController/index') ?>" method="post" enctype="multipart/form-data">
			<label for="">Выберите категорию</label>
			<select class="form-control"  name="categories">
				<option value="laptop">Laptop</option>
				<option value="smartphone">Smartphone</option>
				<option value="tablet">Tablet</option>
				<option value="TV">TV</option>
			</select>
			<hr>
			<!-- Производитель -->
			<label for="manufacturer">Производитель</label>
			<input type="text" name="manufacturer" class="form-control" id="manufacturer">
			<small><?php echo form_error('manufacturer'); ?></small>
			<hr>

			<!-- Модель -->
			<label for="model">Модель</label>
			<input type="text" name="model" class="form-control" id="model">
			<small><?php echo form_error('model'); ?></small>
			<hr>
			<!-- Операционная система -->
			<label for="OS">Операционная система</label>
			<input type="text" name="OS" class="form-control" id="OS">
			<small><?php echo form_error('OS'); ?></small>
			<hr>
			<label for="color">Цвет</label>
			<input type="text" name="color" class="form-control" id="color">
			<small><?php echo form_error('color'); ?></small>
			<hr>
			<label for="diagonal">Диоганаль экрана</label>
			<input type="number" name="diagonal" class="form-control" id="diagonal">
			<small><?php echo form_error('diagonal'); ?></small>
			<hr>
			<label for="memory">RAM</label>
			<input type="number" name="memory" class="form-control" id="memory">
			<small><?php echo form_error('memory'); ?></small>
			<hr>
			<label for="internal_memory">Встроенная Память</label>
			<input type="number" name="internal_memory" class="form-control" id="internal_memory">
			<small><?php echo form_error('internal_memory'); ?></small>
			<hr>
			<label for="camera">Камера</label>
			<input type="text" name="camera" class="form-control" id="camera">
			<small><?php echo form_error('camera'); ?></small>
			<hr>
			<label for="accumulator">Аккумулятор</label>
			<input type="number" name="accumulator" class="form-control" id="accumulator">
			<small><?php echo form_error('accumulator'); ?></small>
			<hr>
			<label for="height">Высота</label>
			<input type="number" name="height" class="form-control" id="height">
			<small><?php echo form_error('height'); ?></small>
			<hr>
			<label for="width">Ширина</label>
			<input type="number" name="width" class="form-control" id="width">
			<small><?php echo form_error('width'); ?></small>
			<hr>
			<label for="weight">Вес</label>
			<input type="number" name="weight" class="form-control" id="weight">
			<small><?php echo form_error('weight'); ?></small>
			<hr>
			<label for="warranty">Гарантия</label>
			<input type="number" name="warranty" class="form-control" id="warranty">
			<small><?php echo form_error('warranty'); ?></small>
			<hr>
			<label for="screen_tech">Техналогия экрана</label>
			<input type="text" name="screen_tech" class="form-control" id="screen_tech">
			<small><?php echo form_error('screen_tech'); ?></small>
			<hr>
			<label for="price">Цена</label>
			<input type="number" name="price" class="form-control" id="price">
			<small><?php echo form_error('price'); ?></small>
			<hr>
			<label for="discount">Скидка</label>
			<input type="number" name="discount" class="form-control" id="discount">
			<small><?php echo form_error('discount'); ?></small>
			<hr>
			<label for="available">Вналичии</label>
			<input type="number" name="available" class="form-control" id="available">
			<small><?php echo form_error('available'); ?></small>
			<hr>
			<label for="image">Фото товара</label> <br>
			<input type="file" name="image" id="image">
			<hr>


			<button type="submit" class="btn btn-primary mt-5">Загрузить в БД</button>
		</form>
	</div>

</div>
