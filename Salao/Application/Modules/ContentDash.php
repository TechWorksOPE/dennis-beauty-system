<?php

namespace Modules;


Use Modules\Dashboards;


class ContentDash
{

	public static function content()
	{	
		return
		"<div class=\"content\">
			<div class=\"col-lg-12 col-md-12\">
				<div class=\"container-fluid\">

					<div class=\"row\">".
							Dashboards::maps()
					."</div>

					<div class=\"row\">".
							Dashboards::Globalsales().Dashboards::Globalsales().Dashboards::Globalsales()
					."</div>

					<div class=\"row\">".

						Dashboards::StatusCards().

						Dashboards::StatusCards().
						Dashboards::StatusCards().Dashboards::StatusCards().		
					"</div>

					<div class=\"row\">".

					"</div>
				</div>
			</div>
		</div>";
	}


}







































					//	Footer::buildFooter().	
?>