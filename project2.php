<?php


function stroki () {
    $s=($_POST['mytext']);
  // echo $s;
   // echo '</br>';
    $sm=substr($s, 0, 2);
   // echo $sm;
  //  echo '</br>';
    $p=strripos($s,$sm);
    //echo $p;
  //  echo '</br>';
    $sp=$s[$p];
    $s[$p]=$s[$p+1];
    $s[$p+1]=$sp;
    return $s;

}

echo stroki();