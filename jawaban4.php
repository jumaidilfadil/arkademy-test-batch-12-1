<?php
function pemisah_nol_sort($bilangan_integer)
{

  $bilangan_integer_pecah = explode("0", $bilangan_integer);
  $output = "";

  foreach($bilangan_integer_pecah as $bip)
  {
    for($i=0; $i<strlen($bip); $i++)
    {
      $bilangan_integer_pecah_arr[] = $bip[$i];
    }
  
    sort($bilangan_integer_pecah_arr);
    foreach($bilangan_integer_pecah_arr as $n)
    {
      $output .= $n;
    }

    unset($bilangan_integer_pecah_arr);
  }

  return $output;

}

$bilangan_integer = 5956560159466056;
echo "<p>Input:<br>".$bilangan_integer."</p>";
echo "<p>Output:<br>".pemisah_nol_sort($bilangan_integer)."</p>";