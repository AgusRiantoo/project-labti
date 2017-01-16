<div class="section-padding">
  <div class="container">
    <div class="row" style="min-height: 550px;background-color: #fafafa">
      <div style="padding: 50px;">
        <h1><?php echo $query['judul'] ?></h1>
        <h4><?php echo $query['isi']; ?></h4>
      </div>
    </div>
  </div>
</div>

<?php if ($query['id'] == 3): ?>
  <!--CTA2 START-->
<div class="cta2">
  <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7931.264382993873!2d106.82189221478882!3d-6.311954872208299!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9dd2a3f5ab5069a!2sRagunan+Zoo!5e0!3m2!1sen!2sid!4v1484574987673" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
<!--CTA2 END-->

  
<?php endif ?>
