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
                    <h2>Daftar Galery</h2>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <table class="table table-striped">
                        <thead>
                          <th>No.</th>
                          <th>File</th>
                          <th>Kategori</th>
                          <th>Deskripsi</th>
                          <th>Dibuat Pada</th>
                          <th></th>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        foreach ($query as $row) { ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td>
                              <?php if ($row->kategori == "gambar") : ?>
                                <img src="<?php echo base_url('images/'.$row->file); ?>" width="175px">
                              <?php else: ?>
                                <video controls width="175px">
                                  <source src="<?php echo base_url('video/'.$row->file); ?>" type="video/mp4"">
                                </video>
                              <?php endif; ?>

                            </td>
                            <td><?php echo $row->kategori; ?></td>
                            <td><?php echo $row->deskripsi; ?></td>
                            <td><?php echo $row->create_at; ?></td>
                            <td>
                              <div class="btn-group">
                                <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Aksi <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a href="<?php echo base_url('page/galery/'.$row->id); ?>">Lihat</a></li>
                                  <li><a href="<?php echo base_url('admin/hapusgalery/'.$row->id); ?>">Hapus</a></li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>

                      <div class="form-group">
                        <div class="row">
                          <a href="<?php echo base_url('admin/tambahgalery'); ?>" class="btn btn-success">
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