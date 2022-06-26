<?php

namespace App\Controllers;

use Tatter\Imposter\Entities\User;

class Home extends BaseController {

	public function index() {
		if():
			$data = [
				'title'    => 'CI4',
				'app_name' => 'CI4 - Home'
			];
			return view('home/home', $data);
		else:
			return redirect()->to(site_url('/'));
		endif;
	}

}
