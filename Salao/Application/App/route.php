<?php


$route[] = ['/home','SalaoController@home', 3]; // home                                                        V 

$route[] = ['/Unidade/{id}','UnidadeController@setUnit', 3];


$route[] = ['/','SalaoController@login']; //login                                                              V
$route[] = ['/login/auth','UserController@auth']; // validar login do usuário / método está na trait           V
$route[] = ['/logout','SalaoController@logout']; // destroi sessão                                             V



$route[] = ['/user','UserController@user']; // formulario para criar usuario                                   V
$route[] = ['/user/store','UserController@UserStore']; // gravar usuario                                       V
$route[] = ['/edit/{id}/Usuario','UserController@editUser', 3];	  // alterar user                              v
$route[] = ['/update/{id}/Usuario','UserController@UserUpdate', 3];     // alterar update                      v


$route[] = ['/agendamento','SalaoController@form', 3]; // criar agendamento                                    V
$route[] = ['/agendamento/store','SalaoController@AgendamentoStore', 3]; // gravar agendamento 				   v
$route[] = ['/useragendamentos','SalaoController@UserAgendamentos', 3]; // tabela de agendamentos do usuario   v
$route[] = ['/delete/{id}/Agendamento','SalaoController@AgendamentoDelete', 3];     // deletar agendamento     v
$route[] = ['/edit/{id}/Agendamento','SalaoController@editAgendamento', 3];	  // alterar agendamento           v
$route[] = ['/update/{id}/Agendamento','SalaoController@AgendamentoUpdate', 3];  //                            v


$route[] = ['/funcionarios', 'SalaoController@func', 1]; // criar funcionario                                  V
$route[] = ['/funcionarios/store', 'SalaoController@FuncionarioStore', 1]; // gravar funcionario                  
$route[] = ['/delete/{id}/Funcionarios', 'SalaoController@FuncionarioDelete', 1]; // deletar funcionario
$route[] = ['/edit/{id}/Funcionarios', 'SalaoController@FuncionarioUpdate', 1]; // altera  funcionario



$route[] = ['/especialidades', 'SalaoController@especialidades', 1]; // criar especialidade                    V
$route[] = ['/especialidades/store', 'SalaoController@EspecialidadeStore', 1]; // gravar especialidade
$route[] = ['/delete/{id}/Especialidades', 'SalaoController@EspecialidadeDelete', 1]; // deletar especialidade
$route[] = ['/edit/{id}/Especialidades', 'SalaoController@EspecialidadeUpdate', 1]; // altera  especialidade



$route[] = ['/servicos', 'ServicoController@servicos', 1]; // criar servico                                     V
$route[] = ['/servicos/store', 'ServicoController@ServicoStore', 1]; // gravar servico                          v
$route[] = ['/servicos/lista', 'ServicoController@ListServices', 1]; //		colocar essa porra no menu									v
$route[] = ['/edit/{id}/Servico', 'ServicoController@editServico', 1]; // altera  servico 						v
$route[] = ['/update/{id}/Servico','ServicoController@ServicoUpdate',1]; //update no banco						v

$route[] = ['/delete/{id}/Servico', 'ServicoController@ServicoDelete', 1]; // deletar servico

return $route;


























