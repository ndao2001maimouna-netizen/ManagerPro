<?php
class StatutsAppro{
    private string $nom;
    private  array $approvisionnement;
      
     function __construct(int $id, string $nom){
        
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


