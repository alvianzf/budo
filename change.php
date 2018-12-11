<?php

$id	= @$_GET['a'];

$cari	= mysql_query("SELECT * FROM kelas WHERE ID ='".$id."'");
$data 	= mysql_fetch_assoc($cari);

?>

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                      <p align="center">
                          <div class="panel-body">

                          <form role="form" method="post" <?php echo ' action="controls/edit.php?id='.$id.'"';?>>
                                               <div class="form-group">
                                                      <label for="nama siswa">Kode</label>
                                                      <input type="text" class="form-control" id=""  <?php echo 'value="'; echo $data['reg']. '"';?> disabled="" name="kode">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Program</label>
                                                      <input type="text" class="form-control" id="" <?php echo 'value="'; echo $data['program']. '"';?> placeholder="Program yang diikuti" name="program" list="program">

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
                                                      <input type="text" class="form-control" id="" <?php echo 'value="'; echo $data['nama']. '"';?> placeholder="Nama Siswa" name="namasiswa">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Jenis Kelamin</label>
                                                      <input type="text" class="form-control" id="" <?php echo 'value="'; echo $data['kelamin']. '"';?> placeholder="L/P" name="kelamin" list="gender">
                                                      <datalist id="gender">
                                                      <option value="L"></option>
                                                      <option value="P"></option>
                                                      </datalist>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Tempat Lahir</label>
                                                      <input type="text" class="form-control" <?php echo 'value="'; echo $data['tempat_lahir']. '"';?> placeholder="Tempat Lahir" name="tempatlahir">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Tanggal Lahir</label>
                                                      <input type="date" class="form-control" id="" <?php echo 'value="'; echo $data['tanggal_lahir']. '"';?> name="tanggallahir" data-date-format="dd/mm/yyyy">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Nama Ayah</label>
                                                      <input type="text" class="form-control" id="" placeholder="Nama Ayah" <?php echo 'value="'; echo $data['ayah']. '"';?>  name="ayah" data-date-format="dd/mm/yyyy">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Nama Ibu</label>
                                                      <input type="text" class="form-control" id="" <?php echo 'value="'; echo $data['ibu']. '"';?> placeholder="Nama Ibu" name="ibu" >
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Alamat</label>
                                                      <textarea type="text" class="form-control" id=""  placeholder="Alamat"  name="alamat" ><?php echo $data['alamat'];?></textarea>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Nomor Kontak</label>
                                                      <input type="text" class="form-control" id="" <?php echo 'value="'; echo $data['nomor_kontak']. '"';?> placeholder="Nomor kontak"  name="Nomor">
                                                  </div>
                                                  <button type="submit" class="btn btn-primary" name="go" value="1">Ubah Data</button>
                                              </form>

                          </div>
                      </p>
                  	  </section>
                   </div>
</div>