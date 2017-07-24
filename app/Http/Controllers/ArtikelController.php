<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('indonesia.backend.artikel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indonesia.backend.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'=>'required|unique:artikel,judul',
            'kategori'=>'required|exists:kategori_artikel,id',
            'konten'=>'required',
            'cover'=>'image|max:2048']);
        $book Artikel::create($request->except('cover'));
        if($request->hash_file('cover'))
        {
            $uploaded_cover=$request->file('cover');
            $extension=$uploaded_cover->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath->public_path().DIRECTORY_SEPARATOR. 'img';
            $uploaded_cover->move($destinationPath, $filename);
            $book->cover=$filename;
            $book->save();
        }
        session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"berhasil menyimpan $book->title"]);
        return redirect()->route('artikel.index')
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
        $artikel = Artikel::find($id);
        return view('artikel.edit')->with(compact('artikel'));
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
