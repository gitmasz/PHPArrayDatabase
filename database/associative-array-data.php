<?php

if (stripos($_SERVER['SCRIPT_FILENAME'], '/associative-array-data.php') !== false) {
  $forbidden_page = @file_get_contents('index.php');
  echo $forbidden_page;
  die();
}

$parameter = (isset($_GET['hash']) && $_GET['hash'] != '' ? $_GET['hash'] : '');

$user_database = array(
  array(
    'hash' => 'a1',
    'id' => '1',
    'name' => 'Jan',
    'surname' => 'Kowalski',
    'phone' => '111 222 333',
    'email' => 'jan.kowalski@jankowalski.pl',
    'url' => 'jankowalski.pl'
  ),
  array(
    'hash' => 'b2',
    'id' => '2',
    'name' => 'Marta',
    'surname' => 'Kowalska',
    'phone' => '444 555 666',
    'email' => 'marta.kowalska@martakowalska.pl',
    'url' => 'martakowalska.pl'
  ),
  array(
    'hash' => 'c3',
    'id' => '3',
    'name' => 'Izabela',
    'surname' => 'Niekowalska',
    'phone' => '777 888 999',
    'email' => 'izabela.niekowalska@izabelaniekowalska.pl',
    'url' => 'izabelaniekowalska.pl'
  )
);

$id = array_column($user_database, 'id');
$name = array_column($user_database, 'name');
$surname = array_column($user_database, 'surname');
$phone = array_column($user_database, 'phone');
$email = array_column($user_database, 'email');
$url = array_column($user_database, 'url');

function searchForHash($hash, $array)
{
  foreach ($array as $key => $value) {
    if ($value['hash'] === $hash) {
      return $key;
      break;
    };
  };
  return null;
};

$hash = searchForHash($parameter, $user_database);
