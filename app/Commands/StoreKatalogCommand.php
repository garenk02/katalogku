<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Katalog;

class StoreKatalogCommand extends Command implements SelfHandling {

	public $judul;
	public $kategori_id;
	public $deskripsi;
	public $harga;
	public $kondisi;
	public $gambar;
	public $lokasi;
	public $email;
	public $telpon;
	public $pemilik_id;

	public function __construct($judul, $kategori_id, $deskripsi, $harga, $kondisi, $gambar, $lokasi, $email, $telpon, $pemilik_id)
	{
		$this->judul = $judul;
		$this->kategori_id = $kategori_id;
		$this->deskripsi = $deskripsi;
		$this->harga = $harga;
		$this->kondisi = $kondisi;
		$this->gambar = $gambar;
		$this->lokasi = $lokasi;
		$this->email = $email;
		$this->telpon = $telpon;
		$this->pemilik_id = $pemilik_id;
	}

	public function handle()
	{
		return Katalog::create([
			'judul' => $this->judul,
			'kategori_id' => $this->kategori_id,
			'deskripsi' => $this->deskripsi,
			'harga' => $this->harga,
			'kondisi' => $this->kondisi,
			'gambar' => $this->gambar,
			'lokasi' => $this->lokasi,
			'email' => $this->email,
			'telpon' => $this->telpon,
			'pemilik_id' => $this->pemilik_id,
		]);
	}

}