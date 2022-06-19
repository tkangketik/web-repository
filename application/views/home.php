<h4>Foto Terbaru</h4>
<hr>
<table id="example" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th width="80px">No</th>
			<th>Nama</th>
			<th>Gambar</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$start = 0;
		foreach ($data->result() as $row) { ?>
			<tr>
				<td><?php echo ++$start ?>.</td>
				<td><a href="<?= base_url() ?>home/single/<?= $row->id ?>" class="font-weight-bold" style="margin-bottom: 1px"><?php echo $row->title ?></a></td>
				<td><a href="<?= base_url() ?>home/single/<?= $row->id ?>" class="font-weight-bold" style="margin-bottom: 1px"><img style="width:300px" class="img-thumbnail" src="<?= base_url() ?>uploads/<?php echo $row->thumbnail; ?>"></a></td>
			</tr>
		<?php } ?>
	</tbody>
</table>