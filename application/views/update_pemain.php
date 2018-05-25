<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Web</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/bootstrap.css" ?>">
    
    <style type="text/css">
    .bg-border {
        border: 1px solid #ddd;
        border-radius: 4px 4px;
        padding: 15px 15px;
    }
    </style>
</head>
<body>
<div class="container">
    <br>
    <h3>Tambah Data</h3>
<form method="post" action="<?php echo base_url('index.php/pagination/update/'.$data_pemain->id) ?>">
  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="name" value="<?php echo $data_pemain->name ?>">
  </div>
  <div class="form-group">
    <label for="tanggal_lahir">tanggal_lahir</label>
    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal_lahir"  value="<?php echo $data_pemain->tanggal_lahir ?>">
  </div>
  <div class="form-group">
    <label for="negara">Negara</label>
    <input type="text" class="form-control" name="negara" id="negara" placeholder="Negara" value="<?php echo $data_pemain->negara ?>">
  </div>
  <div class="form-group">
    <label for="club">club</label>
    <input type="text" class="form-control" name="club" id="club" placeholder="club" value="<?php echo $data_pemain->club ?>">
  </div>
  <div class="form-group">
    <label for="posisi">Posisi</label>
    <input type="text" class="form-control" name="posisi" id="posisi" placeholder="posisi" value="<?php echo $data_pemain->posisi ?>">
  </div>
  <div class="form-group">
    <label for="id_pelatih">Nama Pelatih</label>
    <select class="form-control" name="id_pelatih" id="id_pelatih">
    <?php foreach($data_pelatih as $key => $val): ?>
        <option value="<?php echo $val->id_pelatih ?>"><?php echo $val->nama_pelatih ?></option>
    <?php endforeach ?>
    </select>
  </div>
  <button type="submit" class="btn btn-success">Ubah</button>
  <a href="<?php echo base_url() ?>" class="btn btn-default">Kembali</a>
</form
</div>
</body>
</html>