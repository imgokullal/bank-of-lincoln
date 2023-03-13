<?php
session_start();
$username = $_SESSION["username"];
$password = $_SESSION['password'];
include('./components/header.php');
$sql = "SELECT * FROM users WHERE userName='$username'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
?>
  <div class="content">
    <div class="form">
      <div class="details">
        Name:
        <p><?php echo $row['name']; ?></p>
        <br />
        <br />
      </div>
      <div class="details">
        Email:
        <p><?php echo $row['emailId']; ?></p>
        <br />
        <br />
      </div>
      <div class="details">
        Username:
        <p><?php echo $row['userName']; ?></p>
        <br /><br />
      </div>
      <div class="details">
        Date of Birth:
        <p><?php echo $row['dob']; ?></p>
        <br /><br />
      </div>
      <div class="details">
        Account Number:
        <p><?php echo $row['acNo']; ?></p>
        <br /><br />
      </div>
      <div class="details">
        Sort Code:
        <p><?php echo $row['sortCode']; ?></p>
        <br /><br />
      </div>
    <?php
  }
    ?>
    <a href="./index.php" class="button button2">Home</a>
    </div>
  </div>
  </body>

  </html>