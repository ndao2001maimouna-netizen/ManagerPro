<?php

class Reglement{
  
   private  DateTime $dateReglement;
   private float $montant;
   private Commande $commande_id ;
  
    function __construct(int $id, DateTime $dateReglement, float $montant, Commande $ommande_id){

                      
         $this->dateDette = $dateDette;               
         $this->montant = $montant;                             
         $this->commande_id = $commande_id;
         
    }

     public function getId(): int
    {
        return $this->id;
    }

     public function getdateReglement(): DateTime
    {
        return $this->dateReglement;
    }

      public function getMontant(): float
    {
        return $this->montant;
    }

    public function getCommande_id():  Commande
    {
        return $this->Commande_id;
    }
}

















