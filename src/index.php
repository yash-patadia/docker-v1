<?php

$con = mysqli_connect("mysql","root","root",'docker_v1');

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
  echo "conneted";
}

exit;
?>