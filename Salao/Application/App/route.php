
<?php

$route[] = ['/teste','AgendamentoController@listHorarios', 3]; // home 

$route[] = ['/home','SalaoController@home', 3]; // home                                                        V 

$route[] = ['/Unidade/{id}','SalaoController@setUnit', 3];//unidade											   v	   


$route[] = ['/','SalaoController@login']; //login                                                              V
$route[] = ['/login/auth','UserController@auth']; // validar login do usuário / método está na trait           V
$route[] = ['/logout','SalaoController@logout']; // destroi sessão                                             V

$route[] = ['/posts','PostsController@posts'];//posts
$route[] = ['/post/{id}/show', 'PostsController@show'];
$route[] = ['/post/store', 'PostsController@store'];
$route[] = ['/post/{id}/edit', 'PostsController@edit'];
$route[] = ['/post/{id}/update', 'PostsController@update'];
$route[] = ['/post/{id}/delete', 'PostsController@delete'];


$route[] = ['/user','UserController@user']; // formulario para criar usuario                                   V
$route[] = ['/user/store','UserController@UserStore']; // gravar usuario                                       V
$route[] = ['/edit/{id}/Usuario','UserController@editUser', 3];	  // alterar user                              v
$route[] = ['/update/{id}/Usuario','UserController@UserUpdate', 3];     // alterar update                      v


$route[] = ['/agendamento','SalaoController@form', 3]; // criar agendamento                                    V
$route[] = ['/agendamento/store','SalaoController@AgendamentoStore', 3]; // gravar agendamento 				   
$route[] = ['/agendamentos/lista/user','UserController@UserAgendamentos', 3]; // tabela de agendamentos do usuario   
$route[] = ['/delete/{id}/Agendamento','SalaoController@AgendamentoDelete', 3];     // deletar agendamento     
$route[] = ['/edit/{id}/Agendamento','SalaoController@editAgendamento', 3];	  // alterar agendamento           
$route[] = ['/update/{id}/Agendamento','SalaoController@AgendamentoUpdate', 3];  //                            


$route[] = ['/funcionarios', 'FuncionarioController@func', 1]; // criar funcionario                            V
$route[] = ['/funcionarios/store', 'FuncionarioController@FuncionarioStore', 1]; // gravar funcionario         v 
$route[] = ['/funcionarios/lista', 'FuncionarioController@listFunc', 1];  //							       v				
$route[] = ['/edit/{id}/Funcionarios', 'FuncionarioController@editFunc', 1]; // altera  funcionario            v
$route[] = ['/update/{id}/Funcionarios', 'FuncionarioController@FuncionarioUpdate', 1]; // altera  funcionario v
$route[] = ['/delete/{id}/Funcionarios', 'FuncionarioController@FuncionarioDelete', 1]; // deletar funcionario 


$route[] = ['/agenda/{id}', 'AgendaController@schedule', 2]; // criar funcionario                                   v
$route[] = ['/agenda/{id}/store', 'AgendaController@agendaStore', 1]; // gravar funcionario                    v 
$route[] = ['/agenda/{id}/Funcionarios', 'AgendaController@listSchedule', 1];//                                v       
$route[] = ['/edit/{id}/Agenda', 'AgendaController@editschedule', 1]; // alterar agenda                        v                
$route[] = ['/update/{id}/Agenda', 'AgendaController@scheduleUpdate', 1]; // altera  agenda                    v
$route[] = ['/delete/{id}/Agenda', 'AgendaController@scheduleDelete', 1]; // deletar agenda



$route[] = ['/especialidades', 'EspecialidadeController@especialidades', 1]; // criar especialidade                    V
$route[] = ['/especialidades/store', 'EspecialidadeController@EspecialidadeStore', 1]; // gravar especialidade
$route[] = ['/delete/{id}/Especialidades', 'EspecialidadeController@EspecialidadeDelete', 1]; // deletar especialidade
$route[] = ['/edit/{id}/Especialidades', 'EspecialidadeController@EspecialidadeUpdate', 1]; // altera  especialidade



$route[] = ['/servicos', 'ServicoController@servicos', 1]; // criar servico                                     V
$route[] = ['/servicos/store', 'ServicoController@ServicoStore', 1]; // gravar servico                          v
$route[] = ['/servicos/lista', 'ServicoController@ListServices', 1]; //		colocar essa porra no menu			v
$route[] = ['/edit/{id}/Servico', 'ServicoController@editServico', 1]; // altera  servico 						v
$route[] = ['/update/{id}/Servico','ServicoController@ServicoUpdate',1]; //update no banco						v
$route[] = ['/delete/{id}/Servico', 'ServicoController@ServicoDelete', 1]; // deletar servico

return $route;


























