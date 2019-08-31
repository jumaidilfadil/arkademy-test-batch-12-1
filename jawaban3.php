<?php
function segitiga_siku_primer($alas_tinggi)
{

  for($i=1; $i<=$alas_tinggi; $i++)
  {
  
    $batas = 1;
    $angka = 2;
    while($batas <= $i)
    {
  
      $p = 0;
  
      for($j=1; $j<=$angka; $j++)
      {
        if($angka % $j == 0)
          $p++;
      }
  
      if($p <= 2)
      {
        echo $angka." ";
        $batas++;
      }
  
      $angka++;
  
    }
  
    echo "<br>";
  }

  return;

}

$alas_tinggi = 5; // boleh diganti antara bilangan 1-9
echo "<p>Input:<br>".$alas_tinggi."</p>";
echo "<p>Output:<br>";
segitiga_siku_primer($alas_tinggi);
echo "</p>";