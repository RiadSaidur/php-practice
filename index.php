<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice</title>
</head>
<body>
  <div class="container">
    <h1>Hello</h1>

    <form action="functions/addStudent.php" method="post">
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
        <input type="text" name="password" id="password" minlength="3" maxlength="255" required>
      </label>

      <label for="bio">
        <span>bio</span>
        <textarea name="bio" id="bio" cols="30" rows="10" required></textarea>
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
        <span>gender</span>
        
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
        <span>Do you have computer?</span>
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