<html>
<head>
<style type = "text/css">
@import url('http://fonts.googleapis.com/css?family=Amarante');

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  outline: none;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html { overflow-y: scroll; }
body { 
  background: #eee url('http://i.imgur.com/eeQeRmk.png'); /* http://subtlepatterns.com/weave/ */
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 62.5%;
  line-height: 1;
  color: #585858;
  padding: 22px 10px;
  padding-bottom: 55px;
}

::selection { background: #5f74a0; color: #fff; }
::-moz-selection { background: #5f74a0; color: #fff; }
::-webkit-selection { background: #5f74a0; color: #fff; }

br { display: block; line-height: 1.6em; } 

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
ol, ul { list-style: none; }

input, textarea { 
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none; 
}

blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
strong, b { font-weight: bold; } 

table { border-collapse: collapse; border-spacing: 0; }
img { border: 0; max-width: 100%; }

h1 { 
  font-family: Tahoma, sans-serif;
  font-weight: bold;
  font-size: 3em;
  line-height: 1.7em;
  margin-bottom: 10px;
  text-align: center;
}


/** page structure **/
#wrapper {
  display: block;
  width: 100%;
  background: #fff;
  margin: 0 auto;
  padding: 10px 17px;
  -webkit-box-shadow: 2px 2px 3px -1px rgba(0,0,0,0.35);
}

#keywords {
  margin: 0 auto;
  font-size: 1.2em;
  margin-bottom: 15px;
}


#keywords thead {
  cursor: pointer;
  background: #c9dff0;
}
#keywords thead tr th { 
  font-weight: bold;
  padding: 12px 30px;
  padding-left: 42px;
}
#keywords thead tr th span { 
  padding-right: 7px;
  background-repeat: no-repeat;
  background-position: 100% 100%;
}

#keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
  background: #acc8dd;
}

#keywords thead tr th.headerSortUp span {
  background-image: url('http://i.imgur.com/SP99ZPJ.png');
}
#keywords thead tr th.headerSortDown span {
  background-image: url('http://i.imgur.com/RkA9MBo.png');
}


#keywords tbody tr { 
  color: #555;
}
#keywords tbody tr td {
  text-align: center;
  padding: 15px 10px;
}
#keywords tbody tr td.lalign {
  text-align: left;
}
</style>
<script type="text/javascript">
$(function(){
  $('#keywords').tablesorter(); 
});
</script>
</head>

<body>
 <div id="wrapper">
  <h1>Laporan Data Pangkalan PT. Sari Mulya Patra Bakti</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
  <?php $no=1?>
    <thead>
      <tr>
<th>No</th>
                      <th>Pangkalan</th>
                      <th>No. Reg</th>
                      <th>Nama Pemilik</th>
                      <th>Ktp</th>
					  <th>Jml Tabung</th>
                     
					  <th>Alamat</th>
                      <th>Telp</th>
                      <th>Latitude</th>
                      <th>Longitude</th>
                      
 </tr>
    </thead>
    <tbody>

 <?php $no=1; foreach($l->result() as $r){ ?>
             <tr>
                      <td><?=$no; ?></td>
                      <td><?=$r->pangkalan ?></td>
                      <td><?=$r->no_reg ?></td>
                      <td><?=$r->nama ?></td>
					  <td><?=$r->ktp ?></td>
					  <td><?=$r->jml_tabung ?></td>
                      
					  <td><?=$r->alamat ?></td>
                      <td><?=$r->telp ?></td>
                      <td><?=$r->latittude ?></td>
                      <td><?=$r->longitude ?></td>
 </tr>

<?php $no++; } ?>

</tbody>

  </table>
  

    <script>  
  window.load = print_d();  
  function print_d(){  
   window.print();  
  }
  </script>   
 </div> 
</body>
</html>