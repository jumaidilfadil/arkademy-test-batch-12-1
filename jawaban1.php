<?php
function biodata_asli_saya()
{
  $biodata_arr = array(
    "name" => "Jumaidil Fadillah",
    "age" => 23,
    "address" => "Jl. Residen Abdul Rozak Komplek PHDM I No. 51, Kota Palembang",
    "hobbies" => "Mempelajari Ilmu Teknologi",
    "is_married" => false,
    "list_school" => array(
      array(
        "name" => "SMA Negeri 1 Sungailiat",
        "year_in" => 2010,
        "year_out" => 2013,
        "major" => "Ilmu Pengetahuan Sosial"
      ),
      array(
        "name" => "Politeknik Negeri Sriwijaya",
        "year_in" => 2013,
        "year_out" => 2016,
        "major" => "Manajemen Informatika"
      )
    ),
    "skills" => array(
      array(
        "skiil_name" => "Web Design (Front End)",
        "level" => "advanced"
      ),
      array(
        "skiil_name" => "Web Programming (Back End)",
        "level" => "advanced"
      ),
      array(
        "skiil_name" => "Graphic Design",
        "level" => "beginner"
      ),
      array(
        "skiil_name" => "Database (MySQL and MariaDB)",
        "level" => "advanced"
      ),
    ),
    "interest_in_coding" => true
  );

  $biodata_json = json_encode($biodata_arr);
  return $biodata_json;
}

echo biodata_asli_saya();