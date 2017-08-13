    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Cpanel</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-sm-5">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit User</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('dashboard/user') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input name="id" type="hidden" value="<?=$l['id'] ?>">
                    <input name="nama" type="text" class="form-control" value="<?=$l['nama'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input name="username" type="text" class="form-control" value="<?=$l['username'] ?>">
                  </div>
                     <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control" value="<?=$l['password'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                          <select name="level" required="requreid" class="form-control" required>
                              <option>- Level -</option>
                              <option value="0" > User</option>
                              <option value="1" >Admin</option>
           
                          </select>
                  </div>
                  
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
                <a href="<?=base_url().'dashboard/user' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
                </div>
              </div>
              </form>
              <!-- /.box -->
            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>