<?php
namespace App\Controllers;

use Core\BaseController;
use Core\Container;
use Core\Redirect;
use Core\Autenticate;


class AgendaController extends BaseController
{	
	protected $Agenda;

	public function __construct()
    {
        parent::__construct();
        $this->Agenda 	= 	Container::getModel("Agenda");
    }


     //formulário para criar Funcionários
	public function schedule($id)
	{	
		$this->view->Agenda = $id;
		$this->setPageTitle("Criar-Agenda");
		$this->renderview('Salao/createagenda', "layout");	
	}

	public function listSchedule($id){
		$this->view->idFunc = $id;
		$this->setPageTitle("Agendas"); // segregar por funcionarios
		$this->renderview('Salao/agendas', "layout");
	}



	public function editschedule($id)
	{	
		$this->view->Agenda = $this->Agenda->find($id);  //to carregando na variavel do basecontroller todos os valores para que eu possa prencher os campos no formulário para edição

		$this->setPageTitle("Agenda-edit");
		$this->renderview('Salao/editagenda', "layout");         //mudar a pagina em que está renderizando criar pagina *colocar no action do formulário a rota que vai chamar o método  AgendamentoUpdate não precisa criar outra página depois por que com o submit vai chamar o método e o redirect vai redirecionar para a view
	}


	public function agendaStore($id, $request )
	{
		// notação o select que vem do formulário mesmo que de para marcar vário sempre vai vir o ultimo que vc clico da ordeem do select

		$data = [

        	'hora_entrada' 					=> date("H:i:s", strtotime( $request->post->hora_entrada ) ),
			'hora_saida'					=> date("H:i:s", strtotime( $request->post->hora_saida ) ),
			'dia_semana'					=> $request->post->dia_semana,
			'dia_mes' 						=> date("Y-m-d ", strtotime( $request->post->dia_mes ) ),
			'cod_func'						=> $id
		];

		if( $this->Agenda->create( $data) )
		{
			Redirect::route("/agenda/$id", [
             	'success'=>['criado com sucesso']
         	]);
        }
        else
        {
           echo "não ta incluindo porra nenhuma no banco";
        }

	} 

	public function scheduleUpdate($id, $request){
		$data = [

        	'hora_entrada' 					=> date("H:i:s", strtotime( $request->post->hora_entrada ) ),
			'hora_saida'					=> date("H:i:s", strtotime( $request->post->hora_saida ) ),
			'dia_semana'					=> $request->post->dia_semana,
			'dia_mes' 						=> $request->post->dia_mes,
			'cod_func'						=> $id
		];

		if($this->Agenda->update($data, $id)){
			Redirect::route("/edit/$id/Agenda", [
             	'success'=>['alterado com sucesso']
         	]);
		}
		else
        {
           echo "não ta incluindo porra nenhuma no banco";
        }

	}

	public function scheduleDelete($id){
		if( $this->servicos->delete($id) )
		{
			return Redirect::route("/servicos/lista", [
             	'success'=>['deletado com sucesso']
         	]);
		}
		else
		{
			 echo "não ta incluindo porra nenhuma no banco";
		}
	}






}