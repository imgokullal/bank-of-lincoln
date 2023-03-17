<?php
session_start();
include('./components/header_login.php');

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['emailid'];
  $dob = $_POST['dob'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sortcode = 300120;
  $acno = rand(1000000, 9999999);

  $sql = "INSERT INTO users (name, emailId, dob, userName, password, acNo, sortCode ) VALUES ('$name','$email', '$dob', '$username','$password','$acno','$sortcode')";
  if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Registered Succesfully")</script>';
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    header("Location: http://localhost/bank-of-lincoln/index.php");
  } else {
    echo '<script>alert("Could not be Registered")</script>';
  }
}
?>

<div class="content">
  <div class="form">
    <form method="POST" name="myForm">
      <div class="form-element">
        <label for="">Name</label><br />
        <input type="text" class="form-label" name="name" />
      </div>
      <div class="form-element">
        <label for="">Date of Birth</label><br />
        <input type="date" class="form-label" name="dob" />
      </div>
      <div class="form-element">
        <label for="">Username</label><br />
        <input type="text" class="form-label" name="username" />
      </div>
      <div class="form-element">
        <label for="">Email id</label><br />
        <input type="text" class="form-label" name="emailid" />
      </div>
      <div class="form-element">
        <label for="">Password</label><br />
        <input type="password" class="form-label" name="password" />
      </div>
      <input type="submit" value="Register" class="button button1" name="submit">
      <a href="./login.php" class="button button2">Login</a>
    </form>
  </div>
</div>
</body>

</html>