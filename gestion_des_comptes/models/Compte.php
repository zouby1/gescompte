<?php
namespace App\Models; 
 use App\Core\Model;

class Compte extends Model{
    private int $id;  
    private string $solde;


    public function __construct()
    {
       
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

    public function getSolde()
    {
       return $this->solde;
    }

    
    public function setSolde($solde)
    {
        return $this;  
    }

    public function client():array{
        $sql="select cl.* from clients cl, 
              compte c where cl.compte_id=c.id and cl.id=? ";
            return  parent::selectWhere($sql,[$this->id],false,Client::class);
    }


    
}