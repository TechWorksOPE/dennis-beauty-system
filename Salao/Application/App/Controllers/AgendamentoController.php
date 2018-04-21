<?php
namespace App\Controllers;

use Core\BaseController;
use Core\Container;
use Core\Redirect;
use Core\Autenticate;


class AgendamentoController extends BaseController
{	
	protected $Agendamento;
	protected $Agendamentos;

	public function __construct()
    {
        parent::__construct();
        $this->Agendamento 	= 	Container::getModel("Agendamento");
    }

    public function Agendamento(){
    	//view de agendamento // fazer um select antes na agenda do maluco pra poder mostar os horários do maluco
    }

    public function store($request){
    	
    }

    public function AgendaAgendamentos($id){
    	// vai segregar os agendamentos por id de agenda 
    }

    public function editAgendamento(){
    	//view de editar agendamentoo
    }

    public function AgendamentoUpdate($id, $request ){
    	// método que vai fazer o update no banco
    }

    public function deleteAgendamento($id){
    	//vai deletar o agendamento
    }

    public function userAgendamento($id){
    	// quando o usúario quiser ver seus agendamentos pendentes 
    }


    public function listHorarios($idFun = null, $data = null, $serviço=null){
    	$idFunc = 1; $data = '2018-04-26';$serviço='degrade'; 
    	//um select na view com o value ja vai ser o nome certo pra eu poder compara no meu switch bolado
    
    	$agenda = $this->Agendamento->FindAgenda($idFunc,$data);
    	$interval = $this->getIntervalService($serviço);
    	$agendamentos = $this->Agendamento->FindAgendamentos($agenda->id);

    	$hora_ini = new \DateTime($agenda->hora_entrada);
    	$hora_end = new \DateTime($agenda->hora_saida);

    	$horários = [];
    	$horários[] = $hora_ini->format('H:i:s');
    	while ($hora_ini <= $hora_end) {
    		
			$hora_ini->add($interval);
			$horários[] = $hora_ini->format('H:i:s');	
    	}
    	$schedules = []; 
    	foreach ($agendamentos as $agendamento) {
    		$schedule = new \stdClass;
			
			$schedule->ini =  $ini_service = new \DateTime($agendamento->hora_ini);	
			$schedule->end = $end_service = new \DateTime($agendamento->hora_end);

			$schedules[] = $schedule;
		}
    			
    	var_dump($horários, $schedules);die;
    	return $horários;
    }


    public function getIntervalService($serviço){
    	switch ($serviço) {
    		case 'degrade':
    			$interval = new \DateInterval('PT40M');
    			break;
    		case 'luzes':
    			$interval = new \DateInterval('P1T30M');
    			break;
			case 'Botox':
    			$interval = new \DateInterval('PT1H');
    			break;
			case 'escova':
    			$interval = new \DateInterval('PT30M');
    			break;
			case 'Progressiva':
    			$interval = new \DateInterval('PT2H');
    			break;
    		default:
    			return false;
    			break;
    	}

    	return $interval;
    }
}