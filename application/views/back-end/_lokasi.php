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
                  <h3 class="box-title">Daftar Lokasi Pangkalan Gas LPG 3Kg</h3> 
                  <a href="<?php echo base_url('dashboard/export_excel') ?>" align="right">Export ke Excel</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pangkalan</th>
					  <th>Pemilik</th>
					  <th>No.Reg</th>                      
					  
					  <th>Jml.Tabung</th>
					  
					  <th>Telp</th>
					  <th>Alamat</th>
                      <th>Latittude</th>
                      <th>Longitude</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($l->result() as $r){ ?>
                    <tr>
                      <td><?=$no; ?></td>
                      <td><?=$r->pangkalan ?></td>
					  <td><?=$r->nama ?></td>
					  <td><?=$r->no_reg ?></td>
					  
					  <td><?=$r->jml_tabung ?></td>
					  
					  <td><?=$r->telp ?></td>
                      <td><?=$r->alamat ?></td>
                      <td><?=$r->latittude ?></td>
                      <td><?=$r->longitude ?></td>
                      <td>
                      <div class="btn-group">
                        <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'dashboard/lokasi_edit/'.$r->id ?>"><i class="fa fa-edit"></i> </a>
						<?php if ($this->session->userdata('username')== 'admin'){?>						
                        <a class="btn btn-danger btn-sm btn-flat" href="<?=base_url().'dashboard/lokasi_delete/'.$r->id ?>"><i class="fa fa-trash"></i> </a>
						<?php } ?>
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