<br><br><br>
<?php foreach ($query as $row): ?>
	<?php if ($row->id > 3): ?>
		<div class="section-padding">
		  <div class="container">
		    <div class="row" style="min-height: 550px;background-color: #fafafa">
		      <div style="padding: 50px;">
		        <h1><?php echo $row->judul; ?></h1>
		        <img src="<?php echo base_url('images/'.$row->gambar); ?>" height="250px">
		        <h4><?php echo substr($row->isi, 0,350); ?>....</h4>
		        <a href="<?php echo base_url('page/view/'.$row->id); ?>" class="btn btn-primary">Read more..</a>
		      </div>
		    </div>
		  </div>
		</div>		
	<?php endif ?>

<?php endforeach ?>