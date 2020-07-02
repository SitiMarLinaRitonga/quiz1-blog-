
@extends('layouts.app')

 @section('content')

<div class="container">

<h3>Tambah Data Post</h3>
<form action="{{ url('/post') }}">
@csrf
 <table>
 <tr>
 <td>NO</td>
 <td><input type="text" name="post_id"></td>
 </tr>
 <tr>
 <td>DATE</td>
 <td><input type="text" name="post_date"></td>
 </tr>
 <tr>
 <td>POST SLUG</td>
 <td><input type="text" name="post_slug"></td>
 </tr>
 <tr>
 <td>TITLE POST</td>
 <td><input type="text" name="post_title"></td>
 </tr>
 <tr>
 <td>TEXT POST</td>
 <td><input type="text" name="post_text"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection 
 

 