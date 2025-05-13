<?php 
  session_start();
  if(isset($_SESSION['a']))
  {
    echo "Session is set => ".$_SESSION['a'];
  }
  else
  {
    echo "Session is not set";
  }
?>