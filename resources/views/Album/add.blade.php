
@extends('layouts.app')

 @section('content')

<div class="container">

<h3>Tambah Data Album</h3>
<form action="{{ url('/Album') }}">
@csrf
 <table>
 <tr>
 <td>NO</td>
 <td><input type="text" name="album_id"></td>
 </tr>
 <tr>
 <td>NAMA</td>
 <td><input type="text" name="album_name"></td>
 </tr>
 <tr>
 <td>TEXT CATEGORY</td>
 <td><input type="text" name="album_text"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection 