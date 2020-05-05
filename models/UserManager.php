<?php
include_once "PDO.php";

function GetOneUserFromId($id)
{
  global $PDO;
  $response = $PDO->query("SELECT * FROM user WHERE id = " . $id);
  return $response->fetch();
}

function GetAllUsers()
{
  global $PDO;
  $response = $PDO->query("SELECT * FROM user ORDER BY nickname ASC");
  return $response->fetchAll();
}

function Login($username, $password)
{
  global $PDO;
  $res = $PDO->query("SELECT * FROM user WHERE nickname ='$username' AND password = '$password'");
  return count($res->fetchAll()) == 1;
}
