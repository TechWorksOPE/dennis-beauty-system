<?php

namespace Modules;

class CardChart
{
	public static function buildCardChart()
	{
		return 			
						"<div class=\"col-md-4\">
							<div class=\"card\">
								<div class=\"card-header card-chart\" data-background-color=\"green\">
									<div class=\"ct-chart\" id=\"dailySalesChart\"></div>
								</div>
								<div class=\"card-content\">
									<h4 class=\"title\">Daily Sales</h4>
									<p class=\"category\"><span class=\"text-success\"><i class=\"fa fa-long-arrow-up\"></i> 55%  </span> increase in today sales.</p>
								</div>
								<div class=\"card-footer\">
									<div class=\"stats\">
										<i class=\"material-icons\">access_time</i> updated 4 minutes ago
									</div>
								</div>
							</div>
						</div>";
	}
}

?>