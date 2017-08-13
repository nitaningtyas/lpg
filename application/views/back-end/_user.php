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
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar User</h3> 
                  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table  class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pengguna</th>
                      <th>Username</th>
                      <th>Password</th>
					  <th>Level</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($l->result() as $r){ ?>
                    <tr>
                      <td><?=$no; ?></td>
                      <td><?=$r->nama ?></td>
                      <td><?=$r->username ?></td>
                      <td><input readonly="true" name="password" type="password" class="form-control" value="<?=$r->password ?>"> </td>
					  <td><?php if($r->level == 1){
						  echo "Admin";
					} else {
						  echo "User";
					  } ?></td>
                      
                      <td>
                      <div class="btn-group">
                        <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'dashboard/user_edit/'.$r->id ?>"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger btn-sm btn-flat" href="<?=base_url().'dashboard/user_delete/'.$r->id ?>"><i class="fa fa-trash"></i> </a>
                      </div>
                      </td>
                    </tr>
                    <?php $no++; } ?>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>