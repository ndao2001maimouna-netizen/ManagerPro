<?php


class Approvisionnement{
   private int $id ;
   private string $ref_bl;
   private  DateTime $date_appro;
   private  Fournisseur $fournisseur_id ;
   private Utilisateur $utilisateur_id;
   private StatutsAppro $statut_appro_id;
   private array $LigneAppro;
  
    function __construct(int $id, string $ref_bl,  DateTime $date_appro, Fournisseur $fournisseur_id,
                         Utilisateur $utilisateur_id,  StatutsAppro $statut_appro_id){

         $this->id = $id;               
         $this->ref_bl= $ref_bl;               
         $this->date_appro = $date_appro;               
         $this->fournisseur_id = $fournisseur_id;                             
         $this->utilisateur_id = $utilisateur_id;               
         $this->StatutsAppro  = $StatutsAppro ;  
         
    }

     public function getId(): int
    {
        return $this->id;
    }

      public function getref_bl(): string
    {
        return $this->ref_bl;
    }
     public function getdate_appro(): DateTime
    {
        return $this->date_appro;
    }

     public function getfournisseur_id ():Fournisseur
    {
        return $this->fournisseur_id;
    }

    public function getUtilisateur_id (): Utilisateur
    {
        return $this->utilisateur_id;
    }

    public function getstatut_appro_id(): StatutsAppro
    {
        return $this->statut_appro_id;
    }
}










