<?php

$statistics_qry	 = mysql_query("SELECT * FROM kelas");
$qry             = mysql_query("SELECT * FROM kelas");
$stat_data	     = mysql_fetch_assoc($statistics_qry);
$karate_qry		   = mysql_query("SELECT * FROM kelas WHERE program = 'karate'");
$aikido_qry		   = mysql_query("SELECT * FROM kelas WHERE program = 'aikido'");
$jujutsu_qry	   = mysql_query("SELECT * FROM kelas WHERE program = 'jujutsu'");
$male_qry        = mysql_query("SELECT * FROM kelas WHERE kelamin = 'L'");
$female_qry      = mysql_query("SELECT * FROM kelas WHERE kelamin = 'P'");
$ganet_qry       = mysql_query("SELECT * FROM kelas WHERE program = 'Kebutuhan Khusus'");

$ganet_ttl       = mysql_num_rows($ganet_qry);
$stat_ttl		     = mysql_num_rows($statistics_qry);
$karate_ttl		   = mysql_num_rows($karate_qry);
$aikido_ttl		   = mysql_num_rows($aikido_qry);
$jujutsu_ttl	   = mysql_num_rows($jujutsu_qry);
$male_ttl        = mysql_num_rows($male_qry);
$female_ttl      = mysql_num_rows($female_qry);
$tee_ttl         = $stat_ttl - $ganet_ttl;

$percent_aikido  = $aikido_ttl/$stat_ttl*100;
$percent_karate  = $karate_ttl/$stat_ttl*100;
$percent_jujutsu = $jujutsu_ttl/$stat_ttl*100;
$percent_male    = $male_ttl/$stat_ttl*100;
$percent_female  = $female_ttl/$stat_ttl*100;
?>

<div class="row state-overview">
                  <div class="col-lg-4">
                  <!--user profile info start-->
                  <section class="panel">
                      <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-4 col-sm-4 profile-widget-name">
                              <h4><?php echo $_SESSION['nama'];?></h4>               
                              <div class="follow-ava">
                                  <img <?php echo 'src="images/common/'; echo $_SESSION['pic']; echo '.jpeg"'?> width="50" alt="">
                              </div>
                              <h6><?php echo $_SESSION['role'];?></h6>
                            </div>
                            <div class="col-lg-8 col-sm-8 follow-info">
                                <p>Selamat datang kembali <?php echo $_SESSION['nama'];?>, berikut adalah data terakhir yang telah terhimpun.</p>
                                <p></p><p></p>
                                <p><?php echo $_SESSION['insta'];?></p>
                            </div>
                            <div class="weather-category twt-category">
                                      <ul>
                                          <li class="active">
                                              <h4><?php echo $ganet_ttl;?></h4>
                                              <i class="icon_check_alt2"></i> Kebutuhan Khusus
                                          </li>
                                          <li>
                                              <h4><?php echo $tee_ttl;?></h4>
                                              <i class="icon_check_alt2"></i> Reguler
                                          </li>
                                          <li>
                                              <h4><?php echo $stat_ttl;?></h4>
                                              <i class="icon_check_alt2"></i> Keseluruhan
                                          </li>
                                      </ul>
                                  </div>
                          </div>
                          <footer class="profile-widget-foot">
                            <div class="follow-task">
                                
                                <span>
                                <a href="#myModal" data-toggle="modal">
                                    <i class="icon_lightbulb_alt tooltips" data-original-title="Data Siswa"></i>          
                                </a>
                                </span>

                                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Rangkuman Data Siswa</h4>
                                          </div>
                                          <div class="modal-body">

                                          <table class="table tabel-go">
                                            <thead>
                                              <tr>
                                                <td>No</td>
                                                <td>Reg</td>
                                                <td>Program</td>
                                                <td>Nama Siswa</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php

                                              #
                                              $no = 1;

                                              while ($data_qry = mysql_fetch_assoc($qry)) {
                                                # code...
                                                echo "<tr>";
                                                echo "<td>" .$no."</td>";
                                                echo "<td>" .$data_qry['reg']."</td>";
                                                echo "<td>" .$data_qry['program']."</td>";
                                                echo "<td>" .$data_qry['nama']."</td>";
                                                echo "</tr>";
                                                $no++;
                                              }

                                              ?>
                                            </tbody>
                                          </table>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                                <span>
                                <a href="?hal=laporan">
                                    <i class="icon_piechart tooltips" data-original-title="Laporan"></i>                                    
                                </a>
                                </span>
                                
                            </div>
                          </footer>
                      </div>
                  </section>
                  <!--user profile info end-->
                </div>
                <!-- statics start -->
                <div class="state col-lg-8">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6">
                          <section class="panel">
                              <div class="symbol">
                                  <i class="icon_globe"></i>
                              </div>
                              <div class="value">
                                  <h1><?php echo $stat_ttl;?></h1>
                                  <p>Total siswa</p>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                          <section class="panel">
                              <div class="symbol">
                                  <i class="icon_tags_alt"></i>
                              </div>
                              <div class="value">
                                  <h1><?php echo $aikido_ttl;?></h1>
                                  <p>Aikido</p>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                          <section class="panel">
                              <div class="symbol">
                                  <i class="icon_tags_alt"></i>
                              </div>
                              <div class="value">
                                  <h1><?php echo $jujutsu_ttl;?></h1>
                                  <p>Jujutsu</p>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                          <section class="panel">
                              <div class="symbol">
                                  <i class="icon_tags_alt"></i>
                              </div>
                              <div class="value">
                                  <h1><?php echo $karate_ttl;?></h1>
                                  <p>Karate</p>
                              </div>
                          </section>
                      </div>
                    </div>

                    <div class="row knob-charts">
                        <div class="col-lg-12">
                            <div class="panel">
                                <div class="panel-body">
                                      <ul class="summary-list">
                                          <li>
                                              <a href="javascript:;">
                                                  <input class="knob" data-readonly="true" data-width="80" data-height="80" data-displayPrevious=true  data-thickness=".1" <?php echo 'value="'; echo $percent_aikido. '"';?> data-fgColor="#007AFF" data-bgColor="#F7F7F7">
                                                  <p><i class="icon_easel"></i> % aikido</p>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:;">
                                                  <input class="knob" data-readonly="true" data-width="80" data-height="80" data-displayPrevious=true  data-thickness=".1" <?php echo 'value="'; echo $percent_karate. '"';?> data-fgColor="#34AADC" data-bgColor="#F7F7F7">
                                                  <p><i class="icon_easel"></i> % karate</p>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:;">
                                                  <input class="knob" data-readonly="true" data-width="80" data-height="80" data-displayPrevious=true  data-thickness=".1" <?php echo 'value="'; echo $percent_jujutsu. '"';?> data-fgColor="#007AFF" data-bgColor="#F7F7F7">
                                                  <p><i class="icon_easel"></i> % jujutsu</p>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:;">
                                                  <input class="knob" data-readonly="true" data-width="80" data-height="80" data-displayPrevious=true  data-thickness=".1" <?php echo 'value="'; echo $percent_male. '"';?> data-fgColor="#34AADC" data-bgColor="#F7F7F7">
                                                  <p><i class="icon_datareport"></i> % Laki-Laki</p>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:;">
                                                  <input class="knob" data-readonly="true" data-width="80" data-height="80" data-displayPrevious=true  data-thickness=".1" <?php echo 'value="'; echo $percent_female. '"';?> data-fgColor="#007AFF" data-bgColor="#F7F7F7">
                                                  <p><i class="icon_datareport"></i> % Perempuan</p>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>                                
                            </div>
                        </div>                        
                    </div>
                </div>    
                <!-- statics end -->
              </div>
              <!--overview end-->

