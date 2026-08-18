<?php

class Dette{
  
   private string $refDette;
   private  DateTime $dateDette;
   private float $montantInitial;
   private float $montantPaye;
   private float $resteDu;
   private Commande $ommande_id ;
  
    function __construct(int $id,  string $refDette, DateTime $dateDette, float $montantInitial, float $montantPaye, float $resteDu, Commande $ommande_id){

                      
         $this->refDette = $refDette;               
         $this->dateDette = $dateDette;               
         $this->montantInitial = $montantInitial;               
         $this->montantPaye= $montantPaye;               
         $this->resteDu = $resteDu;               
         $this->ommande_id = $ommande_id;               
    }

     public function getId(): int
    {
        return $this->id;
    }

      public function getRefDette():string 
    {
        return $this->refDette;
    }

     public function getDateDette(): DateTime
    {
        return $this->dateDette;
    }

      public function getMontantInitial(): float
    {
        return $this->montantInitial;
    }

      public function getMontantPaye(): float
    {
        return $this->montantPaye;
    }

     public function getResteDu(): float
    {
        return $this->resteDu;
    }

    public function getCommande_id():  Commande
    {
        return $this->Commande_id;
    }
}


