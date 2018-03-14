<?php

namespace Modules;


class Bootstrap
{


	public static function Nav()
	{
		return 
		"
		    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
		      <div class=\"container\">

		        <a class=\"navbar-brand\" href=\"#\">Dennis Beauty System</a>

		        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
		          <span class=\"navbar-toggler-icon\"></span>
		        </button>
		        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
		          <ul class=\"navbar-nav ml-auto\">
		            <li class=\"nav-item active\">
		              <a class=\"nav-link\" href=\"#\">Home
		                <span class=\"sr-only\">(current)</span>
		              </a>
		            </li>
		            <li class=\"nav-item\">
		              <a class=\"nav-link\" href=\"#\">About</a>
		            </li>
		            <li class=\"nav-item\">
		              <a class=\"nav-link\" href=\"#\">Services</a>
		            </li>
		            <li class=\"nav-item\">
		              <a class=\"nav-link\" href=\"#\">Contact</a>
		            </li>
		          </ul>
		        </div>
		      </div>
		    </nav>
		";
	}


	public static function header()
	{
		return 
		"
      	<header >
    		<img src=\"/images/salao.jpg\" width=\"400 \" height=\" 370\"/>		
  		</header>
  			<br/>
  			<br/>
		";
	}


	public static function card()
	{
		return 
		"
        <div class=\"col-lg-3 col-md-6 mb-4\">
          <div class=\"card\">
            <img class=\"card-img-top\" src=\"/images/cabelo1.jpg\" alt=\"\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Card title</h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\" class=\"btn btn-primary\">Find Out More!</a>
            </div>
          </div>
        </div>

		";
	}


	public static function footer()
	{
		return
		"
    	<footer class=\"footer bg-dark\">
                <div class=\"container-fluid\">
                    <nav class=\"pull-left\">
                        <ul>
                            <li>
                                <a href=\"#\">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class=\"copyright pull-right\">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>

		";
	}



}


?>
