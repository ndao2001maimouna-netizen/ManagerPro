<?php


class Commande{
   private int $id ;
   private  DateTime $dateCommande;
   private float $montantInitial;
   private float $montantAvance;
   private client $client_id ;
   private Utilisateur $utilisateur_id;
   private modepaiement $modepaiement_id;
  
    function __construct(int $id,  DateTime $dateCommande, float $montantInitial, float $montantAvance, clients $client_id,
                         Utilisateur $utilisateur_id, modepaiement $modepaiement_id){

         $this->id = $id;               
         $this->dateCommande = $dateCommande;               
         $this->montantInitial = $montantInitial;               
         $this->montantAvance = $montantAvance;               
         $this->client_id =  $client_id;               
         $this->utilisateur_id = $utilisateur_id;               
         $this->modepaiement_id = $modepaiement_id;               
    }

     public function getId(): int
    {
        return $this->id;
    }

     public function getDateCommande(): DateTime
    {
        return $this->dateCommande;
    }

      public function getMontantInitial(): float
    {
        return $this->montantInitial;
    }

      public function getMontantAvance(): float
    {
        return $this->montantAvance;
    }

     public function getClient_id (): Client
    {
        return $this->client_id;
    }

    public function getUtilisateur_id (): Utilisateur
    {
        return $this->utilisateur_id;
    }

    public function getModepaiement_id(): Modepaiement
    {
        return $this->modepaiement_id;
    }
}

