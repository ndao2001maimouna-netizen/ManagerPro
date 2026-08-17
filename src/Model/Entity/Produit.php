
<?php

class Produit{
   
   private string $libelle;
   private float $prix_vente ;
   private float $stock_initial;
    private array $LigneAppro;
  
  
    function __construct(int $id,  string $libelle, float $prix_vente , float $stock_initial){

         $this->id = $id;               
         $this->libelle =  $libelle;               
         $this->prix_vente  = $prix_vente ;               
         $this->stock_initial = $stock_initial;               
                 
    }


     public function getId(): int
    {
        return $this->id;
    }

      public function getLibelle ():string 
    {
        return $this->libelle ;
    }

      public function getPrixVente(): float
    {
        return $this->prix_vente;
    }

      public function getStockInitial(): float
    {
        return $this->stock_initial;
    }


}







