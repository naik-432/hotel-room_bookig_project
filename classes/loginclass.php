<?php
include('connection.php');


class User extends Database
{
	public function SavesignupData($fullname,$email,$username,$password,$phone){
		 $sql=" INSERT INTO admin(`fullname`,`email`,`username`,`password`,`phone`) VALUES('$fullname','$email','$username','$password','$phone')";
		$query=$this->db->prepare($sql);
		$query->execute();
	}




		public function adminLogin($username,$password){
 			 $obj="SELECT * FROM admin WHERE username='$username' AND password='$password'"; 

 			$query=$this->db->prepare($obj);
 			$query->execute();
 			$result=$query->fetch(PDO::FETCH_ASSOC);
 			$row = $query->rowCount();
 			// var_dump($row);
 			// die();
 			
 			if($row>0)
 			{
 				session_start();
 				$_SESSION['login'] = $result['username'];
 				header("Location:index.php");
 				exit;
 			}
 			else
 			{
 				return false;
 			}
 		}
	  
	
}






?>