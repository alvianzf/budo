<div class="row">
                  <div class="col-lg-5">
                      <section class="panel">
                      <p align="center">
                          <div class="panel-body">
                          <form role="form" method="post" action="controls/program.php">
                                                  <div class="form-group">
                                                      <label for="nama siswa">Nama Program</label>
                                                      <input type="text" class="form-control" id="" placeholder="nama program" name="prog">

                                                  </div>
                                                  <div class="form-group">
                                                        <label>Keterangan</label>
                                                        <input class="form-control" type="text" name="keterangan" placeholder="Keterangan Program">
                                                  </div>
                                                  <div class="form-group">
                                                        <label>Harga Bulanan</label>
                                                        <input class="form-control" type="number" name="iuran" placeholder="Iuran Program">
                                                  </div>
                                                  <button type="submit" class="btn btn-primary" name="go" value="1">Tambah</button>
                                                  <button type="reset" class="btn btn-warning" name="bye" value="1">Reset</button>
                                              </form>
                          </div>
                       </p>
                       </section>
                    </div>
                    <div class="col-lg-7">
                      <section class="panel">
                      <p align="center">
                          <div class="panel-body table-responsive">
                            <table class="table table-hover table-condensed table-striped">
                            <thead>
                            <th>No</th>
                            <th>Nama Program</th>
                            <th>Keterangan</th>
                            <th>Iuran</th>
                            <th>Opsi</th>
                            </thead>
                            <tbody>
                            <?php
                                $foo = mysql_query("SELECT * FROM program");
                                $ii = 1;
                                while ($prog = mysql_fetch_assoc($foo))
                                {
                                    ?>
                                    <tr>
                                    <td><?= $ii ?></td>
                                    <td><?= $prog['program'] ?></td>
                                    <td><?= $prog['keterangan'] ?></td>
                                    <td><?= $prog['harga']?></td>
                                    <td><a href="delprog.php?ID=<?=$prog['ID']?>"><i class="icon_trash"></i> Hapus</a><br />
                                        <a href="?hal=program&edit=program&i=<?=$prog['ID'];?>"><i class="icon_pencil"></i> Edit</a></td>
                                    </tr>
                                    <?php
                                    $ii++;
                                    
                                }
                            ?>
                            </tbody>
                            </table>
                          </div>
                       </p>
                       </section>
                    </div>

                              
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