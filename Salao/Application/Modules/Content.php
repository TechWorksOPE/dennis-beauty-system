<?php

namespace Modules;

Use Modules\CardHeader;
Use Modules\CardChart;
Use Modules\CardTable;
Use Modules\CardTableIcon;
Use Modules\Footer;

class Content
{
	public static function buildContent()
	{
		return 			

			"<div class=\"content\">
				<div class=\"col-lg-12 col-md-12\">
					<div class=\"container-fluid\">

						<div class=\"row\">".
								CardHeader::buildCardHeader().CardHeader::buildCardHeader().CardHeader::buildCardHeader().CardHeader::buildCardHeader()
						."</div>

						<div class=\"row\">".
								CardChart::buildCardChart().CardChart::buildCardChart().CardChart::buildCardChart()
						."</div>

						<div class=\"row\">".

							CardTabsTable::buildCardTabsTable().

							CardTable::buildCardTable().		
						"</div>

						<div class=\"row\">".
							Footer::buildFooter().	
						"</div>
					</div>
				</div>
			</div>";
	}
}

?>