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
          <label for="">Deposit Amount</label><br />
          <input type="number" class="form-label" name="deposit" />
        </div>
        <input type="submit" value="Deposit" class="button button1" name="submit" />
        <a href="./index.php" class="button button2">Home</a>
      </form>
    </div>
  <?php
}
if (isset($_POST['submit'])) {
  $deposit = $_POST['deposit'];
  $balance = $deposit + $curBalance;

  $sql = "UPDATE users set balance='$balance' WHERE userName='$username'";
  if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Money deposited")</script>';
    header("Refresh:0");
  } else {
    echo '<script>alert("Money not deposited")</script>';
  }
}
  ?>
  </div>
  </body>

  </html>