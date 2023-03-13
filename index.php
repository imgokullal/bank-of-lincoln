<?php
session_start();
include('./components/header.php');
?>
<div class="content">
  <div class="image"></div>
  <div class="boxes">
    <div class="grid">
      <div class="box"><a href="./withdraw.php">Withdraw Cash</a></div>
      <div class="box"><a href="./deposit.php">Deposit Cash</a></div>
      <div class="box"><a href="./transfer.php">Transfer Cash</a></div>
      <div class="box"><a href="./details.php">Account Details</a></div>
    </div>
  </div>
</div>
</body>

</html>