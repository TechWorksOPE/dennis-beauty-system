<?php
namespace Modules;


class SearchNav
{

	public function container()
	{
		return 
		"<div class=\"content\">
            <div class=\"col-md-12\">
		      	<div class=\"card\">
					
		            <div class=\"card-content\">
		                <h4 class=\"card-title\">Search here...</h4> 

		                <form action=\"/get\"  method=\"post\" accept-charset=\"utf-8\" class=\"form\" >

		                    <div class=\"form-group label-floating\">
		                        <input type=\"text\" class=\"form-control \" name=\"search\"  placeholder=\"Search\" >
								<span class=\"material-input\"></span>
		                    </div>

							<button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\"  >	
								<i class=\"material-icons\">search</i><div class=\"ripple-container\"></div>
								Submit
							</button>



		                </form>
		            </div>

		        </div>
		    </div>
	    </div>
		";
	}
/*			
									                        <label class=\"control-label\">Search here...</label>


		                    <div class=\"checkbox\">
		                        <label>
		                            <input type=\"checkbox\" name=\"terms\"> Subscribe to newsletter
		                        </label>
		                    </div>


		                    <button type=\"submit\" class=\"btn btn-fill btn-rose\">Submit</button>





							<form class=\"navbar-form navbar-right\" role=\"search\">
							<div class=\"form-group  is-empty\">
								<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
								<span class=\"material-input\"></span>
							</div>
							<button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
								<i class=\"material-icons\">search</i><div class=\"ripple-container\"></div>
							</button>
						</form>
*/
}




?>
