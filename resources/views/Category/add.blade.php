
@extends('layouts.app')

 @section('content')

<div class="container">

<h3>Tambah Data Category</h3>
<form action="{{ url('/category') }}">
@csrf
 <table>
 <tr>
 <td>NO</td>
 <td><input type="text" name="category_id"></td>
 </tr>
 <tr>
 <td>NAMA</td>
 <td><input type="text" name="category_name"></td>
 </tr>
 <tr>
 <td>TEXT CATEGORY</td>
 <td><input type="text" name="category_text"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection 