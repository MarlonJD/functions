<?php
function get_all_houses()
	{
		$query = $this->db->order_by("id", "desc") //pizza tablosundaki bütün verileri çekiyoruz.
						->get('houses');
		return $query->result();//sonucu return ediyoruz.
	}
?>