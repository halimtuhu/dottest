<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DOT TEST</title>
  </head>
  <body>
    <form action="/search/kota" method="get">
      <label for="id">ID Kota</label>
      <input type="text" name="id" value="">
      <button type="submit">cari</button>
      <button type="button" onclick="location.href='/'">kembali</button>
    </form>
    <br>
    @isset($kota)
      Hasil: <br>
      Nama Kota : <strong>{{$kota->city_name}}</strong><br>
      Provinsi : <strong>{{$kota->province}}</strong><br>
      Kode Post : <strong>{{$kota->postal_code}}</strong>
    @endisset
  </body>
</html>
