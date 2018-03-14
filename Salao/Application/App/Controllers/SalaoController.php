<?php
namespace App\Controllers;

use Core\BaseController;
use Core\Container;
use Core\Redirect;
use Core\Autenticate;


class SalaoController extends BaseController
{	
	
	use Autenticate;

	protected $agendamentos; 
	protected $especialidades; 
	protected $Funcionarios;


    public function __construct()
    {

        parent::__construct();
        $this->agendamentos 	= 	Container::getModel("Agendamento");
        $this->especialidades 	= 	Container::getModel("Especialidades");
        $this->Funcionarios 	= 	Container::getModel("Funcionarios");
    }


// home
	public function home()
	{
		//var_dump(UnidadeController::getUnidade());
		$this->setPageTitle("Home");
		$this->renderview('Salao/index', "layout");	
	}

// formulário de login
	public function login()
	{
		$this->setPageTitle("Login");
		$this->renderview('Salao/login', "layout");	
	}




//formulário de agendamento
	public function form()
	{
		$this->setPageTitle("Agendamento");
		$this->renderview('Salao/form', "layout");	
	}




//formulário para criar Funcionários
	public function func()
	{	
		$this->setPageTitle("New Funcionário");
		$this->renderview('Salao/createfunc', "layout");	
	}

//formulário para criar Especialidades
	public function especialidades()
	{
		$this->setPageTitle("Skills Funcionários");
		$this->renderview('Salao/createskills', "layout");	
	}







//---------------------------------------------- Formulários para edição -----------------------------------------------------------
	public function editAgendamento($id)
	{	
		$this->view->agendamento = $this->agendamentos->find($id);  //to carregando na variavel do basecontroller todos os valores para que eu possa prencher os campos no formulário para edição

		$this->setPageTitle("Serviços");
		$this->renderview('Salao/editagendamento', "layout");         //mudar a pagina em que está renderizando criar pagina *colocar no action do formulário a rota que vai chamar o método  AgendamentoUpdate não precisa criar outra página depois por que com o submit vai chamar o método e o redirect vai redirecionar para a view
	}





//------------------------------------------- métodos para lógica com banco --------------------------------------------------------
  
	public function AgendamentoStore($request)
	{		


		$data = [

			'data_agendamento' 		=> date("Y-m-d H:i:s", strtotime( $request->post->data_agendamento ) ),
			'horario_agendamento'	=> date("H:i:s", strtotime( $request->post->horario_agendamento) ),
			'cod_user'				=> $this->auth->id(),  
			'cod_profissional'		=> $request->post->cod_profissional, //vai vir como post do formulário 
			'cod_servico'			=> $request->post->cod_servico      //vai vir como post do formulário 

		];

		if( $this->agendamentos->create( $data) )
		{
			Redirect::route("/agendamento", [
             	'success'=>['criado com sucesso']
         	]);
        }
        else
        {
           echo "não ta incluindo porra nenhuma no banco";
        }
	}


	public function AgendamentoUpdate($id,$request)
	{

		$data = [

			'data_agendamento' 		=> date("Y-m-d H:i:s", strtotime( $request->post->data_agendamento ) ),
			'horario_agendamento'	=> date("H:i:s", strtotime( $request->post->horario_agendamento) ),
			'cod_user'				=> $this->auth->id(),  
			'cod_profissional'		=> $request->post->cod_profissional, //vai vir como post do formulário 
			'cod_servico'			=> $request->post->cod_servico      //vai vir como post do formulário 

		];

		if( $this->agendamentos->update( $data , $id) )
		{
			Redirect::route("/useragendamentos", [
             	'success'=>['alterado com sucesso']
         	]);
        }
        else
        {
           echo "não ta incluindo porra nenhuma no banco";
        }
	}

	public function AgendamentoDelete($id)
	{
		if( $this->agendamentos->delete($id) )
		{
			return Redirect::route("/useragendamentos", [
             	'success'=>['deletado com sucesso']
         	]);
		}
		else
		{
			 echo "não ta incluindo porra nenhuma no banco";
		}
	}


//funcionario e a porra da especialidade



// método grava Funcionario no banco 
	public function FuncionarioStore($request)
	{
		// notação o select que vem do formulário mesmo que de para marcar vário sempre vai vir o ultimo que vc clico da ordeem do select


		$data = [

        	'nome' 					=> $request->post->nome,
			'cpf'					=> $request->post->cpf,
			'cod_especialidade'		=> intval($request->post->cod_especialidade),
			'data_nascimento'		=> date("Y-m-d ", strtotime( $request->post->data_nascimento ) ),
			'sexo' 					=> $request->post->sexo,
			'email'					=> $request->post->email,
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