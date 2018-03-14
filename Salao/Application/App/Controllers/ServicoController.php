<?php  
namespace App\Controllers;

/**
* 
*/

use Core\BaseController;
use Core\Container;
use Core\Redirect;

class ServicoController extends BaseController
{
	
	protected $servicos;

	public function __construct()
	{
		parent::__construct();
       	$this->servicos = Container::getModel("Servico");
	}



	//formulário para criar servicos
	public function servicos()
	{	
		$this->setPageTitle("Serviços");
		$this->renderview('Salao/createservico', "layout");	
	}

	public function ListServices(){
		$this->setPageTitle("Serviços");
		$this->renderview('Salao/servicos', "layout");
	}

	public function editServico($id){
		$this->view->servicos = $this->servicos->find($id);
		$this->setPageTitle("Serviços");
		$this->renderview('Salao/editservico', "layout");

	}


	// método grava serviço no banco 
	public function ServicoStore($request)
	{
		$valorFinal = str_replace("," , "." , $request->post->valor);
		$data = [

				'tipoServico' 		=> $request->post->tipoServico,
				'TempoExecucao'     => date("H:i:s", strtotime( $request->post->TempoExecucao ) ) ,//ou sem strtotime
				'valor'             => $valorFinal
//			'update_at'				=> date("Y-m-d H:i:s") 
//			'id_user_last_update'	=> date("Y-m-d H:i:s") 
		];

		if( $this->servicos->create( $data) )
		{
			Redirect::route("/servicos", [
             	'success'=>['criado com sucesso']
         	]);
        }
        else
        {
           echo "não ta incluindo porra nenhuma no banco";
        }
	}


	public function ServicoUpdate($id, $request){

		$valorFinal = str_replace("," , "." , $request->post->valor);
		$data = [

				'tipoServico' 		=> $request->post->tipoServico,
				'TempoExecucao'     => date("H:i:s", strtotime( $request->post->TempoExecucao ) ) ,//ou sem strtotime
				'valor'             => $valorFinal
//			'update_at'				=> date("Y-m-d H:i:s") 
//			'id_user_last_update'	=> date("Y-m-d H:i:s") 
		];

		if($this->servicos->update($data, $id)){
			Redirect::route("/edit/$id/Servico", [
             	'success'=>['alterado com sucesso']
         	]);
		}
		else
        {
           echo "não ta incluindo porra nenhuma no banco";
        }

	}

	public function ServicoDelete($id){
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