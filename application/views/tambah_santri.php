 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Santri
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Santri</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                  
                <form action="<?php echo $base_url; ?>santri/simpan" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">NISN</label>
              <div class="controls">
                <input type="text" class="form-control" name="nisn" placeholder="nisn" />
              </div>
           
              <label class="control-label">Nama Santri</label>
              <div class="controls">
                <input type="text" class="form-control" name="nama_santri" placeholder="Nama Santri" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jenis Kelamin</label>
              <div class="controls">
                <label>
                  <input type="radio" name="jenis_kelamin" value="Laki-laki" />
                  Laki-laki</label>
                <label>
                  <input type="radio" name="jenis_kelamin" value="Perempuan" />
                  Perempuan</label>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Asal Sekolah</label>
              <div class="controls">
                <textarea class="form-control" name="asal_sekolah" ></textarea>
              </div>
            </div>       
            <br>
            <br>
            <div class="form-actions">
              <button type="submit"  name="submit" value="Simpan" class="btn btn-success">Simpan</button>
        <input type="reset" name="reset" value="Reset" class="btn btn-danger"></center>
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
