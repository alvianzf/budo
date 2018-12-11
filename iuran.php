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
                          <h3>Pembayaran Iuran</h3>
                          <form action="controls/bayar.php" method="post">
                          
                          <div class="form-group">
                          <label>Reg Siswa</label>
                          <input type="text" class="form-control" list="reg" name="reg">
                          <datalist id="reg">
                          <?php
                            $sql = mysql_query('SELECT * FROM kelas');
                                                        
                            while($opt = mysql_fetch_assoc($sql))
                            {
                                echo "<option value =".$opt['reg'].">".$opt['nama']. "</option>";
                            }
                          ?>
                          </datalist>
                          </div>

                          <div class="form-group">
                            <select name="harga" class="form-control">
                                <?php
                                    $sql = mysql_query("SELECT * FROM program");
                                    while  ($harga = mysql_fetch_assoc($sql))
                                    {
                                ?>
                                        <option value=<?= $harga['harga'];?>><?= $harga['program'];?></option>
                                <?php
                                    }
                                    ?>
                            </select>
                          </div>
                            
                          <div class="form-group">
                          <button type="submit" class="btn btn-info">Bayar</button>
                          </div>
                          
                          
                          </form>
                          
                          </div>
                       </p>
                       </section>
                    </div> 
<div class="col-lg-7">
<section class="panel">
<div class="panel-body">
<h3>Daftar Pembayaran</h3>
                    <div class="table-responsive">
                    <table class="table table-condensed table-striped table-hover">
                            <thead>
                                <th>No</th>
                                <th>Reg Siswa</th>
                                <th>Nama Siswa</th>
                                <th>Iuran Terakhir</th>
                                <th>Tanggal Bayar</th>
                                <th>Nominal Bayar</th>
                                <th>Opsi</th>
                                </thead>
                                <tbody>
                                <?php

                                $iii=1;
                                $r = mysql_query("SELECT * FROM iuran");
                                while($data = mysql_fetch_assoc($r))
                                {
                                    ?>
                                    <tr>
                                    <td><?=$iii?></td>
                                    <td><?= $data['reg']?></td>
                                    <td><?php 
                                    $reg = $data['reg'];
                                    $nam = mysql_fetch_assoc(mysql_query("SELECT * FROM kelas WHERE reg='$reg'"));
                                    echo $nam['nama'];?></td>
                                    <td> <strong><?=$data['tanggal_bayar']."</strong> " .$data['tahun_bayar']?></td>
                                    <td><?= $data['tanggal_transaksi'];?></td>
                                    <td><?= $data['nominal']?></td>
                                    <td><a href="deleteiuran.php?i=<?=$data['ID']?>"><i class="icon_trash"></i> Hapus</a></td></tr>
                                    <?php
                                    $iii++;
                                }

                                ?>
                                </tbody>
                    </table></div></div></section></div></div>

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