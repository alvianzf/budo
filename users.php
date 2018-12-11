<?php



?>

<div class="row">
                  <div class="col-lg-6">
                      <section class="panel">


                      <p align="center">
                          <div class="panel-body">
                      <h2>Edit Profile</h2>
                      <hr>
                      <form role="form" method="post" <?php echo ' action="controls/changepass.php?id='.$_SESSION['id'].'"';?>>
                                               <div class="form-group">
                                                      <label for="nama siswa">Nama</label>
                                                      <input type="text" class="form-control" id=""  <?php echo 'value="'; echo $_SESSION['nama']. '"';?> name="justname">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Instagram</label>
                                                      <input type="text" class="form-control" id=""  <?php echo 'value="'; echo $_SESSION['insta']. '"';?> name="instagram">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Username</label>
                                                      <input type="text" class="form-control" id=""  <?php echo 'value="'; echo $_SESSION['username']. '"';?> name="username">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="nama siswa">Password</label>
                                                      <input type="password" class="form-control" id="" placeholder="password" name="password">
                                                  </div>                                                
                                                  <button type="submit" class="btn btn-primary" name="go" value="1">Ganti</button>
                                              </form>
                          </div>
                    </p>


                   </section>
</div>