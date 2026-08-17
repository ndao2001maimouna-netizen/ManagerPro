<?php


class Client{
   
    private string $nom;
    private string $prenom;
    private string $email;
    private string $tel;
    private  array $Commande;
   
     function __construct(int $id, string $nom, string $prenom, string $email, string $tel ){
            $this->id = $id; 
            $this->nom = $nom; 
            $this->prenom = $prenom; 
            $this->email= $email; 
            $this->tel= $tel; 
     }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string{
        return $this->nom;
    }

    public function getPrenom(): string{
        return $this->Prenom;
    }

     public function getEmail(): string{
        return $this->email;
    }

     public function getTel(): string{
        return $this->tel;
    }
}


