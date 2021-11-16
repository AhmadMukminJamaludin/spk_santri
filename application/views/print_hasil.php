<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Cetak Laporan Hasil Perhitungan</title>
<link rel="stylesheet" href="images/style.css" type="text/css" />
</head>
<body><br /> 

<table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="85%"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="20%"><img src="<?php echo $base_url; ?>asset/img/logokemenag.png" width="100" height="100" /></td>
        <td width="80%">
            <b>
                <font size="5"><center>KANTOR WILAYAH KEMENTERIAN AGAMA PROVINSI JAWA TENGAH</center></font></b>
          <font size="3"><center>Alamat: Jl. Sisingamangaraja No 5 Kota Semarang. Telp: (024)8412547. </center></font>
           <font size="3"><center>Email: info@jateng.kemenag.go.id, Website: https://jateng.kemenag,go.id . </center></font>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><hr color="#000000" /></td>
  </tr>
  <tr>
  <td><p align='center'><b><font size='4'>LAPORAN HASIL PERHITUNGAN</font><b></p><br></td>
  </tr>
  <tr>
    <td align="center">
      <table border="1" width="100%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="6%" class="table-header-repeat"><b>Nomor</b>	</th>
			<th width="11%" class="table-header-repeat"><b>NISN</b></th>
            <th width="25%" class="table-header-repeat"><b>Nama Santri</th>
            <th width="11%" class="table-header-repeat"><b>Nilai Hasil</b></th>
            <th width="25%" class="table-header-repeat"><b>Keterangan</b></th>
        </tr>
        
  <?php

  $tahun= $_GET["t"];
		$query = $this->db->query("select * from tabel_ranking LEFT JOIN tabel_santri on tabel_ranking.nisn=tabel_santri.nisn where tahun='$tahun' order by tabel_ranking.nilai DESC")->result();
  		$no=0;
		
		foreach($query as $row){
			$no++;
		?>
		<tr>
            <td><?php echo $no=$no;?></td>
            <td><?php echo $row->nisn;?></td>
            <td><?php echo $row->nama_santri;?></td>
            <td><?php echo $row->nilai;?></td>
            <td><?php if($no == 1){ echo "Terpilih sebagai santri penerima beasiswa berprestasi"; } ?></td>
         </tr>
        <?php  } ?>
      </table>

</td>
  </tr>
  <tr>
    <td><table width="200" border="0" cellspacing="0" cellpadding="0" align="right">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Semarang, <?=date("d-m-Y"); ?></td>
      </tr>
      <tr>
        <td>Kepala Kemenag Jateng </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><u>H. Musta’in Ahmad,S.H.,M.H.</u></td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

<script language='JavaScript' type='text/javascript'>
		window.print();
		</script>