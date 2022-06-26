<?php

namespace App\Models;

use CodeIgniter\Model;

class Account extends Model {

	protected $table         = 'accounts';
	protected $primaryKey    = 'id_account';
	protected $returnType    = 'object';

	protected $allowedFields = [
		'nickname',
		'secret_key'
	];

	public function getData($nickname) {
		return $this->getWhere(['nickname' => $nickname])->getRow();
	}

	public function updateSecretKey($id_account, $secret_key) {
		$this->set('secret_key', password_hash($secret_key, PASSWORD_DEFAULT))->where('id_account', $id_account)->update();
	}

	public function signup($nickname, $secret_key) {
		return $this->insert([
			'nickname' => $nickname,
			'secret_key' => password_hash($secret_key, PASSWORD_DEFAULT)
		]);
	}

}
