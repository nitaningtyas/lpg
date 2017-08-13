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
                  <h3 class="box-title">Edit Pegawai</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('dashboard/pegawai') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input name="id" type="hidden" value="<?=$p['id'] ?>">
                    <input name="nama" type="text" class="form-control" value="<?=$p['nama'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" type="text" class="form-control" value="<?=$p['alamat'] ?>">
                  </div>
                     <div class="form-group">
                    <label>Jabatan</label>
                          <select name="jabatan" required="requreid" class="form-control" required>
                              <option  value="<?=$p['jabatan'] ?>">- jabatan -</option>
                              <option value="0" > Supir</option>
                              <option value="1" >Staff</option>
           <option value="2" >Manager</option>
		   <option value="3" >Direktur</option>
                          </select>
                  </div>	
                  
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
                <a href="<?=base_url().'dashboard/pegawai' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
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