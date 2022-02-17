<?php

namespace App\Controllers;

use Tatter\Imposter\Entities\User;

class Home extends BaseController {

	public function index() {
		if($this->auth->id()/*$this->session->id_account && $this->session->nickname*/):
			d(new User());
			d($this->auth);
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
