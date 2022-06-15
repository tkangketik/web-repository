<section class='content'>
	<div class='row'>
		<div class='col-xs-12'>
			<div class='box'>
				<div class='box-header'>
					<h3 class='box-title'>REPOSITORY</h3>
					<div class='box box-primary'>
						<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
							<table class='table table-bordered'>
								<tr>
									<td>Tanggal </td>
									<td><input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>"/>
									</td>
								<tr>
									<td>Nama Pemilik </td>
									<td>
										<!-- <select class="form-control" name="id_author">
											<option value="">- Pilih Pemilik -</option>
											<?php foreach ($authors->result() as $row1) : ?>
												<option value="<?php echo $row1->id; ?>"><?php echo $row1->author; ?></option> 
											<?php endforeach; ?>
										</select> --> 
										<input type="text" name="nama" class="form-control" placeholder="Nama" required>
										<input type="hidden" name="username" class="form-control" value="<?= $_SESSION['username'];?>">
									</td>
								<tr>
									<td>Tipe </td>
									<td>
										<input type="text" name="tipe" class="form-control" placeholder="Tipe" required>
									</td>
								<tr>
									<td>Jenis foto </td>
									<td>
										<select class="form-control" name="id_prodi">
											<option value="">- Pilih jenis -</option>
											<?php foreach ($prodi->result() as $row3) : ?>
												<option value="<?php echo $row3->id; ?>"><?php echo $row3->program_studi; ?></option>
											<?php endforeach; ?>
										</select>
									</td>
								<tr>
									<td>Judul </td>
									<td><input type="text" class="form-control" name="title" id="title" placeholder="Judul" required>
										<input type="hidden" class="form-control" rows="8" name="description" id="description" placeholder="Description">
									</td>
								<tr>
									<td>Foto yang di-enkripsi(.jpg/.png ) </td>
									<td><input type="file" class="form-control" name="thumbnail" />
									</td>
								<tr>
									<td colspan='2'><button type="submit" class="btn btn-primary">Simpan</button>
										<a href="<?php echo site_url('repository') ?>" class="btn btn-default">Cancel</a>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
</section>