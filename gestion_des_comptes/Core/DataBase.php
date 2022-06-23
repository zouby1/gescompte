<?php 
namespace App\Core;



class DataBase{
    private \PDO|null $pdo=null;

    private string $className;
    public function openConnexion(){
        try {
            $this->pdo=new \PDO("mysql:dbname=gestion_compte;host=localhost","root","");
        } catch (\Exception $ex) {
              die("Erreur Vous n'etes pas connecté");
        }
       
    }

    public function closeConnexion(){
         $this->pdo=null;
    }

    public function executeSelect(string $sql,array $data=[],$single=false){
       
        $this->openConnexion();
         $stm=$this->pdo->prepare($sql);
         $stm->execute($data);
         $stm->setFetchMode(\PDO::FETCH_CLASS,$this->className);
        if($single){
            $result=$stm->fetch();
        }else{
            $result=$stm->fetchAll();
        }
        $this->closeConnexion();
        return  $result;
        
    }

    public function executeUpdate(string $sql,array $data=[]):int{
        $this->openConnexion();
         $stm=$this->pdo->prepare($sql);
         $stm->execute($data);
         $result=$stm->rowCount();
        $this->closeConnexion();
        return  $result;
    }
 
    public function setClassName($className)
    {
        $this->className = $className;
        return $this;
    }
}