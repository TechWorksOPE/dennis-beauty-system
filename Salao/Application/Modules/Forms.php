<?php


namespace Modules;

use Core\Container;

class Forms
{
    protected $especialidades; 
    protected $Funcionarios;
    protected $servicos;
 
    public function __construct()
    {
        $this->especialidades   =   Container::getModel("Especialidades");
        $this->Funcionarios     =   Container::getModel("Funcionarios");
        $this->servicos         =   Container::getModel("Servico");
    }

// login de autenticaação não grava nada só faz validação
	public  function login1()
	{
		return
		"
			<div id=\"loginbox\" class=\"mainbox login-box col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3\">
				<form method=\"post\" action=\"/login/auth\">            
		            <div class=\"card card-login card-hidden\">
		                <div class=\"card-header text-center\" data-background-color=\"rose\">
		                    <h4 class=\"card-title\">Login</h4>

		                </div>
		                <p class=\"category text-center\">
		                    
		                </p>
		                <div class=\"card-content\">

		                    <div class=\"input-group\">
		                        <span class=\"input-group-addon\">
		                            <i class=\"material-icons\">email</i>
		                        </span>
		                        
		                        <div class=\"form-group label-floating\">
		                            <label class=\"control-label\">Email address</label>
		                        
		                            <input type=\"email\" name=\"email\" class=\"form-control\">
		                        </div>
		                    </div>

		                    <br/>
		                    
		                    <div class=\"input-group\">
		                        <span class=\"input-group-addon\">
		                            <i class=\"material-icons\">lock_outline</i>
		                        </span>
		                        <div class=\"form-group label-floating\">
		                        
		                            <label class=\"control-label\">Password</label>
		                        
		                            <input type=\"password\" name=\"senha\" class=\"form-control\">
		                        
		                        </div>
		                    </div>
		                </div>



		                <div class=\"footer text-center\">
		                    <button type=\"submit\" class=\"btn btn-rose btn-simple btn-wd btn-lg\">Let's go</button>
		                </div>


		                <br/>

		                <div class=\"form-group\">
		                    <div class=\"col-md-12 control\">
		                        
		                            Não tem uma conta! 
		                        <a href=\"/user\" >
		                            Crie uma agora.
		                        </a>
		                    </div>
		                </div>  


		            </div>


		        
				</form>
			</div>

		";
	}


// criar usuarios
	public  function User()
	{
		return
		"
            <div id=\"signupbox\" class=\"mainbox col-md-10 col-sm-12 col-md-offset-1 col-sm-offset-1\">
                <div class=\"card\">

                    <div class=\"card-header text-center\" data-background-color=\"rose\">
                            <h3 class=\"card-title\">Criar Conta</h3>
                            </br>
                    </div>
                    </br></br>
                    <form action=\"/user/store\" method=\"post\" accept-charset=\"utf-8\" class=\"form-horizontal\" >

                        <div class=\"card-content\">

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Nome</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"nome\"  placeholder=\" Nome Completo \" />
                                    </div>
                                </div>
                            
                            </div>

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Cpf</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"cpf\"  placeholder=\"ex : xxx.xxx.xxx-xx\" />
                                    </div>
                                </div>
                            
                            </div>

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Data de Nascimento</label>
                                
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"date\" class=\"form-control datepicker\" name=\"data_nascimento\"  />
                                    </div>
                                </div>
                            
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">E-mail</label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"ex: nome@gmail.com\" />
                                    </div>
                                
                                </div>
                            </div>

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Endereço</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"endereco\"   />
                                    </div>
                                </div>
                            
                            </div>


                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Numero Residencia</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"numero_end\"   />
                                    </div>
                                </div>
                            
                            </div>
                            

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Cep</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"cep\"   />
                                    </div>
                                </div>
                            
                            </div>



                            <div class=\"row\">

                                <label class=\"col-sm-2 label-on-left\">Telefone</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control \" name=\"telefone\"  placeholder=\" Formato (00)00000-0000 \" />
                                    </div>
                                </div>
                           
                            </div>
                        

                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Celular </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"text\" class=\"form-control\" name=\"celular\" placeholder=\"Formato (00)00000-0000\" />
                                    </div>
                                
                                </div>
                            </div>

                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Senha </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"password\" class=\"form-control\" name=\"senha\"  />
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Sexo </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"sexo\" placeholder=\"mudar select ou radios \" />
                                    </div>
                                
                                </div>
                            </div>


                        </div>
                        <br/>
                        <br/>
                    

                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-4\">
                            <button class=\"btn btn-primary\" type=\"reset\">Cancel</button>

                            <button type=\"submit\" class=\"btn btn-rose btn-fill\">Submit</button>
                        </div>
                    </div>
                        

                        <div class=\"form-group\">
                            <div class=\"col-md-8 control\">
                                <h5> 
                                   voltar para tela de 
                                    <a href=\"/login\" >
                                        Login
                                    </a>
                                </h5>
                            </div>
                        </div>  

                        
                    </form>
                </div>
            </div>            

		";
	}






// criar usuarios
    public  function Useredit($dataUser)
    {
        $datanascimento = date("d-m-Y ", strtotime( $dataUser->data_nascimento ) );
        return
        "
            <div id=\"signupbox\" class=\"mainbox col-md-10 col-sm-12 col-md-offset-1 col-sm-offset-1\">
                <div class=\"card\">

                    <div class=\"card-header text-center\" data-background-color=\"rose\">
                            <h3 class=\"card-title\">Editar Dados</h3>
                            </br>
                    </div>
                    </br></br>
                    <form action=\"/update/".$dataUser->id ."/Usuario\" method=\"post\" accept-charset=\"utf-8\" class=\"form-horizontal\" >

                        <div class=\"card-content\">

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Nome</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"nome\"  value=\"$dataUser->nome\" placeholder=\" Nome Completo \" />
                                    </div>
                                </div>
                            
                            </div>

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Cpf</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"cpf\"  value=\"$dataUser->cpf\" placeholder=\"ex : xxx.xxx.xxx-xx\" />
                                    </div>
                                </div>
                            
                            </div>

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Data de Nascimento</label>
                                
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control datepicker\" value=\"$datanascimento\" name=\"data_nascimento\"  />
                                    </div>
                                </div>
                            
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">E-mail</label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"email\" value=\"$dataUser->email\" placeholder=\"ex: nome@gmail.com\" />
                                    </div>
                                
                                </div>
                            </div>

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Endereço</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"endereco\" value=\"$dataUser->endereco\"  />
                                    </div>
                                </div>
                            
                            </div>


                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Numero Residencia</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"numero_end\" value=\"$dataUser->numero_end\"  />
                                    </div>
                                </div>
                            
                            </div>
                            

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Cep</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"cep\"  value=\"$dataUser->cep\" />
                                    </div>
                                </div>
                            
                            </div>



                            <div class=\"row\">

                                <label class=\"col-sm-2 label-on-left\">Telefone</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control \" name=\"telefone\" value=\"$dataUser->telefone\"    placeholder=\" Formato (00)00000-0000 \" />
                                    </div>
                                </div>
                           
                            </div>
                        

                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Celular </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"text\" class=\"form-control\" name=\"celular\"  value=\"$dataUser->celular\"  placeholder=\"Formato (00)00000-0000\" />
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                        <br/>
                        <br/>
                    

                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-4\">
                            <button class=\"btn btn-primary\" type=\"reset\">Cancel</button>

                            <button type=\"submit\" class=\"btn btn-rose btn-fill\">Submit</button>
                        </div>
                    </div>
                        

                        
                    </form>
                </div>
            </div>            

        ";
    }





















//criar funcionário
	public  function CreateFunc()
	{
		

//        $especialidades = $this->especialidades->All();
        //$select = "";

  //      foreach ($especialidades as $especialidade )
      //  {            
        //    $select .= " <option value=\"$especialidade->id\"> $especialidade->title </option> ";
    //    }

        return 
		"		
           	<div class=\"col-md-10 col-sm-2 col-md-offset-1 col-sm-offset-0\">
                <div class=\"card\">

                    <form action=\"/funcionarios/store\" method=\"post\" accept-charset=\"utf-8\" class=\"form-horizontal\" >
                        

                        <div class=\"card-header card-header-text\" data-background-color=\"rose\">
                            <h4 class=\"card-title\">Cadastrar Funcionário</h4>
                        </div>

                        <div class=\"card-content\">

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Nome</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"nome\"  placeholder=\" Nome Completo \" />
                                    </div>
                                </div>
                            
                            </div>

                            <div class=\"row\">

                                <label class=\"col-sm-2 label-on-left\">Cpf</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"cpf\"  placeholder=\"ex : xxx.xxx.xxx-xx  \" />
                                    </div>
                                </div>
                           
                            </div>
                        


                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Especialidade</label>

                                <div class=\"col-lg-8 col-md-6 col-sm-3\">
                                    <select name=\"cod_especialidade\" class=\"selectpicker\" data-style=\"select-with-transition\" multiple title=\" corte\" data-size=\"7\">".
                                        
//                                        $select 
                                    "</select>
                                </div>
                            </div>




                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Data de Nascimento</label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"date\" class=\"form-control\" name=\"data_nascimento\"  />
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Sexo </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"text\" class=\"form-control\" name=\"sexo\" placeholder=\"mudar select ou radios \" />
                                    </div>
                                
                                </div>
                            </div>

                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">E-mail</label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"ex: nome@gmail.com\" />
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Telefone </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"text\" class=\"form-control\" name=\"telefone\" placeholder=\"Formato (00)00000-0000 \"  />
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Celular </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"text\" class=\"form-control\" name=\"celular\" placeholder=\"Formato (00)00000-0000 \"  />
                                    </div>
                                
                                </div>
                            </div>


                        </div>
                        <br/>
                        <br/>
 					

 					<div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-4\">
						  	<button class=\"btn btn-primary\" type=\"reset\">Cancel</button>

                          	<button type=\"submit\" class=\"btn btn-rose btn-fill\">Submit</button>
                        </div>
          			</div>

                    </form>
                </div>
            </div>

		";		
	} 





















//criar especialidades ------------------------------------------------------
	public  function CreateSkills()
	{
		return
		"
           	<div class=\"col-md-10 col-sm-2 col-md-offset-1 col-sm-offset-0\">
                <div class=\"card\">

                    <form action=\"especialidades/store\" method=\"post\" accept-charset=\"utf-8\" class=\"form-horizontal\" >
                        

                        <div class=\"card-header card-header-text\" data-background-color=\"rose\">
                            <h4 class=\"card-title\">New Especialidade</h4>
                        </div>

                        <div class=\"card-content\">

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Especialidade</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"title\"  placeholder=\" Especialidade \" />
                                    </div>
                                </div>
                            
                            </div>


                            <div class=\"row\">

                                <label class=\"col-sm-2 label-on-left\">Descrição</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        
                                        <textarea name=\"descricao\" class=\"form-control\" rows=\"10\" > </textarea>
                                        
                                    </div>
                                </div>
                           
                            </div>
                        



                        </div>
                        <br/>
                        <br/>
 					

 					<div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-4\">
						  	<button class=\"btn btn-primary\" type=\"reset\">Cancel</button>

                          	<button type=\"submit\" class=\"btn btn-rose btn-fill\">Submit</button>
                        </div>
          			</div>

                    </form>
                </div>
            </div>
		";
	}

































//criar serviços  -------------------------------------------
	public  function CreateServico()
	{  
		return
		"
           	<div class=\"col-md-10 col-sm-2 col-md-offset-1 col-sm-offset-0\">
                <div class=\"card\">

                    <form action=\"/servicos/store\" method=\"post\" accept-charset=\"utf-8\" class=\"form-horizontal\" >
                        

                        <div class=\"card-header card-header-text\" data-background-color=\"rose\">
                            <h4 class=\"card-title\">New Serviços</h4>
                        </div>

                        <div class=\"card-content\">


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Tipo de Serviço</label>
                                <div class=\"col-lg-8 col-md-6 col-sm-3\">
                                     <label class=\"control-label\"></label>
                                        <input type=\"text\" class=\"form-control\" name=\"tipoServico\"  />
                                </div>
                            </div>

                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Tempo de Execução</label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"time\" class=\"form-control\" name=\"TempoExecucao\"  />
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Valor</label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"number\" step=\"any\" class=\"form-control\" name=\"valor\" placeholder=\"\" />
                                    </div>
                                
                                </div>
                            </div>


                        </div>
                        <br/>
                        <br/>
 					

 					<div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-4\">
						  	<button class=\"btn btn-primary\" type=\"reset\">Cancel</button>

                          	<button type=\"submit\" class=\"btn btn-rose btn-fill\">Submit</button>
                        </div>
          			</div>

                    </form>
                </div>
            </div>

		";
	}


    //criar serviços  -------------------------------------------
    public  function editService($dataService)
    {  
        return
        "
            <div class=\"col-md-10 col-sm-2 col-md-offset-1 col-sm-offset-0\">
                <div class=\"card\">

                    <form action=\"/update/$dataService->id/Servico\" method=\"post\" accept-charset=\"utf-8\" class=\"form-horizontal\" >
                        

                        <div class=\"card-header card-header-text\" data-background-color=\"rose\">
                            <h4 class=\"card-title\">Editar Serviços</h4>
                        </div>

                        <div class=\"card-content\">


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Tipo de Serviço</label>
                                <div class=\"col-lg-8 col-md-6 col-sm-3\">
                                     <label class=\"control-label\"></label>
                                        <input type=\"text\" class=\"form-control\" name=\"tipoServico\"  value=\"$dataService->tipoServico \" />
                                </div>
                            </div>

                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Tempo de Execução</label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"time\" class=\"form-control\" name=\"TempoExecucao\" value=\"$dataService->TempoExecucao\" />
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Valor</label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"number\" step=\"any\" class=\"form-control\" name=\"valor\" value=\"$dataService->valor\" />
                                    </div>
                                
                                </div>
                            </div>


                        </div>
                        <br/>
                        <br/>
                    

                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-4\">
                            <button class=\"btn btn-primary\" type=\"reset\">Cancel</button>

                            <button type=\"submit\" class=\"btn btn-rose btn-fill\">Submit</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>

        ";
    }





























// name dos inputs mesmo nome dos campo das tabelas  //criar Agendamento --------------------------------------------------------------
	public  function FormElements()
	{
        $servicos = $this->servicos->All();
        $funcionarios = $this->Funcionarios->All();

        $select = "";
        $slect2 = "";

        foreach ($servicos as $servico )
        {
            
            $select .= " <option value=\"$servico->id\"> $servico->tipoServico </option> ";
        }

        foreach ($funcionarios as $funcionario )
        {
            
            $slect2 .= " <option value=\"$funcionario->id\"> $funcionario->nome </option> ";
        }




		return 
		"
           	<div class=\"col-md-11\">
                <div class=\"card\">

                    <form action=\"/agendamento/store\" method=\"post\" accept-charset=\"utf-8\" class=\"form-horizontal\" >
                        

                        <div class=\"card-header card-header-text\" data-background-color=\"rose\">
                            <h4 class=\"card-title\">Agendamento</h4>
                        </div>


                        <div class=\"card-content\">






                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Data </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"date\" class=\"form-control\" name=\"data_agendamento\" placeholder=\"placeholder\" />
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Horário </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"time\" class=\"form-control\" name=\"horario_agendamento\" placeholder=\"select com horários disponiveis\" />
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Profissional</label>

                                <div class=\"col-lg-8 col-md-6 col-sm-3\">
                                    <select name=\"cod_profissional\" class=\"selectpicker\" data-style=\"select-with-transition\"  data-size=\"7\">".
                                        
                                        $slect2 
                                    ."</select>
                                </div>
                            </div>

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Serviço</label>

                                <div class=\"col-lg-8 col-md-6 col-sm-3\">
                                    <select name=\"cod_servico\" class=\"selectpicker\" data-style=\"select-with-transition\"  data-size=\"7\">".
                                        
                                        $select 
                                    ."</select>
                                </div>
                            </div>



                        </div>
                        <br/>
                        <br/>
 					

 					<div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-4\">
						  	<button class=\"btn btn-primary\" type=\"reset\">Cancel</button>

                          	<button type=\"submit\" class=\"btn btn-rose btn-fill\">Submit</button>
                        </div>
          			</div>

                    </form>
                </div>
            </div>

		";
	}


//update de formulario ainda falta fazer as parada colocar values
    public  function UpdateAgendamentos($agendamento )
    {

        $servicos = $this->servicos->All();
        $funcionarios = $this->Funcionarios->All();
        $select = "";
        $slect2 = "";

        $dataagendamento =date ("d-m-Y" ,strtotime( $agendamento->data_agendamento ) ) ;

        foreach ($servicos as $servico )
        {
            $select .= " <option value=\"$servico->id\" > $servico->tipoServico </option> ";
            if($agendamento->cod_servico == $servico->id)
            {
                $select .= " <option SELECTED value=\"$servico->id\" > $servico->tipoServico </option> ";
            }
            

        }
        foreach ($funcionarios as $funcionario )
        {            
            $slect2 .= " <option value=\"$funcionario->id\"> $funcionario->nome </option> ";
            if( $agendamento->cod_profissional == $funcionario->id )
            {
                $slect2 .= " <option SELECTED value=\"$funcionario->id\"> $funcionario->nome </option> ";
            }
        }

        return 
        "
            <div class=\"col-md-11\">
                <div class=\"card\">

                    <form action=\"/update/".$agendamento->id."/Agendamento\" method=\"post\" accept-charset=\"utf-8\" class=\"form-horizontal\" >
                        

                        <div class=\"card-header card-header-text\" data-background-color=\"rose\">
                            <h4 class=\"card-title\">Agendamento</h4>
                        </div>


                        <div class=\"card-content\">






                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Data </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group\">
                                        <label class=\"label-control\"></label>
                                        <input  type=\"text\" class=\"form-control datepicker\" name=\"data_agendamento\"  value=\"".$dataagendamento ."\"/>
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Horário </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"time\" class=\"form-control\" name=\"horario_agendamento\" placeholder=\"select com horários disponiveis\" value=\"".$agendamento->horario_agendamento ."\" />
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Profissional</label>

                                <div class=\"col-lg-8 col-md-6 col-sm-3\">
                                    <select name=\"cod_profissional\" class=\"selectpicker\" data-style=\"select-with-transition\"   data-size=\"7\">".
                                        
                                        $slect2 
                                    ."</select>
                                </div>
                            </div>

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Serviço</label>

                                <div class=\"col-lg-8 col-md-6 col-sm-3\">
                                    <select name=\"cod_servico\" class=\"selectpicker\" data-style=\"select-with-transition\"  data-size=\"7\">".
                                        
                                        $select 
                                    ."</select>
                                </div>
                            </div>



                        </div>
                        <br/>
                        <br/>
                    

                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-4\">
                            <button class=\"btn btn-primary\" type=\"reset\">Cancel</button>

                            <button type=\"submit\" class=\"btn btn-rose btn-fill\">Submit</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        ";
    }


//----------------------------------------------------------------------------------------------------------------------------------------


















	public  function login()
	{
		return
		"
			<div id=\"loginbox\" class=\"mainbox login-box col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3\">
				<form method=\"post\" action=\"#\">            
		            <div class=\"card card-login card-hidden\">
		                <div class=\"card-header text-center\" data-background-color=\"rose\">
		                    <h4 class=\"card-title\">Login</h4>

		                </div>
		                <p class=\"category text-center\">
		                    Or Be Classical
		                </p>
		                <div class=\"card-content\">
		                    <div class=\"input-group\">
		                        <span class=\"input-group-addon\">
		                            <i class=\"material-icons\">face</i>
		                        </span>
		                        <div class=\"form-group label-floating\">
		                            <label class=\"control-label\">First Name</label>
		                            <input type=\"text\" class=\"form-control\">
		                        </div>
		                    </div>
		                    <div class=\"input-group\">
		                        <span class=\"input-group-addon\">
		                            <i class=\"material-icons\">email</i>
		                        </span>
		                        <div class=\"form-group label-floating\">
		                            <label class=\"control-label\">Email address</label>
		                            <input type=\"email\" class=\"form-control\">
		                        </div>
		                    </div>
		                    <div class=\"input-group\">
		                        <span class=\"input-group-addon\">
		                            <i class=\"material-icons\">lock_outline</i>
		                        </span>
		                        <div class=\"form-group label-floating\">
		                            <label class=\"control-label\">Password</label>
		                            <input type=\"password\" class=\"form-control\">
		                        </div>
		                    </div>
		                </div>



		                <div class=\"footer text-center\">
		                    <button type=\"submit\" class=\"btn btn-rose btn-simple btn-wd btn-lg\">Let's go</button>
		                </div>


		                <br/>

		                <div class=\"form-group\">
		                    <div class=\"col-md-12 control\">
		                        
		                            Não tem uma conta! 
		                        <a href=\"#\" onClick=\"$('#loginbox').hide(); $('#signupbox').show()\">
		                            Crie uma agora.
		                        </a>
		                    </div>
		                </div>  


		            </div>


		        
				</form>
			</div>


			<div id=\"signupbox\" class=\"mainbox col-md-6 col-sm-4 col-md-offset-3 col-sm-offset-4\">
				<div class=\"card\">

                    <form action=\"/agendamento/store\" method=\"post\" accept-charset=\"utf-8\" class=\"form-horizontal\" >
                        

                        <div class=\"card-header card-header-text\" data-background-color=\"rose\">
                            <h4 class=\"card-title\">Agendamento</h4>
                        </div>


                        <div class=\"card-content\">

                            <div class=\"row\">
                                
                                <label class=\"col-sm-2 label-on-left\">Nome</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"nome\"  placeholder=\" Nome Completo \" />
                                    </div>
                                </div>
                            
                            </div>

                            <div class=\"row\">

                                <label class=\"col-sm-2 label-on-left\">Telefone 1</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"form-group label-floating is-empty\">
                                        <input type=\"text\" class=\"form-control\" name=\"telefone\"  placeholder=\" Formato (00)00000-0000 \" />
                                    </div>
                                </div>
                           
                            </div>
                        

                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Telefone 2 </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"text\" class=\"form-control\" name=\"celular\" placeholder=\"Formato (00)00000-0000\" />
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">E-mail</label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"ex: nome@gmail.com\" />
                                    </div>
                                
                                </div>
                            </div>


                            <div class=\"row\">
                                <label class=\"col-sm-2 label-on-left\">Sexo </label>
                                
                                <div class=\"col-sm-8\">
                                    
                                    <div class=\"form-group label-floating is-empty\">
                                        <label class=\"control-label\"></label>
                                        <input type=\"text\" class=\"form-control\" name=\"sexo\" placeholder=\"mudar select ou radios \" />
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                        <br/>
                        <br/>
 					

 					<div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-4\">
						  	<button class=\"btn btn-primary\" type=\"reset\">Cancel</button>

                          	<button type=\"submit\" class=\"btn btn-rose btn-fill\">Submit</button>
                        </div>
          			</div>

          				<br/>
          				<div class=\"form-group\">
		                    <div class=\"col-md-12 control\">
                			<div style=\"float:right; font-size: 85%; position: relative; top:-10px\"><a id=\"signinlink\" href=\"#\" onclick=\"$('#signupbox').hide(); $('#loginbox').show()\">Voltar à tela de Login <<<</a></div> 
                			</div>
            			</div>
                    </form>
                </div>
            </div>


		";
	}















// isso aqui é palhaçada do framework
    public  function datetimepicker()
    {
        return
        "
            <div class=\"card\">
                <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                    <i class=\"material-icons\">today</i>
                </div>
                
                <div class=\"card-content\">
                    <h4 class=\"card-title\">Datetime Picker</h4>
                    <div class=\"form-group\">
                        <label class=\"label-control\">Datetime Picker</label>
                        <input type=\"text\" class=\"form-control datetimepicker\" value=\"10/05/2016\" />
                    </div>
                </div>
            </div>

        ";
    }







}





?>