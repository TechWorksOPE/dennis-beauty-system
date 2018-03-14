<?php

namespace App\Controllers;

/**
* 
*/

use Core\BaseController;
use Core\Container;
use Core\Redirect;
use Core\Autenticate;


class UserController extends BaseController
{
		use Autenticate;
	
	protected $usuarios;

	public function __construct()
	{
		parent::__construct();
       	$this->usuarios = Container::getModel("Usuario");
	}



	//formulário para criar usuários
	public function user()
	{
		$this->setPageTitle("Nov-Usuario");
		$this->renderview('Salao/user', "layout");	
	}

	public function editUser($id){
		$this->view->user = $this->usuarios->find($id);  //to carregando na variavel do basecontroller todos os valores para que eu possa prencher os campos no formulário para edição

		$this->setPageTitle("Editar-Usuario");
		$this->renderview('Salao/edituser', "layout");
	}


	//tabela de agendamentos dos usuarios assim ele pode fazer update ou deletar um agendamento 
	public function UserAgendamentos()
	{
		$this->setPageTitle("Agendamento");
		$this->renderview('Salao/useragendamentos', "layout");	
	}


	// método grava usuario no banco 
	public function UserStore($request)
    {
        $data = [
        	'nome' 					=> $request->post->nome,
			'cpf'					=> $request->post->cpf,
			'data_nascimento'		=> date("Y-m-d ", strtotime( $request->post->data_nascimento ) ),
			'sexo' 					=> $request->post->sexo,
			'email'					=> $request->post->email,
			'endereco'				=> $request->post->endereco,				
			'numero_end'			=> $request->post->numero_end,
			'cep'					=> $request->post->cep,
			'telefone' 				=> $request->post->telefone,
			'celular'				=> $request->post->celular,
            'senha' 				=> $request->post->senha,
            'tipoacesso' 			=> 3,  // 3 para cliente  2 para usuario  1 para adm   0 para master
            'create_at' 			=> date("Y-m-d H:i:s")
//			'update_at'				=> date("Y-m-d H:i:s") 
//			'id_user_last_update'	=> date("Y-m-d H:i:s") 
        ];

//        if(Validator::make($data, $this->user->rulesCreate() ) )
//    	{
//            return Redirect::route('/user/create');
//    	}

        $data['senha'] = password_hash($request->post->senha, PASSWORD_BCRYPT);
        
        try
        {
            $this->usuarios->create($data);
            return Redirect::route('/', [
                'success' => ['Usuário criado com sucesso!']
            ]);
        }
        catch(\Exception $e)
        {
            return Redirect::route('/user', [
                'errors' => [$e->getMessage()]
            ]);
        }
    }

    public function userUpdate($id,$request){
    	$data = [
        	'nome' 					=> $request->post->nome,
			'cpf'					=> $request->post->cpf,
			'data_nascimento'		=> date("Y-m-d ", strtotime( $request->post->data_nascimento ) ),
			'sexo' 					=> $request->post->sexo,
			'email'					=> $request->post->email,
			'endereco'				=> $request->post->endereco,				
			'numero_end'			=> $request->post->numero_end,
			'cep'					=> $request->post->cep,
			'telefone' 				=> $request->post->telefone,
			'celular'				=> $request->post->celular,
			'update_at'				=> date("Y-m-d H:i:s") 
        ];

		if( $this->usuarios->update( $data , $id) )
		{
			Redirect::route("/edit/$id/Usuario", [
             	'success'=>['alterado com sucesso']
         	]);
        }
        else
        {
           echo "não ta incluindo porra nenhuma no banco";
        }
    }	
}
