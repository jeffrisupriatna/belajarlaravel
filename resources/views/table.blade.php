@extends('admin')
@section('mainsb2')
<h1>ini halaman tabel</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama barang</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $item )
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item }}</td>
      </tr>  
    @endforeach
      
    </tbody>
  </table>
@endsection

@Section('js')
    <script>
        alert ('ini alert tabel');
    </script>
@endsection