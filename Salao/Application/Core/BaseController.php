<?php

namespace Core {

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

    abstract class BaseController
    {

        /**
         * @access protected
         * @name $view
         * @var Objeto $view Armazena objeto da classe.
         */
        protected $view;
        /**
         * @access private
         * @name $viewPath
         * @var String $viewPath Armazena caminho da view.
         */
//--------------------------------------------
        protected $auth;
        protected $errors;
        protected $inputs;
        protected $success;

//-------------------------------------------
        private $viewPath;
        /**
         * @access private
         * @name $layoutPath
         * @var String $view Armazena layout a ser exibido Defult Null.
         */
        private $layoutPath;
        /**
         * @access private
         * @name $pageTitle
         * @var String $pageTitle Armazena título a ser exibido na vizualização do documento web.
         */
        private $pageTitle;
        /**
         * Construtor para requisição.
         * @param Construção Anonima.
         * @example example.php 20 1 __construct
         * @return Translator
         */
        public function __construct()
        {
            $this->view = new \stdClass;
            $this->auth = new Auth;

            if (Session::get('errors')) 
            {
                $this->errors = Session::get('errors');
                Session::destroy('errors');
            }
            if (Session::get('inputs')) 
            {
                $this->inputs = Session::get('inputs');
                Session::destroy('inputs');
            }
            if (Session::get('success')) 
            {
                $this->success = Session::get('success');
                Session::destroy('success');
            }

        }

        protected function renderView($viewPath, $layoutPath = null)
        {
            $this->viewPath = $viewPath;
            $this->layoutPath = $layoutPath;
            if($layoutPath)
            {
                $this->layout();
            }
            else
            {
                $this->content();
            }
        }

        protected function content()
        {
            $path = __DIR__."/../App/Views/{$this->viewPath}.phtml";

            if(file_exists($path))
            {
                require_once $path;
            }
            else
            {
                echo "Error:view not found";
            }
        }

        protected function layout()
        {
            $path = __DIR__."/../App/Views/{$this->layoutPath}.phtml";

            if(file_exists($path))
            {
                require_once $path;
            }
            else
            {
                echo "Error:view not found";
            }
        }

        protected function setPageTitle($pageTitle)
        {
            $this->pageTitle = $pageTitle;
        }

        protected function getPageTitle($separator = null)
        {
            if($separator)
            {
                echo $this->pageTitle . " " . $separator . " ";
            }
            else
            {
                echo $this->pageTitle;
            }
        }
    }
}