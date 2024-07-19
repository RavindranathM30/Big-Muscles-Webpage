<?php
 $con = mysqli_connect("localhost","root","","bigmuscles");
 if($con==TRUE){
    echo "Connected Successfully";
 }
 else{
  echo "Wrong";
 }
  $a = $_POST['Name'];
  echo $a."<br>";
  $b = $_POST['Email'];
  echo $b."<br>";
  $c = $_POST['Password'];
  echo $c."<br>";
  $d = $_POST['Date'];
  echo $d."<br>";
  $e = $_POST['equipment'];
  echo $e."<br>";
  $f = $_POST['Session'];
  echo $f."<br>";
  $g = $_POST['BigMuscles'];
  echo $g."<br>";
  $h = $_POST['vehicle'];
  foreach($h as $var)
  {
    echo $var."<br>";
  }
  $i = $_FILES['myfile'] ['name'];
  $j = $_FILES['myfile'] ['size'];
  $k = $_FILES['myfile'] ['tmp_name'];
  echo $i."<br>";
  echo $j."<br>";
  echo $k."<br>";
  $dir = "upload/".$i;
  $img = move_uploaded_file($k,$dir);
  if($img == TRUE)
  {
    echo "image added"."<br>";
  }
  else{
    echo "wrong"."<br>";
  }
  $cdate = date('Y-m-d');
  $status = 1;
  $z="INSERT INTO `reg`( `Name`, `Email`, `Password`, `Date`, `equipment`, `Session`, `BigMuscles`, `vehicle`, `myfile`, `cdate`,`status`) 
  VALUES ('$a','$b','$c','$d','$e','$f','$g','$var','$dir','$cdate','$status')";
  $qry=mysqli_query($con,$z);
  if($qry==TRUE){
    echo "Record Added";
  }
  else{
    echo "Wrong";
  }
  ?>