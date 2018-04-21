<?php
namespace App\Controllers;

use Core\BaseController;
use Core\Container;
use Core\Redirect;


class EspecialidadeController extends BaseController
{	
	protected $especialidades;


    public function __construct()
    {

        parent::__construct();
        $this->especialidades 	= 	Container::getModel("Especialidades");
    }


//formulário para criar Especialidades
	public function especialidades()
	{
		$this->setPageTitle("Especialidade-Funcionários");
		$this->renderview('Salao/createskills', "layout");	
	}


// método grava especialidade no banco 
	public function EspecialidadeStore($request)
	{
		$data = [
			
			'title' 				=> $request->post->title,
			'descricao' 			=> $request->post->descricao,
			'create_at' 			=> date("Y-m-d H:i:s")
//			'update_at'				=> date("Y-m-d H:i:s") 
//			'id_user_last_update'	=> date("Y-m-d H:i:s") 

		];

		if( $this->especialidades->create( $data) )
		{
			Redirect::route("/especialidades", [
             	'success'=>['criado com sucesso']
         	]);
        }
        else
        {
           echo "não ta incluindo porra nenhuma no banco";
        }		
	}



}
