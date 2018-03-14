<?php

namespace Modules;

use Core\BaseTable;



class CardTable
{
	public  function buildCardTable($model)
	{
		$table = BaseTable::faztudo($model);
		
		return 	
				"	
				<div class=\"card\">
	                <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
	                    <i class=\"material-icons\">assignment</i>
	                </div>
	                <div class=\"card-content\">
	                    <h4 class=\"card-title\">Agendamentos</h4>
	                    <div class=\"table-responsive\">
	                        <table class=\"table\">".
	                        	$table
	                        ."</table>
	                    </div>
	                </div>
	            </div>

        	";
	}
}

?>