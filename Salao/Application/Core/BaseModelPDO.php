<?php

namespace Core;


/**
* Esta classe é ums classe base para que todas as model possa estendelás * 
* @author Pedro Amorim <Pedroamorimh4@gmail.com> 
* @version 0.1 
* @copyright .....
* @access public 
* @package App 
* @subpackage Core
*/ 

use PDO;

abstract class BaseModelPDO
{


/** 
* Comentário de variáveis .
* @access public  
* @name $pdo  
* @name $table
*/
    private $pdo;
    protected $table;
    private $id;


/** 
* Função construtora para inicar objetos nas variaveis
* @access public 
*/
    public function __construct( $pdo)
    {   
        $this->pdo = $pdo;
    }

//----------------------------------------------------------------------------
    public function getLastId()
    {
        return $this->pdo->lastInsertId();
    }

    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
//------------------------------------------------------------------------------

/**
* Função recebe por parametro tabela e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $table
* @return $result
*/
    public function All()
    {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }


/**
* Função recebe por parametro um array e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $array
* @return $result
*/
    public function finds($array)
    {
        
        $query = "SELECT * FROM {$this->table} WHERE email = ? ";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($array);
        $result = $stmt->fetch();
        $stmt->closeCursor();
        return $result;
    }


/**
* Função recebe por parametro tabela e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $array
* @return $result
*/
    public function find($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id=:id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch();
        $stmt->closeCursor();
        return $result;
    }

/**
* Função recebe por parametro tabela e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $array
* @return $result
*/
    public function create(array $data)
    {
        $data = $this->prepareDataInsert($data);
        $query = "INSERT INTO {$this->table} ({$data[0]}) VALUES ({$data[1]})";
        $stmt = $this->pdo->prepare($query);
        for($i = 0; $i < count($data[2]); $i++){    
            $stmt->bindValue("{$data[2][$i]}", $data[3][$i]);
        }
        $result = $stmt->execute();
        $stmt->closeCursor();
        return $result;
    }

/**
* Função recebe por parametro tabela e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $array
* @return $result
*/
    private function prepareDataInsert(array $data)
    {

        $strKeys = "";
        $strBinds = "";
        $values = [];
        $binds = [];

        foreach ($data as $key => $value){
            $strKeys = "{$strKeys}, {$key}";
            $strBinds = "{$strBinds},:{$key}";
            $binds[] = ":{$key}";
            $values[] = $value;
         }
         $strKeys = substr($strKeys, 1);
         $strBinds = substr($strBinds, 1);
         return [$strKeys, $strBinds, $binds, $values];
    }

/**
* Função recebe por parametro tabela e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $array
* @return $result
*/
    public function update(array $data, $id)
    {
        $data = $this->prepareDataUpdate($data);
        $query="UPDATE {$this->table} SET {$data[0]} WHERE id=:id";
        $stmt= $this->pdo->prepare($query);
        $stmt->bindValue(":id", $id);
        for($i = 0; $i < count($data[1]); $i++){
            $stmt->bindValue("{$data[1][$i]}", $data[2][$i]);
        } 
        $result = $stmt->execute();
        $stmt->closeCursor();
        return $result;
    }


/**
* Função recebe por parametro tabela e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $array
* @return $result
*/

    private function prepareDataUpdate(array $data)
    {
        $strKeysBinds = "";
        $binds = [];
        $values = [];

        foreach ($data as $key => $value){
            $strKeysBinds = "{$strKeysBinds},{$key}=:{$key}";
            $binds[] = ":{$key}";
            $values[] = $value;
        }
        $strKeysBinds = substr($strKeysBinds, 1);
        return [$strKeysBinds, $binds, $values];
    }

/**
* Função recebe por parametro tabela e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $array
* @return $result
*/
    public function delete($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id=:id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindValue(":id", $id);
        $result = $stmt->execute();
        $stmt->closeCursor();
        return $result;
    }

//--------------------------------------------------------------------------------------------------------------------------------------
// falta colocar todos os campos do formulário de agendamento nessa query
/*
SELECT A.data_agendamento as data , A.horario_agendamento as horario,C.tipoServico as Servico, D.nome as Funcionario  
FROM agendamento as A Inner join users as B on A.cod_user = B.id inner join servico as C on C.id = A.cod_user 
inner join funcionarios as D on D.id = A.cod_profissional where A.cod_user = 1 
*/
    public function Agendamentos($id = null)
    {
        $query = "SELECT A.data_agendamento as Data ,A.id as id,  A.horario_agendamento as Horario,C.tipoServico as Servico, D.nome as Funcionario  
        FROM {$this->table} as A  Inner join users as B on A.cod_user = B.id inner join servico as C on C.id = A.cod_servico 
        inner join funcionarios as D on D.id = A.cod_profissional where A.cod_user = ?  order by A.id ASC ";
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(array("$id") );
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }



/**
* Função recebe por parametro tabela e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $array
* @return $result
*/
    public function LogradouroJoin($city)
    {
        $city = strtoupper($city);
        $city = preg_replace('/(%20)+/', ' ',$city);
        $city = preg_replace('/%20/ui', ' ',$city);
  
        $query = "SELECT A.cep as cep , A.logradouro_ as sam , A.bairro_ as bairro , B.bg_004_system_states_city_ as Estado
        from {$this->table} as A Inner Join bg_004_system_cities as B on A.id_cidade = B.id Where A.logradouro_ ilike ? ";
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(array("%$city%"));   
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return json_encode( $result);
    }



//-------------------- método para fazer join nas tabelas e buscar pelo cep----------------------------------------------------------------
/**
* Função recebe por parametro tabela e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $array
* @return $result
*/
    public function CepJoin($ceps)
    {   
        $cep = CleanWord::cep($ceps);

            $query = "SELECT A.cep as cep , A.logradouro_ as sam , A.bairro_ as bairro , B.bg_004_system_states_city_ as Estado , C.ddd as DDD 
            from {$this->table} as A Inner Join bg_004_system_cities as B on A.id_cidade = B.id Inner Join bg_005_system_ddd as C on C.city = B.bg_004_system_states_city_
             Where A.cep = :cep ";
            $stmt = $this->pdo->prepare($query); 
            $stmt->bindValue(":cep", $cep);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $stmt->closeCursor();
            return json_encode( $result);

    }

//-------------------- método para fazer join nas tabelas e buscar pelo Cidade ------------------------------------------------------------


//-------------------- método para fazer join nas tabelas e buscar pelo logradouro---------------------------------------------------------
/**
* Função recebe por parametro tabela e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $array
* @return $result
*/
    public function cityJoin($city)
    {
        $city = strtoupper($city);
        $city = preg_replace('/(%20)+/', ' ',$city);
        $city = preg_replace('/%20/ui', ' ',$city);

        $query = "SELECT * from {$this->table} as A Inner Join bg_004_system_cities as B on A.id_cidade = B.id Where B.bg_004_system_states_city_ ilike ? ";
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(array("%$city%"));
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return json_encode( $result);
    }
//--------------------- método para busca na tabela pelo cargo ----------------------------------------------------------------------------
/**
* Função recebe por parametro tabela e faz busca no banco na tabela recebida por parametro
* @access public 
* @param $array
* @return $result
*/
    public function getCargos($var)
    {   
        $var = strtoupper($var);
        $var = preg_replace('/(%20)+/', ' ',$var);
        $var = preg_replace('/%20/ui', ' ',$var);

        $query = "SELECT A.description , A.active as Ativo  FROM {$this->table} as A where description ilike ? ";
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(array("$var%")); 
        $result = $stmt->fetchAll();  
        $stmt->closeCursor();
        return json_encode( $result);
    }

//-----------------------------------------------------------------------------------------------------------------------


}

?>