
@extends('layouts.app')

 @section('content')

<div class="container">

<h3>Tambah Data Photo</h3>
<form action="{{ url('/photo') }}">
@csrf
 <table>
 <tr>
 <td>NO</td>
 <td><input type="text" name="photo_id"></td>
 </tr>
 <tr>
 <td>TITLE PHOTO</td>
 <td><input type="text" name="photo_title"></td>
 </tr>
 <tr>
 <td>TEXT PHOTO</td>
 <td><input type="text" name="photo_text"></td>
 </tr>
 <tr>
 <td>PHOTO UPLOAD</td>
 <td><input type="text" name="photo_upload"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection 
 
