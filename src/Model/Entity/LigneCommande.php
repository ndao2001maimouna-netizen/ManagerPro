
<?php

class LigneCommende{
   
   private int $qteCommande;
   private float $prixReel ;
    private Commande $commande_id ;
    private Produit $produit_id  ;
  
  
  
    function __construct(int $id,  int $qteCommande, float $prixReel , Commande $commande_id, Produit $produit_id ){

         $this->qteCommande =  $qteCommande;               
         $this->prixReel  = $prixReel  ;  
         $this->commande_id = $commande_id;             
         $this-> produit_id =  $produit_id ;             
                     

    }


     public function getId(): int
    {
        return $this->id;
    }

      public function getqteCommande ():int
    {
        return $this->qteCommande;
    }

      public function getprixReel(): float
    {
        return $this->prixReel ;
    }

    public function getCommande_id():  Commande
    {
        return $this->Commande_id;
    }

    public function getproduit_id(): Produit
    {
        return $this->produit_id;
    }


}


















