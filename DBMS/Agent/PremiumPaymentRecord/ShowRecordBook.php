<?php
require_once '../header.php';
require '../../database.php';
 ?>

<div class="">
  <h1> Payment Record Book </h1>
  <table border="1">
    <tr>
      <th>  Policy Number</th>
      <th>  Mode</th>
      <th>  Date & Time</th>
      <th>  Amount</th>
      <th>  Next P.D.</th>
    </tr>
    <?php
    $sql = "SELECT * FROM payment_record, policy";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
        while ($row = mysqli_fetch_assoc($result)) {
        //  print_r($row);
            ?>
      <tr>
        <td><?php echo $row['Policy_no'] ?></td>
        <td><?php echo $row['Mode'] ?></td>
        <td><?php echo $row['Date_Time'] ?></td>
        <td><?php echo $row['Amount'] ?></td>
        <td><?php echo $row['FUP'] ?></td>
      </tr>
  <?php
        }
    } else {
      ?> </table> <?php
      echo "No results found";
    }
 ?>
  </table>
</div>

 <?php
 require_once '../footer.php';
  ?>
