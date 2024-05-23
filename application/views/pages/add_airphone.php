<div style=" padding: 50px 0; background: linear-gradient(90deg, #faf0cd, #fab397); ">
	<div class="container ">
		<!--	Здесь base_url('form/save_data') указывает на контроллер Form и метод save_data	-->
		<form action="<?php echo base_url('InsertController/insert_airphone') ?>" method="post" enctype="multipart/form-data">

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

			<label for="color">Цвет</label>
			<input type="text" name="color" class="form-control" id="color">
			<small><?php echo form_error('color'); ?></small>
			<hr>

			<label for="type">Тип</label>
			<input type="text" name="type" class="form-control" id="type">
			<small><?php echo form_error('type'); ?></small>
			<hr>

			<label for="connect">Подключение</label>
			<input type="text" name="connect" class="form-control" id="connect">
			<small><?php echo form_error('connect'); ?></small>
			<hr>
			<label for="design">Конструкция</label>
			<input type="text" name="design" class="form-control" id="design">
			<small><?php echo form_error('design'); ?></small>
			<hr>
			<label for="made_in">Страна производителя</label>
			<input type="text" name="made_in" class="form-control" id="made_in">
			<small><?php echo form_error('made_in'); ?></small>
			<hr>
			<label for="warranty">Гарантия</label>
			<input type="number" name="warranty" class="form-control" id="warranty">
			<small><?php echo form_error('warranty'); ?></small>
			<hr>
			<label for="price">Цена</label>
			<input type="number" name="price" class="form-control" id="price">
			<small><?php echo form_error('price'); ?></small>
			<hr>
			<label for="discount">Скидка</label>
			<input type="number" name="discount" class="form-control" id="discount">
			<small><?php echo form_error('discount'); ?></small>
			<hr>
			<label for="availble">Вналичии</label>
			<input type="number" name="availble" class="form-control" id="availble">
			<small><?php echo form_error('available'); ?></small>

			<hr>
			label for="rating">Рейтинг товара(временный костыль)</label>
			<input type="number" min="4.50" max="9.90" step="any" name="rating" class="form-control" id="rating">
			<small><?php echo form_error('rating'); ?></small>
			<hr>
			<label for="image">Фото товара</label> <br>
			<input type="file" name="image" id="image">
			<hr>


			<button type="submit" class="btn btn-primary mt-5">Загрузить в БД</button>
		</form>
	</div>

</div>
