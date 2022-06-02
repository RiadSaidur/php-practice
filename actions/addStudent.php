<?php 

  require_once '../config/db.php';
  require_once '../utils/functions.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    function getComputer() {
      $computer = [];

      if(isset($_POST['laptop'])) array_push($computer, 'laptop');
      if(isset($_POST['desktop'])) array_push($computer, 'desktop');

      return json_encode($computer);
    }

    // get data from form
    $name = cleanData($_POST['name']);
    $email = cleanData($_POST['email']);
    $password = cleanData($_POST['password']);
    $hashedPassoword = getHashedPassword($password);
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
      $addStudentQuery->bind_param('sssssss', $name, $email, $hashedPassoword, $bio, $dept, $gender, $computer);

      $result = $addStudentQuery->execute();

      $result ? redirect("true") : redirect('false');
    }

  }