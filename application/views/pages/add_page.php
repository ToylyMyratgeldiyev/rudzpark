<div style=" padding: 50px 0; background: linear-gradient(90deg, #faf0cd, #fab397); ">
    <div class="container ">
		<!--	Здесь base_url('form/save_data') указывает на контроллер Form и метод save_data	-->
        <form action="<?php echo base_url('AdminController/store') ?>" method="POST">

            <!-- Производитель -->
            <label for="exampleInputEmail1" >Производитель</label>
            <input type="text" name="manufacturer" class="form-control" id="exampleInputEmail1">
            <hr>

            <!-- Модель -->
            <label for="exampleInputEmail1">Модель</label>
            <input type="text" name="model" class="form-control" id="exampleInputEmail1">
            <hr>
            <!-- Операционная система -->
            <label for="exampleInputEmail1">Операционная система</label>
            <input type="text" name="OS" class="form-control" id="exampleInputEmail1">
            <hr>
            <label for="exampleInputEmail1">Цвет</label>
            <input type="text" name="color" class="form-control" id="exampleInputEmail1">
            <hr>
            <label for="exampleInputEmail1">Диоганаль экрана</label>
            <input type="number" name="diagonal" class="form-control" id="exampleInputEmail1">
            <hr>
            <label for="exampleInputEmail1">RAM</label>
            <input type="number" name="memory" class="form-control" id="exampleInputEmail1">
            <hr>
            <label for="exampleInputEmail1">Встроенная Память</label>
            <input type="number" name="internal_memory" class="form-control" id="exampleInputEmail1">
            <hr>
            <label for="exampleInputEmail1">Камера</label>
            <input type="text" name="camera" class="form-control" id="exampleInputEmail1">
            <hr>
            <label for="exampleInputEmail1">Аккумулятор</label>
            <input type="number" name="accumulator" class="form-control" id="exampleInputEmail1">
            <hr>
            <label for="exampleInputEmail1">Высота</label>
            <input type="number" name="height" class="form-control" id="exampleInputEmail1">
            <hr>
            <label for="exampleInputEmail1">Ширина</label>
            <input type="number" name="width" class="form-control" id="exampleInputEmail1">
            <hr>
            <label for="exampleInputEmail1">Вес</label>
            <input type="number" name="weight" class="form-control" id="exampleInputEmail1">
            <hr>
            <label for="exampleInputEmail1">Гарантия</label>
            <input type="number" name="warranty" class="form-control" id="exampleInputEmail1">
			<hr>
			<label for="exampleInputEmail1">Техналогия экрана</label>
            <input type="text" name="screen_tech" class="form-control" id="exampleInputEmail1">
            <hr>
			<label for="exampleInputEmail1">Цена</label>
            <input type="number" name="price" class="form-control" id="exampleInputEmail1">
            <hr>
            <label for="exampleFormControlSelect1">Разъем для питания</label>
            <select class="form-control" name="connect" id="exampleFormControlSelect1">
                <option value="micro_usb">micro-USB</option>
                <option value="lightning">Lightning</option>
                <option value="type_c">Type-C</option>
            </select>

            <button type="submit" class="btn btn-primary mt-5">Загрузить в БД</button>
        </form>
    </div>

</div>
