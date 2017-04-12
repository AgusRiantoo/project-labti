<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Galery</h3>
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
                  <form action="<?php echo base_url('admin/posting'); ?>" method="post" enctype="multipart/form-data">
                  <div class="row form-group">
                    <label class="control-label">File :</label>
                    <input type="file" name="input_file" class="control-file" accept="image/*|video/*" required>
                  </div>
                  <div class="row form-group">
                    <label class="form-data">Kategori :</label>
                    <select class="form-control" name="kategori">
                      <option value="gambar">Gambar</option>
                      <option value="video">Video</option>
                    </select>
                  </div>
                  <div class="row form-group">
                    <label class="control-label">Deskripsi :</label>
                    <textarea name="deskripsi" class="form-control" placeholder="Masukan isi"></textarea>
                  </div>
                  <br>
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