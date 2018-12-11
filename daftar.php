<?php

$kode_qry	= mysql_query("SELECT * FROM kelas ORDER BY ID DESC");
$kode_pnt	= mysql_fetch_assoc($kode_qry);
$kode 		= $kode_pnt['ID'] + 1;

if(@$_GET['ref']=='success')
{
	echo '<script>window.alert("Berhasil mendaftarkan anggota");</script>';
}elseif (@$_GET['ref']=='failed') {
	# code...
	echo '<script>window.alert("Gagal mendaftarkan anggota");</script>';
}elseif (@$_GET['ref']=='updatesuccess') {
  # code...
  echo '<script>window.alert("Berhasil mengedit data");</script>';
}elseif (@$_GET['ref']=='updatefailed') {
  # code...
  echo '<script>window.alert("Gagal mengedit data");</script>';
}

$p = @$_GET['p'];

if(!$p)
{
  $p=1;
}

$off = ($p - 1) * 5;

?>

<div class="row">
                  <div class="col-lg-2">
                      <section class="panel">
                      <p align="center">
                          <div class="panel-body">
                              

                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Pendaftaran Siswa Baru</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" method="post" <?php echo ' action="controls/formcontrol.php?id='.$kode.'"';?>>
                                               <div class="form-group">
                                                      <label for="nama siswa">Kode</label>
                                                      <input type="text" class="form-control" id=""  <?php echo 'value="BA'; echo $kode. '"';?> disabled="" name="kode">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Program</label>
                                                      <input type="text" class="form-control" id="" placeholder="Program yang diikuti" name="program" list="program">

                                                      <datalist id="program">
                                                      <?php
                                                            $ss = mysql_query("SELECT * FROM program");
                                                            while ($dat = mysql_fetch_assoc($ss)) {
                                                                ?>
                                                                    <option><?= $dat['program']?></option>
                                                                <?php
                                                            }
                                                        ?>
                                                      </datalist>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Nama Siswa</label>
                                                      <input type="text" class="form-control" id="" placeholder="Nama Siswa" name="namasiswa">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Jenis Kelamin</label>
                                                      <input type="text" class="form-control" id="" placeholder="L/P" name="kelamin" list="gender">
                                                      <datalist id="gender">
                                                      <option value="L"></option>
                                                      <option value="P"></option>
                                                      </datalist>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Tempat Lahir</label>
                                                      <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatlahir">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Tanggal Lahir</label>
                                                      <input type="date" class="form-control" id=""  name="tanggallahir" data-date-format="dd/mm/yyyy">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Nama Ayah</label>
                                                      <input type="text" class="form-control" id="" placeholder="Nama Ayah"  name="ayah" data-date-format="dd/mm/yyyy">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Nama Ibu</label>
                                                      <input type="text" class="form-control" id="" placeholder="Nama Ibu" name="ibu" >
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Alamat</label>
                                                      <textarea type="text" class="form-control" id="" placeholder="Alamat"  name="alamat" ></textarea>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Nomor Kontak</label>
                                                      <input type="text" class="form-control" id="" placeholder="Nomor kontak"  name="Nomor">
                                                  </div>
                                                  <button type="submit" class="btn btn-primary" name="go" value="1">Daftarkan</button>
                                                  <button type="reset" class="btn btn-warning" name="bye" value="1">Reset</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
<br />
<br />
                              

                            
                          </div>
                          </p>
                      </section>
                   </div>

                  <div class="col-lg-10">
                      <section class="panel">
                        <p align="center">
                          <div class="panel-body">

                          <h2>Data Siswa Keseluruhan <a href="#myModal" data-toggle="modal" class="btn btn-info">
                                  Form Pendaftaran
                              </a> <a href="?hal=edit" class="btn btn-warning">
                                  Edit Data Siswa
                              </a></h2>
<hr>
                          <div class="table-responsive">
                            
                          <table class="table tabel-go table-condensed table-hover table-striped">
                                            <thead>
                                              <tr>
                                                <td>No</td>
                                                <td>Reg</td>
                                                <td>Program</td>
                                                <td>Nama Siswa</td>
                                                <td>Tempat/Tanggal Lahir</td>
                                                <td>Ayah/Ibu</td>
                                                <td>Alamat</td>
                                                <td>Nomor Kontak</td>
                                                <td>Terdaftar Tanggal</td>
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
                                                echo "<td>" .$data_qry['nama']."</td>";
                                                echo "<td>" .$data_qry['program']."</td>";
                                                echo "<td>" .$data_qry['tempat_lahir']."/ ".$data_qry['tanggal_lahir']."</td>";
                                                echo "<td>" .$data_qry['ayah']."/ " .$data_qry['ibu']."</td>";
                                                echo "<td>" .$data_qry['alamat']."</td>";
                                                echo "<td>" .$data_qry['nomor_kontak']."</td>";
                                                echo "<td>" .$data_qry['terdaftar']."</td>";
                                                echo "</tr>";

                                                $no++;
                                              }

                                              ?>
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

                                    echo '<li class="page-item '.$status.'"><a class="page-link" href="site.php?hal=siswa&p='.$page.'" >'.$page.'</a></li>';
                                    $page++;
                                  }



                                  ?>
                                  </ul>
                                </nav>
                          </div>
                        </p>

                      </section>
                   </div>
</div>
