<?php
require_once "db.php";
    function addProduit($idp, $nomp,$quantite)
    {
        $sql= "INSERT INTO produit VALUES(NULL,'$nomp','$quantite',$id)";
        $con=getConnection();
        return $con->exec($sql);
    }
    
     function afficherProuduit()
     {
         $con=getConnection();
         $sql = "SELECT * FROM produit, user where idp=id";
        return $con->query($sql)->fetchAll();   
     }
     function DELETE($ref)
     {
            $sql= "DELETE * FROM produit WHERE ref='$ref'";
            $con=getConnection();
            return $con->exec($sql);
     }
        DELETE('123');