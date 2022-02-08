<?php

namespace App\Models;

use CodeIgniter\Model;

class Account extends Model
{

	protected $DBGroup = 'default';

	public function getData(string $nickname)
	{
		return $this->db->table('accounts')->getWhere(['nickname' => $nickname])->getRow();
	}

	public function updateSecretKey(int $id_account, string $secret_key)
	{
		$this->db->table('accounts')->where(['id_account' => $id_account])->set(['secret_key' => password_hash($secret_key, PASSWORD_DEFAULT)])->update();
	}

}
