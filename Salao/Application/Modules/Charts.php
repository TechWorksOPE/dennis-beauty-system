<?php



class Charts
{




	
	public function CoulouredLineChart()
	{
		return
		"
            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header card-header-icon\" data-background-color=\"blue\">
                        <i class=\"material-icons\">timeline</i>
                    </div>
                    <div class=\"card-content\">
                        <h4 class=\"card-title\">Coloured Line Chart
                            <small> - Rounded</small>
                        </h4>
                    </div>
                    <div id=\"colouredRoundedLineChart\" class=\"ct-chart\"></div>
                </div>
            </div>

		";
	}

	public static function MultipleBarsChart()
	{
		return
		"
	        <div class=\"col-md-6\">
	            <div class=\"card\">
	                <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
	                    <i class=\"material-icons\">insert_chart</i>
	                </div>
	                <div class=\"card-content\">
	                    <h4 class=\"card-title\">Multiple Bars Chart
	                        <small>- Bar Chart</small>
	                    </h4>
	                </div>
	                <div id=\"multipleBarsChart\" class=\"ct-chart\"></div>
	            </div>
	        </div>
		"
	}

	public static function ColouredBarsChart ()
	{
		return
		"
            <div class=\"col-md-7\">
                <div class=\"card\">
                    <div class=\"card-header card-header-icon\" data-background-color=\"blue\">
                        <i class=\"material-icons\">timeline</i>
                    </div>
                    <div class=\"card-content\">
                        <h4 class=\"card-title\">Coloured Bars Chart
                            <small> - Rounded</small>
                        </h4>
                    </div>
                    <div id=\"colouredBarsChart\" class=\"ct-chart\"></div>
                </div>
            </div>

		";
	}


	public static function PieChart()
	{

		return
		"
            <div class=\"col-md-5\">
                <div class=\"card\">
                    <div class=\"card-header card-header-icon\" data-background-color=\"red\">
                        <i class=\"material-icons\">pie_chart</i>
                    </div>
                    <div class=\"card-content\">
                        <h4 class=\"card-title\">Pie Chart</h4>
                    </div>
                    <div id=\"chartPreferences\" class=\"ct-chart\"></div>
                    <div class=\"card-footer\">
                        <h6>Legend</h6>
                        <i class=\"fa fa-circle text-info\"></i> Apple
                        <i class=\"fa fa-circle text-warning\"></i> Samsung
                        <i class=\"fa fa-circle text-danger\"></i> Windows Phone
                    </div>
                </div>
            </div>

		"
	}

}

?>