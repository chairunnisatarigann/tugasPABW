<?php
  $bilangan1 = $_POST['nomor1'];
  $bilangan2 = $_POST['nomor2'];
  $operator = $_POST['operasi'];
  
  if ($operator == "+") {
    $hasil = $bilangan1 + $bilangan2;
  } else if ($operator == "-") {
    $hasil = $bilangan1 - $bilangan2;
  } else if ($operator == "*") {
    $hasil = $bilangan1 * $bilangan2;
  } else if ($operator == "/") {
    $hasil = $bilangan1 / $bilangan2;
  }
  
  echo "Hasil perhitungan: " . $hasil;
?>
