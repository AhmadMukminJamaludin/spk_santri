 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Alternatif Kriteria
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Santri</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                  <?php 
                  $nomor = 0;
                  foreach ($kriteria as $data) {
                  
                  ?>
                <form action="<?php echo $base_url; ?>kriteria/proses_edit" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Santri</label>
              <div class="controls">
                <select name="nisn" data-placeholder="Pilih Santri..." class="form-control">
                  <?php
                  foreach ($santri as $s) {
                  
                  ?>
                    <option value="<?php echo $s->nisn; ?>" <?php if($s->nisn == $data->nisn){ echo "selected"; } ?> ><?php echo $s->nama_santri; ?></option>
                    <?php
                    }
                    ?>
                </select>
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Umur</label>
              <div class="controls">
                <input type="text" name="c1" class="form-control" value="<?php echo $data->c1; ?>">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Rata-Rata Rapot</label>
              <div class="controls">
                <input type="text" name="c2" class="form-control" value="<?php echo $data->c2; ?>">
              </div>
            </div>

           <div class="control-group">
              <label class="control-label">Hafalan Al-Quran</label>
              <div class="controls">
                <input type="text" name="c3" class="form-control" value="<?php echo $data->c3; ?>">
              </div>
            </div>

           <div class="control-group">
              <label class="control-label">Penghasilan Ortu</label>
              <div class="controls">
                <input type="text" name="c4" class="form-control" value="<?php echo $data->c4; ?>">
              </div>
            </div>

           <div class="control-group">
              <label class="control-label">Sertifikat</label>
              <div class="controls">
                <input type="text" name="c5" class="form-control" value="<?php echo $data->c5; ?>">
              </div>
            </div>

           <div class="control-group">
              <label class="control-label">Rata-Rata Akhir</label>
              <div class="controls">
                <input type="text" name="c6" class="form-control" value="<?php echo $data->c6; ?>">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Tahun</label>
              <div class="controls">
                <input type="text" value="<?php echo $data->tahun; ?>" name="thn" class="form-control">
                <input type='hidden' name="id" value="<?php echo $data->id_kriteria; ?>">
              </div>
            </div>
            
            <div class="form-actions">
              <button type="submit" name="simpan" value="Simpan" class="btn btn-success">Simpan</button>
             <button type="reset" name="reset" value="reset" class="btn btn-danger">Reset</button>
            </div>
          </form>
                <?php
                }
                ?>
              
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
