<?php 

  require_once '../config/db.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    function cleanData ($data) {
      return htmlspecialchars(strip_tags($data));
    }

    function redirect ($succssful) {
      $url = 'http://' . $_SERVER['HTTP_HOST'] . '?successful=' . $succssful;
      header('Location: ' . $url, true, 302);
    }

    function getComputer() {
      $computer = '';

      if($_POST['laptop']) $computer = 'laptop';
      if($_POST['desktop']) $computer ?  $computer = $computer . ',' . 'desktop' : $computer = 'desktop';

      return $computer;
    }

    // get data from form
    $name = cleanData($_POST['name']);
    $email = cleanData($_POST['email']);
    $password = cleanData($_POST['password']);
    $bio = cleanData($_POST['bio']);
    $dept = cleanData($_POST['dept']);
    $gender = cleanData($_POST['gender']);
    $computer = getComputer();

    // connect to database
    $connection = new Connection();
    $db = $connection->connect();

    // query string
    $query = 'INSERT INTO std_info (name, email, password, bio, dept, gender, computer) VALUES (?, ?, ?, ?, ?, ?, ?)';

    // prepare query and bind parameters
    if($addStudentQuery = $db->prepare($query)) {
      $addStudentQuery->bind_param('sssssss', $name, $email, $password, $bio, $dept, $gender, $computer);

      $result = $addStudentQuery->execute();

      redirect($result);
    }

  }

?>