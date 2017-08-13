      
<div class="col-sm-3 sidebar" style="padding-right:20px;">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Berita Popular</h3>
          </div>
          <div class="panel-body">
            <?php
            foreach($bp->result() as $r){ ?>
              <div class="media">
                <div class="media-left media-top">
                  <a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>">
                    <img class="media-object" src="<?=base_url().'uploads/berita/'.$r->gambar ?>" width="64">
                  </a>
                </div>
                <div class="media-body">
                  <h5 class="media-heading"><a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>"><?=$r->judul ?></a> </h5>
                  <?=substr($r->isi_berita, 0,45)."..." ?>
                </div>
              </div><hr>
            <?php } ?>
          </div>
        </div>

        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Berita Terbaru</h3>
          </div>
          <div class="panel-body">
            <?php
            foreach($bt->result() as $r){ ?>
              <div class="media">
                <div class="media-left media-top">
                  <a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>">
                    <img class="media-object" src="<?=base_url().'uploads/berita/'.$r->gambar ?>" width="64">
                  </a>
                </div>
                <div class="media-body">
                  <h5 class="media-heading"><a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>"><?=$r->judul ?></a> </h5>
                  <?=substr($r->isi_berita, 0,45)."..." ?>
                </div>
              </div><hr>
            <?php } ?>
          </div>
        </div>

      </div>
	  

      <div class="col-sm-9 content" style="padding-left:10px;">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Daftar Pegawai</h3>
          </div>
          <div class="panel-body" style="padding:10px 0 0 0;">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
					<th>Alamat</th>
					<th>Jabatan</th>					
                   
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($p->result() as $r){ ?>
                <tr>
                    <td><?=$no; ?></td>
                    <td><?=$r->nama?></td>
					<td><?=$r->alamat ?>  </td>
					
					<td><?php if($r->jabatan == 0){
						  echo "Supir";
					 }elseif ($r->jabatan == 1){
						  echo "Staff";
					} elseif ($r->jabatan == 2){
						  echo "Manager";
					} else {
						  echo "Direktur";
					  } ?></td>
					
                   		
                  
                </tr>
                <?php $no++; } ?>
            </table>
          </div>
        </div>
      </div>
      <!-- ./CONTENT -->