<br><br><br>
<?php foreach ($query as $row): ?>
	<div class="section-padding">
	  <div class="container">
	    <div class="row" style="background-color: #fafafa">
	      <div style="padding: 50px;">
	      <div class="row">
	      	<div class="col-md-6 col-xs-12">
	        <?php if ($row->kategori == "gambar") : ?>
	        	<img src="<?php echo base_url('images/'.$row->file); ?>" width="450px">
	        <?php else: ?>
	        	<video controls width="450px">
                      <source src="<?php echo base_url('video/'.$row->file); ?>" type="video/mp4"">             
                 </video>
	        <?php endif; ?>
	      	</div>
	      	<div class="col-md-6 col-xs-12">
		        <h4><?php echo substr($row->deskripsi, 0,350); ?></h4>
		        <a href="<?php echo base_url('page/galery/'.$row->id); ?>" class="btn btn-primary">Read more..</a>
	      	</div>
	      </div>
	      </div>
	    </div>
	  </div>
	</div>		

<?php endforeach ?>