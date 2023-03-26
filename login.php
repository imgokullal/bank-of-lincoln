<?php
session_start();
include('./components/header_login.php');

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username == 'bank' && $password == 'password') {
    $_SESSION["username"] = $username;
    header("Location: http://localhost/bank-of-lincoln/bank.php");
  } else {
    $sql = "SELECT * FROM users WHERE userName='$username' AND password= '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
      header("Location: http://localhost/bank-of-lincoln/index.php");
    } else {
      echo '<script>alert("Username and Password does not match")</script>';
    }
  }
}
?>
<div class="content">
  <div class="form">
    <form method="POST" name="myForm">
      <div class="form-element">
        <label for="">Username</label><br />
        <input type="text" class="form-label" name="username" />
      </div>

      <div class="form-element">
        <label for="">Password</label><br />
        <input type="password" class="form-label" name="password" />
      </div>
      <input type="submit" value="Login" class="button button1" name="submit">
      <a href="./register.php" class="button button2">Register</a>
    </form>
  </div>
</div>
</body>

</html>