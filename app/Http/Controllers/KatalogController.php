<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Katalog;
use App\Http\Requests\StoreKatalogRequest;
use App\Commands\StoreKatalogCommand;
use Auth;;

class KatalogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth', ['except' => ['index', 'show', 'search']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $katalog = Katalog::all();
        return view('index', compact('katalog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKatalogRequest $request)
    {
        $judul = $request->input('judul');
        $kategori_id = $request->input('kategori_id');
        $deskripsi = $request->input('deskripsi');
        $harga = $request->input('harga');
        $kondisi = $request->input('kondisi');
        $gambar = $request->file('gambar');
        $lokasi = $request->input('lokasi');
        $email = $request->input('email');
        $telpon = $request->input('telpon');
        $pemilik_id = 1;

        if($gambar) {
            $gambar_nama = $gambar->getClientOriginalName();
            $gambar->move(public_path('images'), $gambar_nama);
        }
        else {
            $gambar_nama = 'noimage.jpg';
        }

        $command = new StoreKatalogCommand($judul, $kategori_id, $deskripsi, $harga, $kondisi, $gambar_nama, $lokasi, $email, $telpon, $pemilik_id);
        $this->dispatch($command);

        return \Redirect::route('katalog.index')
                ->with('message', 'Katalog Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $katalog = Katalog::find($id);
        return view('show', compact('katalog'));
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
