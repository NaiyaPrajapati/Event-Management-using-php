<?php
try{
        $name=$_POST['name'];
        $add=$_POST['add'];
        $city=$_POST['city'];
        $mob=$_POST['mob'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repass=$_POST['repass'];
        $even=$_POST['eventtype'];
        if($password==$repass)
        {
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into manager (m_name,m_address,m_city,m_mob,m_email,m_password,m_eventtype) values ('$name','$add','$city','$mob','$email','$password','$even')";
	$query=$dbhandler->query($sql);
	echo "Data is inserted successfully";
   
        }
 else {
   
      header("Location:signupm.php");
   echo "data must be matched";
      
 }
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


?>
   <p align="right">   <input type="button" name="logout" value="BACK" onclick="window.location='ahome.php'">
   </p>