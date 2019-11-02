<?php
include('connection.php');

class Category extends Database
{
	public function SaveCategory($categoryname){

	 $sql="INSERT INTO category (`categoryname`) VALUES('$categoryname')";
		$query=$this->db->prepare($sql);
		$query->execute();
	}
	public function gellAllcategoryData(){
        $sql=" SELECT *FROM category";
		$query=$this->db->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
	}
 



 	public function gellsingalcategoryData($id){
        $sql=" SELECT *FROM category WHERE category_id=$id";
		$query=$this->db->prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_ASSOC);
 			return $result;
	}	
	 public function deletecategoryData($id)
 	{
	 	$obj="DELETE FROM category WHERE category_id=$id";
	 	$query=$this->db->prepare($obj);
		$query->execute();

	 }
	  public function updatecategoryData($categoryname,$id)
	 {
	 	 $obj="UPDATE category SET categoryname='$categoryname' WHERE category_id=$id";

	 	$query=$this->db->prepare($obj);
		$query->execute();

	 }
	
}


?>