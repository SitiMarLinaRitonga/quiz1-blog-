<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 $rows = Photo::all();
 return view('photo.index', compact('rows'));
 }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
 return view('photo.add');
 }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
 {
$request->validate([
 'photo_id' => 'bail|required|unique:tb_photo',
 'photo_title' => 'required'
 ],
 [
 'photo_id.required' => 'ID wajib diisi',
 'photo_title.unique' => 'Date sudah ada',
 'photo_text.unique' => 'Slug sudah ada',
 'photo_upload.required' => 'Title sudah ada',
  ]);

 Category::create([
 'photo_id' => $request->photo_id,
 'photo_title' => $request->photo_title,
 'photo_text' => $request->photo_text,
 'photo_upload' => $request->photo_upload

 ]);

 return redirect('photo');
  } 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
