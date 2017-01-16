<br><br><br>
<?php foreach ($query as $row): ?>
	<?php if ($row->id > 3): ?>
		<div class="section-padding">
		  <div class="container">
		    <div class="row" style="min-height: 550px;background-color: #fafafa">
		      <div style="padding: 50px;">
		        <h1><?php echo $row->judul; ?></h1>
		        <h4><?php echo $row->isi; ?></h4>
		      </div>
		    </div>
		  </div>
		</div>		
	<?php endif ?>

<?php endforeach ?>