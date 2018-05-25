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
    <div class="row">
        <div class="col-md-8 col-md-offset-2 well">
            <h3 class="text-center text-primary">LIST PEMAIN</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-border">
        <?php 
        $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
        echo form_open("pagination/search", $attr);?>
            <div class="form-group">
                <div class="col-md-2">
        <a href="<?php echo base_url('index.php/pagination/insert') ?>" class="btn btn-sm btn-primary">Tambah</a>
                </div>
                <div class="col-md-5">
                    <input class="form-control" id="book_name" name="book_name" placeholder="Search..." type="text" value="<?php echo set_value('book_name'); ?>" />
                </div>
                <div class="col-md-5">
                    <input id="btn_search" name="btn_search" type="submit" class="btn btn-success" value="Search" />
                    <a href="<?php echo base_url(). "index.php/pagination/index"; ?>" class="btn btn-info">Show All</a>
                </div>
            </div>
        <?php echo form_close(); ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Tanggal lahir</th>
                    <th>Negara</th>
                    <th>Club</th>
                    <th>Posisi</th>
                    <th>Nama Pelatih</th>
                    <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($booklist); ++$i) { ?>
                <tr>
                    <td><?php echo ($page+$i+1); ?></td>
                    <td><?php echo $booklist[$i]->name; ?></td>
                    <td><?php echo $booklist[$i]->tanggal_lahir; ?></td>
                    <td><?php echo $booklist[$i]->negara; ?></td>
                    <td><?php echo $booklist[$i]->club; ?></td>
                    <td><?php echo $booklist[$i]->posisi; ?></td>
                    <td><?php echo $booklist[$i]->nama_pelatih; ?></td>
                    <td>
        <a href="<?php echo base_url('index.php/pagination/update/'.$booklist[$i]->id) ?>" class="btn btn-sm btn-default">Ubah</a>
        <a href="<?php echo base_url('index.php/pagination/delete/'.$booklist[$i]->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingi menghapus?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php echo $pagination; ?>
        </div>
    </div>
</div>
</body>
</html>