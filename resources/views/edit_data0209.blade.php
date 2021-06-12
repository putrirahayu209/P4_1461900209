<form action="{{ url('buku0209/' . $buku0209->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    Id: <input type="text" name="id" value="{{ $buku0209->id }}"><br>
    Judul: <input type="text" name="judul" value="{{ $buku0209->judul }}"><br>
    Tahun Terbit: <input type="text" name="tahun_terbit" value="{{ $buku0209->tahun_terbit }}"><br>
    <button type="submit">Simpan</button>
</form>