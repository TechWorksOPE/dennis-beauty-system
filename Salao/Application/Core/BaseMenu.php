<?php
/** 
* Comentário de cabeçalho de arquivos 
* Esta classe é uma base para todos os controllers 
* @author Pedro Amorim <Pedroamorimh4@gmail.com> 
* @version 0.1 
* @copyright .....
* @access public 
* @package App 
* @subpackage Core 
*/ 

namespace Core;

class BaseMenu
{
	
/**
* Função para criar menu dinamicamente com os objetos carregados nas váriaveis de acordo com a permissão do usuário que estiver logado 
* capturando permissão pela sessão  
* @access public 
* @return $menus retorna váriavel carregada 
*/


    public static function permissionValidate($routePermission, $userPermission){

        if($routePermission == $userPermission){
            return true;
        }

        elseif($userPermission < $routePermission){
            return true;
        }

        elseif($userPermission > $routePermission){
            return false;
        }
    }

    public static  function routesAll(){
        $routes = Container::getModel("Rotas");
        return $routes->All();
    }

    public static  function UnitsAll(){
        $unit = Container::getModel("Unidade");
        return $unit->All();
    }

    public static function categorysAll(){
        $categorys = Container::getModel("Categoria");
        return $categorys->All();
    }

    public static function menu(){
        $auth = self::verifyAuth();
        $routes = self::routesAll();
        $units = self::UnitsAll();
        $sessionUser = Session::get('user');
        $Useracess = intval($sessionUser['tipoacesso']);

        $menu = "    
        <nav class=\"navbar navbar-primary navbar-transparent navbar-absolute\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation-example-2\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/home \"><h3>Dennis Beauty System</h3></a>
                </div> 


                <div class=\"collapse navbar-collapse\">
                    
                    <ul class=\"nav navbar-nav navbar-right\">
                       
                        <li class=\"\">
                            <a href=\"/home\">
                                <i class=\"material-icons\">dashboard</i> Home
                            </a>
                        </li>

                        <li class=\"\">
                            <a href=\"javascript:;\"  class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                                <i class=\"material-icons\">store_mall_directory</i> Unidades
                            </a>
                            <ul class=\"dropdown-menu\">";
                            foreach ($units as $unit ) {
                                $menu .= "<li> <a href=\" Unidade/$unit->id\"> $unit->nome</a> </li>";
                            }

                           $menu .="</ul>
                        </li>                        

                        <li class=\"nav-item dropdown\">
                            
                            <a href=\"javascript:;\"  class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                                <i class=\"material-icons\">person_add</i> Atividades
                            </a>
                            <ul class=\"dropdown-menu\">";

                                foreach ($routes as $route ) {
                                    $routeacess = intval($route->tipo_acesso);

                                    if($Useracess <= $routeacess ){    
                                        $menu .= "<li> <a href=\" $route->link\"> $route->description</a> </li>";
                                    }
                                }

                            $menu .="
                            </ul>
                        </li>
                        ".
                        $auth
                    ."</ul>
                </div>
            </div>
        </nav>
        ";

        return $menu;
    }


    public static  function verifyAuth(){  

        $auth = new Auth;
        if( $auth->check() )
        {
            $auth = "   
                    <li class=\"nav-item dropdown\">
                        <a href=\"javascript:;\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"material-icons\">account_box</i>". $auth->name()."
                        </a>

                        <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    </a>
                                </li> 

                                <li><a href=\"/logout\"><i class=\"material-icons\">power_settings_new</i> logout</a></li>
                                <li><a href=\"/useragendamentos\"><i class=\"material-icons\"></i> Seus Agendamentos</a></li>
                                <li><a href=\"/edit/".$auth->id()."/Usuario\"><i class=\"material-icons\"></i>Editar dados</a></li>

                        </ul>
                    </li>
                    ";
        }
        else
        {
            $auth = " 
                    <li class=\"nav-item dropdown\">
                        <a href=\"javascript:;\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"material-icons\">account_box</i> User
                        </a>
                        <ul class=\"dropdown-menu \">
                            <li>
                                <a href=\"/\"> <i class=\"material-icons\">person </i>  login </a>
                            </li> 
                        </ul>
                    </li>
                    ";
        }

        return $auth;
    }


}

?>