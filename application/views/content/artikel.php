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
                    <h2>Daftar Artikel</h2>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <table class="table table-striped">
                        <thead>
                          <th>No.</th>
                          <th>Judul</th>
                          <th>Isi</th>
                          <th>Gambar</th>
                          <th>Dibuat Pada</th>
                          <th></th>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        foreach ($query as $row) { ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row->judul; ?></td>
                            <td><?php echo $row->isi; ?></td>
                            <td><?php echo $row->gambar; ?></td>
                            <td><?php echo $row->create_at; ?></td>
                            <td>
                              <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Aksi <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Edit</a></li>
                                  <li><a href="#">Delete</a></li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>

                      <div class="form-group">
                        <div class="row">
                          <a href="<?php echo base_url('admin/tambahartikel'); ?>" class="btn btn-success">
                          Tambah
                          </a>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->