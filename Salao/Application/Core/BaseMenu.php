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

use Core\Autenticate;
class BaseMenu
{

    use Autenticate;
	
/**
* Função para criar menu dinamicamente com os objetos carregados nas váriaveis de acordo com a permissão do usuário que estiver logado 
* capturando permissão pela sessão  
* @access public 
* @return $menus retorna váriavel carregada 
*/


    public static function permissionValidate($routePermission, $userPermission){

        if($routePermission == $userPermission)return true;

        elseif($userPermission < $routePermission)return true;

        elseif($userPermission > $routePermission)return false;
        
    }





    public static function menu(){

        $routes = self::routesAll();
        $units = self::UnitsAll();
        $categorys = self::categorysAll();
        $Useracess = self::userAcess();


        
        Autenticate::setRoute(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        

        $menu = self::firstTags();

        $menu .="<div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">";


        foreach ($categorys as $category) {
            $menu .= "<li class=\"\">";
                        if ($category->categoria == 'Funcionários') {
                            if($Useracess == 2){
                                $menu .= "
                            <a href=\"javascript:;\"  class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"material-icons\">store_mall_directory</i> $category->categoria";
                            }
                        }elseif ($category->categoria == 'Admin') {
                            if($Useracess == 1){
                             $menu .= "
                            <a href=\"javascript:;\"  class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"material-icons\">store_mall_directory</i> $category->categoria";
                            }
                        }else{
                            $menu .= "
                            <a href=\"javascript:;\"  class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"material-icons\">store_mall_directory</i> $category->categoria";
                        }
                        $menu .= "</a>
                        <ul class=\"dropdown-menu\">";
            if($category->description == 'Unidades'){

                foreach ($units as $unit ) {
                    $menu .= "<li> <a href=\"/Unidade/$unit->id \"> $unit->nome</a></li>";
                }

                $menu .="</ul>
                    </li>";
            }else{

                if($Useracess){

                    foreach ($routes as $route ) {
                        $routeacess = intval($route->tipo_acesso);
                        $routeCategorys = json_decode($route->cod_categoria);

                        if( in_array($category->id, $routeCategorys )  ){
                            if($Useracess <= $routeacess ){  

                                if($route->description == 'Agenda'){
                                    $menu .= "<li> <a href=\"$route->link".self::getUser()."\"> $route->description</a> </li>";
                                }else{
                                    $menu .= "<li> <a href=\"$route->link\"> $route->description</a> </li>";
                                }  
                            }
                        }
                    }
                }
                $menu .= "
                    </ul>
                </li>
                ";
            }
        }
 
        $menu .= self::endTags();


        return $menu;
    }

    public static function firstTags(){
        return "
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
                </div>";
    }


    public static function endTags(){
       $auth = self::verifyAuth();
        return
                            $auth
                        ."</ul>
                    </div>
                </div>
            </nav>";;
    }



    public static  function verifyAuth(){  

        $user = '';
        $auth = new Auth;
        if( $auth->check() )
        {
            $user = "   
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

        return $user;
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


    public static function userAcess(){
        $sessionUser = Session::get('user');
        return intval($sessionUser['tipoacesso']);
    }

    public static function getUser(){
        $sessionUser = Session::get('user');
        return intval($sessionUser['id']);
    }

}

?>