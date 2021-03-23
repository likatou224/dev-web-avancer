<?php
include_once "header.php";
?>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="accueil">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Nom d'utilisateur" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Mot de passe">
        </div>
        <input  class="btn btn-primary btn-lg btn-block" type="submit" value=" Se connecter">
      </div>
    </form>
  </div>



<?php
include_once "footer.php";
?>