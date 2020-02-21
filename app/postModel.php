<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PDO;

class postModel extends Model
{
    public function insert($post,$titulo)
    {
     $con=new PDO("mysql:host=localhost;dbname=blog","root","");
    return $con->query("INSERT INTO post (post,id_autor,Titulo_post) VALUES ('{$post}', '1','{$titulo}')");
                        
      }
    public function posts(){
      $con=new PDO("mysql:host=localhost;dbname=blog","root","");
      return $con->query("SELECT name,email,id_post,Titulo_Post,post FROM users inner join post on id=id_autor")->fetchAll();

    }

    }
