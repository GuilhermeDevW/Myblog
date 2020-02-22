<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PDO;

class postModel extends Model
{
     private $con;

    public function __construct()
    {
      $this->con=new PDO("mysql:host=localhost;dbname=blog","root","");
    }

    public function insert($post,$titulo)
    {
    return $this->con->query("INSERT INTO post (post,id_autor,Titulo_post) VALUES ('{$post}', '1','{$titulo}')");
                        
      }

    public function posts(){
      return $this->con->query("SELECT name,email,id_post,Titulo_Post,post FROM users inner join post on id=id_autor")->fetchAll();

    }

    public function materia($id){
      return $this->con->query("SELECT * FROM post where id_post='{$id}'")->fetchAll();
    }

    public function materiaUpdate($id,$post,$titulo){
      return $this->con->query("UPDATE `post` SET `post`='{$post}',Titulo_post='{$titulo}' WHERE id_Post='{$id}'");
  }


   public function delet($id){
    return $this->con->query("DELETE FROM post WHERE `id_post` = '{$id}'");
   }

    }
