<?php

if(isset($_SESSION['status'])){
  if($_SESSION['status']==1){
    echo '<script>alert("Réversation enregistrée");</script>';
    $_SESSION['status']=0;
  }
}

require __DIR__.'/../template/index.html';
 ?>
