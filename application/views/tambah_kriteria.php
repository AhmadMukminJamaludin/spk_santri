 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Alternatif Kriteria
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
              
                  
                <form action="<?php echo $base_url; ?>kriteria/proses_simpan" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Santri</label>
              <div class="controls">
                <select name="nisn" data-placeholder="Pilih Santri..." class="form-control">
                  <?php 
                  foreach ($santri as $data) {
                  ?>
                    <option value="<?php echo $data->nisn; ?>" ><?php echo $data->nama_santri; ?></option>
                    <?php
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Umur</label>
              <div class="controls">
                <input type="text" name="c1" class="form-control">
            </div>

            </div>
             <div class="control-group">
              <label class="control-label">Rata-Rata Nilai Rapot</label>
              <div class="controls">
                <input type="text" name="c2" class="form-control">
              </div>
            </div>

           <div class="control-group">
              <label class="control-label">Hafalan Al-Quran</label>
              <div class="controls">
                <input type="text" name="c3" class="form-control">
              </div>
            </div>

           <div class="control-group">
              <label class="control-label">Penghasilan Orang Tua</label>
              <div class="controls">
                <input type="text" name="c4" class="form-control">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Jumlah Sertifikat</label>
              <div class="controls">
                <input type="text" name="c5" class="form-control">
              </div>
           </div>

           <div class="control-group">
              <label class="control-label" >Rata-Rata Nilai Akhir</label>
              <div class="controls">
                <input type="text" name="c6" class="form-control">
              </div>
           </div> 

           <div class="control-group">
              <label class="control-label">Tahun</label>
              <div class="controls">
                <input type="text" name="c7" class="form-control">
              </div>
           </div> 

           <div class="form-actions">
              <button type="submit" name="simpan" value="Simpan" class="btn btn-success">Simpan</button>
             <button type="reset" name="reset" value="reset" class="btn btn-danger">Reset</button>
           </div>
          </form>

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
