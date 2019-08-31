<?php
function is_username_valid($username)
{
  $huruf_kecil = preg_match('.[a-z].', $username);
  $huruf_besar = preg_match('.[A-Z].', $username);
  $angka = preg_match('.[0-9].', $username);
  $awal_karakter = preg_match('.[0-9]|\W|_.', $username[0]);
  $panjang_karakter = strlen($username);

  if($huruf_kecil == FALSE)
  {
    $notif_username = "Username harus ada min. 1 huruf kecil.";
  }
  elseif($huruf_besar == FALSE)
  {
    $notif_username = "Username harus ada min. 1 huruf besar.";
  }
  elseif($angka == FALSE)
  {
    $notif_username = "Username harus ada min. 1 angka.";
  }
  elseif($awal_karakter == TRUE)
  {
    $notif_username = "Username tidak boleh diawali dengan angka / karakter special.";
  }
  elseif($panjang_karakter <= 4 || $panjang_karakter >= 10)
  {
    $notif_username = "Username harus memiliki 5-9 karakter";
  }
  else
  {
    $notif_username = "Username: true";
  }

  return $notif_username;
}

function is_password_valid($password)
{
  $huruf_kecil = preg_match('.[a-z].', $password);
  $huruf_besar = preg_match('.[A-Z].', $password);
  $angka = preg_match('.[0-9].', $password);
  $karakter_spesial = preg_match('.\W|_.', $password);
  $karakter_sama_dengan = preg_match('.=.', $password);
  $panjang_karakter = strlen($password);

  if($huruf_kecil == FALSE)
  {
    $notif_password = "Password harus ada min. 1 huruf kecil.";
  }
  elseif($huruf_besar == FALSE)
  {
    $notif_password = "Password harus ada min. 1 huruf besar.";
  }
  elseif($angka == FALSE)
  {
    $notif_password = "Password harus ada min. 1 angka.";
  }
  elseif($karakter_spesial == FALSE)
  {
    $notif_password = "Password harus ada min. 1 karakter spesial.";
  }
  elseif($karakter_sama_dengan == FALSE)
  {
    $notif_password = "Password harus ada min. 1 karakter '='.";
  }
  elseif($panjang_karakter <= 7)
  {
    $notif_password = "Password harus memiliki min. 8 karakter";
  }
  else
  {
    $notif_password = "Password : true";
  }

  return $notif_password;
}

$username = "Jum24";
$password = "Kata=S@nd1";

echo is_username_valid($username);
echo "<br>";
echo is_password_valid($password);