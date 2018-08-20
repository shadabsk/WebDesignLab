<?php
  $var=array('Salman','Haris','Umar','PK');
  echo $var[0].'<br />'.$var[1].'<br />'.$var[2].'<br />'.$var[3].'<br />';

  $var[0]=str_pad($var[0],6,'#',STR_PAD_LEFT);
  $var[1]=str_pad($var[1],6,'#',STR_PAD_LEFT);
  $var[2]=str_pad($var[2],6,'#',STR_PAD_LEFT);
  $var[3]=str_pad($var[3],6,'#',STR_PAD_BOTH);

  echo $var[0].'<br />'.$var[1].'<br />'.$var[2].'<br />'.$var[3].'<br />';

  // echo '<br />'.$var;

?>
