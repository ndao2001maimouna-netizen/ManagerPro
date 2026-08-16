<?php
require_once dirname(__DIR__)."/../core/Database.php";
require_once dirname(__DIR__)."/../Model/Entity/Client.php";


class ClientRepository{
  function saveClient(array $clients) :int{

  $sql = "INSERT INTO  clients(id, nom, prenom, email, tel)
           VALUES (:id, :nom, :prenom, :email, :tel) ";
  
  
  Database::executeQuery($sql, [
                  'id'=> $id,
                  'nom'=> $nom,
                  'prenom'=> $prenom,
                  'email'=> $email,
                  'tel'=> $tel
  ]);
    return 0;
 }

  function getAllClient():array | false{
      $sql = "SELECT * FROM  clients";
       $lesClients = Database::query($sql);
   return  $lesClients; 
  }
    

}