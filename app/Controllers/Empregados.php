<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
//use App\Models\EmpregadosModel;

class Empregados extends ResourceController
{

    protected $modelName = 'App\Models\EmpregadosModel';
    protected $format    = 'array';

	/**
	 * Get all employees.
	 * @return Array from all employees.
	*/
	public function index(){
      //$this->model = new EmpregadosModel();
      $data['empregados'] = $this->model->orderBy('id', 'DESC')->findAll();
      return $this->respond($data);
    }

	/**
	 * Create an employee.
	 * @return Array with response.
	*/
	public function create() {
		//$this->model = new EmpregadosModel();
		$data = [
			'name'  => $this->request->getVar('name'),
			'email' => $this->request->getVar('email'),
		];		
		$response = [
			'status'   => 201,
			'error'    => null,
			'messages' => [
				'success' => 'Empregado criado com sucesso!',
			],
		];
		return $this->respondCreated($response);
    }

	/**
	 * Get single employees.
	 * @param  int $id
	 * @return Array from employee.
	*/
	public function show($id = null){
      //$this->model = new EmpregadosModel();
      $data = $this->model->find($id);
	  if(!empty($data)){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Empregado não encontrado');
        }
    }

	/**
	 * Update an employee.
	 * @param  int $id
	 * @return Array with response.
	*/
	public function update($id = null){
        //$this->model = new EmpregadosModel();
        $id = $this->request->getVar('id');		
        $data = [
            'name'   => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        //$this->model->update($id, $data);
        $response = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'Empregado atualizado com sucesso!',
          ]
      ];
      return $this->respond($response);
    }

	/**
	 * Delete an employee.
	 * @param  int $id
	 * @return Array with response.
	*/
    public function delete($id = null){
        //$this->model = new EmpregadosModel();
        $data = $this->model->delete($id);
        if(!empty($data)){
            $this->model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Empregado deletado com sucesso!',
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('Nenhum empregado encontrado!');
        }
    }
}
