<?php
session_start();
$username = $_SESSION["username"];
$password = $_SESSION['password'];
include('./components/header.php');
if (isset($_POST['submit'])) {
  $acNo = $_POST['acNo'];
  $sortCode = $_POST['sortCode'];
  $amount = $_POST['amount'];

  $sql = "UPDATE users set balance= balance + $amount WHERE acNo='$acNo' AND sortCode= '$sortCode'";
  if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Money transfered")</script>';
  } else {
    echo '<script>alert("Money not transfered")</script>';
  }
  $mysql = "UPDATE users set balance= balance - $amount WHERE userName='$username'";
  if (mysqli_query($conn, $mysql)) {
    echo '<script>alert("Transaction completed")</script>';
  } else {
    echo '<script>alert("Transaction completed")</script>';
  }
}
?>
<div class="content">
  <div class="form">
    <form method="POST" name="myForm">
      <div class="form-element">
        <label for="">Account Number</label><br />
        <input type="text" class="form-label" name="acNo" />
      </div>
      <div class="form-element">
        <label for="">Sort Code</label><br />
        <input type="text" class="form-label" name="sortCode" />
      </div>
      <div class="form-element">
        <label for="">Amount to transfer</label><br />
        <input type="number" class="form-label" name="amount" />
      </div>
      <input type="submit" value="Transfer" class="button button1" name="submit" />
      <a href="./index.php" class="button button2">Home</a>
    </form>
  </div>
</div>
</body>

</html>