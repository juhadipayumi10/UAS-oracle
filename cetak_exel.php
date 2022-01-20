<!DOCTYPE html>
<?php
include 'koneksi.php';


header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporanjadawl.xls");
?>
<html>

<head>
	<title>Cetak Data</title>
</head>
<body>
<h3><center>Laporan Jadwal Kelas</h3>
			 <br>
			  
			  <br><br>
          <!-- Row -->
          <div class="row">
		  
           
            <!-- DataTable with Hover -->
          <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Laporan</h4>
                  <p class="card-category">Data Jadawl</p>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          NO
                        </th>
                        <th>
                          ID
                        </th>
                        <th>
                          NAMA GURU
                        </th>
                        <th>
                          KELAS
                        </th>
                        <th>
                          MENGAJAR
                        </th>
                      </thead>
                      <tbody>
                        <?php 
    include 'koneksi.php';
    $stid = oci_parse($con, 'SELECT * from laporan');
    $no = 1;
    oci_execute($stid);

    while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
      ?>
                        <tr>
                          <td>
                          <?php echo $no; ?>
                          </td>
                          <td>
                            <?php echo $d['ID']; ?>
                          </td>
                          <td>
                            <?php echo $d['GURU']; ?>
                          </td>                          
                          <td>
                            <?php echo $d['KELAS']; ?>
                          </td>
                          <td>
                            <?php echo $d['MAPEL']; ?>
                          </td>
                          <td>
                      </tr>                                         
                    </tbody>
					 <?php
						$no++;
						}
						
					?>
                  </table>
                </div>
              </div>
            </div>
          </div>
 <!-- Row -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Popover basic -->
              <div class="card mb-4">
               
                <div class="card-body">
                 
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Dismiss on next click -->
              <div class="card mb-4">
                
                <div class="card-body">
                 <center>Bekasi, 16 Januari 2022 </center>
							<b><center>Kepala Sekolah</center></b>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<b><center>Juhadi Payumi </b></center>
                </div>
              </div>
            </div>
	
 

 
</body>
</html>