<?php

namespace Modules;


class FormTweets
{
	

	public static function form()
	{
		return
		"	<div class=\"content\">
					<div class=\"container-fluid\">
						<div class=\"row\">

						    <div class=\"col-md-12\">
						        <div class=\"card\">

							        <div class=\"card-content\">

								        <form action=\"/get\" method=\"POST\">
								            

					                        <label class=\"control-label\">Profile Name:</label>
            								<input class=\"form-control\" type=\"text\" name=\"screen_name\"/><br>

					                        <label class=\"control-label\">max id:</label>
            								<input class=\"form-control\" type=\"text\" name=\"max_id\"/><br>

					                        <label class=\"control-label\">since id:</label>
            								<input class=\"form-control\" type=\"text\" name=\"since_id\"/><br>

					                        <label>Incluir Entidades:</label>
								            <select name=\"ent\">
								                <option value=\"1\">Sim</option>
								                <option value=\"0\">Não</option>
								            </select><br>

								            <label class=\"control-label\">Não Mostrar Respostas:</label>
								            <select name=\"nmr\">
								                <option value=\"1\">Sim</option>
								                <option value=\"0\">Não</option>
								            </select><br>
								            
								            <label class=\"control-label\">Mostrar Retweets:</label>
								            <select name=\"mr\">
								                <option value=\"1\">Sim</option>
								                <option value=\"0\">Não</option>
								            </select><br>
								            
								            

                                            <div class=\"form-group form-button\">
                                                <button type=\"submit\" class=\"btn btn-fill btn-rose\">enviar</button>
                                            </div>
								        </form>

							        </div>

						        </div>
					        </div>
				        </div>
			        </div>
	        </div>
		";
	}
}

?>