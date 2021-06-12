<head>
  <meta name="viewport" content="width=device-width,
  initial-scale=1">
  <title>Data BuKu</title>
  <style>
      table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
      }
      thead {
        background-color: #f2f2f2;
      }
      th, td {
        text-align: left;
        padding: 8px;
      }
      tr:nth-child(even) { background-color: #f2f2f2}
      .tambah {
        padding: 8px 16px ;
        text-decoration: none;
      }
  </style>
</head>
<body>
  <div style="overflow-x:auto;">
    <a class="tambah" href="{{route('buku0209.create')}}"> Tambah Data</a>
  <table>
      <thead>
          <tr>
              <th>Id</th>
              <th>Judul</th>
              <th>Tahun Terbit</th>
              <th>Jenis</th>
              <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        @foreach($buku as $buku)
        <tr>
            <td>{{$buku->id}}</td>
            <td>{{$buku->judul}}</td>
            <td>{{$buku->tahun_terbit}}</td>
            <td>{{$buku-> jenis}}</td>
            <td>
              <a href="{{ url('buku0209/' .$buku->id. "/edit") }}">Edit</a>
              |
              <form action="{{ url('buku0209/' . $buku->id) }}" method="POST">
                      @csrf
                      <input type="hidden" name="_method" value="delete">
                      <button type="submit">Hapus</button>
                  </form>
            </td>
        </tr>
        @endforeach
      </tbody>
  </table>
  <a href="/BukuController/export_excel" class="btn btn-success my-3" target="_blank"> EXPORT EXCEL</a>
  </div>