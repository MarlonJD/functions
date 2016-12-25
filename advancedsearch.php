<?php
	function getHouse($searchBook, $il, $ilce, $semt, $mahalle) {
			$result = "";
			if(!($mahalle == 0)) //Mahalle değişkeni dolu ise
			{
   				$query = "SELECT * FROM houses WHERE mahalle = '$mahalle'";
   				if(!($semt == 0)){ //Semt Değişkeni Mahalle dolu iken varsa
    			$query .= "AND semt = '$semt'";
   				}
   				if(!($ilce == 0)){ //İlçe Değişkeni Mahalle dolu iken varsa
     			$query .= "AND ilce = '$ilce'";
				}
				if(!($il == 0)){ //İl Değişkeni Mahalle dolu iken varsa
     			$query .= "AND il = '$il'";
				} 
				if(!($searchBook == 0)){ //searchBook Değişkeni Mahalle dolu iken varsa
     			$query .= "AND isim LIKE '%$searchBook%'";
				}
			echo "Hepsi Dolu";
   			}
			elseif(!($semt == 0) && ($mahalle == 0)) //Mahalle boş Semt değişkeni dolu ise
			{
				$query = "SELECT * FROM houses WHERE semt = '$semt'";
				if(!($ilce == 0))
				{ //Mahalle boş Semt değişkeni dolu iken ilçe değişkeni varsa
     			$query .= "AND ilce = '$ilce'";
				}
				if(!($il == 0))
				{ //Mahalle boş Semt değişkeni dolu iken il değişkeni varsa
     			$query .= "AND il = '$il'";
				}
				if(!($searchBook == 0))
				{ //Mahalle boş Semt değişkeni dolu iken searchBook değişkeni varsa
     			$query .= "AND isim LIKE '%$searchBook%'";
				}
			echo "mahalle boş";
			}
			elseif(!($ilce == 0) && ($semt == 0) && ($mahalle == 0)) //Mahalle boş Semt boş ilçe değişkeni dolu ise
			{	
				$query = "SELECT * FROM houses WHERE ilce = '$ilce'";
				if(!($il == 0)) //Mahalle boş Semt boş ilçe değişkeni dolu iken il değişkeni var ise
				{ 
     			$query .= "AND il = '$il'";
				}
				if(!($searchBook == 0)) //Mahalle boş Semt boş ilçe değişkeni dolu iken searchBook değişkeni var ise
				{ 
     			$query .= "AND isim LIKE '%$searchBook%'";
				}
			 echo "semt boş";
			}
			elseif(!($il == 0) && ($semt == 0) && ($mahalle == 0) && ($ilce == 0)) //Mahalle semt ilçe boş, il değişkeni dolu ise
			{
				$query = "SELECT * FROM houses WHERE il = '$il'";
     			if(!($searchBook == 0)) //Mahalle semt ilçe boş, il değişkeni dolu iken Searchbook değişkeni var ise
				{ 
     			$query .= "AND isim LIKE '%$searchBook%'";
				}
			 echo "İlçe boş";
			}
			elseif(!($searchBook == 0) && ($il == 0) && ($semt == 0) && ($mahalle == 0) && ($ilce == 0)) //Sadece seachbook değişkeni var ise
			{
				$query = "SELECT * FROM houses WHERE isim LIKE '%$searchBook%'";
			
			}
			else
			{
				$error = "Forgotten Is there like this possibility o.O";
			}
   			
	$result = $this->db->query($query);				
    return $result->result();
	}
?>