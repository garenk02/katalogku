<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Kategori;

class MainComposer {

	public function compose(View $view)
	{
		$view->with('kategori', Kategori::all());
	}

}