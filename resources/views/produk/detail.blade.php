<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div style="display: flex; justify-content: center; margin-top: 30px; width: 100%">
    <div style="width: 80%">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%">
        <h1>Daftar Produk</h1>
        
        <a href="{{route('edit', $data->id)}}">
          Edit Produk
        </a>
      </div>
      
      <div style="width: 200px;">
        <span style="display: block">
          Nama Produk: 
        </span>

        <span style="display: block; margin-bottom: 10px; font-weight: bold; font-size: 18px">
          {{ $data->nama_produk }}
        </span>

        <span style="display: block">
          Keterangan: 
        </span>
        <span style="display: block; margin-bottom: 10px; font-weight: bold; font-size: 18px">
          {{ $data->keterangan }}
        </span>

        <span style="display: block">
          Harga: 
        </span>
        <span style="display: block; margin-bottom: 10px; font-weight: bold; font-size: 18px">
          {{ $data->harga }}
        </span>

        <span style="display: block">
          Jumlah: 
        </span>
        <span style="display: block; margin-bottom: 10px; font-weight: bold; font-size: 18px">
          {{ $data->jumlah }}
        </span>
      </div>

    </div>
  </div>
</body>
</html>