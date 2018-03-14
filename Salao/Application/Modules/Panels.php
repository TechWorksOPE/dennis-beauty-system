<?php

/**
* 
*/
class Panels
{
	
	function __construct(argument)
	{
		# code...
	}


	public function NavigationVertical()
	{
		return
		"
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Navigation Pills -
                        <small>Horizontal Tabs</small>
                    </h4>
                </div>
                <div class=\"card-content\">
                    <ul class=\"nav nav-pills nav-pills-warning\">
                        <li class=\"active\">
                            <a href=\"#pill1\" data-toggle=\"tab\">Profile</a>
                        </li>
                        <li>
                            <a href=\"#pill2\" data-toggle=\"tab\">Settings</a>
                        </li>
                        <li>
                            <a href=\"#pill3\" data-toggle=\"tab\">Options</a>
                        </li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"pill1\">
                            Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                            <br />
                            <br /> Dramatically visualize customer directed convergence without revolutionary ROI. Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                            <br />
                            <br /> This is very nice.
                        </div>
                        <div class=\"tab-pane\" id=\"pill2\">
                            Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                            <br />
                            <br />Dramatically maintain clicks-and-mortar solutions without functional solutions.
                        </div>
                        <div class=\"tab-pane\" id=\"pill3\">
                            Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                            <br />
                            <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                        </div>
                    </div>
                </div>
            </div>

		";
	}



	public function NavigationHorizontal()
	{
		return
		"
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Navigation Pills -
                        <small class=\"category\">Vertical Tabs</small>
                    </h4>
                </div>
                <div class=\"card-content\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <ul class=\"nav nav-pills nav-pills-rose nav-stacked\">
                                <li class=\"active\">
                                    <a href=\"#tab1\" data-toggle=\"tab\">Profile</a>
                                </li>
                                <li>
                                    <a href=\"#tab2\" data-toggle=\"tab\">Settings</a>
                                </li>
                                <li>
                                    <a href=\"#tab3\" data-toggle=\"tab\">Options</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-8\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"tab1\">
                                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                                    <br />
                                    <br /> Dramatically maintain clicks-and-mortar solutions without functional solutions. Dramatically visualize customer directed convergence without revolutionary ROI. Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. This is very nice.
                                </div>
                                <div class=\"tab-pane\" id=\"tab2\">
                                    Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                                    <br />
                                    <br />Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                </div>
                                <div class=\"tab-pane\" id=\"tab3\">
                                    Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                    <br />
                                    <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		";
	}


	public function PageSubcategoria()
	{
		return
		"
                    <div class=\"row\">
                        <div class=\"col-md-8 col-md-offset-2\">
                            <h3 class=\"title text-center\">Page Subcategories</h3>
                            <br />
                            <div class=\"nav-center\">
                                <ul class=\"nav nav-pills nav-pills-warning nav-pills-icons\" role=\"tablist\">
                                    <!--
                        color-classes: \"nav-pills-primary\", \"nav-pills-info\", \"nav-pills-success\", \"nav-pills-warning\",\"nav-pills-danger\"
                    -->
                                    <li>
                                        <a href=\"#description-1\" role=\"tab\" data-toggle=\"tab\">
                                            <i class=\"material-icons\">info</i> Description
                                        </a>
                                    </li>
                                    <li class=\"active\">
                                        <a href=\"#schedule-1\" role=\"tab\" data-toggle=\"tab\">
                                            <i class=\"material-icons\">location_on</i> Location
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#tasks-1\" role=\"tab\" data-toggle=\"tab\">
                                            <i class=\"material-icons\">gavel</i> Legal Info
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#tasks-2\" role=\"tab\" data-toggle=\"tab\">
                                            <i class=\"material-icons\">help_outline</i> Help Center
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane\" id=\"description-1\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h4 class=\"card-title\">Description about product</h4>
                                            <p class=\"category\">
                                                More information here
                                            </p>
                                        </div>
                                        <div class=\"card-content\">
                                            Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                                            <br />
                                            <br /> Dramatically visualize customer directed convergence without revolutionary ROI.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane active\" id=\"schedule-1\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h4 class=\"card-title\">Location of the product</h4>
                                            <p class=\"category\">
                                                More information here
                                            </p>
                                        </div>
                                        <div class=\"card-content\">
                                            Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                                            <br />
                                            <br /> Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tasks-1\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h4 class=\"card-title\">Legal info of the product</h4>
                                            <p class=\"category\">
                                                More information here
                                            </p>
                                        </div>
                                        <div class=\"card-content\">
                                            Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                            <br />
                                            <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tasks-2\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h4 class=\"card-title\">Help center</h4>
                                            <p class=\"category\">
                                                More information here
                                            </p>
                                        </div>
                                        <div class=\"card-content\">
                                            From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.
                                            <br />
                                            <br /> Another Text. The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design.
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