<?php 
  session_start();
  ob_start();
  define('base_url', 'http://localhost/gift/');
  
  function url($var = null)
  {
    return base_url.$var;
  }

  //connection DB
  function conn()
  {
    $dsn = 'mysql:host=localhost;dbname=handicraft';
    $pdo = new PDO($dsn , 'root' , '');
    return $pdo;
  }

  // get all data from DB
  function selectall($table)
  {
    $sql = "SELECT * FROM $table ";
    $stmt = conn()->query($sql);
    return $stmt;
  }

  // get all data from DB with condeyion
  function select($table,$condition)
  {
    $sql = "SELECT * FROM $table WHERE $condition";
    $stmt = conn()->query($sql);
    return $stmt;
  }
  function moveimage($name) {
    $target_dir = '../images/';
    $target_file = $target_dir . basename($_FILES[$name]["name"]);
    if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
      return $_FILES[$name]["name"];
    } else {
      echo "Sorry, there was an error uploading your image.";
    }
  }

  //insert in DB
  function insert($table, $column, $data)
  {
    $stmt = conn()->query("INSERT INTO $table ($column) VALUES ($data)");
    if ($stmt) {
      return true;
    }
  }
  //update in DB
  function update($table, $columns, $id)
  {
    $sql = "UPDATE $table SET $columns  WHERE `id`='$id'";
    $stmt = conn()->query($sql);
    if ($stmt) {
      return true;
    }
  }
  //delete item
  function delete($table , $id)
    {
      $sql = "DELETE FROM $table WHERE `id`='$id'";
      $stmt = conn()->query($sql);
      if ($stmt) {
        return true;
      } else {
        return false;
      }
    }
/////////////////////////////////////////////////////

  // add category
  if (isset($_POST['addcat'])) {
    $var=$_POST['title'];
    if (insert("gifts","`type`,`name`","'cat','$var'")) {
      $status = "<div class='alert alert-success'>Added</div>";
    } else {
      $status = "<div class='alert alert-danger'>Wrong</div>";
    }
  }
  // delete item
  if (isset($_GET['delItem'])) {
    $id = $_GET['delItem'];
    if (delete("gifts",$id)) {
      $status = "<div class='alert alert-success'>Deleted</div>";
    } else {
      $status = "<div class='alert alert-danger'>Wrong</div>";
    }
  }
  // delete extra
  if (isset($_GET['delextra'])) {
    $id = $_GET['delextra'];
    if (delete("gifts",$id)) {
      $status = "<div class='alert alert-success'>Deleted</div>";
    } else {
      $status = "<div class='alert alert-danger'>Wrong</div>";
    }
  }
  // delete category
  if (isset($_GET['delCat'])) {
    $id = $_GET['delCat'];
    if (delete("gifts",$id)) {
      $status = "<div class='alert alert-success'>Deleted</div>";
    } else {
      $status = "<div class='alert alert-danger'>Wrong</div>";
    }
  }

  // delelte user
  if (isset($_GET['staffDel'])) {
    $id = $_GET['staffDel'];
    if (delete("users",$id)) {
      $status = "<div class='alert alert-success'>Deleted</div>";
    } else {
      $status = "<div class='alert alert-danger'>Wrong</div>";
    }
  }
  
?>