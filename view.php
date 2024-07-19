<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<?php
 $con = mysqli_connect("localhost","root","","bigmuscles");
 if($con==TRUE){
    echo "Connected Successfully";
 }
 else{
  echo "Wrong";
 }
 $r = "SELECT * FROM reg";
 $qry=mysqli_query($con,$r);
?>
<table class="table table-bordered">
<thead>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>DOB</th>
    <th>Equipment</th>
    <th>Session</th>
    <th>BigMuscles</th>
    <th>vehicle</th>
    <th>myfile</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>

<?php
 while($row = mysqli_fetch_assoc($qry))
 {
    ?>
    <tr>
    <td><?php echo $row['Name'];?></td>
    <td><?php echo $row['Email'];?></td>
    <td><?php echo $row['Date'];?></td>
    <td><?php echo $row['equipment'];?></td>
    <td><?php echo $row['Session'];?></td>
    <td><?php echo $row['BigMuscles'];?></td>
    <td><?php echo $row['vehicle'];?></td>
    <td><?php echo $row['myfile'];?></td>
    <td><a href="edit.php?S=<?php echo $row['id'];?>">Edit</a>
 </td>
  </tr>
  <?php
 }
 ?>
 </tbody>
  </table>
