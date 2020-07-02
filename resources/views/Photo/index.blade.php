 @extends('layouts.app')

 @section('content')

 <div class="container">

 <h3>Daftar Photo</h3>

 <table>
 <tr>
 <td>NO</td>
 <td>TITLE PHOTO</td>
 <td>TEXT PHOTO</td>
 <td>PHOTO UPLOAD</td>
 </tr> 
 @foreach($rows as $row)
 <tr>
 <td>{{ $row->photo_id }}</td>
<td>{{ $row->photo_title }}</td>
<td>{{ $row->photo_text }}</td>
 <td>{{ $row->photo_upload }}</td>
 </tr>
 @endforeach
 </table>
 </div>

  @endsection 

 <a href="{{ url('photo/create') }}">Tambah Data</a>
