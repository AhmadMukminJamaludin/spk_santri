<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Proses Hitung ARAS
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     <!--End-breadcrumbs-->
<div class="container-fluid">
<div class="row-fluid">
    <div class="span11">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          
        </div>
    <div class="widget-content nopadding">
      <form action="" method="post" class="form-horizontal">
      <div class="row">
            <div class="col-xs-4">
              <label class="control-label" name="tahun">Tahun</label>
              <div class="controls">
                <select name="tahun" class="form-control">
                  <?php
                  foreach ($tahun as $tahun) {
                    
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
                <button type="submit" value="Aras" name="simpan" class="btn btn-success">Proses Hitung ARAS</button>
            </div>
          </div>
        </form>
        <br>
        <hl>
        <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Matriks Keputusan</h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama Santri</th>
                  <th class="text-center">C1</th>
                  <th class="text-center">C2</th>
                  <th class="text-center">C3</th>
                  <th class="text-center">C4</th>
                  <th class="text-center">C5</th>
                  <th class="text-center">C6</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                if (isset($_POST['simpan']) && isset($_POST['tahun'])) {
                    $tahun = $_POST['tahun'];
                    $kriteria = $this->db->query("SELECT * from tabel_kriteria LEFT JOIN tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tahun='$tahun'")->result();
                    $nomor = 0;
                  foreach ($kriteria as $row) {
                  
                  ?>
                <tr>
                  <td align="center"><?php echo $nomor=$nomor+1; ?></td>
                  <td><?php echo $row->nama_santri; ?></td>
                  <td align="center"><?php echo $row->c1; ?></td>
                  <td align="center"><?php echo $row->c2; ?></td>
                  <td align="center"><?php echo $row->c3; ?></td>
                  <td align="center"><?php echo $row->c4; ?></td>
                  <td align="center"><?php echo $row->c5; ?></td>
                  <td align="center"><?php echo $row->c6; ?></td>
                </tr>
                <?php
                }
              }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    <hr>
      <div class="row">
      <h4 align="center">
        <?php 
        if (isset($_POST['simpan']) && isset($_POST['tahun'])) {
          $tahun = $_POST['tahun'];
            $bobot = $this->db->query("select * from tabel_bobot")->result();
            foreach($bobot as $c){
            $bobot_c1 = $c->w1;
            $bobot_c2 = $c->w2;
            $bobot_c3 = $c->w3;
            $bobot_c4 = $c->w4;
            $bobot_c4 = $c->w5;
            $bobot_c4 = $c->w6;
            
            }
            
        ?>
        </h4>
      </div>
        
  <hr>
  <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Nilai Bobot</h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
          <th>W1</th>
          <th>W2</th>
          <th>W3</th>
          <th>W4</th>
          <th>W5</th>
          <th>W6</th>
        </tr>
              </thead>
              <tbody>
                <?php 
           $bobot_c1 = 0;
           $bobot_c2 = 0;
           $bobot_c3 = 0;
           $bobot_c4 = 0;        
           $bobot_c5 = 0;  
           $bobot_c6 = 0;  
          if (isset($_POST['simpan']) && isset($_POST['tahun'])) {
            $bobot = $this->db->query("select * from tabel_bobot")->result();
          foreach($bobot as $c){
            $bobot_c1 = $c->w1;
            $bobot_c2 = $c->w2;
            $bobot_c3 = $c->w3;
            $bobot_c4 = $c->w4;
            $bobot_c5 = $c->w5;
            $bobot_c6 = $c->w6;
            echo "<tr>";
            echo "<td>" . round($bobot_c1/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4) ."</td>";
            echo "<td>" . round($bobot_c2/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4) ."</td>";
            echo "<td>" . round($bobot_c3/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4) ."</td>";
            echo "<td>" . round($bobot_c4/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4) ."</td>";
            echo "<td>" . round($bobot_c5/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4) ."</td>";
            echo "<td>" . round($bobot_c6/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4) ."</td>";

            $c1 = $c->w1;//round($bobot_c1/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4);
            $c2 = $c->w2;//round($bobot_c2/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4);
            $c3 = $c->w3;//round($bobot_c3/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4);
            $c4 = $c->w4;//round($bobot_c4/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4);
            $c5 = $c->w5;//round($bobot_c5/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4);
            $c6 = $c->w6;//round($bobot_c6/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5+$bobot_c6),4);
          }
        }
          ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    <hr>
  <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5>MENCARI NILAI ALTERNATIF OPTIMAL</h5>
          </div>
          <div class="box-body">
            
                <?php 
                if (isset($_POST['simpan']) && isset($_POST['tahun'])) { 
        $query = $this->db->query("SELECT * from tabel_kriteria inner join tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tabel_kriteria.tahun='$tahun'")->result();
             
            ?>
      
              <div class="box-body">
            <table class="table table-bordered data-table">
          <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Santri</th>
            <th class="text-center">C1</th>
            <th class="text-center">C2</th>
            <th class="text-center">C3</th>
            <th class="text-center">C4</th>
            <th class="text-center">C5</th>
            <th class="text-center">C6</th>
          </tr>
          </thead>
          <tbody>
          <?php 
          if (isset($_POST['simpan']) && isset($_POST['tahun'])) {
            $tahun = $_POST['tahun'];
            $kriteria = $this->db->query("SELECT * from tabel_kriteria LEFT JOIN tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tahun='$tahun'")->result();
            $nomor = 0;
            foreach ($kriteria as $row) {
                  
            ?>
          <tr>
            <td align="center"><?php echo $nomor=$nomor+1; ?></td>
            <td><?php echo $row->nama_santri; ?></td>
            <td align="center"><?php echo $row->c1; ?></td>
            <td align="center"><?php echo $row->c2; ?></td>
            <td align="center"><?php echo $row->c3; ?></td>
            <td align="center"><?php echo $row->c4; ?></td>
            <td align="center"><?php echo $row->c5; ?></td>
            <td align="center"><?php echo $row->c6; ?></td>
          </tr>
          <?php
          }
          }
          ?>
          </tbody>
         

          <?php
          if (isset($_POST['simpan']) && isset($_POST['tahun'])) {
            $tahun = $_POST['tahun'];
            $kriteria = $this->db->query("SELECT * from tabel_kriteria LEFT JOIN tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tahun='$tahun'")->result();
            
            //nilai max
            $this->db->select_min('c1');
            $min1 = $this->db->get('tabel_kriteria')->row();
          
            $this->db->select_max('c2');
            $max2 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_max('c3');
            $max3 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_min('c4');
            $min4 = $this->db->get('tabel_kriteria')->row();
            
            $this->db->select_max('c5');
            $max5 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_max('c6');
            $max6 = $this->db->get('tabel_kriteria')->row();

            //nilai total
            $this->db->select_sum('c1');
            $tot1 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_sum('c2');
            $tot2 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_sum('c3');
            $tot3 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_sum('c4');
            $tot4 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_sum('c5');
            $tot5 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_sum('c6');
            $tot6 = $this->db->get('tabel_kriteria')->row();


            $total1= ($tot1->c1)+($min1->c1);
            $total2= ($tot2->c2)+($max2->c2);
            $total3= ($tot3->c3)+($max3->c3);
            $total4= ($tot4->c4)+($min4->c4);
            $total5= ($tot5->c5)+($max5->c5);
            $total6= ($tot6->c6)+($max6->c6);

            ?>

            <tfooter>
              <tr>
              <td colspan="2">NILAI OPTIMAL</td>
              <td align="center"><?= $min1->c1; ?></td>
              <td align="center"><?= $max2->c2; ?></td>
              <td align="center"><?= $max3->c3; ?></td>
              <td align="center"><?= $min4->c4; ?></td>
              <td align="center"><?= $max5->c5; ?></td>
              <td align="center"><?= $max6->c6; ?></td>
              </tr>
              <tr>
              <td colspan="2">TOTAL</td>
              <td align="center"><?= $total1; ?></td>
              <td align="center"><?= ($tot2->c2)+($max2->c2); ?></td>
              <td align="center"><?= ($tot3->c3)+($max3->c3); ?></td>
              <td align="center"><?= ($tot4->c4)+($min4->c4); ?></td>
              <td align="center"><?= ($tot5->c5)+($max5->c5); ?></td>
              <td align="center"><?= ($tot6->c6)+($max6->c6); ?></td>
              </tr>
            </tfooter>
          
            <?php
          }
          
          ?>
         </table>
        </div>
      </div>
    </div>
    
    <hr>
    <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5>NORMALISASI MATRIKS</h5>
          </div>
     
       <?php 
                if (isset($_POST['simpan']) && isset($_POST['tahun'])) { 
        $query = $this->db->query("SELECT * from tabel_kriteria inner join tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tabel_kriteria.tahun='$tahun'")->result();
             
            ?>
      
              <div class="box-body">
            <table class="table table-bordered data-table">
          <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Santri</th>
            <th class="text-center">C1</th>
            <th class="text-center">C2</th>
            <th class="text-center">C3</th>
            <th class="text-center">C4</th>
            <th class="text-center">C5</th>
            <th class="text-center">C6</th>
          </tr>
          </thead>
              <tbody>
             <?php 
        if (isset($_POST['simpan']) && isset($_POST['tahun'])) {
            $tahun = $_POST['tahun'];
            $kriteria = $this->db->query("SELECT * from tabel_kriteria LEFT JOIN tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tahun='$tahun'")->result();
            $nomor = 0;
        foreach($kriteria as $row){
         
         $cost1 = 1/($row->c1);
         $cost4 = 1/($row->c4);

		$cost0 = 1/(($min1->c1));			
		$cost00 = 1/(($min4->c4));			

	    	$this->db->select_sum('c1');
            $tott1 = $this->db->get('tabel_normalisasi')->row();
			$tc1 = ($tott1->c1)+$cost0;

			$this->db->select_sum('c4');
            $tott4 = $this->db->get('tabel_normalisasi')->row();
			$tc4 = ($tott4->c4)+$cost00;

              $xij1 = ($cost1)/($tc1);
              $xij2 = ($row->c2)/($total2);
              $xij3 = ($row->c3)/($total3);
              $xij4 = ($cost4)/($tc4);
              $xij5 = ($row->c5)/($total5);
              $xij6 = ($row->c6)/($total6);

              $xijsi1 = ($cost0)/($tc1);
              $xijsi2 = ($max2->c2)/($total2);
              $xijsi3 = ($max3->c3)/($total3);
              $xijsi4 = ($cost00)/($tc4);
              $xijsi5 = ($max5->c5)/($total5);
              $xijsi6 = ($max6->c6)/($total6);

            ?>

       
          <tr>
          <td align="center"><?php echo $nomor=$nomor+1; ?></td>
          <td><?php echo $row->nama_santri; ?></td>
          <td align="center"><?php echo round($xij1,3); ?></td>
          <td align="center"><?php echo round($xij2,3); ?></td>
          <td align="center"><?php echo round($xij3,3); ?></td>
          <td align="center"><?php echo round($xij4,3); ?></td>
          <td align="center"><?php echo round($xij5,3); ?></td>
          <td align="center"><?php echo round($xij6,3); ?></td>
          </tr>
      <?php
               }}
            }
      ?>
              </tbody>
        <tfooter>
        <tr>
          <td colspan="2">A0</td>
          <td align="center"><?php echo round($xijsi1,4); ?></td>
          <td align="center"><?php echo round($xijsi2,4); ?></td>
          <td align="center"><?php echo round($xijsi3,4); ?></td>
          <td align="center"><?php echo round($xijsi4,4); ?></td>
          <td align="center"><?php echo round($xijsi5,4); ?></td>
          <td align="center"><?php echo round($xij6,4); ?></td>

      </tr>
      </tfooter>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    <hr>
    <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5><i>NORMALISASI TERBOBOT</small></h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
      <?php 
                 if (isset($_POST['simpan']) && isset($_POST['tahun'])) { 
        $query = $this->db->query("SELECT * from tabel_kriteria inner join tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tabel_kriteria.tahun='$tahun'")->result();
             
            ?>
      
              <div class="box-body">
            <table class="table table-bordered data-table">
          <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Santri</th>
            <th class="text-center">C1</th>
            <th class="text-center">C2</th>
            <th class="text-center">C3</th>
            <th class="text-center">C4</th>
            <th class="text-center">C5</th>
            <th class="text-center">C6</th>
          </tr>
          </thead>
          <tbody>
              <?php 
                if (isset($_POST['simpan']) && isset($_POST['tahun'])) { 
        $kriteria = $this->db->query("SELECT * from tabel_kriteria LEFT JOIN tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tahun='$tahun'")->result();
            $nomor = 0;
        foreach($kriteria as $row){

      

          $nb1 = (1/($row->c1))/($tc1)*($bobot_c1);
          $nb2 = (($row->c2)/(($tot2->c2)+($max2->c2)))*($bobot_c2);
          $nb3 = (($row->c3)/(($tot3->c3)+($max3->c3)))*($bobot_c3);
          $nb4 =  (1/($row->c4))/($tc4)*($bobot_c4);
          $nb5 = (($row->c5)/(($tot5->c5)+($max5->c5)))*($bobot_c5);
          $nb6 = (($row->c6)/(($tot6->c6)+($max6->c6)))*($bobot_c6);

          $nbsi1 = ($xijsi1)*($bobot_c1);
          $nbsi2 = ($xijsi2)*($bobot_c2);
          $nbsi3 = ($xijsi3)*($bobot_c3);
          $nbsi4 = ($xijsi4)*($bobot_c4);
          $nbsi5 = ($xijsi5)*($bobot_c5);
          $nbsi6 = ($xijsi6)*($bobot_c6);


            ?>
      
          <tr>
          <td align="center"><?php echo $nomor=$nomor+1; ?></td>
          <td><?php echo $row->nama_santri; ?></td>
          <td align="center"><?php echo round($nb1,4); ?></td>
          <td align="center"><?php echo round($nb2,4); ?></td>
          <td align="center"><?php echo round($nb3,4); ?></td>
          <td align="center"><?php echo round($nb4,4); ?></td>
          <td align="center"><?php echo round($nb5,4); ?></td>
          <td align="center"><?php echo round($nb6,4); ?></td>
          </tr>
        <?php
                 }
              }}
        ?>
            
              </tbody>
        <tfooter>
        <tr>
          <td colspan="2">Calculate Si</td>
          <td align="center"><?php echo round($nbsi1,4); ?></td>
          <td align="center"><?php echo round($nbsi2,4); ?></td>
          <td align="center"><?php echo round($nbsi3,4); ?></td>
          <td align="center"><?php echo round($nbsi4,4); ?></td>
          <td align="center"><?php echo round($nbsi5,4); ?></td>
          <td align="center"><?php echo round($nbsi6,4); ?></td>

      </tr>
      </tfooter>
            </table>
          </div>
        </div>
      </div>
    </div>

    <hr>
    <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5><i>Step-4 -  Optimize Value Si</small></h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
      <?php 
                 if (isset($_POST['simpan']) && isset($_POST['tahun'])) { 
        $query = $this->db->query("SELECT * from tabel_kriteria inner join tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tabel_kriteria.tahun='$tahun'")->result();
             
            ?>
      
              <div class="box-body">
            <table class="table table-bordered data-table">
          <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Santri</th>
            <th class="text-center">Si</th>
          </tr>
          </thead>
          <tbody>
              <?php 
                if (isset($_POST['simpan']) && isset($_POST['tahun'])) { 
        $kriteria = $this->db->query("SELECT * from tabel_kriteria LEFT JOIN tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tahun='$tahun'")->result();
            $nomor = 0;
        foreach($kriteria as $row){

          $nb1 = (1/($row->c1))/($tc1)*($bobot_c1);
          $nb2 = (($row->c2)/(($tot2->c2)+($max2->c2)))*($bobot_c2);
          $nb3 = (($row->c3)/(($tot3->c3)+($max3->c3)))*($bobot_c3);
          $nb4 =  (1/($row->c4))/($tc4)*($bobot_c4);
          $nb5 = (($row->c5)/(($tot5->c5)+($max5->c5)))*($bobot_c5);
          $nb6 = (($row->c6)/(($tot6->c6)+($max6->c6)))*($bobot_c6);

          $nbsi1 = ($xijsi1)*($bobot_c1);
          $nbsi2 = ($xijsi2)*($bobot_c2);
          $nbsi3 = ($xijsi3)*($bobot_c3);
          $nbsi4 = ($xijsi4)*($bobot_c4);
          $nbsi5 = ($xijsi5)*($bobot_c5);
          $nbsi6 = ($xijsi6)*($bobot_c6);

          $si1 = $nb1+$nb2+$nb3+$nb4+$nb5+$nb6;
          $sit = $nbsi1+$nbsi2+$nbsi3+$nbsi4+$nbsi5+$nbsi6;
      
        
            ?>
      
          <tr>
          <td align="center"><?php echo $nomor=$nomor+1; ?></td>
          <td><?php echo $row->nama_santri; ?></td>
          <td align="center"><?php echo round($si1,4); ?></td>
          </tr>
        
        
          
      <?php
               }
            }}
      ?></tbody>
       <tfooter>
              <tr>
              <td colspan="2">Si Total</td>
              <td align="center"><?php echo round($sit,4); ?></td>
              </tr>
          </tfooter>
            </table>
          </div>
        </div>
      </div>
    </div>

  <hr>
  <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5><i>Step-5 -  Utility Ki</small></h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
      <?php 
                 if (isset($_POST['simpan']) && isset($_POST['tahun'])) { 
        $query = $this->db->query("SELECT * from tabel_kriteria inner join tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tabel_kriteria.tahun='$tahun'")->result();
             
            ?>
      
              <div class="box-body">
            <table class="table table-bordered data-table">
          <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Santri</th>
            <th class="text-center">Ki</th>
          </tr>
          </thead>
          <tbody>
              <?php 
                if (isset($_POST['simpan']) && isset($_POST['tahun'])) { 
        $kriteria = $this->db->query("SELECT * from tabel_kriteria JOIN tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tahun='$tahun'")->result();
		foreach($kriteria as $row){ 
		   $nomor = 0;
        
         
          $nb1 = (1/($row->c1))/($tc1)*($bobot_c1);
          $nb2 = (($row->c2)/(($tot2->c2)+($max2->c2)))*($bobot_c2);
          $nb3 = (($row->c3)/(($tot3->c3)+($max3->c3)))*($bobot_c3);
          $nb4 =  (1/($row->c4))/($tc4)*($bobot_c4);
          $nb5 = (($row->c5)/(($tot5->c5)+($max5->c5)))*($bobot_c5);
          $nb6 = (($row->c6)/(($tot6->c6)+($max6->c6)))*($bobot_c6);
                
          $ki = (($nb1)+($nb2)+($nb3)+($nb4)+($nb5)+($nb6))/($sit);
        	// $rangking = $this->db->query("INSERT INTO tabel_normalisasi (nisn, rangking_aras) values ('$row->nisn','$ki')");
			$this->db->order_by('rangking_aras', 'DESC');
			$this->db->group_by('tabel_normalisasi.rangking_aras');
			$kandidat = $this->db->get('tabel_normalisasi')->result();
				  
		
		  ?>           
      
          <tr>
          <td align="center"><?php echo $nomor=$nomor+1; ?></td>
          <td><?php echo $row->nama_santri; ?></td>
          <td align="center"><?php echo $ki; ?></td>
          </tr>
      <?php
	  
           }
            }}
      ?></tbody>
      
            </table>
          </div>
        </div>
      </div>
    </div>
        
    <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5><i>ARAS SORTED DATA</small></h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
     
      
              <div class="box-body">
            <table class="table table-bordered data-table">
          <thead>
          <tr>
          
            <th class="text-center">Ki</th>
          <th class="text-center">Rank</th>
          </tr>
          </thead>
          <tbody>
              <?php 
                if (isset($_POST['simpan']) && isset($_POST['tahun'])) {
				$kriteria = $this->db->query("SELECT * from tabel_kriteria LEFT JOIN tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tahun='$tahun'")->result();

				$this->db->join('tabel_santri', 'tabel_santri.nisn = tabel_normalisasi.nisn');
				$this->db->order_by('rangking_aras', 'DESC');
        $this->db->group_by('tabel_normalisasi.nisn');
				$kandidat = $this->db->get('tabel_normalisasi')->result();

		        $a = 0;

				foreach ($kandidat as $v) {
			
                  ?>
                   <tr>
                    <td><?php echo $v->nama_santri; ?></td>
                    <td><?php echo $v->rangking_aras; ?></td>
                    <td><?php echo $a+1; ?></td>
                  </tr>
                  <?php
                  $a++;
                
              }}
            ?></tbody>
      
            </table>
          </div>
        </div>
    </div>
    </div>

        <?php
        }
        }
        ?>
    </div>
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
