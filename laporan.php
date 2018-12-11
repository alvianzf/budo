<?php
$R = @$_GET['i'];

$qry = mysql_query("SELECT * FROM program WHERE ID='$R'");
$data = mysql_fetch_assoc($qry);
?>
<div class="row">
<div class="col-lg-12">
                      <section class="panel">
                      <p align="center">
                          <div class="panel-body">
                          <h3>Cetak Laporan</h3>
                          <div class="table-responsive">
                            <table>
                                <thead>
                                <th width="20%"><a href="controls/masterdatasiswa.php"><button class="btn btn-primary btn-block">Master Data Siswa</button></a></th>
                                <th width ="5%"><button class="btn btn-secondary btn-block" disabled>Bulan:</button></th>
                                <form action="lap/LAP.pdf" method="post">
                                <th width="10%"><select class="form-control">
                                <option >Januari</option>
                            <option >Februari</option>
                            <option >Maret</option>
                            <option >April</option>
                            <option >Mei</option>
                            <option >Juni</option>
                            <option >Juli</option>
                            <option >Agustus</option>
                            <option >September</option>
                            <option >Oktober</option>
                            <option >November</option>
                            <option >Desember</option></select></th>
                                     <th width="20%"><a href="lap/LAP.pdf""><button class="btn btn-success btn-block">Laporan Iuran</button></a></th>
                                </form>
                                </thead>                            
                            </table>
                          </div>
                          
                          </div>
                       </p>
                       </section>
                    </div> 
                    </div>