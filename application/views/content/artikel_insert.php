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
                  <form action="<?php base_url('admin/tambahartikel'); ?>" method="post" enctype="multipart/form-data">
                  <div class="row form-group">
                    <label class="control-label">Judul :</label>
                    <input type="text" name="judul" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                  <div class="row form-group">
                    <label class="control-label">Deskripsi :</label>
                    <textarea name="isi" class="form-control" placeholder="Masukan isi"></textarea>
                  </div>
                  <br>
                  <div class="row form-group">
                    <label class="control-label">Gambar :</label>
                    <input type="file" name="gambar" class="control-file">
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