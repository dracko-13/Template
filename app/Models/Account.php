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

}
