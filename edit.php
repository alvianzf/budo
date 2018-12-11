<?php


$p = @$_GET['p'];

if(!$p)
{
  $p=1;
}

$off = ($p - 1) * 5;

?>

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                      <p align="center">
                          <div class="panel-body">

                          <h2>Edit Data Siswa</h2>
                          <div class="table-responsive">
                            
                          <table class="table tabel-go table-striped table-condensed table-hover">
                          <hr>
                                            <thead>
                                              <tr>
                                                <td>No</td>
                          
                                                <td>Reg</td>
                                                <td>Nama Siswa</td>
                                                <td>Program</td>
                                                <td>Tempat/Tanggal Lahir</td>
                                                <td>Ayah/Ibu</td>
                                                <td>Alamat</td>
                                                <td>Nomor Kontak</td>
                                                <td>Terdaftar Tanggal</td>
                                                <td>Opsi</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php

                                              $qry = mysql_query("SELECT * FROM kelas LIMIT ".$off.", 5");
                                              
                                              $qri = mysql_query("SELECT * FROM kelas");

                                              $jum = mysql_num_rows($qri);
                                              $lah = ($jum / 5) + 1;

                                              #
                                              $no = $off + 1;

                                              while ($data_qry = mysql_fetch_assoc($qry)) {
                                                # code...
                                                echo "<tr>";
                                                echo "<td>" .$no."</td>";
                                                echo "<td>" .$data_qry['reg']."</td>";
                                                echo "<td width ='20%'>" .$data_qry['nama']."</td>";
                                                echo "<td>" .$data_qry['program']."</td>";
                                                echo "<td>" .$data_qry['tempat_lahir']."/ ".$data_qry['tanggal_lahir']."</td>";
                                                echo "<td>" .$data_qry['ayah']."/ " .$data_qry['ibu']."</td>";
                                                echo "<td>" .$data_qry['alamat']."</td>";
                                                echo "<td>" .$data_qry['nomor_kontak']."</td>";
                                                echo "<td>" .$data_qry['terdaftar']."</td>";
                                                echo '<td width="10%"><span><a href="?a='.$data_qry['ID'].'" class="btn btn-success"><i class="icon_profile" data-original-title="edit"></i></a> <a onClick="functions()" href="delete.php?i=';
                                                echo $data_qry['ID'];
                                                echo '" class="btn btn-danger"><i class="icon_close" data-original-title="delete"></i></a></span></td>';
                                                echo "</tr>";
                                                $no++;
                                              }

                                              if(@$_GET['ref']=='success')
                                              {
                                              	echo '<script>window.alert("Berhasil menghapus data");';
                                              }

                                              if(@$_GET['ref']=='failed')
                                              {
                                              	echo '<script>window.alert("Gagal menghapus data");';
                                              }
                                              ?>

                                              <script type="text/javascript">
                                              function functions()
                                              {
                                              	var r == "Anda yakin akan menghapus data ini?";
                                              	if (r == true)
                                              		{
                                              			window.location("delete.php");
                                              		}else
                                              		{
                                              			
                                              		}
                                              }</script>
                                            </tbody>
                                          </table>
                          </div>
                                          <nav aria-label="...">
                                  <ul class="pagination">
                                  <?php
                                  $page = 1;
                                  $gets = @$_GET['p'];
                                  if(!$gets)
                                  {
                                    $gets=1;
                                  }

                                  for ($i=1; $i < $lah ; $i++) { 
                                    # code...

                                    if ($page == $gets)
                                    {
                                      $status = "active";
                                    }else
                                    {
                                      $status = "";
                                    }

                                    echo '<li class="page-item '.$status.'"><a class="page-link" href="site.php?hal=edit&p='.$page.'" >'.$page.'</a></li>';
                                    $page++;
                                  }



                                  ?>
                                  </ul>

                          </div>
                      </p>
                   </section>
</div>