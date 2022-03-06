<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="border border-primary rounded m-5 p-4">

<form method="POST" action="belanja.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci" required="required"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="simpan" type="simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</div>
<div class="m-5 p-5 border border-primary rounded">
<?php
$_nama = $_POST['nama'];
$_produk = $_POST['produk'];
$_jumlah = $_POST['jumlah'];

if ($_produk == 'tv') {
    $belanja_total = $_jumlah * 4200000;
} elseif($_produk == 'kulkas') {
    $belanja_total = $_jumlah * 3100000;
} elseif($_produk == 'mesin_cuci') {
    $belanja_total = $_jumlah * 3800000;
}else {
    "Invalid";
}

echo 'Nama Customer : '. $_nama;
echo '<br>Produk Pilihan : '. $_produk;
echo '<br>Jumlah Beli : '. $_jumlah;
echo '<br>Total Belanja : '. number_format($belanja_total);
?>
</div>
</body>
</html>