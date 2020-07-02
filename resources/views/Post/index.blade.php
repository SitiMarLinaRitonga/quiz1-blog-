
 @extends('layouts.app')

 @section('content')

<div class="container">

<h3>Daftar Post</h3>

<table>
 <tr>
 <td>NO</td>
 <td>DATE</td>
 <td>POST SLUG</td>
  <td>TITLE POST</td>
 <td>TEXT POST</td>
 </tr> 

 @foreach($rows as $row)
<tr>
 <td>{{ $row->post_id}}</td>
 <td>{{ $row->post_date }}</td>
 <td>{{ $row->post_slug }}</td>
 <td>{{ $row->post_title }}</td>
 <td>{{ $row->post_text }}</td>
</tr>
 @endforeach
 </table>
 </div>

<a href="{{ url('post/create') }}">Tambah Data</a>



