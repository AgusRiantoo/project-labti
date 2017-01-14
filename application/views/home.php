<div class="container">
  <h3>ARTIKEL</h3>
  <table class="table table-bordered table-striped">
    <thead>
      <th>No.</th>
      <th>Judul</th>
      <th>Konten</th>
      <th>Create At</th>
      <th>Action</th>
    </thead>
    <tbody>
    <?php
    $no=1;
    foreach ($query as $row){
    ?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row->judul;?></td>
        <td><?php echo $row->artikel;?></td>
        <td><?php echo $row->create_at;?></td>
        <td>
        <?php echo anchor(base_url('artikel/update/'.$row->id),'Update'); ?>
        |
        <?php echo anchor(base_url('artikel/delete/'.$row->id),'Delete'); ?>  
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

  <div class="row">
    <div class="col-md-12">
      <a href="<?php echo base_url();?>artikel/tambah" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>