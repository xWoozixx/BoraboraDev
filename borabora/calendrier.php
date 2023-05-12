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

      <iframe src="https://calendar.google.com/calendar/embed?src=617162b76f1e4e9f73b3adbf8c67db2c236db6199755fe3f6c27c1dcc358c931%40group.calendar.google.com&ctz=Pacific%2FNoumea" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
  </section>

  <!--==============================footer=================================-->
  <?php include_once 'include/footer.php' ?>
</body>
</html>