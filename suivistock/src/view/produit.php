<?php
include_once "../model/crudProduit.php";
include_once "../model/crudUser.php";
include_once "../../header.php";



?>
<body>
  
    <section id="">
      <section class="wrapper">

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>NOM</th>
                      <th>QUANTITE</th>
                      <th>USER</th>
                      <th>ACTION</th>
                    
                    </tr>
                  </thead>
                  <tbody
                  <?php
                  $produits = afficherProuduit();
                  foreach($produits as $p )
                  {

                
                  ?>
                  >
                    <tr>
                      <td><?php echo $p['ref'];?></td>
                      <td><?php echo $p['nomp'];?></td>
                      <td><?php echo $p['quantite'];?></td>
                      <td><?php echo $p['nom'];?></td>
                      <td>
                     <a href= "?val=<?php echo $p['ref'];?>"><button class=" btn btn-primary "></button></a>
                     <a href= "?valsup=<?php echo $p['ref'];?>"><button class=" btn btn-danger "></button></a>
                      </td>
                    </tr>
                    <?php
                      }

                      
                      ?>
                     
                     <form method="POST" action="/controller/produitController.php">
                         
                      <tr>
                          <td></td>
                          <td> <input required="" type="text" name="nom"></td>
                          <td> <input required="" type="number" name="quantite"></td>
                          <td>
                            <?php
                                $user=afficher();
                             ?>
                            <select name="user" >
                              <option selected="" disabled="">UTILISATEUR</option> 
                            <?php
                              foreach($user as $u )
                              {
                                  ?>
                                      <option value="<?php $u['id']?>"><?php echo $u['nom'];?></option>
                                    <?php
                                        }
                                    ?>
                            </select>
                          </td>
                          <td>
                            <input  type="submit" value="Enregistrer" >
                          </td>
                          
      
                     </tr>
                     </form>
                   
                    <?php
                    if(isset($_POST['Enregistrer']))
                    {
                      var_dump($_POST);
                    }
                    ?>
                    
                      
                  </tbody>
                 </table>
                    <?php
                    if(isset($_GET['valsup']))
                    {
                      extract($_GET);
                      echo $valsup;
                      var_dump($_GET);
                     // header("location:produit.php");
                    }
                    ?>
              </div>
               </section> 
               <a href="?NP" class="container"><button class=" btn btn-primary ">NOUVEAU PRODUIT</button></a>
                             

          </div>
        </div>
        
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>

</html>
