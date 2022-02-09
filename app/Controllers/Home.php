<?php

namespace App\Controllers;

class Home extends BaseController {

	public function index() {
		if($this->session->id_account && $this->session->nickname):
			$data = [
				'title' => 'CI4',
				'app_name' => 'CI4 - Home'
			];

			return view('home/home', $data);
		else:
			return redirect()->to(site_url('/'));
		endif;
	}

}
