<?php
namespace App\Controllers;

use Core\BaseController;
use Core\Container;
use Core\Redirect;
use Core\Session;

class UnidadeController extends BaseController
{	

	protected $unidade;

    public function __construct()
    {
        parent::__construct();
        $this->unidade 	= 	Container::getModel("Unidade");
    }


    public static function setUnit($id){
        Session::set('unit', $id);
        Redirect::route("/home");
    }

    public static function getUnidade(){
         return Session::get('unit');
    }
}