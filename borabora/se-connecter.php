<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Accueil - Le Bora-Bora</title>
  <?php include_once 'include/head.php'?> 

  <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
  <script>
    $(document).ready(function(){				   	
      $('.slider')._TMS({
        show:0,
        pauseOnHover:true,
        prevBu:false,
        nextBu:false,
        playBu:false,
        duration:800,
        preset:'fade',
        pagination:true,
        pagNums:false,
        slideshow:7000,
        numStatus:false,
        banners:'fade',
        waitBannerAnimation:false,
        progressBar:false
      })		
    });
  </script>
</head>
<body>
  <?php include_once 'include/header.php' ?>

  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
    <p class="loginform">
    <h2>Connexion</h2><br>
  <form action="CRUD/login.php" method="POST">
    <div>
      <label for="username">Nom d'utilisateur:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div>
      <label for="password">Mot de passe:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Se connecter</button>
  </form>
    </p>
    </div>

    <div class="container_12">
    <p class="loginform">
        <br>
    <h2>Pas encore de compte ? <br><br> Enregistrez-vous</h2><br>
  <form action="CRUD/register.php" method="POST">
    <div>
      <label for="username">Nom d'utilisateur:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
      <label for="password">Mot de passe:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div>
      <label for="confirm_password">Confirmez votre Mot de passe:</label>
      <input type="password" id="confirm_password" name="confirm_password" required>
    </div>
    <button type="submit">Créer mon compte</button>
  </form>
    </p>
    </div>
  </section>

  <!--==============================footer=================================-->
  <?php include_once 'include/footer.php' ?>
</body>
</html>