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
                  <h3 class="box-title">Tambah Pegawai</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('dashboard/pegawai') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" placeholder="Nama Pegawai" required="">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" type="text" class="form-control" placeholder="alamat" required="">
                  </div>
                  <div class="form-group">
                    <label>Jabatan</label>
                          <select name="jabatan" required="requreid" class="form-control" required>
                              <option>- jabatan -</option>
                              <option value="0" >Supir</option>
                              <option value="1" >Staff</option>
							<option value="2" >Manager</option>
                            <option value="3" >Direktur</option>
                          </select>
                  </div>
                </div>
                </div>
                 
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="simpan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan</button>
                  <button name="update" type="reset" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Reset</button>
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



