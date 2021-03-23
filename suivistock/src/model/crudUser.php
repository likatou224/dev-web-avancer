<?php
require_once "db.php";
    function addUser($nom,$prenom,$email,$password,$etat)
    {
        $sql= "INSERT INTO user VALUES(NULL,'$nom','$prenom','$email','$password',$etat)";
        $con=getConnection();
        return $con->exec($sql);
    }
    
     function afficher()
     {
         $con=getConnection();
         $sql = "SELECT * FROM user";
        return $con->query($sql)->fetchAll();   
     }

     function update($id, $nom,$prenom,$email,$password,$etat)
    {
        $sql= "UPDATE `user` SET `id`=$id,`nom`='$nom',`prenom`='$prenom',`email`='$email',`password`='$password',`etat`=$etat WHERE id=$id";
        $con=getConnection();
        return $con->exec($sql);
    }

    function deleteUser($id, $nom,$prenom,$email,$password,$etat)
    {
        $sql= "DELETE * FROM `user` WHERE id=$id ";
        $con=getConnection();
        return $con->exec($sql);
    }
    
     
?>
