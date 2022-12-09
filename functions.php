<?php
include 'array.php';

// функция getUsersList() возвращает массив всех пользователей и хэшей их паролей
function getUsersList($array) {
  foreach ($array as $key => $value) {
    $newElement = [$key => sha1($value['password'])];
    $newArray = var_dump ($newElement);
  };
  return $newArray;
};

// функция existsUser($login) проверяет, существует ли пользователь с указанным логином
function existsUser($login) {
  include 'array.php';
  foreach ($users as $key => $value) {
    $newElement = [$key => $value['id']];
    if($value['id'] == $login) {
      return $key;
    };
  };
  return null;
};

?>