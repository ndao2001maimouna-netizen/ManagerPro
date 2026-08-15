<?php


class Commande{
    public int $id ;
    public  DateTime $dateCommande;
    public float $montantInitial;
    public float $montantAvance;
    public clients $client_id ;
    public utilisateurs $utilisateur_id;
    public modepaiement $modepaiement_id;
  
}

