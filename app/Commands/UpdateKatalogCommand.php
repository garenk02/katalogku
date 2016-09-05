<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Katalog;

class UpdateKatalogCommand extends Command implements SelfHandling {

	public $id;
	public $judul;
	public $kategori_id;
	public $deskripsi;
	public $harga;
	public $kondisi;
	public $gambar;
	public $lokasi;
	public $email;
	public $telpon;

	public function __construct($id, $judul, $kategori_id, $deskripsi, $harga, $kondisi, $gambar, $lokasi, $email, $telpon)
	{
		$this->id = $id;
		$this->judul = $judul;
		$this->kategori_id = $kategori_id;
		$this->deskripsi = $deskripsi;
		$this->harga = $harga;
		$this->kondisi = $kondisi;
		$this->gambar = $gambar;
		$this->lokasi = $lokasi;
		$this->email = $email;
		$this->telpon = $telpon;
	}

	public function handle()
	{
		return Katalog::where('id', $this->id)->update([
			'judul' => $this->judul,
			'kategori_id' => $this->kategori_id,
			'deskripsi' => $this->deskripsi,
			'harga' => $this->harga,
			'kondisi' => $this->kondisi,
			'gambar' => $this->gambar,
			'lokasi' => $this->lokasi,
			'email' => $this->email,
			'telpon' => $this->telpon,
		]);
	}

}