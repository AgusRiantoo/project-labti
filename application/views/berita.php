<br><br><br>
<?php foreach ($query as $row): ?>
	<?php if ($row->id > 3): ?>
		<div class="section-padding">
		  <div class="container">
		    <div class="row" style="background-color: #fafafa">
		      <div style="padding: 20px 50px;">
		        <h1><?php echo $row->judul; ?></h1>
		        <p><?php echo $row->create_at; ?></p>
		        <div class="row">
		        	<div class="col-md-6">
		        		<img src="<?php echo base_url('images/'.$row->gambar); ?>" height="250px">
		        	</div>
		        	<div class="col-md-6">
		        		<h4><?php echo substr($row->isi, 0,350); ?></h4>
		        		<a href="<?php echo base_url('page/view/'.$row->id); ?>" class="btn btn-primary">Read more..</a>
		        	</div>
		        </div>
		        <br><br>
		      </div>
		    </div>
		  </div>
		</div>		
	<?php endif ?>

<?php endforeach ?>