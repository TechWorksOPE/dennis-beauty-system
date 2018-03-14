<?php


namespace Core;

/**
 *  Classe de abstração dos controllers do sistema.
 *
 * @author BTB DATA - Pedro Amorim <pedroamorimh4@hotmail.com>
 * @version 1.2
 * @package Core
 * @subpackage BaseController
 * @example example.php 11 10 Exemplo de uso.
 * @category Core
 * @since 2016-08-12
 */


class Container
{
    public static function newController($controller)
    {
        $objcontroller = "App\\Controllers\\".$controller;
        return new $objcontroller;
    }

/*chris     public static function getModel($model,$auth,$token)
    {
        $objModel = "\\App\\Models\\".$model;
        return new $objModel($auth,$token);
   }
 */


    public static function getModel($model)
    {
        $objModel = "\\App\\Models\\" . $model;
        return new $objModel(DataBase::getDataBase()); 
    }


    public static function getModule($Module)
    {
        $objModule = "Modules\\".$Module;
        return new $objModule();
    }


    
//-------------------------------------------------------------------------------------------------------------
    public static function goElastic($controller)
    {   
        $objModel = "\\App\\Models\\" . $controller;
        return new $objModel(ConElastic::getDataBaseElastic());
    }
}

?>