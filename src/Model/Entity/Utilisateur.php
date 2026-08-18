
<?php
class Utilisateur{
    private int $id ;
    private string $nom_complet;
    private string $email;
    private string $mot_passe;
    private string $tel;
    private string $adresse ;
    private Role $role_id;
    private array $Commande;
   
     function __construct(int $id, string $nom_complet,  string $email, string $mot_passe, string $tel, string  $adresse, Role $role_id){
            $this->id = $id; 
            $this->nomComplet = $nom_complet; 
            $this->email= $email; 
             $this->mot_passe = $mot_passe; 
            $this->tel= $tel; 
            $this->adresse = $adresse; 
            $this->role_id = $role_id; 
     }


    public function getId(): int
    {
        return $this->id;
    }

    public function getNomComplet(): string{
        return $this->nomComplet;
    }


     public function getEmail(): string{
        return $this->email;
    }

     public function getMotPasse(): string{
        return $this->mot_passe;
    }

     public function getTel(): string{
        return $this->tel;
    }


     public function getAdresse(): string{
        return $this->adresse;
    }

    public function getrole_id (): Role
    {
        return $this->role_id ;
    }
}


