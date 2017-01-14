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
                  <form action="<?php base_url('admin/tambahartikel'); ?>" method="post">
                  <div class="row form-group">
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Judul <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="judul" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <br>
                  <div class="row form-group">
                    <textarea name="isi" class="form-control"></textarea>
                  </div>
                  <br>
                  <div class="row form-group">
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Gambar</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="file" name="gambar" class="form-control col-md-7 col-xs-12">
                    </div>
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