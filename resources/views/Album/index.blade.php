
 @extends('layouts.app')

 @section('content')

<div class="container">

<h3>Daftar Category</h3>

<table>
 <tr>
 <td>NO</td>
 <td>NAMA</td>
 <td>TEXT ALBUM</td>
 </tr> 

 @foreach($rows as $row)
<tr>
 <td>{{ $row->album_id}}</td>
 <td>{{ $row->album_name }}</td>
 <td>{{ $row->album_text }}</td>
</tr>
 @endforeach
 </table>
 </div>

 @endsection 
 <a href="{{ url('album/create') }}">Tambah Data</a>