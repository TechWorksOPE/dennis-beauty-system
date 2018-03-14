<?php
namespace Modules;

Use Modules\Bootstrap;

// ah não ser que eu instancie a porra da classe de formulários e ai consiga manipular os métodos sem ser dessa forma 

class ContentBootstrap
{







//home
	public static function buildContent()
	{
 		$formularios = new \Modules\Forms(); 
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
						<div class=\"container\">
							<div class=\"row\">".
							//Bootstrap::header().
						"<div class=\"row text-center\">".
							Bootstrap::card().Bootstrap::card().Bootstrap::card().Bootstrap::card().
						"</div>
					</div>".
					 $footer->rodape().
		        "</div>
		    </div>";
	}


























//agendamento
	public static function formContent()
	{	
 		$formularios = new \Modules\Forms(); 
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
						<div class=\"container\">
							<div class=\"row\">".
								$formularios->FormElements().
							"</div>
		                </div>
		            </div>
		            <br/><br/>".
		            
		            $footer->rodape().
		        "</div>
		    </div>";

	}



























//agendamento
	public static function formUpAgendamento($dataAgendamento)
	{	
 		$formularios = new \Modules\Forms(); 
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
						<div class=\"container\">
							<div class=\"row\">".
								$formularios->UpdateAgendamentos($dataAgendamento).
							"</div>
		                </div>
		            </div>
		            <br/><br/>".
		            
		            $footer->rodape().
		        "</div>
		    </div>";

	}






























// tabela de agendamentos 
	public static function UserAgendamentos()
	{	
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();
 		$table       = new \Modules\CardTable();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
						<div class=\"container\">
							<div class=\"row\">".
								$table->buildCardTable("Agendamento").
							"</div>
		                </div>
		            </div>
		            <br/><br/>".

		            $footer->rodape().
		        "</div>
		    </div>";

	}


































	// tabela de agendamentos 
	public static function ServicosAll()
	{	
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();
 		$table       = new \Modules\CardTable();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
						<div class=\"container\">
							<div class=\"row\">".
								$table->buildCardTable("Servico").
							"</div>
		                </div>
		            </div>
		            <br/><br/>".

		            $footer->rodape().
		        "</div>
		    </div>";

	}



























// formulário para especialidades
	public static function FormEspecialidadeContent()
	{
 		$formularios = new \Modules\Forms(); 
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
						<div class=\"container\">
							<div class=\"row\">".
								$formularios->CreateSkills().
							"</div>
		                </div>
		            </div>
		            <br/><br/>".		            

		            $footer->rodape().
		        "</div>
		    </div>";

	}


















// formulario para serviços 
	public static function FormServicoContent()
	{	
 		$formularios = new \Modules\Forms(); 
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
						<div class=\"container\">
							<div class=\"row\">".
								$formularios->CreateServico().
							"</div>
		                </div>
		            </div>
		            <br/><br/>".

		            $footer->rodape().
		        "</div>
		    </div>";

	}


// formulario para serviços 
	public static function FormEditServico($dataService)
	{	
 		$formularios = new \Modules\Forms(); 
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
						<div class=\"container\">
							<div class=\"row\">".
								$formularios->editService($dataService).
							"</div>
		                </div>
		            </div>
		            <br/><br/>".

		            $footer->rodape().
		        "</div>
		    </div>";

	}



























// formulário para funcionarios
	public static function FormFuncContent()
	{	
 		$formularios = new \Modules\Forms(); 
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
						<div class=\"container\">
							<div class=\"row\">".
								$formularios->CreateFunc().
							"</div>
		                </div>
		            </div>
		            <br/><br/>".		            

		            $footer->rodape().
		        "</div>
		    </div>";

	}























// criar caso tente logar e não seja usuário -------------------------
	public static function UserContent()
	{
 		$formularios = new \Modules\Forms(); 
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
		                <div class=\"container\">
		                    <div class=\"row\">
		                        ".

		                      		  $formularios->User().   		                            
		                      
		                      " 
		                    </div>
		                </div>
		            </div>".
		            $footer->rodape().
		        "</div>
		    </div>
		    ";
		    
	}


	//editUser --------------------------------------------------------
	public static function formUpUser($dataUser)
	{	

	    $formularios = new \Modules\Forms(); 
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
		                <div class=\"container\">
		                    <div class=\"row\">
		                        ".

		                      		  $formularios->Useredit($dataUser).   		                            
		                      
		                      " 
		                    </div>
		                </div>
		            </div>".
		            $footer->rodape().
		        "</div>
		    </div>
		    ";
	}
























// login ------------------------------------------
	public static function Logincontent()
	{
 		$formularios = new \Modules\Forms(); 
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();

		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
		                <div class=\"container\">
		                    <div class=\"row\">
		                        ".

		                      		  $formularios->login1().   		                            
		                      
		                      " 
		                    </div>
		                </div>
		            </div>".
		            $footer->rodape().
		        "</div>
		    </div>
		    ";
		    
	}


}



?>