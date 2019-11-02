<?php
include('addroomclass.php');

class Check extends Addroom
{
	
	public function SaveDate($check1,$check2,$totalday,$id){
		// rooms booking already

  $sql ="SELECT * FROM checkout where id=$id AND check1 >= 'check1' AND check2 <= 'check2'";
$query=$this->db->prepare($sql);
$query->execute();
$result=$query->fetch(PDO::FETCH_ASSOC); 
if(!empty($result))
{
	echo "Room booked already";
}	
else
{
	 $sql=" SELECT* from addroom WHERE addroom_id=$id";
		$query=$this->db->prepare($sql);
		$query->execute();
			$result=$query->fetch(PDO::FETCH_ASSOC); 			
 			 $price = $result['price'];
	         $tprice=$totalday*$price;
	         
	 $sql=" INSERT INTO checkout(`check1`,`check2`,`totalday`,`id`,`tprice`) VALUES('$check1','$check2','$totalday','$id','$tprice')";
		$query=$this->db->prepare($sql);
		$query->execute();


}




	  
	}




	 public function gellAllcheckoutData(){
        $sql=" SELECT checkout_id,category.categoryname,addroom.image,addroom.image1,addroom.image2,addroom.price,addroom.discription,checkout.check1,checkout.check2,checkout.totalday,checkout.id,checkout.tprice FROM category INNER JOIN addroom ON category.category_id=addroom.category INNER JOIN checkout ON addroom.addroom_id=checkout.id";
		$query=$this->db->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
	}

	
}
 
     




?>