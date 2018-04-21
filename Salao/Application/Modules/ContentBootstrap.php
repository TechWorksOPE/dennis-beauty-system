<?php
namespace Modules;

Use Modules\Bootstrap;

// ah não ser que eu instancie a porra da classe de formulários e ai consiga manipular os métodos sem ser dessa forma 

class ContentBootstrap
{



	public static function dashAdmin(){
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
									Charts::CoulouredLineChart().CardChart::buildCardChart().
								"
							</div>
						</div>
					</div>".
					 $footer->rodape().
		        "</div>
		    </div>";
	} 


//posts
	public static function PostsContent($array)
	{
 		$navbar      = new \Modules\Navbar();
 		$footer      = new \Modules\Footer();
 		$posts = "";


 		foreach ($array as $key ) 
 		{
 			$posts .= "
 			<header class=\"jumbotron my-4 col-md-10 col-sm-2 col-md-offset-1 col-sm-offset-0\" >
 				<h3 class=\"h3\"><a href=\"/post/$key->id/show\"> $key->nome </a></h3>
				<p class=\"text-justify\"><a href=\"/post/$key->id;/show\"> $key->descricao </a></p>
 			</header> ";
 		}



		return
			$navbar->Nav().
			"<div class=\"wrapper wrapper-full-page\">
		        <div class=\"full-page login-page\" filter-color=\"black\" data-image=\"../../assets/img/fundo.jpeg\">
					
					<div class=\"content\">
						<div class=\"container\">
							<div class=\"row\">".
							Posts::Posts().  
						"	</div>".
								$posts.
						"	
						</div>
					</div>".
					 $footer->rodape().
		        "</div>
		    </div>";
	}






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


















	//agendamento
	public static function formEditFunc($dataFunc)
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
								$formularios->FuncEdit($dataFunc).
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


		// tabela de agendamentos 
	public static function AgendaAll($id)
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
								$table->buildCardTable("Agenda", $id).
							"</div>
		                </div>
		            </div>
		            <br/><br/>".

		            $footer->rodape().
		        "</div>
		    </div>";

	}



















	// tabela de agendamentos 
	public static function FuncAll()
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
								$table->buildCardTable("Funcionarios").
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






// formulário para funcionarios
	public static function FormScheduleContent($id)
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
								$formularios->createSchedule($id).
							"</div>
		                </div>
		            </div>
		            <br/><br/>".		            

		            $footer->rodape().
		        "</div>
		    </div>";

	}



	public static function FormEditSchedule($scheduleData)
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
								$formularios->editSchedule($scheduleData).
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