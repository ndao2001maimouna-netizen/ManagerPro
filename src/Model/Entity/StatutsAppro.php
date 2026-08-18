<?php
class StatutsAppro{
     private int $id ;
    private string $nom;
    private  array $approvisionnement;
      
     function __construct(int $id, string $nom){
            $this->id = $id; 
            $this->nom = $nom; 
     }

       public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string{
        return $this->nom;
    }
}


