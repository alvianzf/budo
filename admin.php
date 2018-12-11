<?php

$chk = mysql_query("SELECT * FROM users");



?>

<div class="row">
                  <div class="col-lg-8">
                      <section class="panel">


                      <p align="center">
                          <div class="panel-body">
                            <h2>Daftar User <button class="btn btn-info"><i class="icon_plus"></i>Tambah Pengguna</button></h2>
                            <hr>
                                <div class="table-responsive">
                                  <table class="table table-condensed table-striped table-hover">
                                  <thead>
                                  <tr>
                                    <th width="25%">Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Instagram</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                  </tr>
                                  </thead>

                                  <tbody>
                                    <?php 
                                    while ($list= mysql_fetch_assoc($chk))
                                    {
                                      echo "<tr>";
                                      echo "<td>" .$list['nama']. "</td>";
                                      echo "<td>" .$list['username']. "</td>";
                                      echo "<td>" .$list['pass']. "</td>";
                                      echo "<td>" .$list['insta']. "</td>";
                                      echo "<td>" .$list['role']. "</td>";
                                      echo '<td><span><a href="?hal=admin&a='.$list['ID'].'"><i class="icon_profile" data-original-title="edit"></i></a> <a onClick="functions()" href="deleteuser.php?i=';
                                      echo $list['ID'];
                                      echo '"><i class="icon_close" data-original-title="delete"></i></a></span></td>';
                                      echo "</tr>";

                                    }
                                      ?>
                                  </tbody>
                                  </table>
                                </div>
                      
                          </div>
                    </p>


                   </section>
</div>