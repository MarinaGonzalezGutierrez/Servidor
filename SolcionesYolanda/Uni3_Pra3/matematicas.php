<?php
function resuelve_segundo_grado($a,$b,$c) {
  $disc=$b**2-4*$a*$c;
  if ($disc<0) {
    return FALSE;
  }
  if ($a==0) {
    if ($b==0) {
      if ($c==0) {
        return NULL;
      } else {
        return FALSE;
      }
    } else { //b no es 0
      $sol=-$c/$b;
      return array($sol);
    }
  } else { //a no es 0
    if ($disc==0) {
      $sol=-$b/(2*$a);
      return array($sol);
    } else {
      $sol1=(-$b+sqrt($disc))/(2*$a);
      $sol2=(-$b-sqrt($disc))/(2*$a);
      return array($sol1,$sol2);
    }
  }
}
?>
