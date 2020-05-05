<?php

$action = isset($_GET["action"]) ? $_GET["action"] : null;

switch ($action) {

  case 'register':
    // code...
    break;

  case 'login':
    include "../views/DisplayLogin.php";
    break;

  case 'search':
    include "../models/PostManager.php";
    $posts = GetAllPosts();

    include "../models/CommentManager.php";
    $comments = array();
    foreach ($posts as $onePost) {
      $comments[$onePost['id']] = GetAllCommentsFromPostId($onePost['id']);
    }

    include "../views/DisplayPosts.php";
    break;

  case 'display':
  default:
    include "../models/PostManager.php";
    $posts = GetAllPosts();

    include "../models/CommentManager.php";
    $comments = array();
    foreach ($posts as $onePost) {
      $comments[$onePost['id']] = GetAllCommentsFromPostId($onePost['id']);
    }

    include "../views/DisplayPosts.php";
    break;
}
