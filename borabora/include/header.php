<header> 
  <div> 
    <div>                 	
      <h1 class="text-3a"><a href="/">Le BORA<span>-BORA</span></a></h1> 
      <nav>  
        <ul class="menu">
          <li<?php echo $_SERVER['SCRIPT_NAME'] == '/index.php' ? ' class="current"' : '' ?>>
            <a href="index.php">Accueil</a>
          </li>
          <li<?php echo $_SERVER['SCRIPT_NAME'] == '/a-propos.php' ? ' class="current"' : '' ?>>
            <a href="a-propos.php">A propos</a>
          </li>
          <li<?php echo $_SERVER['SCRIPT_NAME'] == '/nos-prestations.php' ? ' class="current"' : '' ?>>
            <a href="nos-prestations.php">Nos prestations</a>
          </li>
          <li<?php echo $_SERVER['SCRIPT_NAME'] == '/nos-tarifs.php' ? ' class="current"' : '' ?>>
            <a href="nos-tarifs.php">Nos tarifs</a>
          </li>
          <li<?php echo $_SERVER['SCRIPT_NAME'] == '/calendrier.php' ? ' class="current"' : '' ?>>
            <a href="calendrier.php">Calendrier</a>
          </li>
          <li<?php echo $_SERVER['SCRIPT_NAME'] == '/contacts.php' ? ' class="current"' : '' ?>>
            <a href="#">Contacts</a>
          </li>
          <li><a class="seConnecter" href="se-connecter.php">Se Connecter</a>
        </li>
        </ul>
      </nav>
      <div class="clear"></div>
      
    </div>
  </div>
</header>