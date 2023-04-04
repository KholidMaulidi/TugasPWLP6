<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $search = $request->search;
        if(strlen($search)){
            $posts = Post::where('nama', 'LIKE', "%$search%") -> paginate(6);
        }
        else{
            $posts = Post::paginate(6);
        }
        return view('posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'no_rekening' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tabungan' => 'required',
            'saldo' => 'required',
            ]);
            //fungsi eloquent untuk menambah data
            Post::create($request->all());
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('posts.index')->with('success', 'Data Nasabah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_rekening)
    {
        //
        $Post = Post::find($no_rekening);
        return view('posts.detail', compact('Post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_rekening)
    {
        //
        $Post = Post::find($no_rekening);
        return view('posts.edit', compact('Post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_rekening)
    {
        //
        $request->validate([
            'no_rekening' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tabungan' => 'required',
            'saldo' => 'required',
            ]);
        
            Post::find($no_rekening)->update($request->all());
            //    //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('posts.index')->with('success', 'Data Nasabah Berhasil Diupdate');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_rekening)
    {
        //
        Post::find($no_rekening)->delete();
        return redirect()->route('posts.index')
        -> with('success', 'Data Vaksinasi Berhasil Dihapus');
    }
}
