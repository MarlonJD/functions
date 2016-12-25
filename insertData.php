<?php
function insert_new_entry()
	{
 
		$data = array(
		 'tur'=>$this->input->post('tur'),
         'isim'=>$this->input->post('isim'),
		 'tip'=>$this->input->post('tip'),
		 'il'=>$this->input->post('il'),
		 'ilce'=>$this->input->post('ilce'),
		 'semt'=>$this->input->post('semt'),
		 'metrekare'=>$this->input->post('metrekare'),
		 'odasayisi'=>$this->input->post('odasayisi'),
		 'satisfiyati'=>$this->input->post('satisfiyati'),
		 'kirafiyati'=>$this->input->post('kirafiyati'),
		 'mulkiyet'=>$this->input->post('mulkiyet'),
         'resim'=>$this->input->post('resim'),
         'aciklama'=>$this->input->post('aciklama'),
		 'sahip'=>$this->input->post('sahip')
		 );
		  $this->db->insert('houses',$data);
		   
		  
	}
?>