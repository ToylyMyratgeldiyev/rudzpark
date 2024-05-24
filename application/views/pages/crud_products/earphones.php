<div class="container">


	<div class="row">
		<div class="col-md-12 mt-4">
			<div class="card">
				<div class="card-header">
					<h4 class="text-center m-3">Earphones
						<img src="/application/assets/img/icons/headphones.png" alt="" style="width: 30px">
					</h4>
					<div class="btn-group d-flex justify-content-center m-5">
						<a href="<?php echo base_url('/admin'); ?>" style="color:white; text-decoration:none;">
							<button class="btn btn-danger">
								Back
							</button>
						</a>
						<br>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-border">
						<thead>

						<tr>
							<th>Производитель</th>
							<th>Модель</th>
							<th>Цвет</th>
							<th>Тип подключение</th>
							<th>Цена</th>
							<th>Edit</th>
							<th>Delete</th>

						</tr>
						</thead>
						<tbody>
						<?php foreach ($earphones as $row ) : ?>
							<tr>
								<td><?= $row->manufacturer; ?></td>
								<td><?= $row->model; ?></td>
								<td><?= $row->color; ?></td>
								<td><?= $row->connect; ?></td>
								<td><?= $row->price; ?></td>
								<td><a href="<?php echo base_url('/editearphone/'.$row->id); ?>" class="btn btn-success btm-sm">Edit</a></td>
								<td><a href="<?= base_url('deleteEarphone/'.$row->id) ?>" class="btn btn-danger btm-sm">Delete</a></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>


</div>


