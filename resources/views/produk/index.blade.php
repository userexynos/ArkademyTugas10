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

      @if($alert = Session::get('success'))
        <h2 style="color: green">
          {{ $alert }}
        </h2>
      @endif

      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%">
        <h1>Daftar Produk</h1>
        
        <a href="{{route('add_product')}}">
          Tambah Produk
        </a>
      </div>
      
      <table style="border: 1px solid grey; width: 100%">
        <thead>
          <th style="width: 10%">
            <h3>
              No
            </h3>
          </th>

          <th style="width: 15%">
            <h3>
              Nama Produk
            </h3>
          </th>

          <th style="width: 25%">
            <h3>
              Keterangan
            </h3>
          </th>

          <th  style="width: 15%">
            <h3>
              Harga
            </h3>
          </th>

          <th style="width: 10%">
            <h3>
              Jumlah
            </h3>
          </th>

          <th style="width: 10%">
            <h3>
              Actions
            </h3>
          </th>
        </thead>

        <tbody>

          @foreach($data as $key => $value)
          <tr>
            <td>
              <span style="display: block; text-align: center">
                {{ $key+1 }}
              </span>
            </td>

            <td>
              <a href="{{route('detail', $value->id)}}" style="display: block; text-align: center">
                {{ $value->nama_produk }}
              </a>
            </td>

            <td>
              <span style="display: block; text-align: center">
                {{ $value->keterangan }}
              </span>
            </td>

            <td>
              <span style="display: block; text-align: center">
                {{ $value->harga }}
              </span>
            </td>

            <td>
              <span style="display: block; text-align: center">
                {{ $value->jumlah }}
              </span>
            </td>

            <td>
              <div style="width: 100%; display: flex; justify-content: space-evenly">
                <button onclick="window.location.href='{{route('edit', $value->id)}}'">
                  Edit
                </button>
                
                <form method="POST" action="{{route('delete', $value->id)}}">
                  @method('DELETE')
                  @csrf
                  <button type="submit">Hapus</button>
                </form>
                
              </div>
            </td>
          </tr>
          @endforeach

          @if($data->count() == 0)
          <tr>
            <td colspan="6">
              <div style="text-align: center; display: block;">
                <span style="font-weight: medium; font-size: 18px">Data masih Kosong</span>
              </div>
            </td>
          </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>