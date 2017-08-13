      


      <div class="col-sm-12 content" style="padding-left:10px;">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Daftar Lokasi</h3>
          </div>
          <div class="panel-body" style="padding:10px 0 0 0;">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pangkalan</th>
					<th>Pemilik</th>
					<th>No.Registrasi</th>					
                    <th>Alamat</th>
					
                    <th width="10%">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($la->result() as $r){ ?>
                <tr>
                    <td><?=$no; ?></td>
                    <td><?=$r->pangkalan ?></td>
					<td><?=$r->nama ?>  </td>
					<td><?=$r->no_reg ?></td>
                    <td><?=$r->alamat ?></td>				
                    <td>
                    <div class="btn-group">
                    <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'web/lokasi_one/'.$r->id ?>"><i class="fa fa-map-o"></i> View Map</a>
                    </div>
                    </td>
                </tr>
                <?php $no++; } ?>
            </table>
          </div>
        </div>
      </div>
      <!-- ./CONTENT -->