<!DOCTYPE html>
<html>
<?php include'cetak_exel.php'; ?>
<head>
	<title>CETAK Data</title>
</head>
<body>
<h3><center>Laporan Jadwal</center></h3>
			 <br>
			  
			  <br><br>
          <!-- Row -->
          <div class="row">
		  
           
            <!-- DataTable with Hover -->
          <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Laporan</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
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
                        <th>
                          Opsi
                        </th>
                      </thead>
                      <tbody>
                        <?php 
    include 'koneksi.php';
    $stid = oci_parse($con, 'SELECT * from laporan');

    oci_execute($stid);

    while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
      ?>
                        <tr>
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
                 <center>Bekasi, 10 Januari 2022</center>
							<b><center>Kepala Sekolah</center></b>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<b><center>Juhadi Payumi</b></center>
                </div>
              </div>
            </div>
	
 
	<script>
		window.print();
	</script>
 
</body>
</html>