 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      
     <div class="row">
      <form action="" method="get" class="form-horizontal">
          <div class="col-xs-4">
              <label class="control-label" name="tahun">Tahun</label>
              <div class="controls">
                <select name="t" class="form-control">
                  <?php
                  foreach ($thn as $tahun) {
                    
                    echo "<option value=".$tahun->tahun.">".$tahun->tahun."</option>";
                  }
                  ?>
                </select>
              </div>
          </div>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-3">

                <button type="submit" value="submit" name="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
     <br>
     <?php
     if (isset($_GET['t'])) {
     ?>
     <div class="row">
       <div class="box">
         <div class="box-body">
           <table class="table table-bordered data-table">
              <thead>
                <tr>
             <th width="5%">No</th>
             <th width="10%">NISN</th>
              <th width="20%">Nama</th>
              <th width="30%">Asal Sekolah</th>
              <th width="10%">Nilai</th>
              <th width="25%">Keterangan</th>
        </tr>
              </thead>
              <tbody>
            <?php 
        $nomor = 0;
        $tahun = $_GET['t'];;
        $query = $this->db->query("select * from tabel_ranking inner join tabel_santri on tabel_ranking.nisn=tabel_santri.nisn where tabel_ranking.tahun='$tahun' order by tabel_ranking.nilai DESC")->result();
        
        foreach ($query as $data) {
          
              ?>
              <tr>
                <th><?php echo $nomor=$nomor+1; ?></th>
                <td><?php echo $data->nisn; ?></td>
                <td><?php echo $data->nama_santri; ?></td>
                <td><?php echo $data->asal_sekolah; ?></td>
                <td><?php echo $data->nilai; ?></td>
                <td><?php if($nomor == 1){ echo "Terpilih sebagai santri penerima beasiswa berprestasi"; } ?></td>
              </tr>

            <?php

        }
      
             ?>
              </tbody>
            </table>
         </div>
       </div>
     </div>
     <div class="row">
       
          <center><a href="<?php echo $base_url; ?>laporan/cetak?t=<?php echo $tahun;?>" class="btn btn-primary fa fa-print">Cetak Laporan</a></center>
        <?php } ?>
          
        
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