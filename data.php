<?php
  $ussername=filter_input(INPUT_POST, 'username');
  $password=filter_input(INPUT_POST, 'password');

  $connect=mysqli_connect('localhost','root','','userdb');
  $query="Select role from user where ussername = "." '$ussername'"." and password = "." '$password'";
  $data=mysqli_query($connect,$query);
  $row=mysqli_fetch_array($data);
  if($row[0]==2){
  	header('Location: worker.html');
  }
  else if($row[0]==1){
  	header('Location: admin.html');
  }
  else if($row[0]==0){
  	echo "<script type='text/javascript'>
  	alert('There was a problem with your credentials!');
  	window.location.href='logimi2.html';
  	</script>";
  }
?>
