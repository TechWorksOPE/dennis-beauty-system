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




    public function FuncionariosUnit($id = null)
    {
        $query = "SELECT F.nome as nome ,F.id as id, U.nome as Unidade   
        FROM {$this->table} as F  Inner join unidade as U on F.cod_unidade = U.id 
        where U.id = ?  order by F.id DESC ";
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(array("$id") );
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }


    public function AgendaFunc($id = null , $limit = 60){
        $query = "SELECT A.id,A.hora_entrada as Entrada ,A.hora_saida as Saida ,A.dia_semana as Dia,A.dia_mes as Data 
        FROM {$this->table} A LEFT JOIN funcionarios F ON A.cod_func = F.id 
        WHERE dia_mes >= curdate() and F.id = ?
        ORDER BY dia_mes ASC LIMIT  $limit";
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(array("$id") );
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }


    public function JoinPost()
    {
        $query = "SELECT * FROM {$this->table} as A  Inner join users as B on A.cod_user = B.id  order by A.id desc  ";
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }

    public function FindAgenda($idFunc, $date){
        $query = "SELECT * FROM agenda where cod_func=:cod AND dia_mes=:dia ";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindValue(":cod", $idFunc);
        $stmt->bindValue(":dia", $date);
        $stmt->execute();
        $result = $stmt->fetch();
        $stmt->closeCursor();
        return $result;
    }

    public function FindAgendamentos($id)
    {
        $query = "SELECT * FROM agendamento WHERE cod_agenda= ? order by hora_ini asc";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(array("$id"));
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }
 

}

?>