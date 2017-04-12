<div class="section-padding">
  <div class="container">
    <div class="row" style="min-height: 550px;background-color: #fafafa">
      <div style="padding: 50px;">
      <?php if ($query['kategori'] == "gambar") : ?>
      		<img src="<?php echo base_url('images/'.$query['file']); ?>" width="100%">
      <?php else: ?>
			<video controls width="100%">
				<source src="<?php echo base_url('video/'.$query['file']); ?>" type="video/mp4"">
			</video>
      <?php endif; ?>
         <p>Dibuat pada : <?php echo $query['create_at'] ?></p>
        <h4><?php echo $query['deskripsi']; ?></h4>
      </div>
    </div>
  </div>