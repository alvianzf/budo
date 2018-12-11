<?php
$R = @$_GET['i'];

$qry = mysql_query("SELECT * FROM program WHERE ID='$R'");
$data = mysql_fetch_assoc($qry);
?>
<div class="row">
<div class="col-lg-5">
                      <section class="panel">
                      <p align="center">
                          <div class="panel-body">
                          <h3>Edit Program</h3>
                          <form role="form" method="post" action="controls/editprog.php?id=<?= $data['ID']?>">
                                                  <div class="form-group">
                                                      <label for="nama siswa">Nama Program</label>
                                                      <input type="text" value ="<?=$data['program']?>" class="form-control" id="" placeholder="nama program" name="prog">

                                                  </div>
                                                  <div class="form-group">
                                                        <label>Keterangan</label>
                                                        <input class="form-control" value ="<?=$data['keterangan']?>" type="text" name="keterangan" placeholder="Keterangan Program">
                                                  </div>
                                                  <div class="form-group">
                                                        <label>Iuran Bulanan</label>
                                                        <input class="form-control" value ="<?=$data['harga']?>" type="number" name="iuran" placeholder="Iuran Bulanan">
                                                  </div>
                                                  <button type="submit" class="btn btn-primary" name="go" value="1">Tambah</button>
                                                  <button type="reset" class="btn btn-warning" name="bye" value="1">Reset</button>
                                              </form>
                          </div>
                       </p>
                       </section>
                    </div> 
                    </div>