
<?php
class Fournisseur{
   private int $id ;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $tel;
    private string $adresse ;
   
     function __construct(int $id, string $nom, string $prenom, string $email, string $tel, string  $adresse){
            $this->id = $id; 
            $this->nom = $nom; 
            $this->prenom = $prenom; 
            $this->email= $email; 
            $this->tel= $tel; 
            $this->adresse= $adresse; 
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


     public function getAdresse(): string{
        return $this->adresse;
    }
}

















