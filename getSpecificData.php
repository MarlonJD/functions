<?php
function get_specific_detay($id)//fonksiyona gelen id ye göre tablomuzdan ilgili satırı çekiyoruz.
	{
		$query = $this->db->get_where('houses',array('id'=>$id));//id = 1 olan verileri seçiyoruz sadece.
		return $query->result();		
	}
?>