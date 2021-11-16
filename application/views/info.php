<?php
	session_start();
	include("conn.php");
	if (empty($_SESSION["username"])){
		echo header("Location:login/login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Info Kriteria</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Info</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="data_guru.php"><i class="icon icon-inbox"></i> <span>Kelola Guru</span></a> </li>
    <li class="active"><a href="data_kriteria.php"><i class="icon icon-fullscreen"></i> <span>Nilai Kriteria</span></a></li>
   <li><a href="manage_kriteria.php"><i class="icon icon-fullscreen"></i> <span>Kelola Bobot Kriteria</span></a>
    <li><a href="hasil.php"><i class="icon icon-fullscreen"></i> <span>Perhitungan Vikor</span></a></li>
	<li><a href="laporan.php"><i class="icon icon-fullscreen"></i> <span>Laporan</span></a></li>
    <li> <a href="logout.php"><i class="icon icon-signal"></i> <span>Keluar</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->
<br>
<?php if($_GET["data"] == 1){ ?>
<div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kriteria Disiplin Kerja</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
          <th>Parameter Disiplin Kerja</th>
          <th>Sub Kriteria</th>
          <th>Nilai</th>
        </tr>
              </thead>
              <tbody>
       <tr>
              <td>Selalu tepat waktu dalam masuk kerja dan masuk dalam mengajar.</td>
              <td>Baik Sekali</td>
              <td>5</td>
       </tr>
       <tr>
              <td>Tidak terlambat masuk kerja dan saat akan mengajar.</td>
              <td>Baik </td>
              <td>4</td>
       </tr>
       <tr>
              <td>Terlambat masuk kerja 3 kali, tetapi dalam mengajar sesuai aturan sekolah.</td>
              <td>Cukup </td>
              <td>3</td>
       </tr>
       <tr>
              <td>Terlambat masuk kerja lebih dari 3 kali dan sering menunda dalam mengajar.</td>
              <td>Kurang </td>
              <td>2</td>
       </tr>
       <tr>
              <td>Terlambat masuk kerja lebih dari 5 kali dan suka menunda dalam mengajar.</td>
              <td>Kurang Sekali </td>
              <td>1</td>
       </tr>
          
              </tbody>
            </table>
          </div>
        </div>
<?php }else if($_GET["data"] == 2){ ?>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kriteria Absensi Guru </h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
          <th>Parameter Absensi Guru</th>
          <th>Sub Kriteria</th>
          <th>Nilai</th>
        </tr>
              </thead>
              <tbody>
       <tr>
              <td>Selalu berangkat kerja.</td>
              <td>Baik Sekali</td>
              <td>5</td>
       </tr>
       <tr>
              <td>Tidak berangkat kerja 1 hari dalam satu bulan.</td>
              <td>Baik </td>
              <td>4</td>
       </tr>
       <tr>
              <td>Tidak berangkat kerja 2 kali dalam satu bulan.</td>
              <td>Cukup </td>
              <td>3</td>
       </tr>
       <tr>
              <td>Tidak berangkat kerja 3 kali dalam satu bulan.</td>
              <td>Kurang </td>
              <td>2</td>
       </tr>
       <tr>
              <td>Tidak berangkat kerja 5 kali dalam satu bulan.</td>
              <td>Kurang Sekali </td>
              <td>1</td>
       </tr>
          
              </tbody>
            </table>
          </div>
        </div>
<?php }else if($_GET["data"] == 3){ ?>
         <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kriteria Kemampuan Guru </h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
          <th>Parameter Kemampuan Guru</th>
          <th>Sub Kriteria</th>
          <th>Nilai</th>
        </tr>
              </thead>
              <tbody>
       <tr>
              <td>Mampu menguasai bahan ajar, menciptakan susasan kelas yang kondusif dan menyenangkan serta mampu dalam penggunaan media dan sumber buku dalam mengajar.</td>
              <td>Baik Sekali</td>
              <td>5</td>
       </tr>
       <tr>
              <td>Mampu menguasai bahan ajar dan menciptakan susasan kelas yang kondusif dan menyenangkan, tetapi kurang mampu dalam penggunaan media dalam mengajar.</td>
              <td>Baik </td>
              <td>4</td>
       </tr>
       <tr>
              <td>Mampu menguasai bahan ajar dan mampu dalam penggunaan media dan sumber buku, tetapi tidak mampu dalam menciptakan suasana kelas yang kondusif dan menyenangkan.</td>
              <td>Cukup </td>
              <td>3</td>
       </tr>
       <tr>
              <td>Mampu menguasai bahan ajar dan penggunaan sumber buku, tetapi tidak mampu dalam penggunaan media dalam mengajar serta tidak mampu dalam menciptakan susasan kelas yang kondusif dan menyenangkan.</td>
              <td>Kurang </td>
              <td>2</td>
       </tr>
       <tr>
              <td>Hanya mampu menguasai bahan ajar</td>
              <td>Kurang Sekali </td>
              <td>1</td>
       </tr>
          
              </tbody>
            </table>
          </div>
        </div>
      <?php }else if($_GET["data"] == 4){ ?>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kriteria Tugas Dan Tanggungjawab </h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
          <th>Parameter Tugas Dan Tanggungjawab</th>
          <th>Sub Kriteria</th>
          <th>Nilai</th>
        </tr>
              </thead>
              <tbody>
       <tr>
              <td>Selalu menyelesaikan tugas tepat waktu dan selalu bertanggungjawab atas pekerjaan yang diberikan oleh sekolah.</td>
              <td>Baik Sekali</td>
              <td>5</td>
       </tr>
       <tr>
              <td>Sedikit terlambat menyelesaikan tugas tetapi bertanggungjawab atas pekerjaan yang diberikan oleh sekolah.</td>
              <td>Baik </td>
              <td>4</td>
       </tr>
       <tr>
              <td>Menyelesaikan tugas tepat waktu, tetapi kurang maksimal dalam hasil pekerjaannya.</td>
              <td>Cukup </td>
              <td>3</td>
       </tr>
       <tr>
              <td>Dapat menyelesaikan tugas, tetapi kurang bertanggungjawab atas pekerjaan yang diberikan oleh sekolah.</td>
              <td>Kurang </td>
              <td>2</td>
       </tr>
       <tr>
              <td>Suka menunda atas pekerjaan yang diberikan olek sekolah.</td>
              <td>Kurang Sekali </td>
              <td>1</td>
       </tr>
          
              </tbody>
            </table>
          </div>
        </div>
      <?php }else if($_GET["data"] == 5){ ?>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kriteria Kegiatan Tambahan  </h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
          <th>Parameter Kegiatan Tambahan </th>
          <th>Sub Kriteria</th>
          <th>Nilai</th>
        </tr>
              </thead>
              <tbody>
       <tr>
              <td>Selalu hadir didalam kegiatan tambahan yang ada di sekolah.</td>
              <td>Baik Sekali</td>
              <td>5</td>
       </tr>
       <tr>
              <td>1 kali tidak hadir dalam kegiatan tambahan sekolah.</td>
              <td>Baik </td>
              <td>4</td>
       </tr>
       <tr>
              <td>3 kali tidak hadir dalam kegiatan tambahan sekolah.</td>
              <td>Cukup </td>
              <td>3</td>
       </tr>
       <tr>
              <td>Lebih dari 3 kali tidak hadir dalam kegiatan tambahan sekolah.</td>
              <td>Kurang </td>
              <td>2</td>
       </tr>
       <tr>
              <td>Tidak pernah hadir dalam kegiatan tambahan sekolah.</td>
              <td>Kurang Sekali </td>
              <td>1</td>
       </tr>
          
              </tbody>
            </table>
          </div>
        </div>
      <?php }else if($_GET["data"] == 6){ ?>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kriteria Kepribadian   </h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
          <th>Parameter Kepribadian </th>
          <th>Sub Kriteria</th>
          <th>Nilai</th>
        </tr>
              </thead>
              <tbody>
       <tr>
              <td>Tindakan dan perilaku sesuai dengan norma, mampu menjadi teladan, dan menjunjung tinggikode etik guru.</td>
              <td>Baik Sekali</td>
              <td>5</td>
       </tr>
       <tr>
              <td>Sopan, cara berpakaian sesuai dengan aturan yang ditetapkan sekolah.</td>
              <td>Baik </td>
              <td>4</td>
       </tr>
       <tr>
              <td>Meskipun baik dalam berperilaku, namun dalam melakukan pekerjaan terkadang kurang maksimal.</td>
              <td>Cukup </td>
              <td>3</td>
       </tr>
       <tr>
              <td>Dari sikap dan perilaku kurang menjadi teladan bagi sesama guru maupun siswa.</td>
              <td>Kurang </td>
              <td>2</td>
       </tr>
       <tr>
              <td>Sikap, perilaku maupun norma kurang bisa diterima di sekolah.</td>
              <td>Kurang Sekali </td>
              <td>1</td>
       </tr>
          
              </tbody>
            </table>
          </div>
        </div>
      <?php } ?>
</div>



<!--end-main-container-part-->
<div id="search">
  <a href="profil.php"><img src="img/icons/32/user.png" width=30 height=30></img></a>
</div>
<!--Footer-part-->

<div class="row-fluid">
  
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
