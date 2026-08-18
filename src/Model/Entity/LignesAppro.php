
<?php

class LigneAppro{
     private int $id ;
   private float $qteAppro ;
   private float $qteRecu ;
   private float $prixReel ;
    private Approvisionnement $approvisionnement_id ;
    private Produit $produit_id  ;
  
    function __construct(int $id, float $qteAppro, float $qteRecu, float  $prixReel, Approvisionnement $approvisionnement_id, Produit $produit_id ){

         $this->id = $id;               
         $this->qteAppro =  $qteAppro;               
         $this->qteRecu  = $qteRecu;  
         $this->prixReel  = $prixReel;  
         $this->approvisionnement_id = $approvisionnement_id;          
         $this-> produit_id =  $produit_id ;             
                     
    }


     public function getId(): int
    {
        return $this->id;
    }

      public function getqteAppro ():float
    {
        return $this->qteAppro;
    }

      public function getqteRecu(): float
    {
        return $this->qteRecu;
    }

      public function getprixReel(): float
    {
        return $this->prixReel;
    }

    public function getapprovisionnement_id(): Approvisionnement
    {
        return $this->approvisionnement_id;
    }

    public function getproduit_id(): Produit
    {
        return $this->produit_id;
    }


}























