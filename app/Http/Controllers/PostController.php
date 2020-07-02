<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 $rows = Post::all();
 return view('post.index', compact('rows'));
 }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
 return view('post.add');
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
 'post_id' => 'bail|required|unique:tb_category',
 'post_date' => 'required'
 ],
 [
 'post_id.required' => 'IDwajib diisi',
 'post_date.unique' => 'Date sudah ada',
 'post_slug.unique' => 'Slug sudah ada',
 'post_title.unique' => 'Title sudah ada',
 'post_text.required' => 'keterangan wajib diisi'
  ]);

 Category::create([
 'post_id' => $request->post_id,
 'post_date' => $request->post_date,
 'post_slug' => $request->post_slug,
 'post_title' => $request->post_title,
 'post_text' => $request->post_text,

 ]);

 return redirect('post');
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
