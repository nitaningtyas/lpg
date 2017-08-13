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
                  <h3 class="box-title">Daftar Pegawai</h3> 
                  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table  class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pegawai</th>
                      <th>Alamat</th>
                      <th>Jabatan</th>
					  <th>Actions</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($p->result() as $r){ ?>
                    <tr>
                      <td><?=$no; ?></td>
                      <td><?=$r->nama ?></td>
                      <td><?=$r->alamat ?></td>
                      <td><?php if($r->jabatan == 0){
						  echo "Supir";
					 }elseif ($r->jabatan == 1){
						  echo "Staff";
					} elseif ($r->jabatan == 2){
						  echo "Manager";
					} else {
						  echo "Direktur";
					  } ?></td>
                      
                      <td>
                      <div class="btn-group">
                        <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'dashboard/pegawai_edit/'.$r->id ?>"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger btn-sm btn-flat" href="<?=base_url().'dashboard/pegawai_delete/'.$r->id ?>"><i class="fa fa-trash"></i> </a>
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