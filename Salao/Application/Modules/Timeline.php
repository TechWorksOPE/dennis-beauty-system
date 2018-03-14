<?php


class Timeline {


	public function Timeline()
	{


		return 
				"
            <div class=\"card card-plain\">
                <div class=\"card-content\">
                    <ul class=\"timeline\">
                    "
                    .
					self::someTitle();						
					.
                    self::anotherone();  
                    .
                    self::anotherTitle();
                    .
                    self::anotherone();
                    .
                    "</ul>
                </div>
            </div>
		";

	}



	public static function TextLi($texto = null)
	{
		return $texto;
	}


	public static function anotherone()
	{
		return
		"
            <li>
	            <div class=\"timeline-badge success\">
	                <i class=\"material-icons\">extension</i>
	            </div>
	            <div class=\"timeline-panel\">
	                <div class=\"timeline-heading\">
	                    <span class=\"label label-success\">Another One</span>
	                </div>
	                <div class=\"timeline-body\">
	                    <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
	                </div>
	            </div>
	        </li>";

		

	}


	public static function someTitle()
	{
		return 
		"
	        <li>
	            <div class=\"timeline-badge success\">
	                <i class=\"material-icons\">extension</i>
	            </div>

	            <div class=\"timeline-panel\">

	                <div class=\"timeline-heading\">
	                    <span class=\"label label-success\">Another One</span>
	                </div>

	                <div class=\"timeline-body\">
	                    <p>
	                    ".
	                    self::TextLi('descrição');
	                    .
						"
	                    </p>
	                </div>

	            </div>
	        </li>

		";
	}


	public static function anotherTitle()
	{
		return 
		"
	        <li class=\"timeline-inverted\">

	            <div class=\"timeline-badge info\">
	                <i class=\"material-icons\">fingerprint</i>
	            </div>

	            <div class=\"timeline-panel\">
	                <div class=\"timeline-heading\">
	                    <span class=\"label label-info\">Another Title</span>
	                </div>


	                <div class=\"timeline-body\">
	                    <p>".

	                    self::TextLi('descrição');
	                    .
	                    "</p>

	                    <p>".
	                    self::TextLi('descrição');
	                    ."</p>
	                    <hr>

	                    <div class=\"dropdown pull-left\">
	                        <button type=\"button\" class=\"btn btn-round btn-info dropdown-toggle\" data-toggle=\"dropdown\">
	                            <i class=\"material-icons\">build</i>
	                            <span class=\"caret\"></span>
	                        </button>

	                        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
	                            <li>
	                                <a href=\"#action\">Action</a>
	                            </li>
	                            <li>
	                                <a href=\"#action\">Another action</a>
	                            </li>
	                            <li>
	                                <a href=\"#here\">Something else here</a>
	                            </li>
	                            <li class=\"divider\"></li>
	                            <li>
	                                <a href=\"#link\">Separated link</a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </li>
		";
	}



}



?>