<?php

namespace Modules;


class Sidebar
{
	public static function buildSidebar()
	{

		return	    
			"<div class=\"sidebar\" data-color=\"red\" data-image=\"/assets/img/sidebar-1.jpg\">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class=\"logo\">
				
					<img src=\"/images/logosalao.jpg\" class=\"logo-img\"/>
				
			</div>

	    	<div class=\"sidebar-wrapper\">".
	    	self::getMenu()
	    	."</div>
	    </div>";
	}

	public static function getMenu()
	{
		return "
		<div class=\"col-lg-12 col-md-12\">
	      	<div class=\"row\">	        
		        <div class=\"panel-group\" id=\"accordion\">		            
		            
		            
			        <div class=\"clearfix\">
		            <div class=\"panel panel-default\">
			            <div class=\"panel-heading\">
			                <h4 class=\"panel-title\">
			                 <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">
			                  	<i class=\"material-icons\">rate_reviews</i><b>Campanha</b>
			                  </a>
			                </h4>
			            </div>
			            
			            <div id=\"collapseOne\" class=\"panel-collapse collapse\">          
					        <ul  class=\"list-group menu\">
					        	<li class=\"list-group-item\">    
						            <div class=\"panel-group\" id=\"email\">
							            <div class=\"panel panel-default\">
							              <div class=\"panel-heading\">
							                <h4 class=\"panel-title\">
							                 <a data-toggle=\"collapse\" data-parent=\"#email\" href=\"#collapseSubOne\">
							                  	<i class=\"material-icons\">email</i>Email
							                  </a>
							                </h4>
							              </div>


							              	<div id=\"collapseSubOne\" class=\"panel-collapse collapse\">

							                    <ul class=\"list-group\">

							                      <li class=\"list-group-item\"><i class=\"material-icons\">search</i><a href=\"#\">Pesquisar</a></li>

							                      <li class=\"list-group-item\"><i class=\"material-icons\">add_box</i><a href=\"#\">Criar</a></li>
							                      
							                      <li class=\"list-group-item\"><i class=\"material-icons\">cached</i><a href=\"#\">Atualizar</a></li>

							                      <li class=\"list-group-item\"><i class=\"material-icons\">grade</i><a href=\"#\">Favorito</a></li>

							                      <li class=\"list-group-item\"><i class=\"material-icons\">show_chart</i><a href=\"#\">Estatística</a><span class=\"badge\">42</span></li>

							                    </ul>
							                </div>
							        </div>
							    </li>
							   	<li class=\"list-group-item\">
							        <div class=\"panel-group\" id=\"mobile\">
							            <div class=\"panel panel-default\">
							              <div class=\"panel-heading\">
							                <h4 class=\"panel-title\">
							                 <a data-toggle=\"collapse\" data-parent=\"#mobile\" href=\"#collapseSubTwo\">
							                  	<i class=\"material-icons\">phonelink_ring</i> Telefone
							                  </a>
							                </h4>
							              </div>
							              	
							              	<div id=\"collapseSubTwo\" class=\"panel-collapse collapse\">

							                    <ul class=\"list-group\">


							                      <li class=\"list-group-item\"><i class=\"material-icons\">search</i><a href=\"#\">Pesquisar</a></li>

							                      <li class=\"list-group-item\"><i class=\"material-icons\">add_box</i><a href=\"#\">Criar</a></li>
							                      
							                      <li class=\"list-group-item\"><i class=\"material-icons\">cached</i><a href=\"#\">Atualizar</a></li>

							                      <li class=\"list-group-item\"><i class=\"material-icons\">grade</i><a href=\"#\">Favorito</a></li>

							                      <li class=\"list-group-item\"><i class=\"material-icons\">show_chart</i><a href=\"#\">Estatística</a><span class=\"badge\">42</span></li>


							                    </ul>
							                </div>						                	
						                </div>
						        	</div>	
						        </li>				        
				        	</ul>
				        </div>
			        </div>
			        <div class=\"clearfix\"></div>

			       	<div class=\"panel panel-default\">
			            <div class=\"panel-heading\">
			                <h4 class=\"panel-title\">
			                 <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">
			                  	<i class=\"material-icons\">device_hub</i><b>Banco de Dados</b>
			                  </a>
			                </h4>
			            </div>
			            
		              	<div id=\"collapseTwo\" class=\"panel-collapse collapse\">

		                    <ul class=\"list-group\">

		                      <li class=\"list-group-item\"><i class=\"material-icons\">search</i><a href=\"#\">Pesquisar</a></li>

		                      <li class=\"list-group-item\"><i class=\"material-icons\">add_box</i><a href=\"#\">Adicionar</a></li>
		                      
		                      <li class=\"list-group-item\"><i class=\"material-icons\">cached</i><a href=\"#\">Atualizar</a></li>

		                      <li class=\"list-group-item\"><i class=\"material-icons\">delete_box</i><a href=\"#\">Remover</a></li>

		                    </ul>
		                </div>
		            </div>
		            </div>

			        <div class=\"clearfix\"></div>

			       	<div class=\"panel panel-default\">
			            <div class=\"panel-heading\">
			                <h4 class=\"panel-title\">
			                 <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTree\">
			                  	<i class=\"material-icons\">work</i><b>Conta</b>
			                  </a>
			                </h4>
			            </div>
			            
		              	<div id=\"collapseTree\" class=\"panel-collapse collapse\">

		                    <ul class=\"list-group\">

		                      <li class=\"list-group-item\"><i class=\"material-icons\">cached</i><a href=\"#\">Atualizar</a></li>
		                      
		                      <li class=\"list-group-item\"><i class=\"material-icons\">notifications</i><a href=\"#\">Notificações</a></li>

		                      <li class=\"list-group-item\"><i class=\"material-icons\">star</i><a href=\"#\">Preferências</a></li>		                      

		                    </ul>
		                </div>
		            </div>

			        <div class=\"clearfix\"></div>

			       	<div class=\"panel panel-default\">
			            <div class=\"panel-heading\">
			                <h4 class=\"panel-title\">
			                 <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\">
			                  	<i class=\"material-icons\">group_work</i><b>Preferências</b>
			                  </a>
			                </h4>
			            </div>
			            
		              	<div id=\"collapseFour\" class=\"panel-collapse collapse\">

		                    <ul class=\"list-group\">

		                      <li class=\"list-group-item\"><i class=\"material-icons\">filter</i><a href=\"#\">Filtros</a></li>
		                      
		                      <li class=\"list-group-item\"><i class=\"material-icons\">turned_in</i><a href=\"#\">Tags</a></li>

		                      <li class=\"list-group-item\"><i class=\"material-icons\">pin_drop</i><a href=\"#\">Cidade</a></li>                      
		                      
		                      <li class=\"list-group-item\"><i class=\"material-icons\">remove_red_eye</i><a href=\"#\">Sistema</a></li>		                      

		                    </ul>
		                </div>
		            </div>

			        <div class=\"clearfix\"></div>


			       	<div class=\"panel panel-default\">
			            <div class=\"panel-heading\">
			                <h4 class=\"panel-title\">
			                 <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFive\">
			                  	<i class=\"material-icons\">remove_red_eye</i><b>Sistema</b>
			                  </a>
			                </h4>
			            </div>
			            
		              	<div id=\"collapseFive\" class=\"panel-collapse collapse\">

		                    <ul class=\"list-group\">

		                      <li class=\"list-group-item\"><i class=\"material-icons\">filter</i><a href=\"#\">User</a></li>
		                      
		                      <li class=\"list-group-item\"><i class=\"material-icons\">turned_in</i><a href=\"#\">Database</a></li>

		                      <li class=\"list-group-item\"><i class=\"material-icons\">pin_drop</i><a href=\"#\">Tables</a></li>                      
		                      
		                      <li class=\"list-group-item\"><i class=\"material-icons\">remove_red_eye</i><a href=\"#\">Routes</a></li>		                      
		                      <li class=\"list-group-item\"><i class=\"material-icons\">remove_red_eye</i><a href=\"#\">Imagens</a></li>	
		                      <li class=\"list-group-item\"><i class=\"material-icons\">remove_red_eye</i><a href=\"#\">Menu</a></li>		                      
		                       <li class=\"list-group-item\"><i class=\"material-icons\">remove_red_eye</i><a href=\"#\">Modulos</a></li>	
		                        <li class=\"list-group-item\"><i class=\"material-icons\">remove_red_eye</i><a href=\"#\">Bot</a></li>	
		                         <li class=\"list-group-item\"><i class=\"material-icons\">remove_red_eye</i><a href=\"#\">Categorias</a></li>	
		                          <li class=\"list-group-item\"><i class=\"material-icons\">remove_red_eye</i><a href=\"#\">Segurança</a></li>	
		                           <li class=\"list-group-item\"><i class=\"material-icons\">remove_red_eye</i><a href=\"#\">Logs</a></li>	
		                    </ul>
		                </div>
		            </div>

			    </div>
	      	</div>

			        <div class=\"clearfix\"></div>


	    </div>";
	}
}


?>