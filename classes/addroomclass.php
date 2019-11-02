<?php
include('connection.php');

class Addroom extends Database
{
	
	public function SaveroomData($category,$image,$image1,$image2,$price,$discription){
	$sql="INSERT INTO addroom(`category`,`image`,`image1`,`image2`,`price`,`discription`) VALUES('$category','$image','$image1','$image2','$price','$discription')";
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
	public function gellAlladdroomData(){
        $sql=" SELECT addroom_id,category.categoryname,addroom.image,addroom.image1,addroom.image2,addroom.price,addroom.discription FROM category INNER JOIN addroom ON category.category_id=addroom.category";
		$query=$this->db->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
	}


	public function getsingaladdroomData($page,$id){
		$recordPerPage =3;
		$startPoint = ceil($recordPerPage * $page) - $recordPerPage;

   $sql=" SELECT addroom_id,category.categoryname,addroom.image,addroom.image1,addroom.image2,addroom.price,addroom.discription FROM category INNER JOIN addroom ON category.category_id=addroom.category  WHERE category.category_id=$id ";
		$query=$this->db->prepare($sql);
		$query->execute();
		$total = $query->rowCount();
		$totalpage = ceil($total/$recordPerPage);
		
		$sql .= " LIMIT $startPoint,$recordPerPage";
		// echo $sql;
		// die();
      
		$query = $this->db->prepare($sql);
		$query->execute();

		$result = $query->fetchAll(PDO::FETCH_ASSOC);

		return array(
			'totalPages' => $totalpage,
			'projects' => $result
		);
		
	}




	public function getAllrooms($page,$id)
	{	
		
		$recordPerPage =3;


		$startPoint = ceil($recordPerPage * $page) - $recordPerPage;


     $sql=" SELECT addroom_id,category.categoryname,addroom.image,addroom.image1,addroom.image2,addroom.price,addroom.discription FROM category INNER JOIN addroom ON category.category_id=addroom.category WHERE  category.category_id=$id "; 
		$query = $this->db->prepare($sql);
		$query->execute();
		$total = $query->rowCount();
		$totalpage = ceil($total/$recordPerPage);
		

		
		$sql .= " LIMIT $startPoint,$recordPerPage";
		// echo $sql;
		// die();
      
		$query = $this->db->prepare($sql);
		$query->execute();

		$result = $query->fetchAll(PDO::FETCH_ASSOC);

		return array(
			'totalPages' => $totalpage,
			'projects' => $result
		);	
		
	}


		public function getsingalpageroomData($id)
		{
  	$sql=" SELECT addroom_id,category.categoryname,addroom.image,addroom.image1,addroom.image2,addroom.price,addroom.discription FROM category INNER JOIN addroom ON category.category_id=addroom.category  WHERE addroom_id=$id"; 
		$query=$this->db->prepare($sql);
		$query->execute();
			$result=$query->fetch(PDO::FETCH_ASSOC);
 			return $result;
	}


}



?>