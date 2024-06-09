<div >
  <h2>Userform Details</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Age</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Address</th>
        <th class="text-center">Contact</th>
        <th class="text-center">Disease</th>
        <th class="text-center">PDF</th>
        
      </tr>
    </thead>
    <?php
      include_once "../config/DB.php";
      $sql="SELECT * from tbl_userform";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["firstname"]?> <?=$row["lastname"]?></td>
      <td><?=$row["age"]?></td>
      <td><?=$row["gender"]?></td>
      <td><?=$row["district"]?></td>
      <td><?=$row["phone"]?></td>
      <td><?=$row["diseases"]?></td>
      <td><?=$row["pdf"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>