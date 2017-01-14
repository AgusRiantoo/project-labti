<div class="container">
	<h3>Update Data</h3>
	<br>
	<form class="form" action="<?php echo base_url('artikel/update/'.$query['id']);?>" method="POST">
	
	<div class="form-group">
		<label>Judul</label>
		<input type="text" class="form-control" name="judul" required="true" value="<?php echo $query['judul'];?>">
	</div>

	<div class="form-group">
		<label>Artikel</label>
		<textarea name="artikel" class="form-control"><?php echo $query['artikel'];?></textarea>
	</div>

	<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
</div>