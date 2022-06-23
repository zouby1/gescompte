<?php 

 namespace App\Models;
 use App\Core\Model;
 
class Client extends Model{
     protected int   $id;
     protected string $nom;
     protected string $prenom;
     protected string $password;
     protected float $solde;

    
    public function __construct(){

    }

    
    public function getId():int
    {
       return $this->id;
    }

    
    public function setId($id ):void
    {
               $this->id=$id;   
    }
    

     
    public function getNom()
     {
          return $this->name;
     }

    
    public function setNom($nom)
     {
          $this->nom = $nom;

          return $this;
     }

     public function getPrenom()
     {
          return $this->name;
     }

    
    public function setPrenom($prenom)
     {
          $this->prenom = $prenom;

          return $this;
     }

    
    public function getPassword()
     {
          return $this->password;
     }

     
     public function setPassword($password)
     {
          $this->password = $password;

          return $this;
     }

     public function getSolde()
    {
       return $this->solde;
    }

    
    public function setSolde($solde )
    {
        return $this;  
    }

    
    

     
    

     public function insert(){
          $sql="INSERT INTO  ".parent::table()."  (`nom`, `prenom`,  `password`, `solde`)
               VALUES ( ?, ?, ?, ?);";
         return parent::database()->executeUpdate($sql,[
                                                  $this->nom,$this->prenom,$this->password,$this->solde]);
     }

     public  function selectUserByLoginAndPassword(){
           $sql="select * from user where nom=? and password=?";
           return parent::database()->executeSelect($sql,
                                      [$this->nom,$this->password],
                                       true) ;
     }


}