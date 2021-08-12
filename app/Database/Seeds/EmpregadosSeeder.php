<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmpregadosSeeder extends Seeder
{
	public function run()
	{
		$data= [
			[
      			'name'=> 'Allison Silva',
				'email'=> 'silva@empresa.com',
			],
			[
      			'name'=> 'Amanda Marques',
				'email'=> 'marques@empresa.com',
			],
						[
      			'name'=> 'Sulliavan Ruan',
				'email'=> 'ruan@empresa.com',
			],
			[
      			'name'=> 'Catarina Gomes',
				'email'=> 'gomes@empresa.com',
			],
			[
      			'name'=> 'Felipe Silvestre',
				'email'=> 'silvestre@empresa.com',
			],
			[
      			'name'=> 'Romilson Alife',
				'email'=> 'alife@empresa.com',
			],
						[
      			'name'=> 'Manoel Queiroz',
				'email'=> 'queiroz@empresa.com',
			],
		];
		// Using Query Builder
		$this->db->table('empregados')->insertBatch($data);
	}
}
