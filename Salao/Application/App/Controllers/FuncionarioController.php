<?php
namespace App\Controllers;

use Core\BaseController;
use Core\Container;
use Core\Redirect;
use Core\Autenticate;


class FuncionarioController extends BaseController
{	
	
	protected $Funcionarios;

    public function __construct()
    {
        parent::__construct();
        $this->Funcionarios 	= 	Container::getModel("Funcionarios");
    }

    //formulário para criar Funcionários
	public function func()
	{	
		$this->setPageTitle("Criar-Funcionário");
		$this->renderview('Salao/createfunc', "layout");	
	}

	public function listFunc(){
		$this->setPageTitle("Funcionarios");
		$this->renderview('Salao/funcionarios', "layout");
	}

	public function editFunc($id)
	{	
		$this->view->Funcionario = $this->Funcionarios->find($id);  //to carregando na variavel do basecontroller todos os valores para que eu possa prencher os campos no formulário para edição

		$this->setPageTitle("Funcionario-edit");
		$this->renderview('Salao/editfuncionario', "layout");         //mudar a pagina em que está renderizando criar pagina *colocar no action do formulário a rota que vai chamar o método  AgendamentoUpdate não precisa criar outra página depois por que com o submit vai chamar o método e o redirect vai redirecionar para a view
	}




    // método grava Funcionario no banco 
	public function FuncionarioStore($request)
	{
		// notação o select que vem do formulário mesmo que de para marcar vário sempre vai vir o ultimo que vc clico da ordeem do select
		$data = [

        	'nome' 					=> $request->post->nome,
			'cpf'					=> $request->post->cpf,
//			'cod_especialidade'		=> intval($request->post->cod_especialidade),
			'data_nascimento'		=> date("Y-m-d ", strtotime( $request->post->data_nascimento ) ),
			'sexo' 					=> $request->post->sexo,
			'email'					=> $request->post->email,
			'cod_unidade'           => $request->post->cod_unidade,
			'telefone' 				=> $request->post->telefone,
			'celular'				=> $request->post->celular,
		];

		if( $this->Funcionarios->create( $data) )
		{
			Redirect::route("/funcionarios", [
             	'success'=>['criado com sucesso']
         	]);
        }
        else
        {
           echo "não ta incluindo porra nenhuma no banco";
        }

	}


	public function FuncionarioUpdate($id, $request){
		// notação o select que vem do formulário mesmo que de para marcar vário sempre vai vir o ultimo que vc clico da ordeem do select
		$data = [

        	'nome' 					=> $request->post->nome,
			'cpf'					=> $request->post->cpf,
//			'cod_especialidade'		=> intval($request->post->cod_especialidade),
			'data_nascimento'		=> date("Y-m-d ", strtotime( $request->post->data_nascimento ) ),
			'sexo' 					=> $request->post->sexo,
			'email'					=> $request->post->email,
			'cod_unidade'           => $request->post->cod_unidade,
			'telefone' 				=> $request->post->telefone,
			'celular'				=> $request->post->celular,
		];

		if( $this->Funcionarios->update( $data, $id) )
		{
			Redirect::route("/edit/$id/Funcionarios", [
             	'success'=>['criado com sucesso']
         	]);
        }
        else
        {
           echo "não ta incluindo porra nenhuma no banco";
        }
	}


	public function FuncionarioDelete($id)
	{
		if( $this->Funcionarios->delete($id) )
		{
			return Redirect::route("/funcionarios/lista", [
             	'success'=>['deletado com sucesso']
         	]);
		}
		else
		{
			 echo "não ta incluindo porra nenhuma no banco";
		}
	}
}