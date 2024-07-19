<?php
 $con = mysqli_connect("localhost","root","","bigmuscles");
 if($con==TRUE){
    echo "Connected Successfully";
 }
 else{
  echo "Wrong";
 }
 $r=$_POST['Name'];
 echo $r."<br>";
 $l=$_POST['Email'];
 echo $l."<br>";
 $o=$_POST['Password'];
 echo $o."<br>";
 $t=$_POST['id'];
 echo $t."<br>";
 $udate=date('Y-m-d');
 $status=1;
 $sql="UPDATE `reg` SET `Name`='$r',`Email`='$l',`Password`='$o',`udate`='$udate',`status`='$status' WHERE id='$t'";
 $qry=mysqli_query($con,$sql);
 if($qry==TRUE){
    echo "Record updated";
 }
 else{
    echo "Wrong";
 }
?>








