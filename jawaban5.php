<?php
function membelah_string($kata)
{

  $arr_default = ['pro', 'gram', 'program', 'programmer', 'merit', 'it'];

  foreach($arr_default as $key => $basis)
  {
    if(strpos($kata, $basis) !== false)
    {
      $output[] = $basis;
    }
  }

  if(in_array("pro", $output) && in_array("gram", $output))
  {
    $output = array_diff($output, ["program"]);
    $arr_default = array_diff($arr_default, ["pro", "gram"]);
  }

  if(in_array("programmer", $output))
  {
    $output = array_diff($output, ["programmer"]);
  }

  if(in_array("merit", $output))
  {
    $output = array_diff($output, ["it"]);
  }

/* ------------------------------------------------------------------- */

  foreach($arr_default as $key => $basis)
  {
    if(strpos($kata, $basis) !== false)
    {
      $output2[] = $basis;
    }
  }

  if(!empty($output2) && in_array("programmer", $output2))
  {
    $output2 = array_diff($output2, ["programmer"]);
    $arr_default = array_diff($arr_default, ["pro", "gram", "program"]);
  }

  if(!empty($output2) && in_array("merit", $output2))
  {
    $output2 = array_diff($output2, ["it"]);
  }

/* ------------------------------------------------------------------- */

  foreach($arr_default as $key => $basis)
  {
    if(strpos($kata, $basis) !== false)
    {
      $output3[] = $basis;
    }
  }

  if(!empty($output3) && in_array("programmer", $output3))
  {
    $output3 = array_diff($output3, ["merit"]);
  }

  if($output2 == $output3)
  {
    unset($output3);
  }

/* ------------------------------------------------------------------- */

  $output = implode(", ", $output);
  $output_all = $output;

  if(!empty($output2))
  {
    $output2 = implode(", ", $output2);
    $output_all .= "<br>".$output2;
  }
  if(!empty($output3))
  {
    $output3 = implode(", ", $output3);
    $output_all .= "<br>".$output3;
  }

  return $output_all;
  
}

$kata1 = "programit";
echo "<p>Input 1:<br>".$kata1."</p>";
echo "<p>Output 1:<br>".membelah_string($kata1)."</p>";

echo "<br>";

$kata2 = "programmerit";
echo "<p>Input 2:<br>".$kata2."</p>";
echo "<p>Output 2:<br>".membelah_string($kata2)."</p>";