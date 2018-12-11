<?php



?>

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                      <p align="center">
                          <div class="panel-body">

                          <table class="table tabel-go">
                          <h2>Data Ujian Siswa       <a href="#myModal" data-toggle="modal" class="btn btn-info">
                          <i class="icon_plus">  </i>    Tambah Riwayat
                              </a></h2>
                          <hr>
                                            <thead>
                                              <tr>
                                                <td>No</td>
                                                <td>Reg</td>
                                                <td>Nama Siswa</td>
                                                <td>Program</td>
                                                <td>Kyu</td>
                                                <td>Sabuk</td>
                                                <td>Ujian Terakhir</td>
                                                <td>Nomor Sertifikat</td>
                                                <td>Opsi</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php

                                              $qry = mysql_query("SELECT * FROM ujian");

                                              #
                                              $no = 1;

                                              while ($data_qry = mysql_fetch_assoc($qry)) {
                                                # code...
                                                echo "<tr>";
                                                echo "<td>" .$no."</td>";
                                                echo "<td>" .$data_qry['reg']."</td>";
                                                echo "<td>";

                                                $data1 = mysql_fetch_assoc(mysql_query("SELECT * FROM kelas WHERE reg ='".$data_qry['reg']."'"));

                                                echo $data1['nama']."</td>";
                                                echo "<td>" .$data1['program']."</td>";
                                                echo "<td>" .$data_qry['kyu'];
                                                echo "<td>" .$data_qry['sabuk'];
                                                echo "<td>" .$data_qry['tanggal']."</td>";
                                                echo "<td>" .$data_qry['nomor_sertifikat']."</td>";
                                                echo '<td><span> <a onClick="functiondelete()" href="deleteujian.php?i=';
                                                echo $data_qry['ID'];
                                                echo '"><i class="icon_trash data-original-title="delete"></i> Hapus Data</a></span></td>';
                                                echo "</tr>";
                                                $no++;
                                              }

                                              
                                              ?>

                                              <script type="text/javascript">
                                              function functiondelete()
                                              {
                                              	var r == "Anda yakin akan menghapus data ini?";
                                              	if (r == true)
                                              		{
                                              			window.location("deletedata.php");
                                              		}else
                                              		{
                                              			
                                              		}
                                              }</script>
                                            </tbody>
                                          </table>

                          </div>
                      </p>

                      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Penambahan Data Peserta Ujian</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" method="post" action="controls/add.php">
                                               <div class="form-group">
                                                      <label for="nama siswa">Reg</label>
                                                      <input type="text" class="form-control" id=""  name="Reg" list="reg">
                                                        <datalist id="reg">
                                                      <?php

                                                        $sql = mysql_query('SELECT * FROM kelas');
                                                        
                                                        while($opt = mysql_fetch_assoc($sql))
                                                        {
                                                            echo "<option value =".$opt['reg'].">".$opt['nama']. "</option>";
                                                        }

                                                      ?></datalist>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Program</label>
                                                      <input type="text" class="form-control" id="" placeholder="Program yang diikuti" name="program" list="program">

                                                      <datalist id="program" >
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
                                                        <label>Kyu</label>
                                                        <input class="form-control" type="text" name="kyu" placeholder="Kyu">
                                                  </div>
                                                  <div class="form-group">
                                                        <label>Sabuk</label>
                                                        <input class="form-control" type="text" name="sabuk" placeholder="Sabuk">
                                                  </div>
                                                  <div class="form-group">
                                                        <label>Tanggal Ujian Terakhir</label>
                                                        <input class="form-control" type="date" name="ujian" placeholder="Sabuk">
                                                  </div>
                                                  <div class="form-group">
                                                        <label>Nomor Sertifikat</label>
                                                        <input class="form-control" type="text" name="sertifikat" placeholder="Nomor Sertifikat">
                                                  </div>
                                                  <button type="submit" class="btn btn-primary" name="go" value="1">Daftarkan</button>
                                                  <button type="reset" class="btn btn-warning" name="bye" value="1">Reset</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                   </section>
</div>

<?php

if(@$_GET['ref']=='success')
{
    echo "<script>
    alert('Berhasil');
    </script>";
}else if (@$_GET['ref']=='failed')
{
    echo "<script>
    alert('Gagal');
    </script>";
}

?>