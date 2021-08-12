<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpregadosModel extends Model
{	
	protected $table                = 'empregados';
	protected $primaryKey           = 'id';
	protected $allowedFields		= ['name', 'email'];
}
