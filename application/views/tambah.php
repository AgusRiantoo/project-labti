<div class="container">
	<h3>Tambah Data</h3>
	<br>
	<form class="form" action="<?php echo base_url('artikel/tambah');?>" method="POST">
	
	<div class="form-group">
		<label>Judul</label>
		<input type="text" class="form-control" name="judul" required="true">
	</div>

	<div class="form-group">
		<label>Artikel</label>
		<textarea name="artikel" class="form-control"></textarea>
	</div>

	<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
</div>