<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div style="display: flex; justify-content: center; margin-top: 30px; width: 100%">
    <div style="width: 80%">

      <h1>Tambah Produk</h1>
      
      <form method="POST" action="{{route('add')}}">
        @csrf
        <div style="margin: 15px 0;">
          <div>Nama Produk</div>
          <input type="text" required name="nama_produk">
        </div>

        <div style="margin: 15px 0;">
          <div>Keterangan</div>
          <input type="text" required name="keterangan">
        </div>

        <div style="margin: 15px 0;">
          <div>Harga</div>
          <input type="number" required name="harga">
        </div>

        <div style="margin: 15px 0;">
          <div>Jumlah</div>
          <input type="number" required name="jumlah">
        </div>

        <button type="submit">Tambah</button>
      </form>
    </div>
  </div>
</body>
</html>