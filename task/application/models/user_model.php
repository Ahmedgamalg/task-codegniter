<?php

class user_model extends CI_Model{
public function user_can_login(){

$this->db->where('email',$this->input->post('email'));
$this->db->where('password',md5($this->input->post('password')));
$query=$this->db->get('user');
if ($query->num_rows()==1) {
	return true;
}
else{
	return false ;
}
  return $query->result();

}
public function get_user_data($email){
	$this->db->where('email',$email);
	$query=$this->db->get('user');
	return $query->row();
}



}


?>