<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
  <title>Practice</title>
</head>
<body>
  <div class="container">
    <h1>IST PORTAL</h1>
    <?php 
      if(!isset($_GET['successful'])) echo '<h2>Fill up this form</h2>';
      else if($_GET['successful'] == 'true') echo '<h2 class="success">Your form has been submitted</h2>';
      else if($_GET['successful'] == 'false') echo '<h2 class="error">Your form submission has failed</h2>';
      else if(!$_GET['successful']) echo '<h2 class="error">We faced an unexpected error</h2>';
    ?>

    <form action="actions/addStudent.php" method="post">
      <label for="name">
        <span>name</span>
        <input type="text" name="name" id="name" minlength="3" maxlength="255" required>
      </label>

      <label for="email">
        <span>email</span>
        <input type="email" name="email" id="email" minlength="3" maxlength="255" required>
      </label>

      <label for="password">
        <span>password</span>
        <input type="password" name="password" id="password" minlength="3" maxlength="255" required>
      </label>

      <label for="bio">
        <span>bio</span>
        <textarea name="bio" id="bio" cols="30" rows="5" required></textarea>
      </label>

      <label for="dept">
        <span>Department</span>
        <select name="dept" id="dept">
          <option value="cse">cse</option>
          <option value="bba">bba</option>
          <option value="ece">ece</option>
        </select>
      </label>

      <label for="gender">
        <p>gender</p>
        
        <label for="male">
          <input type="radio" name="gender" id="male" value="male">
          <span>male</span>
        </label>

        <label for="female">
          <input type="radio" name="gender" id="female" value="female">
          <span>female</span>
        </label>
      </label>

      <label for="computer">
        <p>Do you have computer?</p>
        <label for="desktop">
          <input type="checkbox" name="desktop" id="desktop" value="desktop">
          <span>I have a desktop</span>
        </label>
        <label for="laptop">
          <input type="checkbox" name="laptop" id="laptop" value="laptop">
          <span>I have a laptop</span>
        </label>
      </label>

      <button type="submit">Submit Form</button>
    </form>

  </div>
</body>
</html>