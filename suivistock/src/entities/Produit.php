<?php
class Produit 
{
    private $ref;
    private $nom;
    private $qteStock;
    private $id;

    public function __construct()
    {

    }

    public function getRef()
    {
        return $this->ref;
    }
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getQteStock()
    {
        return $this->qteStock;
    }
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
}

?>