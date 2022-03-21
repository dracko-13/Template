<?php

namespace App\Models;

use CodeIgniter\Model;

class Username extends Model {

	protected $table         = 'usernames';
	protected $primaryKey    = 'id_username';
	protected $returnType    = 'object';

	protected $allowedFields = [
		'username',
		'account_id'
	];

	public function getUserName($id_account) {
		return $this->getWhere(['account_id' => $id_account])->getRow();
	}

}
