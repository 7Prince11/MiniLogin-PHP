 <?php

  $login = '';
  $password = '';

  // if (isset($_POST['submit'])) {







  if (isset($_POST['submit']) == TRUE) {

    $login = $_POST['login'];
    $password = $_POST['password'];







    if ($_POST['login'] === '' && $_POST['password'] === '') {
      echo '<script> parent.window.location.reload(true) </script>';
      sleep(2);
      header('Location:http://localhost/1_project/index.php');
    } else if (mb_strlen($login) < 4 && mb_strlen($password) < 4) {
      echo '<script> parent.window.location.reload(true) </script>';
      sleep(2);
      header('Location:http://localhost/1_project/index.php');
    } else if ($_POST['login'] === '' || $_POST['password'] === '') {
      echo '<script> parent.window.location.reload(true) </script>';
      sleep(2);
      header('Location:http://localhost/1_project/index.php');
    } else if ($_POST['password'] === '' || $_POST['login'] === '') {
      echo '<script> parent.window.location.reload(true) </script>';
      sleep(2);
      header('Location:http://localhost/1_project/index.php');
    } else if ($_POST['login'] === '' || mb_strlen($password) < 4) {
      echo '<script> parent.window.location.reload(true) </script>';
      sleep(2);
      header('Location:http://localhost/1_project/index.php');
    } else if ($_POST['password'] === '' || mb_strlen($login) < 4) {
      echo '<script> parent.window.location.reload(true) </script>';
      sleep(2);
      header('Location:http://localhost/1_project/index.php');
    } else {

      $sql = new mysqli("localhost", "root", "", "login_sys");
      $sql->query("INSERT INTO `users` (`login`, `password`)
        VALUES ('$login', md5('$password'))");
      $sql->close();
      sleep(2);
      header('Location:http://localhost/1_project/index.php');
    }
  }






  ?>