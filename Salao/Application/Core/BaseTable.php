<?php
namespace Core;

use Core\Container;

class BaseTable 
{
	
private $cunt; 


/**
* Função para criação da tabela fazendo a chamada para os outros dois métodos e carregando nas variaveis
* @access public 
* @param $rows
* @return concatenação $head + $body
*/
	public static function decodeTable($rows, $route )
	{

		$head = self::decodeHead($rows);

		$body = self::decodeBody($rows , $route);

		return $head.$body;
	}


/**
* Função para criação do head da tabela 
* @access private 
* @param $rows
* @return $head
*/
	private static function decodeHead($rows)
	{
			$head ='<thead><tr>';

			foreach ($rows as $value) 
			{
				foreach($value as $row => $vrow)
				{
					if( $row != 'id')
					{
						$head .= "<th>{$row}</th>";	
					}				
				}
				
				$head .='</tr></thead>';

				return $head;
			}
	}


/**
* Função para criação do body da tabela
* @access private
* @param $rows
* @return $body
*/
	private static function decodeBody($rows , $Route= null)
	{
		$body ='<tbody>';
 
		foreach ($rows as $value) 
		{
			$body .='<tr>';
		
			foreach($value as $row => $vrow)
			{
				if( $row != 'id')
				{
					$body .= "<td>{$vrow}</td>";
				}						
			}

			$body .= 
			"<td>
				<a href=\"/edit/".$value->id."/".$Route."\" class=\"btn btn-success\">
                       <i class=\"material-icons\">edit</i>
            	</a>
            	<a  href=\"/delete/".$value->id."/".$Route."\"  class=\"btn btn-danger\">
                        <i class=\"material-icons\">close</i>
                </a>
        	</td>";

			$body .='</tr>';
			}

		return $body."</tbody>";
	}


/**
* Função para criação da tabela fazendo a chamada no método carregando na varivel 
* @access public
* @return $table
*/
	public static function faztudo($model)
	{
		if( isset($model)  )
		{
			$acounts = Container::getModel($model);
			
			switch ($model) {
				case 'Agendamento':

					$session = Session::get('user');
					$rows = $acounts->Agendamentos( $session['id'] ); 
				
					break;
				case 'Servico':
					$rows = $acounts->All(); 

					break;

				
				default:
					# code...
					break;
			}
		}


		$table = self::decodeTable( $rows, $model );
		 
		return $table;
		
	}





}





?>