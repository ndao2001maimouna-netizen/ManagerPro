<?php
class Modepaiement {
  
    private string $mode;
    private array $Commande;
      
     function __construct(int $id, string $mode){
        
            $this->mode= $mode; 
     }

       public function getId(): int
    {
        return $this->id;
    }

    public function getMode(): string{
        return $this->mode;
    }
}

