<?php 
namespace App\Core;
abstract class Model implements IModel{

    protected static DataBase|null $database=null;
    
    public static function table(){
      return strtolower(str_replace("App\Models\\","",get_called_class()));
    }

    
    public function insert(){
        
    }
    public function update(){

    }
    
    public static function database():DataBase{
        if(self::$database==null){
            self::$database=new DataBase;
        }
        return self::$database;
        
    }
    
    public static  function selectAll(){
           $sql="select *  from  ".self::table();
            self::database()->setClassName(get_called_class()) ; 
            return self::database()->executeSelect($sql);
         
    }
    public static  function selectById(int $id){
         $sql="select *  from ".self::table()."  where id=?";
         
         self::database()->setClassName(get_called_class()) ;
         return self::database()->executeSelect($sql,[$id],true);
        
    }
    public static  function selectWhere(string $sql,array $data=[],$single=false,string  $className=""){
        if(empty($className)){
            self::database()->setClassName(get_called_class()) ;
        }else{
            self::database()->setClassName($className);
        }
        
        return self::database()->executeSelect($sql,$data,$single);
    }

}
