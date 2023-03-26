<?php
session_start();

include('./components/header.php');
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<div class="content">
  <table>
    <tr>
      <th>Name</th>
      <th>Account Number</th>
      <th>Email</th>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
    ?>

      <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['acNo']; ?></td>
        <td><?php echo $row['emailId']; ?></td>
      </tr>

    <?php
    }
    ?>
  </table>
</div>
</body>

</html>