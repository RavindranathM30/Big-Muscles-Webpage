<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<?php
 $con = mysqli_connect("localhost","root","","bigmuscles");
 if($con==TRUE){
    echo "Connected Successfully";
 }
 else{
  echo "Wrong";
 }
 $id = $_GET['S'];
 echo $id;
 $sl="SELECT * FROM reg where id='$id' ";
 $qry=mysqli_query($con,$sl);
 while($row=mysqli_fetch_assoc($qry)){
    $r=$row['Name'];
    echo $r."<br>";
    $l=$row['Email'];
    echo $l."<br>";
    $o=$row['Password'];
    echo $o."<br>";
 }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="Signup">
    <form action="update.php" method="post" enctype="multipart/form-data">
          <h1>Registration Form</h1>
          <label>Name:</label>
          <input type="text" name="Name" placeholder="Enter your Name" value="<?php echo $r ?>"><br><br>
          <label>Email:</label>
          <input type="text" name="Email" placeholder="Enter your Email" value="<?php echo $l ?>"><br><br>
          <label>Password:</label>
          <input type="text" name="Password" placeholder="Enter your Password" value="<?php echo $o ?>"><br><br>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <input type="Submit" value="Update">
      </form>
    </div>
</body>
</html>