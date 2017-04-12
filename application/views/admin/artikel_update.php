<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Artikel</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $judul; ?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="<?php base_url('admin/update'); ?>" method="post" enctype="multipart/form-data">
                  <div class="row form-group">
                    <label class="control-label">Judul:</label>
                    <input type="text" name="judul" value="<?php echo $row['judul']; ?>" required="required" class="form-control">
                  </div>
                  <br>
                  <div class="row form-group">
                    <label class="control-label">Deskripsi :</label>
                    <textarea name="isi" class="form-control"><?php echo $row['isi']; ?></textarea>
                  </div>
                  <br>
                  <?php if (($row['gambar'])) { ?>
                  <div class="row form-group">
                    <label class="control-label">Gambar Lama</label>
                    <br>
                    <img src="<?php echo base_url('images/'.$row['gambar']); ?>" width="350px">
                    <input type="hidden" name="gambar_lama" value="<?php echo $row['gambar']; ?>">
                  </div>
                  <?php } ?>
                  <br>
                  <div class="row form-group">
                    <label class="control-label">Gambar baru</label>
                    <br>
                    <input type="file" name="gambar">
                  </div>
                  <br>
                  <div class="row form-group">
                    <center>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </center>
                  </div>

                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->