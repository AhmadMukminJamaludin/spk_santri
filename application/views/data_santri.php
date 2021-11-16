 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Santri
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
      </div>
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Santri</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo $base_url; ?>Santri/tambah" class="btn btn-success">+ Tambah Santri</a>
              <br>
              <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NISN</th>
                  <th>Nama Santri</th>
                  <th>Jenis Kelamin</th>
                  <th>Asal Sekolah</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $nomor = 0;
                  foreach ($santri as $row) {
                  
                  ?>
                <tr>
                  <td><?php echo $nomor=$nomor+1; ?></td>
         <td><?php echo $row->nisn; ?></td>
         <td><?php echo $row->nama_santri; ?></td>
         <td><?php echo $row->jenis_kelamin; ?></td>
         <td><?php echo $row->asal_sekolah; ?></td>
         <td><?php echo "<a href=Santri/delete?nisn=$row->nisn class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a>" ?>  <?php echo "<a href=Santri/edit?nisn=$row->nisn class='btn btn-sm btn-info'><i class='fa fa-edit'></i></a>" ?></td>
                </tr>
                <?php
                }
                ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
     </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->