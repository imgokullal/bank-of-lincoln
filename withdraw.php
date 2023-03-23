<?php
session_start();
$username = $_SESSION["username"];
$password = $_SESSION['password'];
include('./components/header.php');

$sql = "SELECT * FROM users WHERE userName='$username'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
  $curBalance = $row['balance'];
?>
  <div class="content">
    <div class="form">
      <form method="POST" name="myForm">
        <div class="form-element">
          <label for="">Balance</label><br />
          <input type="text" class="form-label" value="<?php echo $row['balance']; ?>" readonly />
        </div>

        <div class="form-element">
          <label for="">Withdraw Amount</label><br />
          <input type="number" class="form-label" name="withdraw" />
        </div>
        <input type="submit" value="Withdraw" class="button button1" name="submit" />
        <a href="./index.php" class="button button2">Home</a>
      </form>
    </div>
  <?php
}
if (isset($_POST['submit'])) {
  $withdraw = $_POST['withdraw'];
  $balance = $curBalance - $withdraw;
  if ($balance > 0) {
    $sql = "UPDATE users set balance='$balance' WHERE userName='$username'";
    if (mysqli_query($conn, $sql)) {
      echo '<script>alert("Money withdrawn")</script>';
      header("Refresh:0");
    } else {
      echo '<script>alert("Money not withdrawn")</script>';
    }
  } else {
    echo '<script>alert("You dont have enough funds")</script>';
  }
}
  ?>
  </div>
  </body>

  </html>